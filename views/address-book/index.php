<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AddressBookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Записи';
$this->params['noViewport'] = true;
?>
<div class="address-book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
        	'class' => 'table table-striped table-bordered table-condensed',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'nullDisplay' => '<span class="not-set">—</span>',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'company',
            'position',
            'email_personal:email',
            'email_work:email',
            'phone_personal',
            'phone_work',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<span class="b-action-buttons-wrap">{view}</span><span class="b-action-buttons-wrap">{update}</span><span class="b-action-buttons-wrap">{delete}</span>',
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
