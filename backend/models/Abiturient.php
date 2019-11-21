<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "abiturient".
 *
 * @property integer $id
 * @property integer $abiturientid
 * @property string $text
 *
 * @property CategoryAbiturient $abiturient
 */
class Abiturient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'abiturient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['abiturientid', 'text'], 'required'],
            [['abiturientid'], 'integer'],
            [['text'], 'string'],
            [['abiturientid'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryAbiturient::className(), 'targetAttribute' => ['abiturientid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'abiturientid' => 'Abiturientga',
            'text' => 'Matn',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbiturient()
    {
        return $this->hasOne(CategoryAbiturient::className(), ['id' => 'abiturientid']);
    }
}
