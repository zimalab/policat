<?php

/**
 * BaseGroupPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int              $group_id                      Type: integer(4), primary key
 * @property int              $permission_id                 Type: integer(4), primary key
 * @property Group            $Group                         
 * @property Permission       $Permission                    
 *  
 * @method int                getGroupId()                   Type: integer(4), primary key
 * @method int                getPermissionId()              Type: integer(4), primary key
 * @method Group              getGroup()                     
 * @method Permission         getPermission()                
 *  
 * @method GroupPermission    setGroupId(int $val)           Type: integer(4), primary key
 * @method GroupPermission    setPermissionId(int $val)      Type: integer(4), primary key
 * @method GroupPermission    setGroup(Group $val)           
 * @method GroupPermission    setPermission(Permission $val) 
 *  
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGroupPermission extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('group_permission');
        $this->hasColumn('group_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('permission_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Group', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Permission', array(
             'local' => 'permission_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}