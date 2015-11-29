<?php
/**
 * Created by PhpStorm.
 * User: Asaf
 * Date: 07/11/2015
 * Time: 15:19
 */

class AdminSearchByNfcController extends ModuleAdminControllerCore{
    public $asso_type = 'shop';
    public function __construct() {
        $this->module = 'searchbynfc';
        $this->lang = true;
        $this->context = Context::getContext();
        $this->bootstrap = true;
        parent::__construct();


    }
    public function initContent()
    {
        //parent::initContent();
        if (!$_POST)
            $this->setTemplate('searchbynfc.tpl');
        else
        {
            $nfc = pSql($_POST['nfc']);
            $sql = "SELECT id_customer FROM "._DB_PREFIX_."customer WHERE nfc ='" .$nfc."'";
            if ($row = Db::getInstance()->getRow($sql)) {
                $id_customer = $row['id_customer'];
                $token = Tools::getAdminToken('AdminCustomers'.(int)(Tab::getIdFromClassName('AdminCustomers')).(int)($this->context->cookie->id_employee));
                $location = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?controller=AdminCustomers&id_customer=".$id_customer."&viewcustomer&token=".$token;
                header("Location: ".$location);
                die();
            }

        }

    }
} 