<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\jui\DatePicker;
use yii\bootstrap5\ActiveForm;
use \kartik\editors\Summernote;

/** @var yii\web\View $this */
/** @var common\models\Project $model */
/** @var yii\widgets\ActiveForm $form */

$this->registerJsFile(
    '@web/js/projectForm.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
);
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_stack')->widget(Summernote::class, [
        'useKrajeePresets' => true,

    ]) ?>

    <?= $form->field($model, 'description')->widget(Summernote::class, [
        'useKrajeePresets' => true,
    ]) ?>

    <?= $form->field($model, 'start_date')->widget(DatePicker::class, [
        //'language' => 'pt',
        'options' => ['readOnly' => true],
    ]) ?>

    <?= $form->field($model, 'end_date')->widget(DatePicker::class, [
        'options' => ['readOnly' => true],
    ]) ?>

    <?= $form->field($model, 'imageFiles[]')->widget(FileInput::class, [
        'options' => ['accept' => 'image/*', 'multiple' => true],
        'pluginOptions' => [
            'initialPreview' => $model->imageAbsoluteUrls(),
            'initialPreviewAsData' => true,
            'showUpload' => false,
            'deleteUrl' => Url::to(['project/delete-project-image']),
            'initialPreviewConfig' => $model->imageConfigs(),
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
