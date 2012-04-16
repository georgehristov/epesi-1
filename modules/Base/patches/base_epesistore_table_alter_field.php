<?php

//ModuleManager::uninstall($module_to_uninstall);
if (ModuleManager::is_installed('Base_EpesiStore') === -1) {
    ModuleManager::install('Base_EpesiStore');
    ModuleManager::create_load_priority_array();
} else
	PatchDBAlterColumn('epesi_store_modules', 'version', 'C(10)');

?>