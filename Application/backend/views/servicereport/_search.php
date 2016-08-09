<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ServicereportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicereport-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'DateStarted') ?>

    <?= $form->field($model, 'DateEnd') ?>

    <?= $form->field($model, 'Author') ?>

    <?= $form->field($model, 'Manager') ?>

    <?php // echo $form->field($model, 'AssetID') ?>

    <?php // echo $form->field($model, 'WeatherStation_WeatherStation_ID') ?>

    <?php // echo $form->field($model, 'user_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>