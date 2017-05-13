<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-view">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) ?>
	</p>
	<div class="row">
		<div class="col-lg-6">
			<a href="<?= $model->cover ?>" style="margin-left: 40px"><img class="img-rounded" src="<?= $model->cover ?>" width="450" height="550"  /></a>
		</div>
		<div class="col-lg-6" >
			<p><strong>Title: </strong> <?= $model->name ?> </p>
			<p><strong>Author: </strong> <?= $model->author ?> </p>
			<p><strong>Pages: </strong> <?= $model->pages ?> </p>
			<p><strong>Date: </strong> <?= $model->publicationDate ?> </p>
			<p><strong>Publisher: </strong> <?= $model->publisher ?> </p>
			<p><strong>Price: </strong> <?= $model->price ?> </p>
			<p><strong>Code: </strong> <?= $model->barCode ?> </p>
			<p><strong>Language: </strong> <?= $model->language ?> </p>
			<p><strong>Genre: </strong> <?= $model->genre ?> </p>
			<p><strong>Description: </strong> <?= $model->description ?> </p>
			<button class="button button-default" hreff="">Buy</button>
			<!--?= DetailView::widget([
				'model' => $model,
				'attributes' => [
				 //   'id',
					'name',
					'pages',
					'author',
					'summary:ntext',
					'created',
					'changed',
					'status',
					'year',
					'pubHouse',
					'udk',
					'printing',
					'path',
					'faculty',
					'discipline',
					'kind',
				],
			]) ?-->
		</div>
	</div>

	<h3><strong>Info: </strong><?= $model->author ?>. <?= $model->name ?> [Text] / <?= $model->author ?>. - <?= $model->publisher ?>: <?= $model->publicationDate ?>. - <?= $model->pages ?> p.</h3>
</div>
