<!-- <div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div> -->

<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-default-index">
    <h1><?= Html::encode($this->title) ?></h1>

   <p>From this page you may create, update, delete next things.</p>
   
    <?= Html::a('Items', ['/item/index'], ['class' => 'btn btn-default']) ?>
    <?= Html::a('Categories', ['admin/category/index'], ['class' => 'btn btn-default']) ?>
    <?= Html::a('Orders', ['/order/index'], ['class' => 'btn btn-default']) ?>
    <?= Html::a('Users', ['/item/index'], ['class' => 'btn btn-default']) ?>
   
    

    <!-- <code><?= __FILE__ ?></code> -->
</div>

