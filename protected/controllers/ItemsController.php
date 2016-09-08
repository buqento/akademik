<?php

class ItemsController extends Controller
{
public $layout='//layouts/column2';
public function actionIndex(){
/*
if (!Yii::app()->user->isGuest){
 
                $dataReportItem=Items::model()->getMyreport();
                if(isset($_REQUEST['ExcelReport'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                       Yii::app()->request->sendFile('items_periode_'.$from.'-'.$until.'.xls',
                       $this->renderPartial('view_item_report',array(
            'dataReportItem' =>$dataReportItem,
                       )),true);                
                }
 
                if(isset($_REQUEST['PdfReport'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                        $mPDF1 = Yii::app()->ePdf->mpdf();
                        $mPDF1->WriteHTML($this->renderPartial('view_item_report',array(
            'dataReportKas'=>$dataReportKas,
                        ), true));
                        $mPDF1->Output('items_periode_'.$from.'-'.$until,"I");
 
                 
				 
				              }
*/
		$this->render('index');
}}
