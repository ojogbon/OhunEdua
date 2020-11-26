
<?php

/**
 * @author ojogbon
 * 3/mar/2020 1:43pm
 */


class Officer extends MainModel
{

    function __construct()
    {
        // code...
    }

    function setAllOfficer ($company_id,$firstname,$lastname,$post,$dateOfBirth,$localGovernment,$maritalStatus,$passport,$path,$password){
        $arrs =   $this->insertToAll("`staffs`(`id`, `company_id`, `firstname`, `lastname`, `post`, `dateOfBirth`, `localGovernment`, `maritalStatus`, `passport`, `path`, `password`, `date`, `status`)",
            "values (null,'$company_id','$firstname','$lastname','$post','$dateOfBirth','$localGovernment','$maritalStatus','$passport','$path','$password',now(),'0')");

        if(empty($arrs)){
            return  false;
        }else{
            return  true;
            }
    }

    function getAllOfficer (){
        $sql = "select * from staffs order by id desc ";
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
    function getAllOfficerById ($id){
        $sql = "select * from staffs where id ='".$id."'";
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
    function getAllOfficerBySql ($sql){
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

    function updateOfficer ($sql){
        if( $this->updateAll($sql)){
            return  true;
        }else{
            return  false;
        }
    }



}



?>