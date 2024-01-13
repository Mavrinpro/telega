<?php

namespace frontend\controllers;

use app\models\Bot;
use app\models\BotLeads;
use app\models\TelegramUser;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BotController implements the CRUD actions for Bot model.
 */
class BotController extends Controller
{
    public $layout = 'hyper';
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Bot models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BotLeads();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bot model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Bot model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Bot();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bot model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bot model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bot model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Bot the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bot::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    // Аналитика
    public function actionAnalitics()
    {

        $posts = \Yii::$app->db->createCommand("SELECT month(from_unixtime(`create_at`)) as month, SUM(`active`) as total FROM `telegram_user` WHERE `active` = 1 GROUP BY month")->queryAll();
        $days30 = date('Y-m-d H:i:s', strtotime('-30 DAYS'));
        $d = TelegramUser::find()
            ->select('DATE(create_at) as date, COUNT(id) as count')
            ->where(['active' => 1])
            //->andWhere(['id_operator' => $user_id])
            ->andWhere('DATE(create_at) >= "'.$days30.'"')
            ->groupBy('DATE(create_at)')
            ->asArray()->all();
        $row =  TelegramUser::find()->where(['active' => 1])->asArray()->all();
        return $this->render('analitics', ['row' => $posts]);
    }
}
