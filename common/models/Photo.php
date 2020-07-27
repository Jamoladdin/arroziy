<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $date
 */
class Photo extends \yii\db\ActiveRecord
{

    public $picture;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'required'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['picture'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Rasm',
            'picture' => 'Rasm',
            'date' => 'Sana',
        ];
    }

    public function beforeSave($insert){

        $this->picture = UploadedFile::getInstance($this,'picture');
        $forTime = 'img_'.time();

        if($this->picture != null && $this->picture->saveAs('../../frontend/web/mediaphoto/' . $forTime . '.' . $this->picture->extension)){
            $this->name = $forTime . '.' . $this->picture->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('../../frontend/web/mediaphoto/'.$this->name)) && $this->name !== null)
            unlink('../../frontend/web/mediaphoto/' .$this->name);
        return true;
    }
}
