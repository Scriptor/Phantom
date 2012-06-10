<?php
require_once('C:\xampp\htdocs\pharen\lang.php');
Lexical::$scopes['phantom-kohana'] = array();
$__scope_id = Lexical::init_closure("phantom-kohana", 105);
$app_root = path_join(project_path(), "..");
Lexical::bind_lexing("phantom-kohana", 105, '$app_root', $app_root);
function compile_controller($controller_path){
	$app_root =& Lexical::get_lexical_binding('phantom-kohana', 105, '$app_root', isset($__closure_id)?$__closure_id:0);;
	return compile_file(project_path($controller_path), ($app_root . "/classes/controller"));
}

