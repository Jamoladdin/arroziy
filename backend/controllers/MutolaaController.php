<?php

namespace backend\controllers;

use common\models\CategoryMutolaa;
use Yii;
use common\models\Mutolaa;
use common\models\MutolaaSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MutolaaController implements the CRUD actions for Mutolaa model.
 */
class MutolaaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Mutolaa models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $searchModel = new MutolaaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider->query->where(['mutolaaid' => $id])->orderBy(['id' => 3]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'id' => $id,
            'category' => CategoryMutolaa::findOne($id)->name
        ]);
    }

    /**
     * Displays a single Mutolaa model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'id' => $id
        ]);
    }

    /**
     * Creates a new Mutolaa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Mutolaa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'id' => $id,
            'category' => CategoryMutolaa::findOne($id)->name
        ]);
    }

    /**
     * Updates an existing Mutolaa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'id' => $model->mutolaaid
        ]);
    }

    /**
     * Deletes an existing Mutolaa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $id = $model->mutolaaid;
        $model->delete();

        return $this->redirect(['index', 'id' => $id]);

    }

    /**
     * Finds the Mutolaa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mutolaa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mutolaa::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Bunday sahifa mavjud emas.');
    }
}
