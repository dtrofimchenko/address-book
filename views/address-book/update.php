<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AddressBook */

$this->title = 'Редактировать запись: ' . $model->fullName;
$this->params['breadcrumbs'][] = ['label' => $model->fullName, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="address-book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
