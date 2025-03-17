<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact MD Rasheduzzaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact" style="background: #f4f7fa; padding: 60px 0;">
    <div class="container">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success text-center">
                <h4>Thank You for Your Message!</h4>
                <p>Your message has been successfully submitted. We will get back to you shortly.</p>
            </div>

        <?php else: ?>

            <p class="text-center mb-4">
                I appreciate your interest in connecting with me. Please fill out the form below for business inquiries or other questions.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <div class="card shadow-sm p-4">
                        <div class="card-body">
                            <?= $form->field($model, 'name')->textInput([
                                'autofocus' => true, 
                                'placeholder' => 'Your Full Name',
                                'class' => 'form-control-rounded'
                            ]) ?>

                            <?= $form->field($model, 'email')->textInput([
                                'placeholder' => 'Your Email Address',
                                'class' => 'form-control-rounded'
                            ]) ?>

                            <?= $form->field($model, 'subject')->textInput([
                                'placeholder' => 'Subject of Your Message',
                                'class' => 'form-control-rounded'
                            ]) ?>

                            <?= $form->field($model, 'body')->textarea([
                                'rows' => 6, 
                                'placeholder' => 'Your Message',
                                'class' => 'form-control-rounded'
                            ]) ?>

                            <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>

                            <div class="form-group text-center">
                                <?= Html::submitButton('Send Message', ['class' => 'btn btn-primary btn-lg btn-block shadow-sm', 'name' => 'contact-button']) ?>
                            </div>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>

        <?php endif; ?>
    </div>
</div>

<style>
    /* Overall form and page styling */
    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f4f7fa;
        color: #333;
    }

    .site-contact {
        padding: 60px 0;
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 30px;
    }

    /* Form inputs */
    .form-control-rounded {
        border-radius: 30px;
        padding: 15px;
        font-size: 1rem;
        border: 1px solid #ddd;
    }

    /* Form card */
    .card {
        border-radius: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    /* Button */
    .btn-lg {
        font-size: 1.1rem;
        padding: 12px 25px;
        border-radius: 30px;
        transition: background-color 0.3s;
    }

    .btn-lg:hover {
        background-color: #007bff;
        color: #fff;
    }

    .alert {
        border-radius: 10px;
    }

    /* Add responsiveness */
    @media (max-width: 768px) {
        .site-contact {
            padding: 40px 0;
        }
    }
</style>
