
<?php error_reporting( E_ALL ); ?>

<?php

/**
 *
 */
class MainModel extends ConnecToDb
{



  protected function selectALl ($table) {
    $sql = "select * from ".$table;
    $result = $this->doConnect()->query($sql);
    $numRows = $result->num_rows;
    if ($numRows > 0 ) {
      // code...
      while ($row = $result->fetch_assoc()) {
        // code...
        $data[] = $row;
      }
    return $data;
    }

  }
  protected function selectPref($table,$columns) {
    $sql = "select ".$columns." from ".$table;
    $result = $this->doConnect()->query($sql);
    //echo $result ."okay ";
    $numRows = $result->num_rows;
    if ($numRows > 0 ) {
      // code...
      while ($row = $result->fetch_assoc()) {
        // code...
        $data[] = $row;
      }
    return $data;
    }

  }
  protected function selectPrefDescOrder($table,$columns) {
    $sql = "select ".$columns." from ".$table." order by id desc ";
    $result = $this->doConnect()->query($sql);
    //echo $result ."okay ";
    $numRows = $result->num_rows;
    if ($numRows > 0 ) {
      // code...
      while ($row = $result->fetch_assoc()) {
        // code...
        $data[] = $row;
      }
    return $data;
    }

  }
  protected function selectItAll($sql) {

    $result = $this->doConnect()->query($sql);

    $numRows = $result->num_rows;
    if ($numRows > 0 ) {
      // code...
      while ($row = $result->fetch_assoc()) {
        // code...
        $data[] = $row;
      }
    return $data;
    }

  }
  protected function selectPrefReverse($table,$columns,$limit) {
    $sql = "select ".$columns." from ".$table." order by id desc limit ".$limit;
    $result = $this->doConnect()->query($sql);
    //echo $result ."okay ";
    $numRows = $result->num_rows;
    if ($numRows > 0 ) {
      // code...
      while ($row = $result->fetch_assoc()) {
        // code...
        $data[] = $row;
      }
    return $data;
    }

  }

  protected function insertToAll ($tableName,$Values) {
    $sql = "insert into ".$tableName.$Values;
     $insert = $this->doConnect()->query($sql);
     if ($insert) {
       // code...
       return true;
     }else {
       // code...
       return false;
     }
  }
  protected function updateAll ($sql) {
     $update = $this->doConnect()->query($sql);
     if ($update) {
       // code...
       return true;
     }else {
       // code...
       return false;
     }
  }

  protected function insertToContact ($name,$email,$subject,$message) {
    $sql = "insert into contact (`id`, `name`, `email`, `subject`, `message`, `date`, `status`)
     values ('null','$name','$email','$subject','$message',now(),'0') ";
     $insert = $this->doConnect()->query($sql);
     if ($insert) {
       // code...
       return true;
     }else {
       // code...
       return false;
     }
  }

  protected function insertToSignIn ($reg_num,$email,$password,$state) {
    $sql = "INSERT INTO `theBrain`(`id`, `reg_num`, `email`, `password`,`state`, `date`, `status`)
    VALUES (null,'$reg_num','$email','$password','$state',now(),'0') ";
     $insert = $this->doConnect()->query($sql);
     if ($insert) {
       // code...
       return true;
     }else {
       // code...
       return false;
     }

  }

  protected function AuthUser ($userName,$password) {
    $sql = "select count(id) as num from theBrain where reg_num = '$userName' limit 1";
     $select = $this->doConnect()->query($sql);


     if ($select->num_rows > 0) {
     //   // code...
          $sql_pass = "select password  from theBrain where reg_num = '$userName' limit 1";
          $result = $this->doConnect()->query($sql_pass);

          $row = $result->fetch_assoc();


         if ($row["password"] ==  $password ) {
            // code...
            return true;
          }else {
            // code...
            return false;
         }
     //
      }else {
     //   // code...
        return "unknow";
      }

  }

  protected function LoadAllBrains () {
    $sql = "select * from theBrain limit 10";
     $select = $this->doConnect()->query($sql);


     if ($select->num_rows > 0) {
     //   // code...

          while($row = $select->fetch_assoc()){
            $path = "./all-igi-images/".$row['profile_pic'];
            echo "  <div class=\"col col4\">
                  <div class=\"post-section user-area user-area-small_grid\">
                      <div class=\"post-inner\">
                          <div class=\"author-image author-image-84\"><a href=\"#\"><span class=\"author-image-span\">
                          <img style=\"width: 90px;height: 90px;\" class=\"avatar avatar-84 photo\" alt=\"\" title=\"\" width=\"84\" height=\"84\" src=\"{$path}\"></span></a>
                          </div>
                          <div class=\"user-content\">
                              <div class=\"user-inner\">
                                  <h4><a href=\"#\">{$row['reg_num']}</a></h4><span class=\"badge-span\" style=\"background-color: #0d0e11\">{$row['state']}</span></div>
                          </div>
                          <div class=\"clearfix\"></div>
                      </div>
                  </div>
              </div>";


          }


     //
      }else {
     //   // code...
        return "Empty";
      }

  }


}


 ?>
