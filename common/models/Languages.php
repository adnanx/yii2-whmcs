<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "languages".
 *
 * @property string $id
 * @property string $name
 * @property string $code
 * @property string $image
 * @property integer $sort_order
 * @property integer $status
 * @property integer $default
 * @property string $updated_at
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'languages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'image', 'status', 'updated_at'], 'required'],
            [['sort_order', 'status', 'default'], 'integer'],
            [['updated_at'], 'safe'],
            [['name'], 'string', 'max' => 32],
            [['code'], 'string', 'max' => 5],
            [['image'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('languages', 'ID'),
            'name' => Yii::t('languages', 'Name'),
            'code' => Yii::t('languages', 'Code'),
            'image' => Yii::t('languages', 'Image'),
            'sort_order' => Yii::t('languages', 'Sort Order'),
            'status' => Yii::t('languages', 'Status'),
            'default' => Yii::t('languages', 'Default'),
            'updated_at' => Yii::t('languages', 'Updated At'),
        ];
    }
}
