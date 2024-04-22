<?php

namespace Admin\Controllers;

use Admin\Facades\AdminMenu;

/**
 * Admin Controller Class Availabilities
 */
class Availabilities extends \Admin\Classes\AdminController
{
    public $implement = [
        'Admin\Actions\ListController',
        'Admin\Actions\FormController',
        'Admin\Actions\LocationAwareController',
    ];

    public $listConfig = [
        'list' => [
            'model' => 'Admin\Models\Availabilities_model',
            'title' => 'lang:admin::lang.availabilities.text_title',
            'emptyMessage' => 'lang:admin::lang.availabilities.text_empty',
            'defaultSort' => ['availability_id', 'DESC'],
            'configFile' => 'availabilities_model',
        ],
    ];

    public $formConfig = [
        'name' => 'lang:admin::lang.availabilities.text_form_name',
        'model' => 'Admin\Models\Availabilities_model',
        'request' => 'Admin\Requests\Availability',
        'create' => [
            'title' => 'lang:admin::lang.form.create_title',
            'redirect' => 'availabilities/edit/{availability_id}',
            'redirectClose' => 'availabilities',
            'redirectNew' => 'availabilities/create',
        ],
        'edit' => [
            'title' => 'lang:admin::lang.form.edit_title',
            'redirect' => 'availabilities/edit/{availability_id}',
            'redirectClose' => 'availabilities',
            'redirectNew' => 'availabilities/create',
        ],
        'preview' => [
            'title' => 'lang:admin::lang.form.preview_title',
            'redirect' => 'availabilities',
        ],
        'delete' => [
            'redirect' => 'availabilities',
        ],
        'configFile' => 'availabilities_model',
    ];

    protected $requiredPermissions = 'Admin.Availabilities';

    public function __construct()
    {
        parent::__construct();

        AdminMenu::setContext('availabilities', 'restaurant');
    }
}
