<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "photo".
 *
 * @property integer $id
 * @property string $name
 * @property string $date
 */
class Photo extends \yii\db\ActiveRecord
{
    public $imageFile;

    public static function tableName()
    {
        return 'photo';
    }

    public function rules()
    {
        return [
            [['date'], 'required'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'date' => 'Sana',
            'imageFile' => 'Surat',
        ];
    }

    public function beforeSave($insert){

        $this->imageFile = UploadedFile::getInstance($this,'imageFile');

        if($this->imageFile != null && $this->imageFile->saveAs('322/p20/' . date('Y-m-d-hms') . '.' . $this->imageFile->extension)){
            $this->name = date('Y-m-d-hms') . '.' . $this->imageFile->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('322/p10/' .$this->name)))
            unlink('322/p20/' .$this->name);
        return true;
    }
}
