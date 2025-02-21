<?php

// @codingStandardsIgnoreStart

IncludeModuleLangFile(__FILE__);

if ('D' < $APPLICATION->GetGroupRight("roistat.formprocessor")) {
    return $aMenu;
}

return false;

// @codingStandardsIgnoreEnd
