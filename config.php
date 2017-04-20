<?php

require_once 'environment.php';

spl_autoload_register(function($class){
	if(file_exists(DIRETORIO."/".$class.".php")){
		require_once DIRETORIO."/".$class.".php";
	}
});

?>