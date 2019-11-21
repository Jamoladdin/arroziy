<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category_abiturient".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Abiturient[] $abiturients
 */
class CategoryAbiturient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_abiturient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbiturients()
    {
        return $this->hasMany(Abiturient::className(), ['abiturientid' => 'id']);
    }
}
