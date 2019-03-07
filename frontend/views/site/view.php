<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;


?>

    <?=Html::beginTag('div', ['class' => 'card', 'style' => 'width: 18rem;padding-bottom:1rem;padding-left:1rem;padding-top:1rem;margin-bottom:1rem;']);?>
        <?=Html::tag('img','', ['class' => 'd-block w-100','src' => $model->ImageUrl, 'style'=>'width:200px;height:300px;' ]);?>  
        <?=Html::beginTag('div', ['class' => 'cardbody']);?>
            <?=Html::tag('h5', $model->Name, ['class' => 'card-title']);?>
            <?=Html::tag('p', $model->Price, ['class' => 'card-text']);?>
            <?=Html::tag('p', $model->Description, ['class' => 'card-text']);?>     
        <?=Html::endTag('div');?>
    <?=Html::endTag('div');?>
            <?php


