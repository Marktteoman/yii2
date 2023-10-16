<?php

use yii\db\Migration;

/**
 * Class m231016_070727_add_column
 */
class m231016_070727_add_column extends Migration
{
    public function safeUp()
    {
       $this ->alterColumn('user', 'status', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231010_115245_add_colomn cannot be reverted.\n";

        return false;
    }
}
