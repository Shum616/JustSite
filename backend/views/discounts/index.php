<?php

use yii\helpers\Html;

use yii\helpers\Url;


$this->title = 'Discounts';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
    <?= Html::tag('a', 'Create New', ['class' => 'btn btn-success  btn-lg btn-block', 'href' => Url::toRoute('/discounts/create'),'style'=> 'margin-bottom:1rem;']) ?>
    </p>


<?= Html::beginTag('div', ['class' => 'card-columns']) ?>  
    
<?php 
foreach($model as $key=>$discount)
{?>

    <?= Html::beginTag('div', ['class' => 'card']) ?>
        <?= Html::beginTag('div', [ 'class' => 'card-body']); ?>
            <?= Html::tag('img', '' , ['class' => 'card-img-top', 'src' => $discount->ImageUrl]); ?>
            <?= Html::tag('h5', $discount->ProductId, [ 'class' => 'card-title']); ?>
            <!--  Html::tag('a', 'Edit', ['class' => 'btn btn-block btn-warning',
            'href' => Url::toRoute(['discounts/update', 'id' => $discount->Id]) ]) ?> -->
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div'); ?>

<?php
}
?>
<?= Html::endTag('div') ?>

