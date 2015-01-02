<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Languages */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
<div class="languages-form">

	<div class="box box-primary">

            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-<?php echo ($model->isNewRecord) ? 'plus' : 'pencil'; ?>"></i> <?php echo Yii::t('languages', ($model->isNewRecord ? 'New language' : 'Edit language')); ?></h3>
            </div><!-- /.box-header -->

            <div class="box-body">

				<?= $form->field($model, 'name')->textInput(['maxlength' => 32]) ?>

				<?= $form->field($model, 'code')->textInput(['maxlength' => 5]) ?>

				<?= $form->field($model, 'image')->textInput(['maxlength' => 64]) ?>

				<?= $form->field($model, 'sort_order')->textInput() ?>

				<?= $form->field($model, 'status')->dropDownList([
					0 => Yii::t('global', 'Active'),
					1 => Yii::t('global', 'Deactive')
				]) ?>

				<?= $form->field($model, 'default')->dropDownList([
					0 => Yii::t('global', 'No'),
					1 => Yii::t('global', 'Yes')
				]) ?>

				<?php //= $form->field($model, 'updated_at')->textInput() ?>

				<!--<div class="form-group">
					<? //= Html::submitButton($model->isNewRecord ? Yii::t('languages', 'Create') : Yii::t('languages', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
				</div>-->

            </div><!-- /.box-body -->

            <div class="box-footer">
                <span class="note pull-right"><?php echo Yii::t('global', 'Fields with <span class="required" style="color: red;">*</span> are required.'); ?></span>
                <div class="form-group">
					<?php echo Html::submitButton(Yii::t('buttons', $model->isNewRecord ? 'Save' : 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
				</div>
            </div>

	</div>

</div>
<?php ActiveForm::end(); ?>