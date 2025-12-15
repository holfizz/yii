<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var $model app\models\User */

$this->title = 'Редактировать: ' . $model->username;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'role')->dropDownList([
                'user' => 'User',
                'admin' => 'Admin',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Отмена', ['index'], ['class' => 'btn btn-secondary']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
