
<?php

/**
 *@author ojogbon
 */


class Faq extends MainModel
{

  function __construct()
  {
    // code...
  }

  function getAllFaq (){
      $arrs =   $this->selectPref("faq_tbl","title,content,date");

      echo json_encode($arrs);
  }

}



 ?>
