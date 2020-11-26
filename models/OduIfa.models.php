
<?php

/**
 * @author ojogbon
 * 3/mar/2020 1:43pm
 */


class OduIfa extends MainModel
{

    function __construct()
    {
        // code...
    }

    function setAllOduIfa ($company_id,$title){
        $arrs =   $this->insertToAll("`verse`(`id`, `officer_id`, `title`, `date`, `status`, `deleted`) ",
            "VALUES (null,'$company_id','$title',now(),'0','0')");

        if(empty($arrs)){
            return  false;
        }else{
            return  true;
            }
    }

    function getAllOduIfa (){
        $sql = "select * from verse order by id desc ";
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
    function getAllOduIfaById ($id){
        $sql = "select * from verse where id ='".$id."'";
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
    function getAllOduIfaBySql ($sql){
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

    function updateOduIfa ($sql){
        if( $this->updateAll($sql)){
            return  true;
        }else{
            return  false;
        }
    }



}



?>