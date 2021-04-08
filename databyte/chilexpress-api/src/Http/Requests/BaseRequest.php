<?php

namespace Databyte\ChilexpressApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return array_merge(trans('chilexpress-api::validation'), trans('chilexpress-api::validation.custom'));
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('chilexpress-api::validation.attributes');
    }
}
