<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "mutolaa".
 *
 * @property int $id
 * @property int $mutolaaid
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
 * @property CategoryMutolaa $mutolaa
 */
class Mutolaa extends \yii\db\ActiveRecord
{

    public $picture;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mutolaa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mutolaaid', 'title', 'text'], 'required'],
            [['mutolaaid', 'readed'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['title', 'img', 'slug'], 'string', 'max' => 255],
            [['year'], 'string', 'max' => 4],
            [['month', 'day'], 'string', 'max' => 2],
            [['readed'], 'default', 'value' => 0],
            [['mutolaaid'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryMutolaa::className(), 'targetAttribute' => ['mutolaaid' => 'id']],
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
            'mutolaaid' => 'Mutolaa ID',
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
    public function getMutolaa()
    {
        return $this->hasOne(CategoryMutolaa::className(), ['id' => 'mutolaaid']);
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
