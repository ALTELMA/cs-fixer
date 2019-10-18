<?php

return [
    'finder' => [
        'exclude' => [
            'bootstrap',
            'public',
            'storage',
            'node_modules',
            'var'
        ]
    ],
    'fixer' => [
        // set the "level"
        '@Symfony' => true,
        //exclude psr rule
        'psr0' => false,
        //override some of the symfony default rules
        'concat_space' => [
                'spacing' => 'one'
            ],
        'trailing_comma_in_multiline_array' => false,
        'phpdoc_no_empty_return' => false,
        'new_with_braces' => false,
        'phpdoc_align' => false,
        'phpdoc_summary' => false,
        'no_multiline_whitespace_around_double_arrow' => false,
        'pre_increment' => false,
        'no_multiline_whitespace_before_semicolons' => true,
        'array_syntax' => [
                'syntax' => 'short'
            ],
        'binary_operator_spaces' =>  [
                'align_equals' => true
            ],
        'return_type_declaration' => [
                'space_before' => 'one'
            ],
        'php_unit_fqcn_annotation' => false,
        'yoda_style' => false
    ]
];
