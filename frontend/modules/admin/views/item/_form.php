<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Items */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'PhotoPath')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Category_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
