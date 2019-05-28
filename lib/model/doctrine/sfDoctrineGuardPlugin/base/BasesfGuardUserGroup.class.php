<?php

/**
 * BasesfGuardUserGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int               $user_id                    Type: integer(4), primary key
 * @property int               $group_id                   Type: integer(4), primary key
 * @property sfGuardUser       $User                       
 * @property sfGuardGroup      $Group                      
 *  
 * @method int                 getUserId()                 Type: integer(4), primary key
 * @method int                 getGroupId()                Type: integer(4), primary key
 * @method sfGuardUser         getUser()                   
 * @method sfGuardGroup        getGroup()                  
 *  
 * @method sfGuardUserGroup    setUserId(int $val)         Type: integer(4), primary key
 * @method sfGuardUserGroup    setGroupId(int $val)        Type: integer(4), primary key
 * @method sfGuardUserGroup    setUser(sfGuardUser $val)   
 * @method sfGuardUserGroup    setGroup(sfGuardGroup $val) 
 *  
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardUserGroup extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_user_group');
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('group_id', 'integer', 4, array(
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
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardGroup as Group', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}