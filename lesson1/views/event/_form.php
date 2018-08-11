<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dt')->widget(dosamigos\datetimepicker\DateTimePicker::class, [
        'language' => 'ru',
//        'inline' => true,
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd hh',
            'calendarWeeks' => true,
            'daysOfWeekHighlighted' => [0,6],
            'weekStart' => 1

        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
