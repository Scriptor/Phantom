<?php
require_once('C:\xampp\htdocs\pharen\lang.php');
use Pharen\Lexical as Lexical;
Lexical::$scopes['phakefile'] = array();
require("phantom-symfony.php");
;
use Phantom\Symfony as sf;
proj("PhantomDemo", array("description" => "Demo of the Phantom framework using Symfony"));
function build(){
	print(("Running " . "build" . ": " . "Compiling project files into the appropriate places." . "\n"));
	return sf\bundle("Acme", "DemoBundle", "controllers", array("Welcome", "Demo"));
}


