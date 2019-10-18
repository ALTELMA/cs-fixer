<?php

$rules = include __DIR__ . '/default_rules.php';

$finderRules = $rules['finder'];
$fixerRules  = $rules['fixer'];

if (file_exists(getcwd() . '/.php_cs_rules.php')) {
    echo "Rules from " .getcwd() . "/.php_cs_rules.php will be applied \n\r";

    $override = include getcwd() . '/.php_cs_rules.php';

    if (isset($override['finder']) && is_array($override['finder'])) {
        $finderRules = array_merge_recursive($finderRules, $override['finder']);
    }

    if (isset($override['fixer']) && is_array($override['fixer'])) {
        $fixerRules = array_merge($fixerRules, $override['fixer']);
    }
}

$finder = PhpCsFixer\Finder::create()->in(getcwd());

foreach ($finderRules as $name => $values) {
    foreach ($values as $value) {
        $finder->$name($value);
    }
}

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setCacheFile('/tmp/.php_cs.cache')
    ->setRules($fixerRules)
    ->setFinder($finder);
