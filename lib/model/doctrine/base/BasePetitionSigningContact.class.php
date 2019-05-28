<?php

/**
 * BasePetitionSigningContact
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                     $petition_signing_id                     Type: integer(8), primary key
 * @property int                     $contact_id                              Type: integer(4), primary key
 * @property int                     $wave                                    Type: integer(2), default "1"
 * @property PetitionSigning         $PetitionSigning                         
 * @property Contact                 $Contact                                 
 *  
 * @method int                       getPetitionSigningId()                   Type: integer(8), primary key
 * @method int                       getContactId()                           Type: integer(4), primary key
 * @method int                       getWave()                                Type: integer(2), default "1"
 * @method PetitionSigning           getPetitionSigning()                     
 * @method Contact                   getContact()                             
 *  
 * @method PetitionSigningContact    setPetitionSigningId(int $val)           Type: integer(8), primary key
 * @method PetitionSigningContact    setContactId(int $val)                   Type: integer(4), primary key
 * @method PetitionSigningContact    setWave(int $val)                        Type: integer(2), default "1"
 * @method PetitionSigningContact    setPetitionSigning(PetitionSigning $val) 
 * @method PetitionSigningContact    setContact(Contact $val)                 
 *  
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePetitionSigningContact extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('petition_signing_contact');
        $this->hasColumn('petition_signing_id', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('contact_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('wave', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 2,
             ));


        $this->index('psc_wave', array(
             'fields' => 
             array(
              0 => 'wave',
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
        $this->hasOne('PetitionSigning', array(
             'local' => 'petition_signing_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Contact', array(
             'local' => 'contact_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}