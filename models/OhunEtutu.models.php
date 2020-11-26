
<?php

/**
 * @author ojogbon
 * 3/mar/2020 1:43pm
 */


class OhunEtutu extends MainModel
{

    function __construct()
    {
        // code...
    }

    function setAllOhunEtutu ($company_id,$name,$price){
        $arrs =   $this->insertToAll("`ohunetutu`(`id`, `companyID`, `name`, `price`, `date`, `status`) ",
            "VALUES (null,'$company_id','$name','$price',now(),'0')");

        if(empty($arrs)){
            return  false;
        }else{
            return  true;
            }
    }

    function getAllOhunEtutu (){
        $sql = "select * from ohunetutu order by id desc ";
        $ohunetutus = $this->selectItAll($sql);
        if (empty($ohunetutus)) {
            return  "";
        }else{
            if(count($ohunetutus) > 0){
                return  json_encode($ohunetutus);
            }else{
                return  "Empty Value";
            }
        }

    }
    function getAllOhunEtutuById ($id){
        $sql = "select * from ohunetutu where id ='".$id."'";
        $ohunetutus = $this->selectItAll($sql);
        if (empty($ohunetutus)) {
            return  "";
        }else{
            if(count($ohunetutus) > 0){
                return  json_encode($ohunetutus);
            }else{
                return  "Empty Value";
            }
        }
    }
    function getAllOhunEtutuBySql ($sql){
        $ohunetutus = $this->selectItAll($sql);
        if (empty($ohunetutus)) {
            return  "";
        }else{
            if(count($ohunetutus) > 0){
                return  $ohunetutus;
            }else{
                return  "Empty Value";
            }
        }
    }

    function updateOhunEtutu ($sql){
        if( $this->updateAll($sql)){
            return  true;
        }else{
            return  false;
        }
    }



}



?>