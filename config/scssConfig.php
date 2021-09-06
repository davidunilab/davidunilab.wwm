<?php

include 'vendor/autoload.php';
use ScssPhp\ScssPhp\Compiler;

$compiler = new Compiler();
$path = dirname(__DIR__) . '/scss/';
$compiler->setImportPaths($path);

$compiledCss = $compiler->compileString('@import "bootstrap.scss";')->getCss();
file_put_contents(dirname(__DIR__) . "/css/main.css", $compiledCss);

$base_url = "";
//$base_url = "https://davidunilab.github.io/davidunilab.wwm/change.html";