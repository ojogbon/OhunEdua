
<?php

/**
 * @author ojogbon
 * 3/mar/2020 1:43pm
 */


class Company extends MainModel
{

    function __construct()
    {
        // code...
    }

    function setAllCompany ($email,$password,$firstname,$lastname,$companyName,$companyAddress,$companyPhoneNumber){
        $arrs =   $this->insertToAll("`company`(`id`, `email`, `password`, `firstname`, `lastname`, `companyName`, `companyAddress`, `companyPhoneNumber`, `date`, `status`)",
            "values (null,'$email','$password','$firstname','$lastname','$companyName','$companyAddress','$companyPhoneNumber',now(),'0')");

        if(empty($arrs)){
            return  false;
        }else{
            return  true;
            }
    }

    function getAllCompany (){
        $sql = "select * from company order by id desc ";
        $company = $this->selectItAll($sql);
        if (empty($company)) {
            return  "";
        }else{
            if(count($company) > 0){
                return  $company;
            }else{
                return  "Empty Value";
            }
        }

    }
    function getAllCompanyById ($id){
        $sql = "select * from company where id ='".$id."'";
        $company = $this->selectItAll($sql);
        if (empty($company)) {
            return  "";
        }else{
            if(count($company) > 0){
                return  $company;
            }else{
                return  "Empty Value";
            }
        }
    }
    function getAllCompanyBySql ($sql){
        $company = $this->selectItAll($sql);
          if (empty($company)) {
              return  "";
          }else{
            if(count($company) > 0){
                return  $company;
            }else{
                return  "Empty Value";
            }
          }
    }

    function updateCompany ($sql){
        if( $this->updateAll($sql)){
            return  true;
        }else{
            return  false;
        }
    }



}



?>