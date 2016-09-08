<?php

class Items extends CActiveRecord
{
public function getMyreport()
        {
            $from=$_REQUEST['from'];
            $until=$_REQUEST['until']; 
        $sql="SELECT * FROM items where CREATED_DATE >= '$from' and CREATED_DATE <= '$until' order by ITEM_ID desc "; // your sql here
        $dataReportItem=new CSqlDataProvider($sql,array(
            'keyField' => 'ITEM_ID',
            'pagination'=>array(
                'pageSize'=>10,
            ),
        )); 
        return $dataReportItem;
        }
}
