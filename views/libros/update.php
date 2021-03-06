<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Libros */

$this->title = 'Modificar libro: ' . $model->isbn;
$this->params['breadcrumbs'][] = ['label' => 'Libros', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="libros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
