
<?php

/**
 *@author ojogbon
 */


class Gallery extends MainModel
{

  function __construct()
  {
    // code...
  }

  function getGallery (){
      $arrs =   $this->selectPref("gallery","image,path,date");

      echo json_encode($arrs);
  }

}



 ?>
