<h3>Items | Periode <?php echo $_REQUEST['from']." - ".$_REQUEST['until'];?></h3>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    //'fixedHeader' => true,
    //'headerOffset' => 40,
    'type' => 'striped',
    'dataProvider' => $dataReportItem,
    'responsiveTable' => true,
    'template' => "{items}",
        'columns'=>array(
            'ITEM_ID',
            'ITEM_CODE',
            'ITEM_NAME',
            'ITEM_DESC',            
            'CREATED_DATE', // This is a reference for parms / parameters
        ),
    ));?>
<div align="left">
    <b>Printed By : <? //echo Yii::app()->user->name;?><br/>
Printed At : <? echo date("d/m/Y H:i:s");?></b>
            <div align="right">Copyright &COPY; <?php echo date('Y'); ?> By Jsource</div>
</div>