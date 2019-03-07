<?php

namespace backend\controllers;

use Yii;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use backend\models\UserForm;




class UserController extends Controller
{
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'rules' => [
    //                 [
    //                     'allow' => true,
    //                     'actions' => ['login', 'signup'],
    //                     'roles' => ['?'],
    //                 ],
    //                 [
    //                     'allow' => true,
    //                     'actions' => ['create', 'delete', 'edit', 'index'],
    //                     'roles' => ['admin'],
    //                 ],
    //             ],
    //         ],
    //     ];
    // }
    public function actionIndex()
    {
        $user = User::find()->all();
        return $this->render('index', [ 'model' => $user ]);
    }

    public function actionView($id)
    {
        $user = User::findOne($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new OrderItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OrderItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
    
            $model = new UserForm();
            if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) 
            {
                if ($model->upload()) {
                    $auth = \Yii::$app->authManager;
                    $user = $this->findModel($id);
                    
                    $authorRole = $auth->getRole($model->Role);
                    $auth->assign($authorRole, $id);
             
    
                    $this->redirect(['user/index']);
                    // yii migrate --migrationPath=@yii/rbac/migrations
                }
            }
            return $this->render('create', [ 'model' => $model ]);
    

    }

    /**
     * Deletes an existing OrderItems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

