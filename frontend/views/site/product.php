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
                <?=Html::tag('button', 'Buy me', ['class' => 'btn btn-success', 'onclick' => 'addToBasket('.$product->Id.')' ]);?>
                <?= Html::tag('a', 'View', ['class' => 'btn  btn-success',
                'href' => Url::toRoute(['site/view', 'id' => $product->Id]) ]) ?>
            <?= Html::endTag('div') ?>
        <?= Html::endTag('div'); ?>
    
    <?php
    }
    ?>
    
    <?= Html::endTag('div') ?>

<script>

    function addToBasket(Id) {
    let exp = new Date();
    exp.setDate(exp.getDate() + 30);
    document.cookie = `product=${Id}; expires=${exp.toUTCString()}; path=/`;
    // document.cookie = "cook_name=" + JSON.stringify(array) + "; expires=" + (new Date(Date.now() + 7 * 86400000).toGMTString());
</script>
 

     

