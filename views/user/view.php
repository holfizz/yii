<?php

use yii\helpers\Html;

/** @var $model app\models\User */

$this->title = "Пользователь #{$model->id}";
?>

<h1><?= Html::encode($this->title) ?></h1>

<table class="table table-bordered table-dark">
    <tr>
        <th>ID</th>
        <td><?= $model->id ?></td>
    </tr>
    <tr>
        <th>Username</th>
        <td><?= Html::encode($model->username) ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= Html::encode($model->email) ?></td>
    </tr>
</table>

<?= Html::a('Назад', ['index'], ['class' => 'btn btn-primary']) ?>
