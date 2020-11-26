
<?php

/**
 * @author ojogbon
 * 3/mar/2020 1:43pm
 */


class Ikilo extends MainModel
{

    function __construct()
    {
        // code...
    }

    function setAllIkilo ($company_id,$title){
        $arrs =   $this->insertToAll("`ikilo`(`id`, `company_id`, `title`, `date`, `status`, `deleted`) ",
            "VALUES (null,'$company_id','$title',now(),'0','0')");

        if(empty($arrs)){
            return  false;
        }else{
            return  true;
            }
    }

    function getAllIkilo (){
        $sql = "select * from ikilo order by id desc ";
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
    function getAllIkiloById ($id){
        $sql = "select * from ikilo where id ='".$id."'";
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
    function getAllIkiloBySql ($sql){
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

    function updateIkilo ($sql){
        if( $this->updateAll($sql)){
            return  true;
        }else{
            return  false;
        }
    }



}



?>