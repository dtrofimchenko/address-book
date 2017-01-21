<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AddressBook */

$this->title = 'Добавить запись';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
