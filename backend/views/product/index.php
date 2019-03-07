<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
?>

<?= Html::beginTag('div', ['class' => 'card-columns']) ?>  
    
<?php 
foreach($model as $key=>$product)
{?>

    <?= Html::beginTag('div', ['class' => 'card']) ?>
        <?= Html::beginTag('div', [ 'class' => 'card-body']); ?>
        <?= Html::tag('img', '' , ['class' => 'card-img-top', 'src' => $product->ImageUrl]); ?>
        <?=Html::tag('p', $product->Price, ['class' => 'card-text']);?>
            <?= Html::tag('h5', $product->Name, [ 'class' => 'card-title']); ?>
            <?= Html::tag('p', $product->Description, [ 'class' => 'card-text']); ?>
            <?= Html::tag('a', 'Edit', ['class' => 'btn btn-block btn-warning',
            'href' => Url::toRoute(['product/edit', 'id' => $product->Id]) ]) ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div'); ?>

<?php
}
?>

<?= Html::endTag('div') ?>