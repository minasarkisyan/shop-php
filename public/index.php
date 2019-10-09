<?php

require ('../config/init.php');
require LIBS . '/functions.php';


new \shop\App();

\shop\App::$app->setProperty('test', 'TEST');
debug(\shop\App::$app->getProperties());
