<?php
if (!defined('_PS_VERSION_'))
    exit;

class SearchByNfc extends Module
{
    public function __construct()
    {
        $this->name = 'searchbynfc';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Asaf Levy';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Search By NFC');
        $this->description = $this->l('Allows customer search by NFC tag.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

       // if (!Configuration::get('MYMODULE_NAME'))
       //     $this->warning = $this->l('No name provided');
    }
    public function install()
    {
        if (!parent::install())
            return false;
        return true;
    }
    public function uninstall()
    {
        if (!parent::uninstall())
            return false;
        return true;
    }
}