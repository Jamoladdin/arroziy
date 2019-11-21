<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "audio".
 *
 * @property integer $id
 * @property string $name
 * @property string $date
 */
class Audio extends \yii\db\ActiveRecord
{
    public $audio;

    public static function tableName()
    {
        return 'audio';
    }

    public function rules()
    {
        return [
            [['date'], 'required'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['audio'], 'file', 'skipOnEmpty' => true, 'extensions' => 'mp3']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'audio' => 'Audio fayl',
            'date' => 'Sana',
        ];
    }
    public function beforeSave($insert){

        $this->audio = UploadedFile::getInstance($this,'audio');

        if($this->audio != null && $this->audio->saveAs('322/a20/' . $this->audio->baseName . '.' . $this->audio->extension)){
            $this->name = $this->audio->baseName . '.' . $this->audio->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('322/a20/' .$this->name)))
            unlink('322/a20/' .$this->name);
        return true;
    }
}
