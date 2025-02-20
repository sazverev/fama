<?

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\ModuleManager;
Loc::loadMessages(__FILE__);
Class sotbit_seometa extends CModule
{
	const MODULE_ID = 'sotbit.seometa';
	var $MODULE_ID = 'sotbit.seometa';
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $strError = '';

	function __construct()
	{
		$arModuleVersion = array();
		include(__DIR__."/version.php");
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = Loc::getMessage("SOTBIT_SEOMETA_MODULE_NAME");
		$this->MODULE_DESCRIPTION = Loc::getMessage("SOTBIT_SEOMETA_MODULE_DESC");
		$this->PARTNER_NAME = Loc::getMessage("SOTBIT_SEOMETA_PARTNER_NAME");
		$this->PARTNER_URI = Loc::getMessage("SOTBIT_SEOMETA_PARTNER_URI");
	}

	function InstallEvents()
	{
		RegisterModuleDependences(self::MODULE_ID, "OnCondCatControlBuildListSM", self::MODULE_ID, "SMCatalogCondCtrlGroup", "GetControlDescr");
		RegisterModuleDependences(self::MODULE_ID, "OnCondCatControlBuildListSM", self::MODULE_ID, "SMCatalogCondCtrlIBlockFields", "GetControlDescr");
		RegisterModuleDependences(self::MODULE_ID, "OnCondCatControlBuildListSM", self::MODULE_ID, "SMCatalogCondCtrlIBlockProps", "GetControlDescr");

		RegisterModuleDependences("iblock", "OnTemplateGetFunctionClass", self::MODULE_ID, "CSeoMetaTags", "Event");
		RegisterModuleDependences("iblock", "OnTemplateGetFunctionClassHandler", self::MODULE_ID, "CSeoMetaTags", "EventHandler");
// For start generation sitemap from event
//		RegisterModuleDependences("iblock", "OnAfterIBlockSectionAdd", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "addSection");
//		RegisterModuleDependences("iblock", "OnAfterIBlockElementAdd", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "addElement");
//		RegisterModuleDependences("iblock", "OnBeforeIBlockSectionDelete", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "beforeDeleteSection");
//		RegisterModuleDependences("iblock", "OnBeforeIBlockElementDelete", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "beforeDeleteElement");
//		RegisterModuleDependences("iblock", "OnAfterIBlockSectionDelete", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "deleteSection");
//		RegisterModuleDependences("iblock", "OnAfterIBlockElementDelete", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "deleteElement");
//		RegisterModuleDependences("iblock", "OnBeforeIBlockSectionUpdate", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "beforeUpdateSection");
//		RegisterModuleDependences("iblock", "OnBeforeIBlockElementUpdate", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "beforeUpdateElement");
//		RegisterModuleDependences("iblock", "OnAfterIBlockSectionUpdate", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "updateSection");
//		RegisterModuleDependences("iblock", "OnAfterIBlockElementUpdate", self::MODULE_ID, "\\Bitrix\\Seo\\SitemapIblock", "updateElement");
//----------------------
        RegisterModuleDependences("sale", "OnOrderAdd", self::MODULE_ID, "CSeoMetaEvents", "OrderAdd");

        RegisterModuleDependences("main", "OnAdminIBlockSectionEdit", self::MODULE_ID, "CSeoMetaEvents", "OnInit");
        RegisterModuleDependences("main", "OnPageStart", self::MODULE_ID, "CSeoMetaEvents", "PageStart");
		RegisterModuleDependences("main", "OnBuildGlobalMenu", self::MODULE_ID, 'CSeoMetaEvents', 'OnBuildGlobalMenuHandler');
		RegisterModuleDependences('main', 'OnEndBufferContent', self::MODULE_ID, 'CSeoMetaEvents', 'ChangeContent');

		RegisterModuleDependences("search", "OnReindex", self::MODULE_ID, "CSeoMetaEvents", "OnReindexHandler");
		RegisterModuleDependences("search", "OnAfterIndexAdd", self::MODULE_ID, "CSeoMetaEvents", "OnAfterIndexAddHandler");

		$rsSites = CSite::GetList(
			$by = "sort",
			$order = "desc",
			[
				"ACTIVE" => "Y"
			]
		);

		while($arSite = $rsSites->Fetch()) {
			COption::SetOptionString(self::MODULE_ID,"NO_INDEX_".$arSite['LID'],"N");
		}

		return true;
	}

	function UnInstallEvents()
	{
		UnRegisterModuleDependences(self::MODULE_ID, "OnCondCatControlBuildListSM", self::MODULE_ID, "SMCatalogCondCtrlGroup", "GetControlDescr");
		UnRegisterModuleDependences(self::MODULE_ID, "OnCondCatControlBuildListSM", self::MODULE_ID, "SMCatalogCondCtrlIBlockFields", "GetControlDescr");
		UnRegisterModuleDependences(self::MODULE_ID, "OnCondCatControlBuildListSM", self::MODULE_ID, "SMCatalogCondCtrlIBlockProps", "GetControlDescr");

		UnRegisterModuleDependences("iblock", "OnTemplateGetFunctionClass", self::MODULE_ID, "CSeoMetaTags", "Event");
		UnRegisterModuleDependences("iblock", "OnTemplateGetFunctionClassHandler", self::MODULE_ID, "CSeoMetaTags", "EventHandler");

        UnRegisterModuleDependences("sale", "OnOrderAdd", self::MODULE_ID, "CSeoMetaEvents", "OrderAdd");

        UnRegisterModuleDependences("main", "OnAdminIBlockSectionEdit", self::MODULE_ID, "CSeoMetaEvents", "OnInit");
        UnRegisterModuleDependences("main", "OnPageStart", self::MODULE_ID, "CSeoMetaEvents", "PageStart");
		UnRegisterModuleDependences("main", "OnBuildGlobalMenu", self::MODULE_ID, 'CSeoMetaEvents', 'OnBuildGlobalMenuHandler');
		UnRegisterModuleDependences('main', 'OnEndBufferContent', self::MODULE_ID, 'CSeoMetaEvents', 'ChangeContent');

		UnRegisterModuleDependences("search", "OnReindex", self::MODULE_ID, "CSeoMetaEvents", "OnReindexHandler");
		UnRegisterModuleDependences("search", "OnAfterIndexAdd", self::MODULE_ID, "CSeoMetaEvents", "OnAfterIndexAddHandler");

		return true;
	}

	function InstallFiles($arParams = array())
	{
		CopyDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/admin', $_SERVER['DOCUMENT_ROOT'].'/bitrix/admin', true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".self::MODULE_ID."/install/themes/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/themes/", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".self::MODULE_ID."/install/files/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/", true, true);

		if (
			is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/components')
			&& $dir = opendir($p)
		) {
			while (false !== $item = readdir($dir))
			{
				if ($item == '..' || $item == '.') {
					continue;
				}

				CopyDirFiles($p.'/'.$item, $_SERVER['DOCUMENT_ROOT'].'/bitrix/components/'.$item, True, True);
			}

			closedir($dir);
		}

		return true;
	}

	function UnInstallFiles()
	{
		DeleteDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/admin', $_SERVER['DOCUMENT_ROOT'].'/bitrix/admin');
		DeleteDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/files', $_SERVER['DOCUMENT_ROOT'].'/bitrix');
		DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".self::MODULE_ID."/install/themes/.default/icons/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/themes/.default/icons");
		if (
			is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/components')
			&& $dir = opendir($p)
		) {
			while (false !== $item = readdir($dir))
			{
				if ($item == '..' || $item == '.' || !is_dir($p0 = $p.'/'.$item)) {
					continue;
				}

				$dir0 = opendir($p0);
				while (false !== $item0 = readdir($dir0))
				{
					if ($item0 == '..' || $item0 == '.') {
						continue;
					}

					DeleteDirFilesEx('/bitrix/components/'.$item.'/'.$item0);
				}
				closedir($dir0);
			}

			closedir($dir);
		}

		return true;
	}

	function installDB()
	{
		global $DB;

		$DB->runSQLBatch($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/db/'.mb_strtolower($DB->type).'/install.sql');
	}

	function UnInstallDB()
	{
		//
	}

	function DoInstall()
	{
		global $APPLICATION;

		if(version_compare(phpversion(), '7.4', '<')) {
			$APPLICATION->ThrowException(GetMessage('SOTBIT_SEOMETA_INSTALL_ERROR_VERSION_PHP'));
			return false;
		}

		$this->InstallFiles();
		$this->InstallDB();
		$this->InstallEvents();

		ModuleManager::registerModule(self::MODULE_ID);

		return true;
	}

	function DoUninstall()
	{
		global $DB, $APPLICATION, $unstep;
		$unstep = IntVal($unstep);

		if($unstep < 2) {
			$APPLICATION->IncludeAdminFile(
				GetMessage("SOTBIT_SEOMETA_FORM_UNINSTALL_TITLE"),
				$_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/" . self::MODULE_ID . "/install/unstep.php"
			);
		}

		ModuleManager::unRegisterModule(self::MODULE_ID);
		$this->UnInstallFiles();

		if($unstep > 2 && $_REQUEST["save"] != 'on') {
			$DB->runSQLBatch($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . self::MODULE_ID . '/install/db/' . mb_strtolower($DB->type) . '/uninstall.sql');
		}

		$this->UnInstallDB();
		$this->UnInstallEvents();
	}
}
?>
