<?php
namespace frontend\controllers;

use backend\models\Abiturient;
use backend\models\Alloma;
use backend\models\Aqida;
use backend\models\Arab;
use backend\models\Audio;
use backend\models\Fiqh;
use backend\models\Islom;
use backend\models\Maqolalar;
use backend\models\Photo;
use backend\models\Quron;
use backend\models\Tafsir;
use backend\models\Talabalarga;
use backend\models\Tavsiya;
use backend\models\Tuzilma;
use backend\models\TuzilmaSearch;
use backend\models\Video;
use backend\models\Xabarlar;
use backend\models\Xadis;
use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionIndex()
    {
        $news = Xabarlar::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
        $article = Maqolalar::find()->limit(8)->orderBy(['id' => SORT_DESC])->all();
        $suggest = Tavsiya::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('index', [
            'news' => $news,
            'article' => $article,
            'suggest' => $suggest
        ]);
    }

    /* Tuzilma */
    public function actionHistory()
    {
        $model = Tuzilma::find()->where(['tuzilmaid' => 1])->orderBy(['id' => SORT_DESC])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();
        return $this->render('history', [
            'model' => $model,
            'model2' => $model2
        ]);
    }
    public function actionDirector()
    {
        $model = Tuzilma::find()->where(['tuzilmaid' => 2])->orderBy(['id' => SORT_DESC])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();
        return $this->render('director', [
            'model' => $model,
            'model2' => $model2
        ]);
    }

    /* Mutola */
    public function actionNews(){
        $query = Xabarlar::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Maqolalar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('news', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionNewsid($id){
        $model = Xabarlar::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/x10/'
        ]);
    }
    public function actionArticles(){
        $query = Maqolalar::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('articles', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionArticlesid($id){
        $model = Maqolalar::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/mq10/'
        ]);
    }
    public function actionSuggest(){
        $query = Tavsiya::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('suggest', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionSuggestId($id){
        $model = Tavsiya::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/ty10/'
        ]);
    }

    /* Talabalarga */
    public function actionMoral()
    {
        $model = Talabalarga::find()->where(['talabalargaid' => 1])->one();
        return $this->render('moral', [
            'model' => $model
        ]);
    }
    public function actionLibrary()
    {
        $model = Talabalarga::find()->where(['talabalargaid' => 2])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();
        return $this->render('library', [
            'model' => $model,
            'model2' => $model2
        ]);
    }
    public function actionDormitory()
    {
        $model = Talabalarga::find()->where(['talabalargaid' => 3])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();
        return $this->render('dormitory', [
            'model' => $model,
            'model2' => $model2
        ]);
    }

    /* Abiturientga */
    public function actionNote()
    {
        $model = Abiturient::find()->where(['abiturientid' => 1])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();
        return $this->render('note', [
            'model' => $model,
            'model2' => $model2
        ]);
    }
    public function actionTotaldocuments()
    {
        $model = Abiturient::find()->where(['abiturientid' => 2])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();
        return $this->render('totaldocuments', [
            'model' => $model,
            'model2' => $model2
        ]);
    }

    /* Ilm */
    public function actionKuron()
    {
        $query = Quron::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuron', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionKuronid($id)
    {
        $model = Quron::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/qn10/'
        ]);
    }
    public function actionAqida()
    {
        $query = Aqida::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('aqida', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionAqidaid($id)
    {
        $model = Aqida::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/aq10/'
        ]);
    }
    public function actionFiqh()
    {
        $query = Fiqh::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('fiqh', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionFiqhid($id)
    {
        $model = Fiqh::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/fq10/'
        ]);
    }
    public function actionTafsir()
    {
        $query = Tafsir::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('tasvir', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionTafsirid($id)
    {
        $model = Tafsir::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/ts10/'
        ]);
    }
    public function actionXadis()
    {
        $query = Xadis::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('xadis', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionXadisid($id)
    {
        $model = Xadis::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/xs10/'
        ]);
    }
    public function actionArab()
    {
        $query = Arab::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('arab', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionArabid($id)
    {
        $model = Arab::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/ar10/'
        ]);
    }
    public function actionAlloma()
    {
        $query = Alloma::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('alloma', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionAllomaid($id)
    {
        $model = Alloma::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/al10/'
        ]);
    }
    public function actionIslom()
    {
        $query = Islom::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('islom', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionIslomid($id)
    {
        $model = Islom::find()->where(['id' => $id])->one();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('kuronid', [
            'model' => $model,
            'model2' => $model2,
            'route' => '/backend/web/321/im10/'
        ]);
    }

    /* Media */
    public function actionAudio()
    {
        $query = Audio::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('audio', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionVideo()
    {
        $query = Video::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('video', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }
    public function actionPhoto()
    {
        $query = Photo::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 20]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Xabarlar::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('photo', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }


    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
