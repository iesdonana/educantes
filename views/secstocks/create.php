<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Secstocks */

$this->title = 'Crear stock de seguridad';
$this->params['breadcrumbs'][] = ['label' => 'Uniformes', 'url' => ['uniformes/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="secstocks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
