<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>

    <h1><?= Html::encode($this->title); ?></h1>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu faucibus eros. Nullam congue leo vitae
        augue porta porttitor. Phasellus cursus, magna a malesuada varius, enim ipsum bibendum velit, sit amet rutrum
        tellus mauris eleifend sem. Vivamus faucibus, risus et lacinia pulvinar, nisi mi convallis augue, eu euismod
        augue metus laoreet elit. Pellentesque vel consequat dolor. Mauris pretium elit ac lorem laoreet, vel placerat
        ligula fermentum. Vestibulum ac varius magna, quis ultrices mauris. Vivamus et ante ultricies, mollis ex non,
        commodo orci. Nunc congue massa leo, a mollis libero pulvinar non. Fusce leo sem, placerat eu scelerisque nec,
        commodo at lectus. Ut ultrices nunc sit amet est convallis euismod. Proin nec placerat lacus. Nulla imperdiet
        leo a turpis consectetur, et porttitor lectus euismod [INDEX].
    </p>

    <div>
        <?= Html::a('Account Settings', ['help/account-settings']); ?>
    </div>

    <div>
        <?= Html::a('Login and Security', ['help/login-and-security']); ?>
    </div>

    <div>
        <?= Html::a('Privacy', ['help/privacy']); ?>
    </div>
</div>
