<?php

    require_once('include/common.inc.php');

    $vars = array
    (
        'headline' => 'Template Engine',
        'name' => 'Sarah'
    );

    echo getView('index.html', $vars);