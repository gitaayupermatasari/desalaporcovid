<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PegawaiCutiModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-cuti-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'jenis_cuti')->textInput() ?>

    <?= $form->field($model, 'tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_mulai_cuti')->textInput() ?>

    <?= $form->field($model, 'tanggal_berakhir_cuti')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
