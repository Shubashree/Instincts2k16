<?php 
ob_start();
session_start();
require_once 'config.php'; 

$user_obj = new Cl_User();

require_once('Facebook/FacebookSession.php');
require_once('Facebook/FacebookRedirectLoginHelper.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/FacebookResponse.php');
require_once('Facebook/FacebookSDKException.php');
require_once('Facebook/FacebookRequestException.php');
require_once('Facebook/FacebookAuthorizationException.php');
require_once('Facebook/GraphObject.php');
require_once('Facebook/GraphUser.php');
require_once('Facebook/GraphSessionInfo.php');
require_once( 'Facebook/HttpClients/FacebookHttpable.php' );
require_once( 'Facebook/HttpClients/FacebookCurl.php' );
require_once( 'Facebook/HttpClients/FacebookCurlHttpClient.php' );
require_once( 'Facebook/Entities/AccessToken.php' );
require_once( 'Facebook/Entities/SignedRequest.php' );


use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;

FacebookSession::setDefaultApplication(FB_APP_ID, FB_APP_SECRET);

$helper = new FacebookRedirectLoginHelper(FB_REDIRECT_URI);
$session = $helper->getSessionFromRedirect();

if(isset($_SESSION['token'])){
  $session = new FacebookSession($_SESSION['token']);
  try{
    $session->validate(FB_APP_ID, FB_APP_SECRET);
  }catch(FacebookAuthorizationException $e){
    echo $e->getMessage();
  }
}

$data = array();

if(isset($session)){
  $_SESSION['token'] = $session->getToken();
  $request = new FacebookRequest($session, 'GET', '/me');
  $response = $request->execute();
  $graph = $response->getGraphObject(GraphUser::className());
  
  $data = $graph->asArray();
  $id = $graph->getId();
  $image = "https://graph.facebook.com/".$id."/picture?width=100";
  $data['image'] = $image;
  $user_obj->fb_login($data);
} 

?>
<?php 
  if( !empty( $_POST )){
    try {
      
      $data = $user_obj->login( $_POST );
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
        header('Location: home.php');
      }
    } catch (Exception $e) {
      $error = $e->getMessage();
    }
  }
  //print_r($_SESSION);
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
    header('Location: home.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instincts v10.0</title>
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container">
    <div class="login-form">
      <h1 class="text-center">Instincts</h1>
      <div class="form-header">
        <i class="fa fa-user"></i>
      </div>
      <form id="login-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
        <a class="btn btn-default facebook" href="<?php echo $helper->getLoginUrl(array('email'));?>"> <i class="fa fa-facebook modal-icons"></i> Register with Facebook </a>  
        
      </form>
      
  </div>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>
