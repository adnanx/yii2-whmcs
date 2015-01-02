<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Languages */

$this->title = Yii::t('languages', 'New language');
$this->params['breadcrumbs'][] = ['label' => Yii::t('languages', 'Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('languages', 'New language');
?>
<div class="languages-create">

    <!--<h1><?php //= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>