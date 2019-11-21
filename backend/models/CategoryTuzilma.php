<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category_tuzilma".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Tuzilma[] $tuzilmas
 */
class CategoryTuzilma extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'category_tuzilma';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
        ];
    }

    public function getTuzilmas()
    {
        return $this->hasMany(Tuzilma::className(), ['tuzilmaid' => 'id']);
    }
}
