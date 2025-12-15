<?php

use yii\helpers\Html;

/** @var $users app\models\User[] */

$this->title = 'Пользователи';
?>

<h1><?= Html::encode($this->title) ?></h1>

<table class="table table-bordered table-dark">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Действия</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= Html::encode($user->username) ?></td>
            <td><?= Html::encode($user->email) ?></td>
            <td>
                <?= Html::a('Просмотр', ['view', 'id' => $user->id], ['class' => 'btn btn-secondary']) ?>
                <?= Html::a('Редактировать', ['update', 'id' => $user->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $user->id], [
                    'class' => 'btn btn-danger',
                    'data' => ['confirm' => 'Точно удалить?']
                ]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
