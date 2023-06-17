<?php

$header = <<<'EOF'

This file is part of the TYPO3 extension sf_event_mgt_contentelements.

(c) Torben Hansen <derhansen@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return (new \PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
       '@DoctrineAnnotation' => true,
       '@PER' => true,
       'array_syntax' => ['syntax' => 'short'],
       'blank_line_after_opening_tag' => true,
       'braces' => ['allow_single_line_closure' => true],
       'cast_spaces' => ['space' => 'none'],
       'compact_nullable_typehint' => true,
       'concat_space' => ['spacing' => 'one'],
       'declare_equal_normalize' => ['space' => 'none'],
       'dir_constant' => true,
       'function_typehint_space' => true,
       'lowercase_cast' => true,
       'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
       'modernize_types_casting' => true,
       'native_function_casing' => true,
       'new_with_braces' => true,
       'no_alias_functions' => true,
       'no_blank_lines_after_phpdoc' => true,
       'no_empty_phpdoc' => true,
       'no_empty_statement' => true,
       'no_extra_blank_lines' => true,
       'no_leading_import_slash' => true,
       'no_leading_namespace_whitespace' => true,
       'no_null_property_initialization' => true,
       'no_short_bool_cast' => true,
       'no_singleline_whitespace_before_semicolons' => true,
       'no_superfluous_elseif' => true,
       'no_trailing_comma_in_singleline_array' => true,
       'no_unneeded_control_parentheses' => true,
       'no_unused_imports' => true,
       'no_useless_else' => true,
       'no_useless_nullsafe_operator' => true,
       'no_whitespace_in_blank_line' => true,
       'ordered_imports' => true,
       'php_unit_construct' => ['assertions' => ['assertEquals', 'assertSame', 'assertNotEquals', 'assertNotSame']],
       'php_unit_mock_short_will_return' => true,
       'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
       'phpdoc_no_access' => true,
       'phpdoc_no_empty_return' => true,
       'phpdoc_no_package' => true,
       'phpdoc_scalar' => true,
       'phpdoc_trim' => true,
       'phpdoc_types' => true,
       'phpdoc_types_order' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],
       'return_type_declaration' => ['space_before' => 'none'],
       'single_quote' => true,
       'single_line_comment_style' => ['comment_types' => ['hash']],
       'single_trait_insert_per_statement' => true,
       'trailing_comma_in_multiline' => ['elements' => ['arrays']],
       'whitespace_after_comma_in_array' => ['ensure_single_space' => true],
       'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
   ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->exclude(['.Build', 'Resources'])
            ->notName('ext_emconf.php')
    );
