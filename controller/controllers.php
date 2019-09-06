<?php

function render ($tmp, $stat = array()){
    if (file_exists('templates/'.$tmp.'.tpl.php')){
        ob_start();
        extract($stat);
       
        require 'templates/'.$tmp.'.tpl.php';
        return ob_get_clean();
    }
}