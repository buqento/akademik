<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'Sisfo Kursus',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(


array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),

array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),

array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),

array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),

				//array('label'=>'Report', 'url'=>'report/'),
				array('label'=>'Paket', 'url'=>array('/paket/index')),
				array('label'=>'Kelas', 'url'=>array('/kelas/index')),
                array('label'=>'Pendaftaran', 'url'=>'#', 'items'=>array(
                    array('label'=>'Biodata Siswa', 'url'=>array('/siswa/create')),
                    array('label'=>'Kursus', 'url'=>array('/kursus/create')),
                    '---',
                    array('label'=>'Pembayaran', 'url'=>array('/pembayaran/create')),


                )),
            ),
        ),



    ),
)); ?>

<div class="container" id="page">
	<?php /*$this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
        'stacked'=>false, // whether this is a stacked menu
        'items'=>array(
            array('label'=>'kontak', 'url'=>array('/kontak/index')),
            array('label'=>'Inbox', 'url'=>array('/inbox/index')),
            array('label'=>'Sentitems', 'url'=>array('/sentitems/index')),
        ),
    )); */?>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	<hr> <!--Garis Batas-->
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by buqento richard.<br/>
		All Rights Reserved.<br/>
		<?php //echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
