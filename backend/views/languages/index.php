<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LanguagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('languages', 'Languages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="languages-index">


	<div id="AjFlash" class="alert alert-info" style="display:none"></div>

	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><?php echo Yii::t('languages', 'Languages'); ?></h3>
					<div class="box-tools">
						<a href="<?php echo Url::to(array('languages/create')); ?>" class="btn btn-default navbar-btn pull-right">
							<i class="fa fa-plus"></i> <?php echo Yii::t('languages', 'New language'); ?>
						</a>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive"><!-- no-padding -->


    <!--<h1><?php //= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?php /*= Html::a(Yii::t('languages', 'Create {modelClass}', [
    'modelClass' => 'Languages',
]), ['create'], ['class' => 'btn btn-success'])*/ ?>
    </p>-->

					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						'filterModel' => $searchModel,
						'rowOptions' => [
							'class' => ''
						],
						'columns' => [
							//['class' => 'yii\grid\SerialColumn'],

							'id',
							'name',
							'code',
							'image',
							'sort_order',
							// 'status',
							// 'default',
							// 'updated_at',

							['class' => 'yii\grid\ActionColumn'],
						],
					]); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</div>
