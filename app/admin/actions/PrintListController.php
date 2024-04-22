<?php

namespace Admin\Actions;

use Admin\Facades\Template;
use System\Classes\ControllerAction;

class PrintListController extends ControllerAction
{
    /**
     * @var string The primary printList alias to use.
     */
    protected $primaryAlias = 'printList';

    /**
     * Define controller printList configuration array.
     *  $printListConfig = [
     *      'printList'  => [
     *          'title'         => 'lang:text_title',
     *          'configFile'   => null,
     *      ],
     *  ];
     * @var array
     */
    public $printListConfig;

    /**
     * @var \Admin\Widgets\PrintList[] Reference to the list widget objects
     */
    protected $printListWidgets;

    /**
     * @var \Admin\Widgets\Toolbar[] Reference to the toolbar widget objects.
     */
    protected $toolbarWidget;

    /**
     * @var \Admin\Widgets\Filter[] Reference to the filter widget objects.
     */
    protected $filterWidgets = [];

    public $requiredProperties = ['printListConfig'];

    /**
     * @var array Required controller configuration array keys
     */
    protected $requiredConfig = ['configFile'];

    /**
     * List_Controller constructor.
     *
     * @param \Illuminate\Routing\Controller $controller
     *
     * @throws \Exception
     */
    public function __construct($controller)
    {
        parent::__construct($controller);

        $this->printListConfig = $controller->printListConfig;
        $this->primaryAlias = key($controller->printListConfig);

        // Build configuration
        $this->setConfig($controller->printListConfig[$this->primaryAlias], $this->requiredConfig);

        $this->hideAction([
            'renderPrintList',
            'refreshPrintList',
            'getPrintListWidget',
            'printListExtendModel',
        ]);
    }

    public function printList()
    {
        $pageTitle = lang($this->getConfig('title', 'lang:text_title'));
        Template::setTitle($pageTitle);
        Template::setHeading($pageTitle);

        $this->makePrintLists();
    }

    /**
     * Creates all the widgets based on the model config.
     *
     * @return array List of Admin\Classes\BaseWidget objects
     */
    protected function makePrintLists()
    {
        $this->printListWidgets = [];

        foreach ($this->printListConfig as $alias => $config) {
            $this->printListWidgets[$alias] = $this->makePrintList($alias);
        }

        return $this->printListWidgets;
    }

    /**
     * Prepare the widgets used by this action
     *
     * @param $alias
     *
     * @return \Admin\Classes\BaseWidget
     */
    protected function makePrintList($alias)
    {
        if (!isset($this->printListConfig[$alias]))
            $alias = $this->primaryAlias;

        $printListConfig = $this->makeConfig($this->printListConfig[$alias], $this->requiredConfig);
        $printListConfig['alias'] = $alias;

        // Prep the list widget config
        $configFile = $printListConfig['configFile'];
        $modelConfig = $this->loadConfig($configFile, ['printList'], 'printList');

        $widget = $this->makeWidget('Admin\Widgets\PrintList', $printListConfig);

        $widget->bindEvent('printList.generateEvents', function ($startAt, $endAt) {
            return $this->controller->printListGenerateEvents($startAt, $endAt);
        });

        $widget->bindEvent('printList.updateEvent', function ($eventId, $startAt, $endAt) {
            return $this->controller->printListUpdateEvent($eventId, $startAt, $endAt);
        });

        $widget->bindToController();

        // Prep the optional toolbar widget
        if (isset($modelConfig['toolbar']) && isset($this->controller->widgets['toolbar'])) {
            $this->toolbarWidget = $this->controller->widgets['toolbar'];
            if ($this->toolbarWidget instanceof \Admin\Widgets\Toolbar)
                $this->toolbarWidget->reInitialize($modelConfig['toolbar']);
        }

        return $widget;
    }

    public function renderPrintList($alias = null)
    {
        if (is_null($alias) || !isset($this->listConfig[$alias]))
            $alias = $this->primaryAlias;

        $list = [];

        if (!is_null($this->toolbarWidget)) {
            $list[] = $this->toolbarWidget->render();
        }

        if (isset($this->filterWidgets[$alias])) {
            $list[] = $this->filterWidgets[$alias]->render();
        }

        $list[] = $this->printListWidgets[$alias]->render();

        return implode(PHP_EOL, $list);
    }

    /**
     * Returns the widget used by this behavior.
     *
     * @param string $alias
     *
     * @return \Admin\Classes\BaseWidget
     */
    public function getPrintListWidget($alias = null)
    {
        if (!$alias) {
            $alias = $this->primaryAlias;
        }

        return array_get($this->printListWidgets, $alias);
    }

    public function printListGenerateEvents($startAt, $endAt)
    {
        return [];
    }

    public function printListUpdateEvent($eventId, $startAt, $endAt)
    {
    }
}
