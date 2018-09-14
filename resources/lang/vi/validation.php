<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Thuộc tính :attribute phải được chấp nhận.',
    'active_url'           => 'Thuộc tính :attribute không phải là một URL hợp lệ.',
    'after'                => 'Thuộc tính :attribute phải là một ngày sau :date.',
    'after_or_equal'       => 'Thuộc tính :attribute phải là ngày sau hoặc bằng :date.',
    'alpha'                => 'Thuộc tính :attribute chỉ có thể chứa chữ cái.',
    'alpha_dash'           => 'Thuộc tính :attribute chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num'            => 'Thuộc tính :attribute chỉ có thể chứa chữ cái và số.',
    'array'                => 'Thuộc tính :attribute phải là một mảng.',
    'before'               => 'Thuộc tính :attribute phải là một ngày trước :date.',
    'before_or_equal'      => 'Thuộc tính :attribute phải là ngày trước hoặc bằng :date.',
    'between'              => [
        'numeric' => 'Thuộc tính :attribute phải trong khảng từ :min đến :max.',
        'file'    => 'Thuộc tính :attribute phải trong khảng từ :min đến :max kilobytes.',
        'string'  => 'Thuộc tính :attribute phải trong khảng từ :min đến :max ký tự.',
        'array'   => 'Thuộc tính :attribute phải trong khảng từ :min đến :max phần tử.',
    ],
    'boolean'              => 'Thuộc tính :attribute trường phải đúng hoặc sai.',
    'confirmed'            => 'Thuộc tính :attribute xác nhận không phù hợp.',
    'date'                 => 'Thuộc tính :attribute Không phải là ngày hợp lệ.',
    'date_format'          => 'Thuộc tính :attribute không khớp với định dạng :format.',
    'different'            => 'Thuộc tính :attribute và :other phải khác.',
    'digits'               => 'Thuộc tính :attribute phải là :digits phải là.',
    'digits_between'       => 'Thuộc tính :attribute phải nằm trong khoảng :min đến :max chữ số.',
    'dimensions'           => 'Thuộc tính :attribute hình ảnh không hợp lệ.',
    'distinct'             => 'Thuộc tính :attribute trường có giá trị trùng lặp.',
    'email'                => 'Thuộc tính :attribute phải là một địa chỉ email hợp lệ.',
    'exists'               => 'Thuộc tính đã chọn :attribute không hợp lệ.',
    'file'                 => 'Thuộc tính :attribute phải là một tập tin.',
    'filled'               => 'Thuộc tính :attribute trường phải có giá trị.',
    'image'                => 'Thuộc tính :attribute phải có hình ảnh.',
    'in'                   => 'Thuộc tính đã chọn:attribute không hợp lệ.',
    'in_array'             => 'Thuộc tính :attribute trường không tồn tại trong :other.',
    'integer'              => 'Thuộc tính :attribute phải là số nguyên.',
    'ip'                   => 'Thuộc tính :attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4'                 => 'Thuộc tính :attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6'                 => 'Thuộc tính :attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json'                 => 'Thuộc tính :attribute phải là một chuỗi JSON hợp lệ.',
    'max'                  => [
        'numeric' => 'Thuộc tính :attribute không được lớn hơn :max.',
        'file'    => 'Thuộc tính :attribute không thể lớn hơn :max kiloby.',
        'string'  => 'Thuộc tính :attribute không thể lớn hơn :max ký tự.',
        'array'   => 'Thuộc tính :attribute không thể lớn hơn :max phần tử.',
    ],
    'mimes'                => 'Thuộc tính :attribute phải là type: :values.',
    'mimetypes'            => 'Thuộc tính :attribute phải là type: :values.',
    'min'                  => [
        'numeric' => 'Thuộc tính :attribute ít nhất phải là :min.',
        'file'    => 'Thuộc tính :attribute ít nhất phải là :min kiloby.',
        'string'  => 'Thuộc tính :attribute ít nhất phải là :min ký tự.',
        'array'   => 'Thuộc tính :attribute ít nhất phải là :min phần tử.',
    ],
    'not_in'               => 'Thuộc tính đã chọn :attribute không hợp lệ.',
    'numeric'              => 'Thuộc tính :attribute phải là số.',
    'present'              => 'Thuộc tính :attribute phải tồn tại.',
    'regex'                => 'The :attribute định dạng không hợp lệ.',
    'required'             => 'The :attribute không được để trống.',
    'required_if'          => 'The :attribute không được để trống khi :other là :value.',
    'required_unless'      => 'The :attribute trường bắt buộc khi :other là :values.',
    'required_with'        => 'The :attribute không được để trống khi :values là present.',
    'required_with_all'    => 'The :attribute không được để trống khi :values là present.',
    'required_without'     => 'The :attribute không được để trống khi :values không là present.',
    'required_without_all' => 'The :attribute không được để trống khi không :values tồn tại.',
    'same'                 => 'The :attribute và :other phải phù hợp.',
    'size'                 => [
        'numeric' => 'The :attribute phải là :size.',
        'file'    => 'The :attribute phải là :size kiloby.',
        'string'  => 'The :attribute phải là :size ký tự.',
        'array'   => 'The :attribute phải có :size phần tử.',
    ],
    'string'               => 'The :attribute phải là một chuỗi.',
    'timezone'             => 'The :attribute phải là một khoảng hợp lệ.',
    'unique'               => 'The :attribute đã được sử dụng.',
    'uploaded'             => 'The :attribute không thể tải lê.',
    'url'                  => 'The :attribute định dạng không hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
