<?php

$config['list']['filter'] = [
    'search' => [
        'prompt' => 'lang:admin::lang.availabilities.text_filter_search',
        'mode' => 'all', // or any, exact
    ]
];

$config['list']['toolbar'] = [
    'buttons' => [
        'create' => [
            'label' => 'lang:admin::lang.button_new',
            'class' => 'btn btn-primary',
            'href' => 'availabilities/create',
        ],
    ],
];

$config['list']['bulkActions'] = [
    // 'status' => [
    //     'label' => 'lang:admin::lang.list.actions.label_status',
    //     'type' => 'dropdown',
    //     'class' => 'btn btn-light',
    //     'statusColumn' => 'table_status',
    //     'menuItems' => [
    //         'enable' => [
    //             'label' => 'lang:admin::lang.list.actions.label_enable',
    //             'type' => 'button',
    //             'class' => 'dropdown-item',
    //         ],
    //         'disable' => [
    //             'label' => 'lang:admin::lang.list.actions.label_disable',
    //             'type' => 'button',
    //             'class' => 'dropdown-item text-danger',
    //         ],
    //     ],
    // ],
    'delete' => [
        'label' => 'lang:admin::lang.button_delete',
        'class' => 'btn btn-light text-danger',
        'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm',
    ],
];

$config['list']['columns'] = [
    'edit' => [
        'type' => 'button',
        'iconCssClass' => 'fa fa-pencil',
        'attributes' => [
            'class' => 'btn btn-edit',
            'href' => 'availabilities/edit/{availability_id}',
        ],
    ],
    // 'table_name' => [
    //     'label' => 'lang:admin::lang.label_name',
    //     'type' => 'text',
    //     'searchable' => true,
    // ],
    // 'min_capacity' => [
    //     'label' => 'lang:admin::lang.availabilities.column_min_capacity',
    //     'type' => 'text',
    //     'searchable' => true,
    // ],
    // 'max_capacity' => [
    //     'label' => 'lang:admin::lang.availabilities.column_capacity',
    //     'type' => 'number',
    // ],
    // 'extra_capacity' => [
    //     'label' => 'lang:admin::lang.availabilities.column_extra_capacity',
    //     'type' => 'number',
    //     'invisible' => true,
    // ],
    // 'priority' => [
    //     'label' => 'lang:admin::lang.availabilities.column_priority',
    //     'type' => 'number',
    //     'invisible' => true,
    // ],
    'is_joinable' => [
        'label' => 'lang:admin::lang.availabilities.label_joinable',
        'type' => 'switch',
        'onText' => 'lang:admin::lang.text_yes',
        'offText' => 'lang:admin::lang.text_no',
    ],
    // 'table_status' => [
    //     'label' => 'lang:admin::lang.label_status',
    //     'type' => 'switch',
    // ],
    'availability_id' => [
        'label' => 'lang:admin::lang.column_id',
        'invisible' => true,
    ],
    'created_at' => [
        'label' => 'lang:admin::lang.column_date_added',
        'invisible' => true,
        'type' => 'datetime',
    ],
    'updated_at' => [
        'label' => 'lang:admin::lang.column_date_updated',
        'invisible' => true,
        'type' => 'datetime',
    ],
];

$config['form']['toolbar'] = [
    'buttons' => [
        'back' => [
            'label' => 'lang:admin::lang.button_icon_back',
            'class' => 'btn btn-outline-secondary',
            'href' => 'availabilities',
        ],
        'save' => [
            'label' => 'lang:admin::lang.button_save',
            'context' => ['create', 'edit'],
            'partial' => 'form/toolbar_save_button',
            'class' => 'btn btn-primary',
            'data-request' => 'onSave',
            'data-progress-indicator' => 'admin::lang.text_saving',
        ],
        'delete' => [
            'label' => 'lang:admin::lang.button_icon_delete',
            'class' => 'btn btn-danger',
            'data-request' => 'onDelete',
            'data-request-data' => "_method:'DELETE'",
            'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm',
            'data-progress-indicator' => 'admin::lang.text_deleting',
            'context' => ['edit'],
        ],
    ],
];

$config['form']['fields'] = [
    'availability_name' => [
        'label' => 'lang:admin::lang.label_name',
        'type' => 'text',
        'span' => 'left',
    ],
    // 'priority' => [
    //     'label' => 'lang:admin::lang.availabilities.label_priority',
    //     'type' => 'number',
    //     'span' => 'right',
    // ],
    // 'min_capacity' => [
    //     'label' => 'lang:admin::lang.availabilities.label_min_capacity',
    //     'type' => 'number',
    //     'span' => 'left',
    // ],
    // 'max_capacity' => [
    //     'label' => 'lang:admin::lang.availabilities.label_capacity',
    //     'type' => 'number',
    //     'span' => 'right',
    // ],
    'date' => [
        'label' => 'lang:admin::lang.availabilities.date',
        'type' => 'datepicker',
        'span' => 'right',
    ],
    // 'table_status' => [
    //     'label' => 'lang:admin::lang.label_status',
    //     'type' => 'switch',
    //     'span' => 'left',
    //     'default' => 1,
    // ],
    // 'is_joinable' => [
    //     'label' => 'lang:admin::lang.availabilities.label_joinable',
    //     'type' => 'switch',
    //     'span' => 'right',
    //     'default' => 1,
    //     'on' => 'lang:admin::lang.text_yes',
    //     'off' => 'lang:admin::lang.text_no',
    // ],
    // 'tables' => [
    //     'label' => 'lang:admin::lang.label_table',
    //     'type' => 'relation',
    //     'relationFrom' => 'tables',
    //     'nameFrom' => 'table_name',
    // ],
    // 'extra_capacity' => [
    //     'label' => 'lang:admin::lang.availabilities.label_extra_capacity',
    //     'type' => 'number',
    //     'comment' => 'lang:admin::lang.availabilities.help_extra_capacity',
    // ],
];

return $config;
