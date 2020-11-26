
<?php

/**
 *@author ojogbon
 */


class Story extends MainModel
{

  function __construct()
  {
    // code...
  }

  function getStory (){
      $arrs =   $this->selectPrefDescOrder("blog","image,path,title,address,date");

      echo json_encode($arrs);
  }
  function getStoryReverse (){
      $arrs =   $this->selectPrefReverse("blog","image,path,title,address,date","5");

      echo json_encode($arrs);
  }

}



 ?>
