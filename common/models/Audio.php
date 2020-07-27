<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "audio".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $date
 */
class Audio extends \yii\db\ActiveRecord
{

    public $audio;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'title'], 'required'],
            [['date', 'name'], 'safe'],
            [['title', 'name'], 'string', 'max' => 255],
            [['audio'], 'file', 'skipOnEmpty' => true, 'extensions' => 'mp3']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'name' => 'Audio',
            'date' => 'Sana',
            'audio' => 'Audio fayl',
        ];
    }

    public function beforeSave($insert){

        $this->audio = UploadedFile::getInstance($this,'audio');
        $forTime = 'audio_'.time();

        if($this->audio != null && $this->audio->saveAs('../../frontend/web/mediaaudio/' . $forTime . '.' . $this->audio->extension)){
            $this->name = $forTime . '.' . $this->audio->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('../../frontend/web/mediaaudio/' .$this->name)) && $this->name !== null)
            unlink('../../frontend/web/mediaaudio/' .$this->name);
        return true;
    }
}
