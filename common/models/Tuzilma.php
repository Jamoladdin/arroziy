<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tuzilma".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $text
 */
class Tuzilma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuzilma';
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
        $tr = array(
            "А"=>"a", "Б"=>"b", "В"=>"v", "Г"=>"g", "Д"=>"d",
            "Е"=>"e", "Ё"=>"yo", "Ж"=>"j", "З"=>"z", "И"=>"i",
            "Й"=>"y", "К"=>"k", "Л"=>"l", "М"=>"m", "Н"=>"n",
            "О"=>"o", "П"=>"p", "Р"=>"r", "С"=>"s", "Т"=>"t",
            "У"=>"u", "Ф"=>"f", "Х"=>"x", "Ц"=>"s", "Ч"=>"ch",
            "Ш"=>"sh", "Щ"=>"sh", "Ъ"=>"", "Ы"=>"i", "Ь"=>"",
            "Э"=>"e", "Ю"=>"yu", "Я"=>"ya", "Ҳ"=>'h', "Ғ"=>"g",
            "Ў"=>"o","Қ"=>"q",
            "а"=>"a", "б"=>"b", "в"=>"v", "г"=>"g", "д"=>"d",
            "е"=>"e", "ё"=>"yo", "ж"=>"j", "з"=>"z", "и"=>"i",
            "й"=>"j", "к"=>"k", "л"=>"l", "м"=>"m", "н"=>"n",
            "о"=>"o", "п"=>"p", "р"=>"r", "с"=>"s", "т"=>"t",
            "у"=>"u", "ф"=>"f", "х"=>"x", "ц"=>"s", "ч"=>"ch",
            "ш"=>"sh", "щ"=>"sh", "ъ"=>"", "ы"=>"i", "ь"=>"",
            "э"=>"e", "ю"=>"yu", "я"=>"ya", "ҳ"=>'h', "ғ"=>"g",
            "Ў"=>"o","қ"=>"q",
        );

        $str = strtr($string, $tr);
        $str = preg_replace("/[^\w\-\ ]/", '', $str);
        $str = str_replace(' ', '-', $str);
        return preg_replace('/\-{2,}/', '-', $str);
    }

    public function beforeSave($insert){

        $this->slug = $this->slugify($this->name);

        if($this->slug != null)
            return true;
        return false;
    }
}
