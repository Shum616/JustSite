<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= Html::beginTag('table', ['class' => 'table']) ?>  
    <?= Html::beginTag('thead', ['class' => 'thead-dark']) ?>
        <?= Html::beginTag('tr') ?>
            <?= Html::tag('th', '#', [ 'scope' => 'col']); ?>
            <?= Html::tag('th', 'UserName', [ 'scope' => 'col']); ?>
            <?= Html::tag('th', 'Email', [ 'scope' => 'col']); ?>
            <?= Html::tag('th', 'Status', [ 'scope' => 'col']); ?>
        <?= Html::endTag('tr') ?>
    <?= Html::endTag('thead') ?>
    <?= Html::beginTag('tbody') ?>
    <?php 
foreach($model as $key=>$user)
{?>

    <?= Html::beginTag('tr') ?>
            <?= Html::tag('td', $user->id); ?>
            <?= Html::tag('td',  $user->username); ?>
            <?= Html::tag('th',  $user->email); ?>
            <?= Html::tag('th', $user->status); ?>
    
        <?= Html::endTag('tr') ?>
        <?= Html::tag('a', 'Edit', ['class' => 'btn btn-block btn-warning',
            'href' => Url::toRoute(['user/update', 'id' => $user->id]) ]) ?>

    

<?php
}
?>
    <?= Html::endTag('tbody') ?>
    <?= Html::endTag('table') ?>
    
</div>
