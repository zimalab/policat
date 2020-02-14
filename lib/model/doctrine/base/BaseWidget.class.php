<?php

/**
 * BaseWidget
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                                        $id                                              Type: integer(4), primary key
 * @property int                                        $parent_id                                       Type: integer(4)
 * @property int                                        $campaign_id                                     Type: integer(4)
 * @property int                                        $petition_id                                     Type: integer(4)
 * @property int                                        $petition_text_id                                Type: integer(4)
 * @property int                                        $origin_widget_id                                Type: integer(4)
 * @property int                                        $status                                          Type: integer(4), default "1"
 * @property string                                     $title                                           Type: string
 * @property string                                     $target                                          Type: clob
 * @property string                                     $background                                      Type: clob
 * @property string                                     $intro                                           Type: clob
 * @property string                                     $footer                                          Type: clob
 * @property string                                     $email_subject                                   Type: string
 * @property string                                     $email_body                                      Type: clob
 * @property string                                     $email_validation_subject                        Type: string
 * @property string                                     $email_validation_body                           Type: clob
 * @property string                                     $stylings                                        Type: clob
 * @property int                                        $themeId                                         Type: integer(4)
 * @property string                                     $email                                           Type: string(80)
 * @property string                                     $organisation                                    Type: string(200)
 * @property string                                     $landing_url                                     Type: string
 * @property string                                     $landing2_url                                    Type: string
 * @property string                                     $donate_url                                      Type: string(200)
 * @property string                                     $donate_text                                     Type: clob
 * @property string                                     $ref                                             Type: string
 * @property int                                        $validation_kind                                 Type: integer(1)
 * @property string                                     $validation_data                                 Type: string
 * @property int                                        $validation_status                               Type: integer(1)
 * @property string                                     $edit_code                                       Type: string(40)
 * @property string                                     $paypal_email                                    Type: string(80)
 * @property int                                        $share                                           Type: integer(1), default "1"
 * @property int                                        $user_id                                         Type: integer(4)
 * @property int                                        $data_owner                                      Type: integer(1)
 * @property string                                     $activity_at                                     Type: timestamp, Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property string                                     $last_ref                                        Type: string(200)
 * @property string                                     $email_targets                                   Type: clob
 * @property string                                     $social_share_text                               Type: clob
 * @property int                                        $cron_signings24                                 Type: integer(4)
 * @property string                                     $default_country                                 Type: string(5)
 * @property int                                        $subscribe_default                               Type: integer(1), default "-1"
 * @property string                                     $subscribe_text                                  Type: string(250)
 * @property string                                     $privacy_policy_body                             Type: clob
 * @property string                                     $privacy_policy_url                              Type: string
 * @property string                                     $read_more_url                                   Type: string
 * @property Campaign                                   $Campaign                                        
 * @property Petition                                   $Petition                                        
 * @property PetitionText                               $PetitionText                                    
 * @property Widget                                     $Parent                                          
 * @property Doctrine_Collection|Widget[]               $Children                                        
 * @property sfGuardUser                                $User                                            
 * @property Widget                                     $OriginWidget                                    
 * @property Doctrine_Collection|PetitionText[]         $usedByPetitionText                              
 * @property Doctrine_Collection|Widget[]               $OriginWidgetFor                                 
 * @property Doctrine_Collection|PetitionSigning[]      $PetitionSigning                                 
 * @property Doctrine_Collection|PetitionSigningWave[]  $PetitionSigningWave                             
 * @property Doctrine_Collection|FacebookTab[]          $FacebookTab                                     
 * @property Owner                                      $Owner                                           
 * @property WidgetOwner                                $WidgetOwner                                     
 * @property Doctrine_Collection|Ticket[]               $Tickets                                         
 * @property Doctrine_Collection|Download[]             $Downloads                                       
 *  
 * @method int                                          getId()                                          Type: integer(4), primary key
 * @method int                                          getParentId()                                    Type: integer(4)
 * @method int                                          getCampaignId()                                  Type: integer(4)
 * @method int                                          getPetitionId()                                  Type: integer(4)
 * @method int                                          getPetitionTextId()                              Type: integer(4)
 * @method int                                          getOriginWidgetId()                              Type: integer(4)
 * @method int                                          getStatus()                                      Type: integer(4), default "1"
 * @method string                                       getTitle()                                       Type: string
 * @method string                                       getTarget()                                      Type: clob
 * @method string                                       getBackground()                                  Type: clob
 * @method string                                       getIntro()                                       Type: clob
 * @method string                                       getFooter()                                      Type: clob
 * @method string                                       getEmailSubject()                                Type: string
 * @method string                                       getEmailBody()                                   Type: clob
 * @method string                                       getEmailValidationSubject()                      Type: string
 * @method string                                       getEmailValidationBody()                         Type: clob
 * @method string                                       getStylings()                                    Type: clob
 * @method int                                          getThemeid()                                     Type: integer(4)
 * @method string                                       getEmail()                                       Type: string(80)
 * @method string                                       getOrganisation()                                Type: string(200)
 * @method string                                       getLandingUrl()                                  Type: string
 * @method string                                       getLanding2Url()                                 Type: string
 * @method string                                       getDonateUrl()                                   Type: string(200)
 * @method string                                       getDonateText()                                  Type: clob
 * @method string                                       getRef()                                         Type: string
 * @method int                                          getValidationKind()                              Type: integer(1)
 * @method string                                       getValidationData()                              Type: string
 * @method int                                          getValidationStatus()                            Type: integer(1)
 * @method string                                       getEditCode()                                    Type: string(40)
 * @method string                                       getPaypalEmail()                                 Type: string(80)
 * @method int                                          getShare()                                       Type: integer(1), default "1"
 * @method int                                          getUserId()                                      Type: integer(4)
 * @method int                                          getDataOwner()                                   Type: integer(1)
 * @method string                                       getActivityAt()                                  Type: timestamp, Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method string                                       getLastRef()                                     Type: string(200)
 * @method string                                       getEmailTargets()                                Type: clob
 * @method string                                       getSocialShareText()                             Type: clob
 * @method int                                          getCronSignings24()                              Type: integer(4)
 * @method string                                       getDefaultCountry()                              Type: string(5)
 * @method int                                          getSubscribeDefault()                            Type: integer(1), default "-1"
 * @method string                                       getSubscribeText()                               Type: string(250)
 * @method string                                       getPrivacyPolicyBody()                           Type: clob
 * @method string                                       getPrivacyPolicyUrl()                            Type: string
 * @method string                                       getReadMoreUrl()                                 Type: string
 * @method Campaign                                     getCampaign()                                    
 * @method Petition                                     getPetition()                                    
 * @method PetitionText                                 getPetitionText()                                
 * @method Widget                                       getParent()                                      
 * @method Doctrine_Collection|Widget[]                 getChildren()                                    
 * @method sfGuardUser                                  getUser()                                        
 * @method Widget                                       getOriginWidget()                                
 * @method Doctrine_Collection|PetitionText[]           getUsedByPetitionText()                          
 * @method Doctrine_Collection|Widget[]                 getOriginWidgetFor()                             
 * @method Doctrine_Collection|PetitionSigning[]        getPetitionSigning()                             
 * @method Doctrine_Collection|PetitionSigningWave[]    getPetitionSigningWave()                         
 * @method Doctrine_Collection|FacebookTab[]            getFacebookTab()                                 
 * @method Owner                                        getOwner()                                       
 * @method WidgetOwner                                  getWidgetOwner()                                 
 * @method Doctrine_Collection|Ticket[]                 getTickets()                                     
 * @method Doctrine_Collection|Download[]               getDownloads()                                   
 *  
 * @method Widget                                       setId(int $val)                                  Type: integer(4), primary key
 * @method Widget                                       setParentId(int $val)                            Type: integer(4)
 * @method Widget                                       setCampaignId(int $val)                          Type: integer(4)
 * @method Widget                                       setPetitionId(int $val)                          Type: integer(4)
 * @method Widget                                       setPetitionTextId(int $val)                      Type: integer(4)
 * @method Widget                                       setOriginWidgetId(int $val)                      Type: integer(4)
 * @method Widget                                       setStatus(int $val)                              Type: integer(4), default "1"
 * @method Widget                                       setTitle(string $val)                            Type: string
 * @method Widget                                       setTarget(string $val)                           Type: clob
 * @method Widget                                       setBackground(string $val)                       Type: clob
 * @method Widget                                       setIntro(string $val)                            Type: clob
 * @method Widget                                       setFooter(string $val)                           Type: clob
 * @method Widget                                       setEmailSubject(string $val)                     Type: string
 * @method Widget                                       setEmailBody(string $val)                        Type: clob
 * @method Widget                                       setEmailValidationSubject(string $val)           Type: string
 * @method Widget                                       setEmailValidationBody(string $val)              Type: clob
 * @method Widget                                       setStylings(string $val)                         Type: clob
 * @method Widget                                       setThemeid(int $val)                             Type: integer(4)
 * @method Widget                                       setEmail(string $val)                            Type: string(80)
 * @method Widget                                       setOrganisation(string $val)                     Type: string(200)
 * @method Widget                                       setLandingUrl(string $val)                       Type: string
 * @method Widget                                       setLanding2Url(string $val)                      Type: string
 * @method Widget                                       setDonateUrl(string $val)                        Type: string(200)
 * @method Widget                                       setDonateText(string $val)                       Type: clob
 * @method Widget                                       setRef(string $val)                              Type: string
 * @method Widget                                       setValidationKind(int $val)                      Type: integer(1)
 * @method Widget                                       setValidationData(string $val)                   Type: string
 * @method Widget                                       setValidationStatus(int $val)                    Type: integer(1)
 * @method Widget                                       setEditCode(string $val)                         Type: string(40)
 * @method Widget                                       setPaypalEmail(string $val)                      Type: string(80)
 * @method Widget                                       setShare(int $val)                               Type: integer(1), default "1"
 * @method Widget                                       setUserId(int $val)                              Type: integer(4)
 * @method Widget                                       setDataOwner(int $val)                           Type: integer(1)
 * @method Widget                                       setActivityAt(string $val)                       Type: timestamp, Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method Widget                                       setLastRef(string $val)                          Type: string(200)
 * @method Widget                                       setEmailTargets(string $val)                     Type: clob
 * @method Widget                                       setSocialShareText(string $val)                  Type: clob
 * @method Widget                                       setCronSignings24(int $val)                      Type: integer(4)
 * @method Widget                                       setDefaultCountry(string $val)                   Type: string(5)
 * @method Widget                                       setSubscribeDefault(int $val)                    Type: integer(1), default "-1"
 * @method Widget                                       setSubscribeText(string $val)                    Type: string(250)
 * @method Widget                                       setPrivacyPolicyBody(string $val)                Type: clob
 * @method Widget                                       setPrivacyPolicyUrl(string $val)                 Type: string
 * @method Widget                                       setReadMoreUrl(string $val)                      Type: string
 * @method Widget                                       setCampaign(Campaign $val)                       
 * @method Widget                                       setPetition(Petition $val)                       
 * @method Widget                                       setPetitionText(PetitionText $val)               
 * @method Widget                                       setParent(Widget $val)                           
 * @method Widget                                       setChildren(Doctrine_Collection $val)            
 * @method Widget                                       setUser(sfGuardUser $val)                        
 * @method Widget                                       setOriginWidget(Widget $val)                     
 * @method Widget                                       setUsedByPetitionText(Doctrine_Collection $val)  
 * @method Widget                                       setOriginWidgetFor(Doctrine_Collection $val)     
 * @method Widget                                       setPetitionSigning(Doctrine_Collection $val)     
 * @method Widget                                       setPetitionSigningWave(Doctrine_Collection $val) 
 * @method Widget                                       setFacebookTab(Doctrine_Collection $val)         
 * @method Widget                                       setOwner(Owner $val)                             
 * @method Widget                                       setWidgetOwner(WidgetOwner $val)                 
 * @method Widget                                       setTickets(Doctrine_Collection $val)             
 * @method Widget                                       setDownloads(Doctrine_Collection $val)           
 *  
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWidget extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('widget');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('parent_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('campaign_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('petition_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('petition_text_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('origin_widget_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'default' => '',
             ));
        $this->hasColumn('target', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('background', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('intro', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('footer', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('email_subject', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('email_body', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('email_validation_subject', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('email_validation_body', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('stylings', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('themeId', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('email', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
        $this->hasColumn('organisation', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('landing_url', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('landing2_url', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('donate_url', 'string', 200, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 200,
             ));
        $this->hasColumn('donate_text', 'clob', null, array(
             'type' => 'clob',
             'notnull' => false,
             ));
        $this->hasColumn('ref', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('validation_kind', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('validation_data', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('validation_status', 'integer', 1, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('edit_code', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('paypal_email', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
        $this->hasColumn('share', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('data_owner', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('activity_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => false,
             ));
        $this->hasColumn('last_ref', 'string', 200, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 200,
             ));
        $this->hasColumn('email_targets', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('social_share_text', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('cron_signings24', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('default_country', 'string', 5, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => 5,
             ));
        $this->hasColumn('subscribe_default', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => -1.0,
             'length' => 1,
             ));
        $this->hasColumn('subscribe_text', 'string', 250, array(
             'type' => 'string',
             'notnull' => false,
             'default' => '',
             'length' => 250,
             ));
        $this->hasColumn('privacy_policy_body', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('privacy_policy_url', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('read_more_url', 'string', null, array(
             'type' => 'string',
             ));


        $this->index('widget_parent_id_index', array(
             'fields' => 
             array(
              0 => 'parent_id',
             ),
             ));
        $this->index('widget_activity', array(
             'fields' => 
             array(
              0 => 'activity_at',
              1 => 'status',
             ),
             ));
        $this->index('widget_activity2', array(
             'fields' => 
             array(
              0 => 'petition_id',
              1 => 'activity_at',
              2 => 'status',
             ),
             ));
        $this->index('widget_origin', array(
             'fields' => 
             array(
              0 => 'petition_id',
              1 => 'origin_widget_id',
             ),
             ));
        $this->index('widget_email', array(
             'fields' => 
             array(
              0 => 'email',
              1 => 'user_id',
             ),
             ));
        $this->option('symfony', array(
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Campaign', array(
             'local' => 'campaign_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Petition', array(
             'local' => 'petition_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('PetitionText', array(
             'local' => 'petition_text_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Widget as Parent', array(
             'local' => 'parent_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('Widget as Children', array(
             'local' => 'id',
             'foreign' => 'parent_id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Widget as OriginWidget', array(
             'local' => 'origin_widget_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('PetitionText as usedByPetitionText', array(
             'local' => 'id',
             'foreign' => 'widget_id'));

        $this->hasMany('Widget as OriginWidgetFor', array(
             'local' => 'id',
             'foreign' => 'origin_widget_id'));

        $this->hasMany('PetitionSigning', array(
             'local' => 'id',
             'foreign' => 'widget_id'));

        $this->hasMany('PetitionSigningWave', array(
             'local' => 'id',
             'foreign' => 'widget_id'));

        $this->hasMany('FacebookTab', array(
             'local' => 'id',
             'foreign' => 'widget_id'));

        $this->hasOne('Owner', array(
             'local' => 'id',
             'foreign' => 'first_widget_id'));

        $this->hasOne('WidgetOwner', array(
             'local' => 'id',
             'foreign' => 'widget_id'));

        $this->hasMany('Ticket as Tickets', array(
             'local' => 'id',
             'foreign' => 'widget_id'));

        $this->hasMany('Download as Downloads', array(
             'local' => 'id',
             'foreign' => 'widget_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $cachetaggable0 = new Doctrine_Template_Cachetaggable(array(
             'skipOnChange' => 
             array(
              0 => 'activity_at',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($cachetaggable0);
    }
}