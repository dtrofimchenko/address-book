<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AddressBook */

$this->title = $model->fullName;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'nullDisplay' => '<span class="not-set">—</span>',
        ],
        'attributes' => [
            'id',
            'name',
            'surname',
            'company',
            'position',
            'email_personal:email',
            'email_work:email',
            'phone_personal',
            'phone_work',
        ],
    ]) ?>

</div>
