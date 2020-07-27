<?php
namespace frontend\controllers;

use common\models\Abiturient;
use common\models\Audio;
use common\models\CategoryIlm;
use common\models\CategoryMutolaa;
use common\models\Ilm;
use common\models\Mutolaa;
use common\models\Photo;
use common\models\Talabalarga;
use common\models\Tuzilma;
use common\models\Video;
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
use yii\web\NotFoundHttpException;

class BasicmuallimaController extends Controller
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
        $news = Mutolaa::find()->where(['mutolaaid' => 1])->limit(3)->orderBy(['id' => SORT_DESC])->all();
        $article = Mutolaa::find()->where(['mutolaaid' => 2])->limit(8)->orderBy(['id' => SORT_DESC])->all();
        $suggest = Mutolaa::find()->where(['mutolaaid' => 3])->limit(3)->orderBy(['id' => SORT_DESC])->all();
        $quron = Ilm::find()->where(['ilmid' => 1])->orderBy(['id' => 3])->one();

        return $this->render('index', [
            'news' => $news,
            'article' => $article,
            'suggest' => $suggest,
            'quron' => $quron,
        ]);
    }

    public function actionIlm($slug)
    {
        $cilm = CategoryIlm::find()->where('slug=:slug', [':slug' => $slug])->one();
        $cilms = CategoryIlm::find()->all();
        $query = Ilm::find()->where('ilmid=:ilmid', [':ilmid' => $cilm->id])->orderBy(['id' => 3]);
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 8,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        return $this->render('ilm-blog', [
            'cilm' => $cilm,
            'cilms' => $cilms,
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }

    public function actionIlmView($ilm, $year, $month, $day, $slug)
    {
        $model = Ilm::find()
            ->where('year=:year', [':year' => $year])
            ->andWhere('month=:month', [':month' => $month])
            ->andWhere('day=:day', [':day' => $day])
            ->andWhere('slug=:slug', [':slug' => $slug])
            ->one();

        $model->readed += 1;

        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        $cilms = CategoryIlm::find()->all();

        if ($model !== null && $model->save()) {
            return $this->render('single-blog', [
                'model' => $model,
                'model2' => $model2,
                'cilms' => $cilms,
                'keys' => $this->keyWords($model->title)
            ]);
        }

        throw new NotFoundHttpException('Bunday sahifa mavjud emas.');
    }

    public function actionMutolaa($slug)
    {
        $cilm = CategoryMutolaa::find()->where('slug=:slug', [':slug' => $slug])->one();
        $cilms = CategoryIlm::find()->all();
        $query = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => $cilm->id])->orderBy(['id' => 3]);
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 8,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        return $this->render('mutolaa-blog', [
            'cilm' => $cilm,
            'cilms' => $cilms,
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2
        ]);
    }

    public function actionMutolaaView($mutolaa, $year, $month, $day, $slug)
    {
        $model = Mutolaa::find()
            ->where('year=:year', [':year' => $year])
            ->andWhere('month=:month', [':month' => $month])
            ->andWhere('day=:day', [':day' => $day])
            ->andWhere('slug=:slug', [':slug' => $slug])
            ->one();

        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        $cilms = CategoryIlm::find()->all();

        $model->readed += 1;

        if ($model !== null && $model->save()) {
            return $this->render('single-blog', [
                'model' => $model,
                'model2' => $model2,
                'cilms' => $cilms,
                'keys' => $this->keyWords($model->title)
            ]);
        }

        throw new NotFoundHttpException('Bunday sahifa mavjud emas.');
    }

    public function actionTuzilma($slug)
    {
        $model = Tuzilma::find()->where('slug=:slug', [':slug' => $slug])->one();

        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        $cilms = CategoryIlm::find()->all();

        if ($model !== null) {
            return $this->render('single-page', [
                'model' => $model,
                'model2' => $model2,
                'cilms' => $cilms,
                'keys' => $this->keyWords($model->name)
            ]);
        }

        throw new NotFoundHttpException('Bunday sahifa mavjud emas.');
    }

    public function actionTalabalarga($slug)
    {
        $model = Talabalarga::find()->where('slug=:slug', [':slug' => $slug])->one();

        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        $cilms = CategoryIlm::find()->all();

        if ($model !== null) {
            return $this->render('single-page', [
                'model' => $model,
                'model2' => $model2,
                'cilms' => $cilms,
                'keys' => $this->keyWords($model->name)
            ]);
        }

        throw new NotFoundHttpException('Bunday sahifa mavjud emas.');
    }

    public function actionAbiturientlarga($slug)
    {
        $model = Abiturient::find()->where('slug=:slug', [':slug' => $slug])->one();

        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        $cilms = CategoryIlm::find()->all();

        if ($model !== null) {
            return $this->render('single-page', [
                'model' => $model,
                'model2' => $model2,
                'cilms' => $cilms,
                'keys' => $this->keyWords($model->name)
            ]);
        }

        throw new NotFoundHttpException('Bunday sahifa mavjud emas.');
    }

    /* Media */
    public function actionAudio()
    {
        $query = Audio::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 10,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        $cilms = CategoryIlm::find()->all();

        return $this->render('audio', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2,
            'cilms' => $cilms,
        ]);
    }
    public function actionVideo()
    {
        $query = Video::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 6,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        $cilms = CategoryIlm::find()->all();

        return $this->render('video', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2,
            'cilms' => $cilms
        ]);
    }
    public function actionFoto()
    {
        $query = Photo::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 20,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $model2 = Mutolaa::find()->where('mutolaaid=:mutolaaid', [':mutolaaid' => 1])->limit(6)->orderBy(['id' => 3])->all();

        $cilms = CategoryIlm::find()->all();

        return $this->render('photo', [
            'model' => $model,
            'pages' => $pages,
            'model2' => $model2,
            'cilms' => $cilms,
        ]);
    }

    private function keyWords($string)
    {
        return mb_strtolower(implode(',', explode(' ' , str_replace(['- ', '- ', '-', '— ', ' —', '—', '“', '”', '"', ',', '.', '…', "'", '?', '!', '«', '»'], '', $string))));
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

    public function  beforeAction($action)
    {
        if ($action->id === 'login' ||
            $action->id === 'signup' ||
            $action->id==='contact' ||
            $action->id==='request-password-reset' ||
            $action->id==='reset-password' ||
            $action->id==='logout') {
            throw new NotFoundHttpException('Bunday sahifa mavjud emas.');
        }
        try {
            return parent::beforeAction($action);
        } catch (BadRequestHttpException $e) {
            return $e;
        } // TODO: Change the autogenerated stub
    }
}
