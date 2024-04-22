<?php

namespace Admin\Requests;

use System\Classes\FormRequest;

class Availability extends FormRequest
{
    public function attributes()
    {
        return [
            'availability_name' => lang('admin::lang.label_name'),
        ];
    }

    public function rules()
    {
        return [
            'availability_name' => ['required', 'between:2,128'],
        ];
    }
}
