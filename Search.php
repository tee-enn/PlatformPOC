<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>passion</title>
	<link rel="stylesheet" type="text/css" href="css/style_SignUp.css">
	<script type="text/javascript" src="js/profile_search.js"></script>
	<!link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>	

<body>
<?php
 require_once('config.php');
 $email = '';
 $password = '';

 if(isset($_POST['login'])){

      $email = $_POST['email'];
      $password = $_POST['password'];

      if(!$email || !$password){
  
        $flag = 5;

      }else{
         
$filter1 = ['EML' => $email];
$options1 = []; //['sort' => ['_id' => -1],];
$query1 = new MongoDB\Driver\Query($filter1, $options1);
$cursor1 = $manager->executeQuery('profiles.users', $query1);
	foreach ($cursor1 as $document1) {
		if(property_exists($document1,'NME'))
			{
			if(property_exists($document1,'PWD'))
				{
				if ($document1->PWD == $password)
					{
					echo '<div style="height:90px"><h1><a href=""><img class="header_help" src="img/help.jpg"></a>'.$document1->NME.'</h1></div><br>';	
					}
				else
					{
					$_SESSION["s_password"] = "Incorrect";
					header("Location: Login.php");
					exit;
					}
				} //PWD
			} //NME
	}
           $insRec       = new MongoDB\Driver\BulkWrite;
           $insRec->insert(['email' =>$email, 'password'=>$password]);
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
	
	<label for="search_int">Enter Interest</label>
	<input style="margin-left:5px;style="height:20px;width:50px" type="text" id="search_int" name="search_int" placeholder="Eg. Drawing, gardening"></input>

    <button id="flt_loc" href="" onclick="dispCitiesSearch(state_country)" style="width:auto;">Flt Location</button><br><br>
	<div id="get_cities" class="modal">
	<div class="modal-content">
				<div class="container_mod">
				<span onClick="document.getElementById('get_cities').style.display='none'" style="float:right;cursor:pointer">&times;</span><br>
		      		Select cities in <div id="state_country"></div>
				<div id="city_chkbx"></div>
				<button>Send password</button>
				</div>
	</div>
	</div>

	</p>

	<div class="search_prof">
	<table>
		<tr>
			<td>
				<img class="searchprof_img" src="img/p1.jpeg">
			</td>
			<td>
				<div class="searchprof_name">Sarah</div><br>
				<div class="searchprof_intro">Intro intro intro Intro intro introIntro intro introointro intro...<p>Joined 12th March, 17</p></div>			
			</td>
			<td>
			<div class="searchprof_stats">
				<img style="float:left" src="img/icon.jpg">12<br><img style="float:left" src="img/icon.jpg">100%<p>
				<button class="btn" style="bottom:0px;position:relative" value="12345" onclick="sendUID(this)">More</button>				
			</div>			
			</td>
		</tr>
	</table>
	</div>

<div>
<?php

$filter = [];

$options = []; //['sort' => ['_id' => -1],];

$query = new MongoDB\Driver\Query($filter, $options);

$cursor = $manager->executeQuery('profiles.users', $query);
    //$i =1; 
 foreach ($cursor as $document) { 
	//echo $i;
	if(property_exists($document,'UID'))
		{
	echo '<div class="search_prof">'; //closed
	echo '<table>'; //closed
	echo '<tr>'; //closed
		if(property_exists($document,'PIC'))
			{
			echo '<td>'; //closed
			echo '<img src="'.$document->PIC.'" class="searchprof_img"></img>';
			echo '</td>';
			} //PIC
		if(property_exists($document,'NME'))
			{
			echo '<td>'; //closed
			echo '<div class="searchprof_name">'.$document->NME.'</div>';			
			if(property_exists($document,'INT'))
				{
				echo '<div class="searchprof_intro">'.substr($document->INT, 0, 100).'...</div>';
					if(property_exists($document,'JND'))
						{
						echo '<p style="float:left;margin-left:6px">Joined : '.$document->JND.'</p>';
						} //JND
				} //INT
			echo '</td>';
			} //NME

		if(property_exists($document,'RSP'))
			{
			echo '<td>'; //closed
			echo '<div class="searchprof_stats">'; //closed
			echo '<img style="float:left" src="responsiveness.png">';
			echo $document->RSP.'</br>';
			echo '<img style="float:left" src="meets.png">';
			echo $document->APR.'</br>';
			echo '<button class="btn" value='.$document->UID.' onclick="sendUID(this)" style="bottom:0px">More</button>';
			echo '</div>';
			echo '</td>';
			} //RSP
		} //UID
	echo '</tr>'; //closed
	echo '</table>'; //closed
	echo '</div>'; //closed
	//$i++;  

  } //document loop

?>
</div>

<input type="file" id="myFile" onClick="readProfiles(this)">
<div id="search_res">
<br>
</div>



</body>


<footer>
</footer>
</html>