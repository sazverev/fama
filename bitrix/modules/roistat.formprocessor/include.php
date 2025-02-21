<?php

require_once __DIR__ . '/functions.php';

CModule::AddAutoloadClasses('roistat.formprocessor', array('CRoistatFormProcessor' => 'classes/general/CRoistatFormProcessor.php'));

CModule::includeModule("form");

// Author Bondar Artem bondar.a@roistat.com artembondar1991@gmail.com
