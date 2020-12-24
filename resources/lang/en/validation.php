<?php

return [


    'accepted'        => ':Attribute must be accepted.',
    'active_url'      => ':Attribute is not a valid URL.',
    'after'           => ':Attribute must have date after :date.',
    'after_or_equal'  => ':Attribute must have same date as or after :date.',
    'alpha'           => ':Attribute can only have letters.',
    'alpha_dash'      => ':Attribute can only have letter, number, dash and underline.',
    'alpha_num'       => ':Attribute can only have letters and numbers.',
    'array'           => ':Attribute must have an array.',
    'before'          => ':Attribute must have date before :date.',
    'before_or_equal' => ':Attribute must have same date as or before :date.',
    'between'         => [
        'numeric' => ':Attribute must be between :min until :max.',
        'file'    => ':Attribute must be between :min until :max kilobyte.',
        'string'  => ':Attribute must be between :min until :max characters.',
        'array'   => ':Attribute must have :min until :max items.',
    ],
    'boolean'        => ':Attribute must be true or false',
    'confirmed'      => 'Confirmation for :attribute is not valid.',
    'date'           => ':Attribute is not a valid date.',
    'date_equals'    => ':Attribute must have the same date as :date.',
    'date_format'    => ':Attribute is not the same format as :format.',
    'different'      => ':Attribute and :other must be different.',
    'digits'         => ':Attribute must only consist of :digits digits.',
    'digits_between' => ':Attribute must be between :min until :max digits.',
    'dimensions'     => ':Attribute does not have a valid image dimension.',
    'distinct'       => ':Attribute has a duplicate value.',
    'email'          => ':Attribute must be a valid e-mail address.',
    'ends_with'      => ':Attribute must end with one of the following: :values',
    'exists'         => ':Attribute selected is invalid.',
    'file'           => ':Attribute must be a file.',
    'filled'         => ':Attribute must have a value.',
    'gt'             => [
        'numeric' => ':Attribute must be more than :value.',
        'file'    => ':Attribute must be more than :value kilobyte.',
        'string'  => ':Attribute must contain more than :value characters.',
        'array'   => ':Attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => ':Attribute must be more than or equal to :value.',
        'file'    => ':Attribute must be more than or equal to :value kilobyte.',
        'string'  => ':Attribute must be more than or equal to :value characters.',
        'array'   => ':Attribute must consist of :value items or more.',
    ],
    'image'    => ':Attribute must be an image.',
    'in'       => ':Attribute selected is invalid.',
    'in_array' => ':Attribute is not in :other.',
    'integer'  => ':Attribute must be a whole number.',
    'ip'       => ':Attribute must be a valid IP.',
    'ipv4'     => ':Attribute must be a valid IPv4.',
    'ipv6'     => ':Attribute must be a valid IPv6.',
    'json'     => ':Attribute must be a valid JSON string.',
    'lt'       => [
        'numeric' => ':Attribute must be less than :value.',
        'file'    => ':Attribute must be less than :value kilobyte.',
        'string'  => ':Attribute must be less than :value characters.',
        'array'   => ':Attribute must be less than :value items.',
    ],
    'lte' => [
        'numeric' => ':Attribute must be less than or equal to :value.',
        'file'    => ':Attribute must be less than or equal to :value kilobyte.',
        'string'  => ':Attribute must be less than or equal to :value characters.',
        'array'   => ':Attribute must be no more than :value items.',
    ],
    'max' => [
        'numeric' => ':Attribute maximum value is :max.',
        'file'    => ':Attribute maximum size is :max kilobyte.',
        'string'  => ':Attribute maximum contain :max characters.',
        'array'   => ':Attribute maximum contain :max member.',
    ],
    'mimes'     => ':Attribute must be a file of: :values.',
    'mimetypes' => ':Attribute must be file of: :values.',
    'min'       => [
        'numeric' => ':Attribute minimum value is :min.',
        'file'    => ':Attribute minimum size is :min kilobyte.',
        'string'  => ':Attribute minimum contain :min character.',
        'array'   => ':Attribute minimum consist of :min member.',
    ],
    'not_in'               => ':Attribute selected is invalid.',
    'not_regex'            => 'Format :attribute is invalid.',
    'numeric'              => ':Attribute must be a number.',
    'password'             => 'Incorrect password.',
    'present'              => ':Attribute must be present.',
    'regex'                => 'Format :attribute is invalid.',
    'required'             => ':Attribute is required.',
    'required_if'          => ':Attribute is required when :other is :value.',
    'required_unless'      => ':Attribute is required :other is in :values.',
    'required_with'        => ':Attribute is required when :values is present.',
    'required_with_all'    => ':Attribute is required when :values are present.',
    'required_without'     => ':Attribute is required when :values is not present.',
    'required_without_all' => ':Attribute is required when none of :values are present.',
    'same'                 => ':Attribute dan :other must match.',
    'size'                 => [
        'numeric' => ':Attribute value must be :size.',
        'file'    => ':Attribute value must be  :size kilobytes.',
        'string'  => ':Attribute string must be  :size characters.',
        'array'   => ':Attribute content must contain :size items.',
    ],
    'starts_with' => ':Attribute must start with one of the following : :values',
    'string'      => ':Attribute must be a string.',
    'timezone'    => ':Attribute must be a valid zone.',
    'unique'      => ':Attribute has already been taken.',
    'uploaded'    => ':Attribute failed to upload.',
    'url'         => 'Format :attribute is invalid.',
    'uuid'        => ':Attribute must be valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------

    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Custom validation attributes
    |---------------------------------------------------------------------------------------
    */

    'attributes' => [
    ],
];

