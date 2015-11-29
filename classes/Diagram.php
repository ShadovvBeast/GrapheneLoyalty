<?php
/**
 * Created by PhpStorm.
 * User: Asaf
 * Date: 21/11/2015
 * Time: 19:44
 */

class Diagram extends ObjectModel
{
    /** @var string Name */
    public $diagram;

    protected $fieldsRequired = array('diagram');
    //protected $fieldsSize = array('test' => 64);
    //protected $fieldsValidate = array('diagram' => 'isGenericName');
    protected $table = 'diagram';
    protected $identifier = 'id_diagram';
    public static $definition = array(
        'table' => 'diagram',
        'primary' => 'id_diagram',
        'fields' => array(
            'diagram' =>                array('type' => self::TYPE_STRING)
        )
    );

    public function __construct($id = null)
    {
        $this->id_default_group = (int)Configuration::get('PS_CUSTOMER_GROUP');
        parent::__construct($id);
    }

    public function getFields()
    {
        parent::validateFields();
        $fields['diagram'] = pSQL($this->diagram);
        return $fields;
    }
}