<?php
/**
 * Created by PhpStorm.
 * User: Asaf
 * Date: 07/11/2015
 * Time: 15:19
 */
include_once(_PS_CLASS_DIR_.'Diagram.php');
class AdminDragNTriggerController extends ModuleAdminControllerCore{
    public $asso_type = 'shop';
    public function __construct() {
        $this->module = 'dragntrigger';
        $this->lang = true;
        $this->context = Context::getContext();
        $this->bootstrap = true;
        $this->required_database = true;
        $this->table = 'diagram';
        $this->className = 'Diagram';
        $this->lang = false;
        $this->edit = true;
        $this->delete = true;
        $this->fieldsDisplay = array(
            'id_diagram' => array(
                'title' => $this->l('ID'),
                'align' => 'center',
                'width' => 25),
            'diagram' => array(
                'title' => $this->l('Diagram'),
                'width' => 200)
        );
        $this->identifier = 'id_diagram';
        $this->explicitSelect = true;

        //$this->allow_export = true;

        $this->addRowAction('edit');
        $this->addRowAction('view');
        $this->addRowAction('delete');

        $this->fields_list = array(
            'id_diagram' => array(
                'title' => $this->l('ID'),
                'align' => 'text-center',
                'class' => 'fixed-width-xs'
            ),
            'diagram' => array(
                'title' => $this->l('Diagram')
            ),
        );
        parent::__construct();


    }
    public function initContent()
    {
        //parent::initContent();
        if (!$_POST) {
            if ($_GET['id_diagram']) {
                //$groups = Group::getGroups(1);
                //$this->context->smarty->assign(array('groups' => json_encode($groups)));
                $this->context->smarty->assign(array('id_diagram' => $_GET['id_diagram']));
                $this->setTemplate('dragntrigger.tpl');
                $this->context->controller->addCSS(dirname(__FILE__) . "\..\..\style.css", 'all');
            } else {
                parent::initContent();  //$this->setTemplate('dragntrigger_selection.tpl');
            }
        }
        else
        {

        }
        //$this->context->smarty->assign(array('x' => json_encode()));


    }

    public function renderForm()
    {

        $sql = "SELECT MAX(id_diagram) AS top_id FROM "._DB_PREFIX_."diagram";
        if ($row = Db::getInstance()->getRow($sql)) {
            $top_id = $row['top_id'];
            $top_id++;
        }
        else
            $top_id = 1;
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $actual_link = str_replace('adddiagram','id_diagram='.$top_id,$actual_link);
        //echo $actual_link;
        header("Location: ".$actual_link);
        die();
        //parent::renderForm();
    }
} 