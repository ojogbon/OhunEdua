
<?php

/**
 * @author ojogbon
 * 3/mar/2020 1:43pm
 */


class Receipt extends MainModel
{

    function __construct()
    {
        // code...
    }

    function setAllReceipt ($company_id,$activeUser,$visitorName,$adress,$verse,$warnings,$needsNumberAndPrice,$totalAmount,$recieptCode){
        $arrs =   $this->insertToAll("`receipttable`(`id`, `companyID`, `activeUser`, `visitorName`, `adress`, `officerIncharge`, `verse`, `warnings`, `needsNumberAndPrice`, `totalAmount`, `date`, `status`, `recieptCode`)",
            "values (null,'$company_id','$activeUser','$visitorName','$adress','$activeUser','$verse','$warnings','$needsNumberAndPrice','$totalAmount',now(),'0','$recieptCode')");

        if(empty($arrs)){
            return  false;
        }else{
            return  true;
            }
    }

    function getAllReceipt (){
        $sql = "select * from receipttable order by id desc ";
        $staffs = $this->selectItAll($sql);
        if (empty($staffs)) {
            return  "";
        }else{
            if(count($staffs) > 0){
                return  json_encode($staffs);
            }else{
                return  "Empty Value";
            }
        }

    }
    function getAllReceiptById ($id){
        $sql = "select * from receipttable where id ='".$id."'";
        $staffs = $this->selectItAll($sql);
        if (empty($staffs)) {
            return  "";
        }else{
            if(count($staffs) > 0){
                return  json_encode($staffs);
            }else{
                return  "Empty Value";
            }
        }
    }
    function getAllReceiptBySql ($sql){
        $staffs = $this->selectItAll($sql);
        if (empty($staffs)) {
            return  "";
        }else{
            if(count($staffs) > 0){
                return  $staffs;
            }else{
                return  "Empty Value";
            }
        }
    }

    function updateReceipt ($sql){
        if( $this->updateAll($sql)){
            return  true;
        }else{
            return  false;
        }
    }



}



?>