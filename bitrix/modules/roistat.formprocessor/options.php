<?php

// @codingStandardsIgnoreStart

require_once $GLOBALS['DOCUMENT_ROOT'] . '/bitrix/modules/roistat.formprocessor/include.php';

$CAT_RIGHT = $APPLICATION->GetGroupRight(CRoistatFormProcessor::MODULE_ID);

if ($CAT_RIGHT >= 'R') {
    IncludeModuleLangFile($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/options.php');
    IncludeModuleLangFile(__FILE__);

    $isUpdate        = $REQUEST_METHOD == 'POST' && strlen($Update) > 0 && $CAT_RIGHT == 'W' && check_bitrix_sessid();
    $isResetDefaults = $REQUEST_METHOD == 'GET' && strlen($RestoreDefaults) > 0 && $CAT_RIGHT == 'W' && check_bitrix_sessid();

    if ($isUpdate)
        CRoistatFormProcessor::setOptions();
    if ($isResetDefaults) {
        $rsGroup = CGroup::GetList($v1 = 'id', $v2 = 'asc', array('ACTIVE' => 'Y', 'ADMIN' => 'N'));

        while ($arGroup = $rsGroup->Fetch())
            $APPLICATION->DelGroupRight(CRoistatFormProcessor::MODULE_ID, array($arGroup['ID']));

        COption::RemoveOption(CRoistatFormProcessor::MODULE_ID);
        LocalRedirect($APPLICATION->GetCurPage() . '?lang=' . LANG . '&mid=' . urlencode($mid));
    }

    $aTabs      = array(
        array('DIV' => 'edit1', 'TAB' => GetMessage('ROISTAT_TAB_NAME'), 'ICON' => 'default', 'TITLE' => GetMessage('ROISTAT_TAB_TITLE')),
        array('DIV' => 'edit2', 'TAB' => GetMessage('FIELD_TAB_NAME'),  'ICON' => 'default', 'TITLE' => GetMessage('FIELD_TAB_TITLE')),
        array('DIV' => 'edit3', 'TAB' => GetMessage('MAIN_TAB_RIGHTS'),  'ICON' => 'default', 'TITLE' => GetMessage('MAIN_TAB_TITLE_RIGHTS')),
    );
    $tabControl = new CAdminTabControl('tabControl', $aTabs);

    $tabControl->Begin();

    if (!$isUpdate)
        $options = CRoistatFormProcessor::getViewVars();
    
    require_once __DIR__ . '/optionsView.php';
}

// @codingStandardsIgnoreEnd

// Author Bondar Artem bondar.a@roistat.com artembondar1991@gmail.com
