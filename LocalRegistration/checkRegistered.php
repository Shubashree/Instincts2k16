<html>
  <head>
    <title>Check Registered</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body class="container">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <h2><center>Get Participant Details</center></h2>
    <br/>
    <br/>
    <form class="form" action="displayDetails.php" method="POST" >
      <div class="row">
      <div class="form-group">
        <label for="insID" class="col-xs-1 col-xs-offset-3 control-label" style="text-align:right;font-size:22px;">INS</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="insID" id="insID" placeholder="xxxxx"/><br>
            OR
        </div>
      </div>
      </div>
        <div class="row">
      <div class="form-group">
        <label for="insID" class="col-xs-1 col-xs-offset-3 control-label" style="text-align:right;font-size:22px;">Phone#</label>
        <div class="col-xs-4">
           <input type="text" class="form-control" name="phno" id="phno" placeholder="xxxxxxxxxx"/>
        </div>
      </div>
      </div>
      <br/>
      <br/>
      <div class="row">
      <div class="form-group col-xs-2 col-xs-offset-5">
        <button type="submit" class="btn btn-success btn-block">Get</button>
      </div>
      </div>
    </form>
  </body>
</html>
