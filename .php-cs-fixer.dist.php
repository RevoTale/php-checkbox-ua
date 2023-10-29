<?php
declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)

    ->exclude('var')
    ->exclude('vendor')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        "single_import_per_statement" => false,
        'group_import' => true,
        "declare_strict_types" => true,
        'no_unused_imports'=>true,
        'no_unneeded_import_alias'=>true
    ])
    ->setFinder($finder);
