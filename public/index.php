<?php

spl_autoload_register(function ($class) {
    require_once '../includes/classes/' . $class . '.php';

});
