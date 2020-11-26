
<?php

/**
 *@author ojogbon
 */


class ContactUSForm extends MainModel
{

  function __construct()
  {
    // code...
  }

  function setAllContactUSForm ($name,$email,$subject,$message){
      $arrs =   $this->insertToAll("`contact_us`(`id`, `name`, `email`, `subject`, `message`, `date`, `status`)",
       "values (null,'$name','$email','$subject','$message',now(),'0')");

      echo json_encode($arrs);
  }

}



 ?>
