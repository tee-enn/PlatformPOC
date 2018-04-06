<?php
session_start();
require_once('config.php');
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style_SignUp.css">
	<!script type="text/javascript" src="app.js"><!/script>
	<title>valU</title>
  </head>
		
<body>
<?php
 $email = '';
 $password = '';
 $name = '';

echo 'in here 0';
 if(isset($_POST['postSignUp'])){

echo 'in here 1';
      //if(isset($_POST['EML'])) { $email = $_POST['EML']; }
$email = $_POST['EML'];
echo 'email = '.$email;
      if(isset($_POST['PWD'])) { $password = $_POST['PWD']; }
echo 'password = '.$password;
	if(isset($_POST['NME'])) { $name = $_POST['NME']; }
echo 'name = '.$name;


      if(!$email || !$password || !$name ){
  
        $flag = 5;
echo 'in here 2';
      }else{
         echo 'in here 3';
           $insRec       = new MongoDB\Driver\BulkWrite;
           $insRec->insert(['EML'=>$email, 'PWD'=>$password, 'NME'=>$name]);
           $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
             $result = $manager->executeBulkWrite('profiles.users', $insRec, $writeConcern);
          if($result->getInsertedCount()){
            $flag = 3;
          }else{
            $flag = 2;
          }
      }
  }
?>
	<div style="height:90px"><h1><a href=""><img class="header_help" src="img/help.jpg"></a><div id="header_div">Activation</div></h1></div>
We've sent you an email. Please click on the activation link.
</body>
</html>