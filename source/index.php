<!DOCTYPE html>
<html>
  <head>
    <title>Player Profiles</title>
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/styles.css">

    <?php
      include 'connect.php';

      if($_GET){
        $action = $_GET['action'];
        echo '<script language="javascript">';
        if($action == "new") echo "alert('Profile successfully created');";
        elseif($action == "delete") echo "alert('Profile successfully deleted');";
        echo '</script>';
      }
    ?>

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="one-half column" style="margin-top: 25%">
          <h4>The Golden Arrow - Profiles</h4>
          <a class="button" href="newprofile.php">Create new profile</a>
          <a class="button button-primary" href="viewprofile.php">View profiles</a>
        </div>
      </div>
    </div>

      
  </body>
</html>