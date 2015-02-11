<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

   <p>From this page you may create, update, delete next things.</p>
   
    <?= Html::a('Items', ['/item/index'], ['class' => 'btn btn-default']) ?>
    <?= Html::a('Categories', ['/category/index'], ['class' => 'btn btn-default']) ?>
    <?= Html::a('Orders', ['/order/index'], ['class' => 'btn btn-default']) ?>
    <?= Html::a('Users', ['/item/index'], ['class' => 'btn btn-default']) ?>
   
    

    <!-- <code><?= __FILE__ ?></code> -->
</div>
