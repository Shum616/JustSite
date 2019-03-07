<?php

namespace app\controllers;

class ShopController extends \yii\web\Controller
{
    public function actionCart()
    {
        return $this->render('cart');
    }

    public function actionCheckout()
    {
        return $this->render('checkout');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
