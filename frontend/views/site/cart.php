
<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Shop';
echo Html::beginTag('div', ['class' => 'd-flex']);

foreach ($model as $key => $product) {
    ?>
    <?= Html::beginTag('div', ['class' => 'card m-3', 'style' => 'width:18rem;']) ?>

        <?= Html::tag('img', '' , ['class' => 'card-img-top', 'src' => $product->ImageUrl]); ?>
        <?= Html::beginTag('div', [ 'class' => 'card-body']); ?>
            <?= Html::tag('h5', $product->Name, [ 'class' => 'card-title']); ?>
            <?= Html::tag('p', $product->Price, [ 'class' => 'card-text']); ?>
            <?= Html::tag('p', $product->Description, [ 'class' => 'card-text']); ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div'); ?>
    <?php
}
echo Html::endTag('div');
echo Html::tag('a', 'CheckOut', ['class' => 'btn btn-primary btn-block', 'href' => Url::toRoute(['/site/checkout']) ]);