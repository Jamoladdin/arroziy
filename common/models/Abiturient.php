<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "abiturient".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $text
 */
class Abiturient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'abiturient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tuzilma Nomi',
            'text' => 'Matn',
            'slug' => 'Slug'
        ];
    }

    private function slugify($string){
        $cyr = [
            'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
            'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я','ҳ','ғ','ў','қ',
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','Ҳ','Ғ','Ў','Қ'
        ];
        $lat = [
            'a','b','v','g','d','e','yo','j','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','h','ts','ch','sh','sh','','i','','e','yu','ya','x','g','o','q',
            'A','B','V','G','D','E','Yo','J','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','F','H','Ts','Ch','Sh','Sh','','I','','e','Yu','Ya','X','G','O','Q'
        ];
        $string = str_replace($cyr, $lat, $string);

        return strtolower(trim(preg_replace('/[^A-Za-z0-9]+/', '-', $string), '-'));
    }

    public function beforeSave($insert){

        $this->slug = $this->slugify($this->name);

        if($this->slug != null)
            return true;
        return false;
    }
}
