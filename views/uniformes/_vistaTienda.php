<?php

use yii\helpers\Html;


?>


<div id='<?= $model->id ?>' class="panel panel-default div-inicial">
    <div id='<?= $model->descripcion ?>' class="panel panel-heading contenedor producto">
        <div class="imagen-uniforme"><img src="<?= $model->getRutaImagen() ?>"></div>
        <div class="informacion">
            <div class="informacion-general">
                Descripcion: <span><?= Html::encode($model->descripcion)?></span></br>
                Talla: <span><?=Html::encode($model->talla)?></span></br>
                Precio/U: <span><?=Html::encode(Yii::$app->formatter->asCurrency($model->precio))?></span></br>
            </div>
            <div class="datos-anadir">
                <?php if ($model->cantidad != 0): ?>
                    <div class="stock">
                        <span>En Stock</span>
                    </div>
                    <div class="numeric">
                        Cantidad: <input onkeydown="return false" class="cantidad form-control" type="number" min="0" max="<?= $model->cantidad ?>"></br>
                    </div>
                <?php else: ?>
                    <div class="stock">
                        <span>Sin Stock</span>
                    </div>
                    <div class="numeric">
                        Cantidad: <input disabled class="cantidad form-control" type="number" min="0" max="<?= $model->cantidad ?>"></br>
                    </div>
                <?php endif; ?>
                <div class="boton-anadir">
                    <button class="btn btn-success" type="button" name="button">Añadir a carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>
