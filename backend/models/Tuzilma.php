<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tuzilma".
 *
 * @property integer $id
 * @property integer $tuzilmaid
 * @property string $text
 *
 * @property CategoryTuzilma $tuzilma
 */
class Tuzilma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tuzilma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuzilmaid', 'text'], 'required'],
            [['tuzilmaid'], 'integer'],
            [['text'], 'string'],
            [['tuzilmaid'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryTuzilma::className(), 'targetAttribute' => ['tuzilmaid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tuzilmaid' => 'Tuzilma',
            'text' => 'Matn',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuzilma()
    {
        return $this->hasOne(CategoryTuzilma::className(), ['id' => 'tuzilmaid']);
    }
}
