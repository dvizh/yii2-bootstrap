<?php
namespace dvizh\bootstrap;

use yii\base\BootstrapInterface;
use yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        yii::$container->setSingleton('dvizh\app\interfaces\services\singletons\UserCart', '\dvizh\cart\services\UserCart');
        yii::$container->setSingleton('dvizh\app\interfaces\services\singletons\UserOrder', '\dvizh\order\services\UserOrder');
        yii::$container->setSingleton('dvizh\app\interfaces\services\singletons\UserDiscount', '\dvizh\discount\services\UserDiscount');
        yii::$container->setSingleton('dvizh\app\interfaces\services\singletons\User', '\dvizh\bootstrap\adapters\User');

        yii::$container->set('dvizh\app\interfaces\services\Cart', '\dvizh\cart\services\Cart');
        yii::$container->set('dvizh\app\interfaces\services\Order', '\dvizh\order\services\Order');
        yii::$container->set('dvizh\app\interfaces\services\Discount', '\dvizh\discount\services\Discount');

        yii::$container->set('dvizh\app\interfaces\entities\Order', '\dvizh\order\models\Order');
        yii::$container->set('dvizh\app\interfaces\entities\Cart', '\dvizh\cart\models\Cart');
        yii::$container->set('dvizh\app\interfaces\entities\OrderElement', '\dvizh\order\models\Element');
        yii::$container->set('dvizh\app\interfaces\entities\CartElement', '\dvizh\cart\models\CartElement');
        yii::$container->set('dvizh\app\interfaces\entities\Discount', '\dvizh\discount\models\Promocode');
    }
}