<?php

// @codingStandardsIgnoreStart

IncludeModuleLangFile(__FILE__);

if (class_exists('roistat_formprocessor')) return;

Class roistat_formprocessor extends CModule {
    var $MODULE_ID = 'roistat.formprocessor';
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = 'Y';

    public function roistat_formprocessor() {
        $arModuleVersion = array();
        include(__DIR__ . '/version.php');

        $this->MODULE_VERSION      = $arModuleVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];

        $this->MODULE_NAME = GetMessage('ROISTAT_MODULE_NAME');
        $this->MODULE_DESCRIPTION = GetMessage('ROISTAT_MODULE_DESCRIPTION');
        $this->MODULE_CSS  = '/bitrix/modules/roistat.formprocessor/styles.css';

        $this->PARTNER_NAME = 'roistat';
        $this->PARTNER_URI  = 'http://roistat.com';
    }

    public function InstallDB($arParams = array()) {
        RegisterModule('roistat.formprocessor');
        RegisterModuleDependences('form', 'onAfterResultAdd', 'roistat.formprocessor', 'CRoistatFormProcessor', 'onAfterResultAddHandler');
        return true;
    }

    public function UnInstallDB($arParams = array()) {
        COption::RemoveOption($this->MODULE_ID);
        UnRegisterModuleDependences('form', 'onAfterResultAdd', 'roistat.formprocessor', 'CRoistatFormProcessor', 'onAfterResultAddHandler');
        UnRegisterModule('roistat.formprocessor');
        return true;
    }

    public function InstallEvents() {
        return true;
    }

    public function UnInstallEvents() {
        return true;
    }

    public function InstallFiles($arParams = array()) {
        CopyDirFiles($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/roistat.integration/install/admin', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin', true);
        return true;
    }

    public function UnInstallFiles() {
        DeleteDirFiles($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/roistat.integration/install/admin', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin');
        return true;
    }

    public function DoInstall() {
        $this->InstallDB();
        $this->InstallEvents();
        $this->InstallFiles();
    }

    public function DoUninstall() {
        $this->UnInstallDB();
        $this->UnInstallEvents();
        $this->UnInstallFiles();
    }
}

// @codingStandardsIgnoreEnd
