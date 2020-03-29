<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use pendalf89\filemanager\widgets\TinyMCE;

/* @var $this yii\web\View */
/* @var $model app\models\QuizModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quiz-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_id')->textInput()->dropDownList(
        \app\models\MasterSubjectsModel::getSubjectsList(),
        // $listData, 
        ['prompt'=>'Pilih Mata Pelajaran']); 
    ?>

    <?= $form->field($model, 'description')->widget(TinyMCE::className(), [
        'clientOptions' => [
            'menubar' => false,
            'height' => 500,
            'image_dimensions' => false,
            'external_plugins' => [
                'tiny_mce_wiris'=>'https://www.wiris.net/demo/plugins/tiny_mce/plugin.js',
            ],
            'plugins' => [
                'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code contextmenu table',
            ],
            'toolbar' => 'fontselect | fontsizeselect | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code | table | contextmenu | paste | searchreplace tiny_mce_wiris_formulaEditor',
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
