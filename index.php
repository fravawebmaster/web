<?php
spl_autoload_register(function($clase) {include __DIR__.'/'.$clase .'/'.$clase.'.php'; } );
$page = new skeleton;
?>