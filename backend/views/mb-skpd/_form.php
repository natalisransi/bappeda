<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MbSkpd */
/* @var $form yii\widgets\ActiveForm */

$form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]);
?>
<div class="box box-default">
	<div class="box-header with-border">
        <h3 class="box-title"><?= $model->isNewRecord ? 'Tambah Data' : 'Edit Data' ?></h3>

        <div class="box-tools pull-right">
            <?= Html::a('<i class="fa fa-reply" aria-hidden="true"></i> Kembali', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
            <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-check" aria-hidden="true"></i> Simpan' : '<i class="fa fa-check" aria-hidden="true"></i> Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-sm' : 'btn btn-primary btn-sm']) ?>
        </div>
    </div>
    <div class="box-body">
    	<?= $form->field($model, 'mb_skpd_kode')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'mb_skpd_nama')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'mb_skpd_singkatan')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'mb_skpd_ket')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
