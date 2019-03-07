
<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
  
?>

<?=Html::beginTag('div', ['class' => 'carousel slide', 'data-ride'=>'carousel', 'style'=>'margin-bottom:2rem;', 'id'=>'carouselExampleControls']);?>
    <?=Html::beginTag('div', ['class' => 'carousel-inner']);?>

<?php
foreach($model['discounts'] as $key=>$discounts)
{
    // var_dump($discounts);
    
    ?>

       <?php if($key == 0){
           ?>
            <?=Html::beginTag('div', ['class' => 'carousel-item active']);?>
                <?= Html::beginTag('a', ['href' => Url::toRoute(['site/view', 'id' => $discounts->product->Id]) ]) ?>
                    <?=Html::tag('img','', ['class' => 'd-block w-100','src' => $discounts->ImageUrl, 'style'=>'width:500px;height:400px;' ]);?>  
                <?=Html::endTag('a');?>
          <?=Html::endTag('div');?>

      <?php 
      }
      else
      { ?>
            <?=Html::beginTag('div', ['class' => 'carousel-item']);?>
            <?= Html::beginTag('a', ['href' => Url::toRoute(['site/view', 'id' => $discounts->product->Id]) ]) ?>
            <?=Html::tag('img','', ['class' => 'd-block w-100','src' => $discounts->ImageUrl, 'style'=>'width:500px;height:400px;']);?>  
            <?=Html::endTag('div');?>
        <?php
      }
       ?>
<?php
}
?>
    <?=Html::endTag('div');?>
    <?=Html::beginTag('a', ['class' => 'carousel-control-prev', 'role' => 'button', 'data-slide' => 'prev', 'href'=>'#carouselExampleControls']);?>
        <?=Html::tag('span','', ['class' => 'carousel-control-prev-icon','aria-hidden'=>"true"]);?>
        <?=Html::tag('span','Previous', ['class' => 'sr-only',]);?>
    <?=Html::endTag('a');?>
    <?=Html::beginTag('a', ['class' => 'carousel-control-next', 'role' => 'button', 'data-slide' => 'next','href'=>'#carouselExampleControls']);?>
        <?=Html::tag('span','', ['class' => 'carousel-control-next-icon','aria-hidden'=>"true"]);?>
        <?=Html::tag('span','Next', ['class' => 'sr-only',]);?>
    <?=Html::endTag('a');?>
<?=Html::endTag('div');?>

<?php




foreach($model['news'] as $key=>$news){?>


    <?=Html::beginTag('div', ['class' => 'card', 'style' => 'width: 18rem;padding-bottom:1rem;padding-left:1rem;padding-top:1rem;margin-bottom:1rem;']);?>
        <?=Html::beginTag('div', ['class' => 'cardbody']);?>
            <?=Html::tag('h5', $news->Name, ['class' => 'card-title']);?>
            <?=Html::tag('p', $news->Content, ['class' => 'card-text']);?>
         
        <?=Html::endTag('div');?>
    <?=Html::endTag('div');?>
            <?php
}

