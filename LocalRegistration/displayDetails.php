<?php


     $servername = "localhost";
    $username = "networkg_ng";
    $password = "welcome1";
    $dbname = "networkg_instincts";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $randidstr = $_POST['insID'];
$phone = $_POST['phno'];
    $strid = "INS".$randidstr;

    $stmt2 = "select * from ins_reg where id='".$strid."' OR phone='".$phone."'";
    $res = $conn->query($stmt2);
?>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
    if($res->num_rows)
    {
      $row = $res->fetch_assoc();
    ?>
      <br/>
      <br/>
      <h2><center>Details</center></h2>
      <br/>
      <br/>
      <div class="col-xs-8 col-xs-offset-2">
      <table class="table table-bordered table-hover table-condensed table-responsive">
        <tr>
          <td>ID</td>
          <td><?php echo $row['id'];?></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php echo $row['name'];?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $row['email'];?></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><?php echo $row['phone'];?></td>
        </tr>
        <tr>
          <td>College</td>
          <td><?php echo $row['college'];?></td>
        </tr>
      </table>
      </div>
    <?php
    }
    else{?>
      <br/>
      <br/>
      <h2><center>No such ID exists :(</center></h2>
    <?php }
    ?>
    <form class="form" method="get" action="checkRegistered.php">
      <div class="row">
        <div class="form-group col-xs-2 col-xs-offset-5">
          <button type="submit" class="btn btn-primary btn-block">Back</button>
        </div>
      </div>
    </form>
    <?php 

    $conn->close();
?>
</body>
</html>