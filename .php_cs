<?php

$header = <<<EOF
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    )
;
