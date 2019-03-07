<?php
 use yii\helpers\Url;
 use yii\helpers\Html;
?>
<p>
  <?= Html::tag('a', 'Delete me', ['class' => 'btn btn-danger btn-lg active', 
    'href'=> Url::toRoute(['/product/delete', 'id'=>$model->Id ])
    ]);?>
</p>
