<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version181 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addIndex('petition_signing', 'signing_bounce', array(
             'fields' => 
             array(
              0 => 'petition_id',
              1 => 'bounce',
              2 => 'verified',
              3 => 'bounce_at',
             ),
             ));
    }

    public function down()
    {
        $this->removeIndex('petition_signing', 'signing_bounce', array(
             'fields' => 
             array(
              0 => 'petition_id',
              1 => 'bounce',
              2 => 'verified',
              3 => 'bounce_at',
             ),
             ));
    }
}