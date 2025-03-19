<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact Zaman Joarddar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact py-5 bg-light">
    <div class="container">
        <h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>

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
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                            <div class="mb-3">
                                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Your Full Name'])->label(false) ?>
                            </div>

                            <div class="mb-3">
                                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Your Email Address'])->label(false) ?>
                            </div>

                            <div class="mb-3">
                                <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Subject of Your Message'])->label(false) ?>
                            </div>

                            <div class="mb-3">
                                <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Your Message'])->label(false) ?>
                            </div>

                            <div class="mb-3">
                                <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-8">{input}</div></div>',
                                ])->label(false) ?>
                            </div>

                            <div class="text-center">
                                <?= Html::submitButton('Send Message', ['class' => 'btn btn-primary btn-lg w-100', 'name' => 'contact-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>
    </div>
</div>