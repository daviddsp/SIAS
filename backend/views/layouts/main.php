<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
    <?= Html::img('images/banner-cantv.png', array('width'=>'100%','height'=>'9%'));?>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            /*NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();*/
        ?>
        <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer>


        <div class="navbar-default navbar-fixed-bottom hidden-print">
            <div class="navbar-brand">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">

                            <?= Html::img('images/1433365955_conference_call.png', array('height'=>'80%'));?>
                        </div>
                        <div class="col-md-10">
                            Iniciar conferencia |
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2">

                            <?= Html::img('images/1433365955_conference_call.png', array('height'=>'80%'));?>
                        </div>
                        <div class="col-md-2">
                            Iniciar conferencia |
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>



    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
