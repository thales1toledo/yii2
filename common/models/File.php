<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property int $id
 * @property string $name
 * @property string $path_url
 * @property string $base_url
 * @property string $mine_type
 *
 * @property ProjectImage[] $projectImages
 * @property Testimonial[] $testimonials
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'base_url', 'path_url', 'mine_type'], 'required'],
            [['name', 'base_url', 'path_url', 'mine_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'path_url' => Yii::t('app', 'Path Url'),
            'base_url' => Yii::t('app', 'Base Url'),
            'mine_type' => Yii::t('app', 'Mine Type'),
        ];
    }

    /**
     * Gets query for [[ProjectImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectImages()
    {
        return $this->hasMany(ProjectImage::class, ['file_id' => 'id']);
    }

    /**
     * Gets query for [[Testimonials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestimonials()
    {
        return $this->hasMany(Testimonial::class, ['customer_image_id' => 'id']);
    }

    public function absoluteUrl() {
        return $this->base_url . '/' . $this->name;
    }

    public function afterDelete()
    {
        parent::afterDelete();
        unlink($this->path_url . '/' . $this->name);
    }


}
