<?php
      include './init.php';
      include '../models/connectToDb.php';
      include '../models/MainModel.php';
      include '../models/Gallery.mobels.php';
      include '../models/Story.mobels.php';
      include '../models/Faq.mobels.php';
      include '../models/ContactUSForm.mobels.php';


  $gallery = new Gallery();
  $story = new Story();
  $faq = new Faq();
  $contactUSForm = new ContactUSForm();

  if (!empty($_GET)) {
    // code...
    $q = $_GET["q"];
  }else {
    // code...
    $q = "";
  }

 if ($q == "gallery") {
  // code...

  echo $gallery->getGallery();
}

else if ($q == "story") {
  // code...

  echo $story->getStory();
}
else if ($q == "story_page") {
  // code...

  echo $story->getStoryReverse();
}
else if ($q == "faq") {
  // code...

  echo $faq->getAllFaq();
}

else if ($q == "contactUSForm") {
  // code...
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // if true implement
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
      // code...
    }else {
      // code...
          $contactUSForm->setAllContactUSForm($name,$email,$subject,$message);
    }

}

function isEmail ($email = ""){
      $bool = false;
    if (empty($email)) {
      // code...
    }
}

 ?>
