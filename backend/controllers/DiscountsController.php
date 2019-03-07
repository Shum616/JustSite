<?php

namespace backend\controllers;

use Yii;
use yii\web\UploadedFile;
use common\models\Discounts;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\DiscountForm;

/**
 * DiscountsController implements the CRUD actions for Discounts model.
 */
class DiscountsController extends Controller
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
    //                 [
    //                     'allow' => true,
    //                     'actions' => ['create', 'delete', 'edit', 'index'],
    //                     'roles' => ['adManager'],
    //                 ],
    //             ],
    //         ],
    //     ];
    // }

    /** * @return mixed*/
    public function actionIndex()
    { 
        $discounts = Discounts::find()->all();
        return $this->render('index', [ 'model' => $discounts ]);
    }

    /** * * @param integer * @return mixed * @throws NotFoundHttpException */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }



    /** ** * @return mixed*/
    public function actionCreate()
    {
        $model = new DiscountForm();
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) 
        {
            $model->ImageUrl = UploadedFile::getInstance($model, 'ImageUrl');

            if ($model->upload()) {
                $discounts = new Discounts();
                $discounts->ProductId = $model->ProductId;
                $discounts->ImageUrl = "".$model->imagePath();
                $discounts->save(false);
                $this->redirect(['discounts/index']);
            }
        }
        return $this->render('create', [ 'model' => $model ]);
    }


    /** * * * @param integer * @return mixed* @throws NotFoundHttpException*/
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /** * * 
     * @param integer 
     * @return mixed
     * @throws NotFoundHttpException 
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Discounts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Discounts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Discounts::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
