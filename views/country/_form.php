<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Country */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-form">
	<div class="col-md-6">
	    <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'code')->textInput(['maxlength' => true])->label('Codigo') ?>

	    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Nombre') ?>

	    <?= $form->field($model, 'population')->textInput()->label('Poblacion') ?>

	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	</div>
    <?php ActiveForm::end(); ?>

</div>
