<?php

use yii\bootstrap5\NavBar;
use yii\bootstrap5\Nav;

?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index'], 'options' => ['class' => 'mr-auto']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>