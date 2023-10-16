<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%new_country}}`.
 */
class m231009_084130_create_new_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('new_country2', [
            'code' => $this->char(2)->notNull(),
            'name' => $this->char(52)->notNull(),
            'population' => $this->integer()->notNull()->defaultValue(0),
        ]);
        $this->addPrimaryKey('PK_code', 'new_country2', 'code');

        $this ->insert('new_country2',[
            'code' => 'AU',
            'name' => 'Australia',
            'population' => 24016400,
        ]);

        $this ->insert('new_country2',[
            'code' => 'BR',
            'name' => 'Brazil',
            'population' => 205722000,
        ]);

        $this ->insert('new_country2',[
            'code' => 'CA',
            'name' => 'Canada',
            'population' => 35985751,
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('new_country2');
    }
}
