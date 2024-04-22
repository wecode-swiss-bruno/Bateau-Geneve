<?php

namespace Admin\Widgets;

use Admin\Classes\BaseWidget;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Request;

class PrintList extends BaseWidget
{
    /**
     * @var string Defines the width-to-height aspect ratio of the printList.
     */
    public $aspectRatio = 2;

    /**
     * @var string Determines whether the events on the printList can be modified.
     */
    public $editable = true;

    /**
     * @var string Defines the number of events displayed on a day
     */
    public $eventLimit = 5;

    /**
     * @var string Defines initial date displayed when the printList first loads.
     */
    public $defaultDate;

    /**
     * @var string Defines the event popover partial.
     */
    public $popoverPartial;

    public function initialize()
    {
        $this->fillFromConfig([
            'aspectRatio',
            'editable',
            'eventLimit',
            'defaultDate',
            'popoverPartial',
        ]);
    }

    public function loadAssets()
    {
        $this->addCss('~/app/admin/formwidgets/datepicker/assets/vendor/datepicker/bootstrap-datepicker.min.css', 'bootstrap-datepicker-css');
        $this->addJs('~/app/admin/formwidgets/datepicker/assets/vendor/datepicker/bootstrap-datepicker.min.js', 'bootstrap-datepicker-js');

        $this->addCss('~/app/admin/formwidgets/datepicker/assets/css/datepicker.css', 'datepicker-css');
        $this->addJs('~/app/admin/formwidgets/datepicker/assets/js/datepicker.js', 'datepicker-js');

        $this->addJs('~/app/admin/assets/src/js/vendor/mustache.js', 'mustache-js');
        $this->addJs('~/app/admin/assets/src/js/vendor/moment.min.js', 'moment-js');

        $this->addJs('vendor/fullprintList/main.min.js', 'fullprintList-js');
        $this->addJs('vendor/fullprintList/locales-all.min.js', 'fullprintList-js');
        $this->addCss('vendor/fullprintList/main.min.css', 'fullprintList-css');

        $this->addJs('js/printList.js', 'printList-js');
        $this->addCss('css/printList.css', 'printList-css');
    }

    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('printList/printList');
    }

    public function prepareVars()
    {
        $this->vars['aspectRatio'] = $this->aspectRatio;
        $this->vars['editable'] = $this->editable;
        $this->vars['defaultDate'] = $this->defaultDate ?: Carbon::now()->toDateString();
        $this->vars['eventLimit'] = $this->eventLimit;
    }

    public function onGenerateEvents()
    {
        $startAt = Request::get('start');
        $endAt = Request::get('end');

        $eventResults = $this->fireEvent('printList.generateEvents', [$startAt, $endAt]);

        $generatedEvents = [];
        if (count($eventResults)) {
            $generatedEvents = $eventResults[0];
        }

        return [
            'generatedEvents' => $generatedEvents,
        ];
    }

    public function onUpdateEvent()
    {
        $eventId = Request::get('eventId');
        $startAt = Request::get('start');
        $endAt = Request::get('end');

        $this->fireEvent('printList.updateEvent', [$eventId, $startAt, $endAt]);
    }

    public function renderPopoverPartial()
    {
        if (!strlen($this->popoverPartial)) {
            throw new Exception(sprintf(lang('admin::lang.printList.missing_partial'), get_class($this->controller)));
        }

        return $this->makePartial($this->popoverPartial);
    }
}
