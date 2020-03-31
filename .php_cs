<?php

return PhpCsFixer\Config::create()
                        ->setRiskyAllowed(true)
                        ->setRules(
                            [
                                '@PSR2' => true,
                                'array_syntax' => ['syntax' => 'short'],
                                'dir_constant' => true,
                                'heredoc_to_nowdoc' => true,
                                'linebreak_after_opening_tag' => true,
                                'modernize_types_casting' => true,
                                'no_multiline_whitespace_before_semicolons' => true,
                                'no_unreachable_default_argument_value' => true,
                                'no_useless_else' => true,
                                'no_useless_return' => true,
                                'ordered_class_elements' => true,
                                'ordered_imports' => true,
                                'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
                                'phpdoc_order' => true,
                                'declare_strict_types' => true,
                                'doctrine_annotation_braces' => true,
                                'doctrine_annotation_indentation' => true,
                                'doctrine_annotation_spaces' => true,
                                'psr4' => false,
                                'psr0' => false,
                                'no_php4_constructor' => true,
                                'no_short_echo_tag' => true,
                                'semicolon_after_instruction' => true,
                                'align_multiline_comment' => true,
                                'doctrine_annotation_array_assignment' => true,
                                'list_syntax' => ["syntax" => "short"],
                                'phpdoc_types_order' => ['null_adjustment'=> 'always_last'],
                                'single_line_comment_style' => true,
                                'general_phpdoc_annotation_remove' => ['annotations' => ["package"]],
                            ]
                        )
                        ->setCacheFile(__DIR__.'/.php_cs.cache')
                        ->setFinder(
                            PhpCsFixer\Finder::create()
                                             ->in(__DIR__.'/src')
                                             ->in(__DIR__.'/tests')
                        );