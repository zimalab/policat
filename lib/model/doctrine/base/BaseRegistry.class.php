<?php

/**
 * BaseRegistry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int       $id                      Type: integer(4), primary key
 * @property string    $regkey                  Type: string(200), unique
 * @property string    $regclass                Type: string(40)
 * @property string    $value                   Type: clob
 *  
 * @method int         getId()                  Type: integer(4), primary key
 * @method string      getRegkey()              Type: string(200), unique
 * @method string      getRegclass()            Type: string(40)
 * @method string      getValue()               Type: clob
 *  
 * @method Registry    setId(int $val)          Type: integer(4), primary key
 * @method Registry    setRegkey(string $val)   Type: string(200), unique
 * @method Registry    setRegclass(string $val) Type: string(40)
 * @method Registry    setValue(string $val)    Type: clob
 *  
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegistry extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('registry');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('regkey', 'string', 200, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('regclass', 'string', 40, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => 40,
             ));
        $this->hasColumn('value', 'clob', null, array(
             'type' => 'clob',
             ));


        $this->index('registry_key', array(
             'fields' => 
             array(
              0 => 'regkey',
             ),
             ));
        $this->index('registry_class', array(
             'fields' => 
             array(
              0 => 'regclass',
             ),
             ));
        $this->index('registry_key_class', array(
             'fields' => 
             array(
              0 => 'regkey',
              1 => 'regclass',
             ),
             ));
        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $cachetaggable0 = new Doctrine_Template_Cachetaggable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($cachetaggable0);
    }
}