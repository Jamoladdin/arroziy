<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "xadis".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $img
 * @property string $date
 */
class Xadis extends \yii\db\ActiveRecord
{
    public $imageFile;

    public static function tableName()
    {
        return 'xadis';
    }

    public function rules()
    {
        return [
            [['title', 'text', 'date'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['title', 'img'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'text' => 'Matn',
            'img' => 'Surat',
            'imageFile' => 'Surat',
            'date' => 'Sana',
        ];
    }

    public function beforeSave($insert){

        $this->imageFile = UploadedFile::getInstance($this,'imageFile');

        if($this->imageFile != null && $this->imageFile->saveAs('321/xs10/' . date('Y-m-d-hms') . '.' . $this->imageFile->extension)){
            $this->img = date('Y-m-d-hms') . '.' . $this->imageFile->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('321/xs10/' .$this->img)))
            unlink('321/xs10/' .$this->img);
        return true;
    }
}
