<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version185 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('download', 'incremental', 'integer', '1', array(
             'notnull' => '1',
             'default' => '0',
             ));
        $this->changeColumn('download', 'user_id', 'integer', '4', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('download', 'incremental');
    }
}