<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version224 extends Doctrine_Migration_Base
{
    public function up ()
    {
        $conn = Doctrine_Manager::getInstance()->getCurrentConnection();
        $conn->execute('UPDATE petition_signing s
            SET
                language_id = (SELECT
                        t.language_id
                    FROM
                        widget w
                            LEFT JOIN
                        petition_text t ON w.petition_text_id = t.id
                    WHERE
                        s.widget_id = w.id),
                petition_text_id = (SELECT
                        w.petition_text_id
                    FROM
                        widget w
                    WHERE
                        s.widget_id = w.id),
                campaign_id = (SELECT
                        w.campaign_id
                    FROM
                        widget w
                    WHERE
                        s.widget_id = w.id);
        ');
        $conn->clear();
    }

    public function down()
    {
        $conn = Doctrine_Manager::getInstance()->getCurrentConnection();
        $conn->execute('UPDATE petition_signing
            SET
                language_id = null,
                petition_text_id = null,
                campaign_id = null;
        ');
        $conn->clear();
    }
}
