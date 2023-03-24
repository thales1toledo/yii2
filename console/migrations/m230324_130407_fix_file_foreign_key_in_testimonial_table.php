<?php

use yii\db\Migration;

/**
 * Class m230324_130407_fix_file_foreign_key_in_testimonial_table
 */
class m230324_130407_fix_file_foreign_key_in_testimonial_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // drops foreign key for table `{{%file}}`
        $this->dropForeignKey(
            '{{%fk-testimonial-customer_image_id}}',
            '{{%testimonial}}'
        );
        $this->alterColumn('{{%testimonial}}', 'customer_image_id', $this->integer());
        $this->addForeignKey(
            '{{%fk-testimonial-customer_image_id}}',
            '{{%testimonial}}',
            'customer_image_id',
            '{{%file}}',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%file}}`
        $this->dropForeignKey(
            '{{%fk-testimonial-customer_image_id}}',
            '{{%testimonial}}'
        );

        $this->alterColumn('{{%testimonial}}', 'customer_image_id', $this->integer()->notNull());

        $this->addForeignKey(
            '{{%fk-testimonial-customer_image_id}}',
            '{{%testimonial}}',
            'customer_image_id',
            '{{%file}}',
            'id',
            'CASCADE'
        );
    }
}
