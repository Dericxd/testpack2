<?php

if (!function_exists('uuidv4')) {
    function uuidv4()
    {
        return Uuid::generate(4)->string;
    }
}

if (!function_exists('chilexpressapisetting')) {
    function chilexpressapisetting($setting = null, $default_value = null)
    {
        if (empty($setting)) {
            return \Databyte\ChilexpressApi\Models\ChilexpressApiSetting::pluck('value', 'slug')->toArray();
        }
        if (is_array($setting)) {
            foreach ($setting as $slug => $value) {
                \Databyte\ChilexpressApi\Models\ChilexpressApiSetting::updateOrCreate(compact('slug'), compact('value'));
            }
            return true;
        }
        return \Databyte\ChilexpressApi\Models\ChilexpressApiSetting::where('slug', $setting)->first()->value ?? $default_value;
    }
}
