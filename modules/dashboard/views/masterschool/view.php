<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MasterSchoolModel */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Master School Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
\conquer\modal\ModalForm::widget([
    'selector' => '.modal-form',
]);
?>
<div class="col-md-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

          <div class="box-tools pull-right">

          </div>
        </div>
        <div class="box-body" style="overflow-x: scroll;">

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary modal-form','data-size' => 'modal-lg']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'school_name',
            'school_address',
            'school_description:ntext',
            'status',
        ],
    ]) ?>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">

        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->    
</div>
