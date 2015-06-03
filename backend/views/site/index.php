<?php
use miloschuman\highcharts\Highcharts;
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
//use registerAssetBundle;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/prueba.js',['depends' => [\yii\web\JqueryAsset::className()]]);

?>
<div class="site-index">

    <!--<div class="jumbotron">
            <h1>Congratulations!</h1>
            <p class="lead">You have successfully created your Yii-powered application.</p>
            <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
        </div>-->

    <div class="body-content">
        <div class="row">
            <div class="col-md-4">
                <div class="well well-sm">
                    <h1>SIAS</h1>
                    <b><h4>Sistema Integral de Abastecimiento Seguro.</h4></b>
                    <b><h4>Sistema Integral de Abastecimiento Seguro.</h4></b>
                    <b><h4>Sistema Integral de Abastecimiento Seguro.</h4></b>

                </div>

            </div>
            <div class="col-md-4">
                <div class="well well-sm ">
                    <?= yii\bootstrap\Progress::widget(['percent' => 60, 'label' => 'test','barOptions' => ['class' => 'progress-bar-success'],
                        'options' => ['class' => 'active progress-striped']]) ?>


                    <?= yii\bootstrap\Progress::widget(['percent' => 40, 'label' => 'test','barOptions' => ['class' => 'progress-bar-info'],
                        'options' => ['class' => 'active progress-striped']]) ?>


                    <?= yii\bootstrap\Progress::widget(['percent' => 20, 'label' => 'test','barOptions' => ['class' => 'progress-bar-danger'],
                        'options' => ['class' => 'active progress-striped']]) ?>


                    <?= yii\bootstrap\Progress::widget(['percent' => 30, 'label' => 'test','barOptions' => ['class' => 'progress-bar-warning'],
                        'options' => ['class' => 'active progress-striped']]) ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well well-sm ">
                    <?= yii\bootstrap\Progress::widget(['percent' => 60, 'label' => 'test','barOptions' => ['class' => 'progress-bar-success'],
                        'options' => ['class' => 'active progress-striped']]) ?>


                    <?= yii\bootstrap\Progress::widget(['percent' => 40, 'label' => 'test','barOptions' => ['class' => 'progress-bar-info'],
                        'options' => ['class' => 'active progress-striped']]) ?>


                    <?= yii\bootstrap\Progress::widget(['percent' => 20, 'label' => 'test','barOptions' => ['class' => 'progress-bar-danger'],
                        'options' => ['class' => 'active progress-striped']]) ?>


                    <?= yii\bootstrap\Progress::widget(['percent' => 30, 'label' => 'test','barOptions' => ['class' => 'progress-bar-warning'],
                        'options' => ['class' => 'active progress-striped']]) ?>
                </div>
            </div>
        </div>
    </div>
    <?php $form = ActiveForm::begin(['id' => 'index-form']); ?>

    <div class="well well-sm col-md-9">
        <div class="row">
            <div class="col-md-3">
                <?=
                $form->field($model, 'sector')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']);
                ?>
            </div>
            <div class="col-md-3">
                <?=
                $form->field($model, 'producto')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']);
                ?>
            </div>
            <div class="col-md-3">
                <?=
                $form->field($model, 'territorio')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']);
                ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>


        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" style="background:#F89406">
                    <?php
                    $img = Url::to('@web/images/icono_barco.png');
                    $image = '<img src="'.$img.'" />';
                    ?>
                    <?=$image?>
                </a>
            </div>
            <div class="col-xs-4 col-sm-1" style="margin-top: 4%">
                <?php
                $img = Url::to('@web/images/arrow-left-gray.png');
                $image = '<img src="'.$img.'" />';
                ?>
                <?= $image?>

            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" style="background:#F9690E">
                    <?php
                    $img = Url::to('@web/images/icono_camion.png');
                    $image = '<img src="'.$img.'" />';
                    ?>
                    <?=$image?>
                </a>
            </div>
            <div class="col-xs-4 col-sm-1" style="margin-top: 4%">
                <?php
                $img = Url::to('@web/images/arrow-left-gray.png');
                $image = '<img src="'.$img.'" />';
                ?>
                <?= $image?>

            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" style="background:#22A7F0">
                    <?php
                    $img = Url::to('@web/images/icono_carrito.png');
                    $image = '<img src="'.$img.'" />';
                    ?>
                    <?=$image?>
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-1" style="margin-left: 10%; margin-top:5%">
                <?php
                $img = Url::to('@web/images/arrow-down2-gray.png');
                $image = '<img src="'.$img.'" />';
                ?>
                <?= $image?>
            </div>
            <div class="col-xs-6 col-sm-1" style="margin-left: 24%; margin-top:2%">
                <?php
                $img = Url::to('@web/images/arrow-up-gray.png');
                $image = '<img src="'.$img.'" />';
                ?>
                <?= $image?>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-6 col-md-3" style="margin-left:33%">
                <a href="#" class="thumbnail" style="background:#019875">
                    <?php
                    $img = Url::to('@web/images/icono_engranaje.png');
                    $image = '<img src="'.$img.'" />';
                    ?>
                    <?=$image?>
                </a>
            </div>
        </div>
    </div>

</div>