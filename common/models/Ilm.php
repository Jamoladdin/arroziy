<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "ilm".
 *
 * @property int $id
 * @property int $ilmid
 * @property string $title
 * @property string $text
 * @property string $img
 * @property string $date
 * @property int $readed
 * @property string $slug
 * @property string $year
 * @property string $month
 * @property string $day
 *
 * @property CategoryIlm $ilm
 */
class Ilm extends \yii\db\ActiveRecord
{
    public $picture;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ilm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ilmid', 'title', 'text'], 'required'],
            [['ilmid', 'readed'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['title', 'img', 'slug'], 'string', 'max' => 255],
            [['year'], 'string', 'max' => 4],
            [['month', 'day'], 'string', 'max' => 2],
            [['readed'], 'default', 'value' => 0],
            [['ilmid'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryIlm::className(), 'targetAttribute' => ['ilmid' => 'id']],
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
            'ilmid' => 'Ilm ID',
            'title' => 'Sarlavha',
            'text' => 'Matn',
            'img' => 'Rasm',
            'picture' => 'Rasm',
            'date' => 'Sana',
            'readed' => "Ko'rildi",
            'slug' => 'Slug',
            'year' => 'Yil',
            'month' => 'Oy',
            'day' => 'Kun',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIlm()
    {
        return $this->hasOne(CategoryIlm::className(), ['id' => 'ilmid']);
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

//        return strtolower(trim(preg_replace('/[^A-Za-z0-9]+/', '-', $string), '-'));
    }

    public function beforeSave($insert){

        $this->slug = $this->slugify($this->title);

        if($this->isNewRecord) {
            $this->date = date('Y-m-d');
            $this->year = date('Y');
            $this->month = date('m');
            $this->day = date('d');
        }

        $this->picture = UploadedFile::getInstance($this,'picture');
        $forTime = 'img_'.time();

        if($this->picture != null && $this->picture->saveAs('../../frontend/web/images/' . $forTime . '.' . $this->picture->extension)){
            $this->img = $forTime . '.' . $this->picture->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('../../frontend/web/images/'.$this->img)))
            unlink('../../frontend/web/images/' .$this->img);
        return true;
    }
}
