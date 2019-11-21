<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "talabalarga".
 *
 * @property integer $id
 * @property integer $talabalargaid
 * @property string $text
 *
 * @property CategoryTalabalarga $talabalarga
 */
class Talabalarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'talabalarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['talabalargaid', 'text'], 'required'],
            [['talabalargaid'], 'integer'],
            [['text'], 'string'],
            [['talabalargaid'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryTalabalarga::className(), 'targetAttribute' => ['talabalargaid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'talabalargaid' => 'Talabalarga',
            'text' => 'Matn',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalabalarga()
    {
        return $this->hasOne(CategoryTalabalarga::className(), ['id' => 'talabalargaid']);
    }
}
