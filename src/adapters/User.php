<?php
namespace dvizh\bootstrap\adapters;

class User implements \dvizh\app\interfaces\services\singletons\User, \dvizh\app\interfaces\entities\User
{
    public function getId() : int
    {
        return yii::$app->user->id;
    }

    public function getName() : ?string
    {
        return yii::$app->user->name;
    }
}