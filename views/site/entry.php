<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
	<div class="col-md-6">
	    <?= $form->field($model, 'nombre') ?>

	    <?= $form->field($model, 'email') ?>
	    <div class="form-group">
        	<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    	</div>
	</div>
    

<?php ActiveForm::end(); ?>