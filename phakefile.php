<?php
require_once('C:\xampp\htdocs\pharen\lang.php');
Lexical::$scopes['phakefile'] = array();
require("phantom-kohana.php");
proj("PhantomDemo", array("description" => "Demo of the Phantom framework using Kohana"));
function build(){
	print(("Running " . "build" . ": " . "Compiling project files into the appropriate places." . "\n"));
	compile_controller("/controller/hello.phn");
	return compile_controller("/controller/event.phn");
}


