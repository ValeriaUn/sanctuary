<?php
namespace app\models;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
// <?= $form->field($model, 'status')->dropDownList([ 'new' => 'New', 'old' => 'Old', ], ['prompt' => 'Choose status...'])
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>
	<div class="row">
		<div class="col-md-4">
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) -> hint('Write name of the book')?>
			<?= $form->field($model, 'pages')->textInput()->hint('Write number of pages') ?>
			<?= $form->field($model, 'author')->textInput(['maxlength' => true])->hint('Write the author of the book') ?>
			<?= $form->field($model, 'city')->textInput(['maxlength' => true])->hint('Write the city') ?>
			<?= $form->field($model, 'description')->textarea(['rows' => 6]) -> hint('Write short description')?>
		</div>
		<div class="col-md-4">
			<?= $form->field($model, 'amountEBook')->textInput(['maxlength' => true])->hint('Write amount of e-books') ?>
			<?= $form->field($model, 'amountPaperBook')->textInput(['maxlength' => true])->hint('Write amount of paper-books') ?>
			<?= $form->field($model, 'publisher')->textInput(['maxlength' => true])->hint('Write publishing house') ?>
			<?= $form->field($model, 'barCode')->textInput(['maxlength' => true])->hint('Write code of publication') ?>
			<?= $form->field($model, 'writtingDate')->widget(\yii\jui\DatePicker::classname(), ['dateFormat' => 'yyyy-MM-dd',])->hint('Choose date of creation') ?>
			<?= $form->field($model, 'publicationDate')->widget(\yii\jui\DatePicker::classname(), ['dateFormat' => 'yyyy-MM-dd',])->hint('Choose when publication was printing')?>
		</div>

		<div class="col-md-4">
			<?= $form->field($model, 'cover')->textInput(['maxlength' => true])->hint('Insert address of the cover') ?>
			<?= $form->field($model, 'genre')->dropDownList(ArrayHelper::map(Genre::find()->select(['id', 'name'])->all(), 'id', 'name'))->hint('Choose genre'); ?>
			<?= $form->field($model, 'language')->dropDownList(ArrayHelper::map(Language::find()->select(['id', 'name'])->all(), 'id', 'name'))->hint('Choose language'); ?>
		</div>
	</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
