<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category_talabalarga".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Talabalarga[] $talabalargas
 */
class CategoryTalabalarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_talabalarga';
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
    public function getTalabalargas()
    {
        return $this->hasMany(Talabalarga::className(), ['talabalargaid' => 'id']);
    }
}
