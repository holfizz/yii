<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll(); //удаление старых данных

        $user = $auth->createRole('user');
        $user->description = 'Обычный пользователь';
        $auth->add($user);

        $admin = $auth->createRole('admin');
        $admin->description = 'Администратор';
        $auth->add($admin);

        $auth->addChild($admin, $user); //admin наследует user

        echo "Роли admin и user созданы\n";
    }

    public function actionAssign($role, $userId)
    {
        $auth = Yii::$app->authManager;

        $roleObj = $auth->getRole($role);

        if (!$roleObj) {
            echo "Роль '{$role}' не найдена.\n";
            return;
        }

        $auth->assign($roleObj, $userId);
        echo "Роль '{$role}' назначена пользователю #{$userId}\n";
    }
}
