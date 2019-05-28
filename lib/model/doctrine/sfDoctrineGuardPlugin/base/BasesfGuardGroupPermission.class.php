<?php

/**
 * BasesfGuardGroupPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                     $group_id                             Type: integer(4), primary key
 * @property int                     $permission_id                        Type: integer(4), primary key
 * @property sfGuardGroup            $Group                                
 * @property sfGuardPermission       $Permission                           
 *  
 * @method int                       getGroupId()                          Type: integer(4), primary key
 * @method int                       getPermissionId()                     Type: integer(4), primary key
 * @method sfGuardGroup              getGroup()                            
 * @method sfGuardPermission         getPermission()                       
 *  
 * @method sfGuardGroupPermission    setGroupId(int $val)                  Type: integer(4), primary key
 * @method sfGuardGroupPermission    setPermissionId(int $val)             Type: integer(4), primary key
 * @method sfGuardGroupPermission    setGroup(sfGuardGroup $val)           
 * @method sfGuardGroupPermission    setPermission(sfGuardPermission $val) 
 *  
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardGroupPermission extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_group_permission');
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
        $this->option('options', NULL);
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardGroup as Group', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardPermission as Permission', array(
             'local' => 'permission_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}