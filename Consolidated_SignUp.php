<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
	<title>passion</title>
	<link rel="stylesheet" type="text/css" href="css/style_SignUp.css">

	<script src="js/SignUp1_Profile.js"></script>
	<script src="js/SignUp2_ICan.js"></script>

  <!-- bootstrap & fontawesome css -->
  <!link href="http://cdn.jsdelivr.net/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
  <!link rel="stylesheet" href="http://cdn.jsdelivr.net/fontawesome/4.1.0/css/font-awesome.min.css" />

  <!-- BootstrapValidator CSS -->
  <!link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>

  <!-- jQuery and Bootstrap JS -->
  <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <!-- BootstrapValidator JS -->
  <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
  
  <!-- Animated Loading Icon -->
  <style type="text/css">
  .glyphicon-refresh-animate {
      -animation: spin .7s infinite linear;
      -webkit-animation: spin2 .7s infinite linear;
  }
  @-webkit-keyframes spin2 {
      from { -webkit-transform: rotate(0deg);}
      to { -webkit-transform: rotate(360deg);}
  }
  @keyframes spin {
      from { transform: scale(1) rotate(0deg);}
      to { transform: scale(1) rotate(360deg);}
  }
  </style>
</head>	
<body>

	<div style="height:90px"><h1><a href=""><img class="header_help" src="img/help.jpg"></a><div id="header_div">you're in</div></h1></div>

<script>
function load_section(icon,x,a,b,c,d){

x.style.display = "block";
a.style.display = "none";
b.style.display = "none";
c.style.display = "none";
d.style.display = "none";


if (icon.id == "profile") {
document.getElementById("profile").style.background = "#feca38";
document.getElementById("trophy").style.background = "#ffffff";
document.getElementById("wrench").style.background = "#ffffff";
document.getElementById("watch").style.background = "#ffffff";
document.getElementById("tick").style.background = "#ffffff";

document.getElementById("trophy").src = "trophy_y.png";
document.getElementById("wrench").src = "wrench_y.png";
document.getElementById("watch").src = "watch_y.png";
document.getElementById("tick").src = "tick_y.png";

document.getElementById("header_div").innerHTML = "you're in";

	}
else if (icon.id == "trophy") {
document.getElementById("profile").style.background = "#feca38";
document.getElementById("trophy").style.background = "#feca38";
document.getElementById("wrench").style.background = "#ffffff";
document.getElementById("watch").style.background = "#ffffff";
document.getElementById("tick").style.background = "#ffffff";

document.getElementById("trophy").src = "trophy_w.png";
document.getElementById("wrench").src = "wrench_y.png";
document.getElementById("watch").src = "watch_y.png";
document.getElementById("tick").src = "tick_y.png";

document.getElementById("header_div").innerHTML = "i can";
	}
else if (icon.id == "wrench") {
document.getElementById("profile").style.background = "#feca38";
document.getElementById("trophy").style.background = "#feca38";
document.getElementById("wrench").style.background = "#feca38";
document.getElementById("watch").style.background = "#ffffff";
document.getElementById("tick").style.background = "#ffffff";

document.getElementById("trophy").src = "trophy_w.png";
document.getElementById("wrench").src = "wrench_w.png";
document.getElementById("watch").src = "watch_y.png";
document.getElementById("tick").src = "tick_y.png";

document.getElementById("header_div").innerHTML = "i learn";
	}
else if (icon.id == "watch") {
document.getElementById("profile").style.background = "#feca38";
document.getElementById("trophy").style.background = "#feca38";
document.getElementById("wrench").style.background = "#feca38";
document.getElementById("watch").style.background = "#feca38";
document.getElementById("tick").style.background = "#ffffff";

document.getElementById("trophy").src = "trophy_w.png";
document.getElementById("wrench").src = "wrench_w.png";
document.getElementById("watch").src = "watch_w.png";
document.getElementById("tick").src = "tick_y.png";

document.getElementById("header_div").innerHTML = "i'm ready";
	}
else {
document.getElementById("profile").style.background = "#feca38";
document.getElementById("trophy").style.background = "#feca38";
document.getElementById("wrench").style.background = "#feca38";
document.getElementById("watch").style.background = "#feca38";
document.getElementById("tick").style.background = "#feca38";

document.getElementById("trophy").src = "trophy_w.png";
document.getElementById("wrench").src = "wrench_w.png";
document.getElementById("watch").src = "watch_w.png";
document.getElementById("tick").src = "tick_w.png";

document.getElementById("header_div").innerHTML = "i am";
}
}
</script>

<img id="profile" src="profile_w.png" style="background:#feca38;cursor:pointer" onClick="load_section(this,prof_info,i_can,i_learn,im_ready,i_am)">
<img id="trophy" src="trophy_y.png" style="background:#ffffff;cursor:pointer" onClick="load_section(this,i_can,prof_info,i_learn,im_ready,i_am)">
<img id="wrench" src="wrench_y.png" style="background:#ffffff;cursor:pointer" onClick="load_section(this,i_learn,i_can,prof_info,im_ready,i_am)">
<img id="watch" src="watch_y.png" style="background:#ffffff;cursor:pointer" onClick="load_section(this,im_ready,i_can,prof_info,i_learn,i_am)">
<img id="tick" src="tick_y.png" style="background:#ffffff;cursor:pointer" onClick="load_section(this,i_am,i_can,prof_info,i_learn,im_ready)">

	<form class="form-horizontal" role="form" id="test-form" action="activation.php" method="post">
	<div id="prof_info">
			<div>
		<img src="img/blankprofile.jpg">
  		</div>
		<div>
 			<label class="loginlbl" for="fileToUpload">Take Selfie</label><br/>
 			<input type="file" name="fileToUpload" id="fileToUpload" onchange="fileSelected();" accept="image/*" capture="camera" />
 		</div>
		
		<br>
		<div class="form-group">
      			<label class="loginlbl" for="name">Name</label>
          		<div class="input-group">
			<input type="text" class="form-control" name="name" placeholder=" Jane" required/>
			</div>
    		</div>
		
		<br>
		<div class="form-group">
      			<label class="loginlbl" for="email">Email</label>
          		<input type="email" class="form-control" name="email" placeholder=" name@beu.com" required/>
    		</div>
		
		<br>
		<div class="form-group">
		<label class="loginlbl" for="country">Country</label>	
			<select class="form-control" name="country" id="country>
			<option value="AF">AFGHANISTAN</option>
			<option value="AL">ALBANIA</option>
			<option value="DZ">ALGERIA</option>
			<option value="AS">AMERICAN SAMOA</option>
			<option value="AD">ANDORRA</option>
			<option value="AO">ANGOLA</option>
			<option value="AQ">ANTARCTICA</option>
			<option value="AG">ANTIGUA AND BARBUDA</option>
			<option value="AR">ARGENTINA</option>
			<option value="AM">ARMENIA</option>
			<option value="AW">ARUBA</option>
			<option value="AU" selected>AUSTRALIA</option>
			<option value="AT">AUSTRIA</option>
			<option value="AZ">AZERBAIJAN</option>
			<option value="BS">BAHAMAS</option>
			<option value="BH">BAHRAIN</option>
			<option value="BD">BANGLADESH</option>
			<option value="BB">BARBADOS</option>
			<option value="BY">BELARUS</option>
			<option value="BE">BELGIUM</option>
			<option value="BZ">BELIZE</option>
			<option value="BJ">BENIN</option>
			<option value="BM">BERMUDA</option>
			<option value="BT">BHUTAN</option>
			<option value="BO">BOLIVIA</option>
			<option value="BA">BOSNIA AND HERZEGOVINA</option>
			<option value="BW">BOTSWANA</option>
			<option value="BV">BOUVET ISLAND</option>
			<option value="BR">BRAZIL</option>
			<option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
			<option value="BN">BRUNEI DARUSSALAM</option>
			<option value="BG">BULGARIA</option>
			<option value="BF">BURKINA FASO</option>
			<option value="BI">BURUNDI</option>
			<option value="KH">CAMBODIA</option>
			<option value="CM">CAMEROON</option>
			<option value="CA">CANADA</option>
			<option value="CV">CAPE VERDE</option>
			<option value="KY">CAYMAN ISLANDS</option>
			<option value="CF">CENTRAL AFRICAN REPUBLIC</option>
			<option value="TD">CHAD</option>
			<option value="CL">CHILE</option>
			<option value="CN">CHINA</option>
			<option value="CX">CHRISTMAS ISLAND</option>
			<option value="CC">COCOS (KEELING) ISLANDS</option>
			<option value="CO">COLOMBIA</option>
			<option value="KM">COMOROS</option>
			<option value="CG">CONGO</option>
			<!option value="CD">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
			<option value="CK">COOK ISLANDS</option>
			<option value="CR">COSTA RICA</option>
			<option value="CI">C�TE D'IVOIRE</option>
			<option value="HR">CROATIA</option>
			<option value="CU">CUBA</option>
			<option value="CY">CYPRUS</option>
			<option value="CZ">CZECH REPUBLIC</option>
			<option value="DK">DENMARK</option>
			<option value="DJ">DJIBOUTI</option>
			<option value="DM">DOMINICA</option>
			<option value="DO">DOMINICAN REPUBLIC</option>
			<option value="EC">ECUADOR</option>
			<option value="EG">EGYPT</option>
			<option value="SV">EL SALVADOR</option>
			<option value="GQ">EQUATORIAL GUINEA</option>
			<option value="ER">ERITREA</option>
			<option value="EE">ESTONIA</option>
			<option value="ET">ETHIOPIA</option>
			<option value="FK">FALKLAND ISLANDS (MALVINAS)</option>
			<option value="FO">FAROE ISLANDS</option>
			<option value="FJ">FIJI</option>
			<option value="FI">FINLAND</option>
			<option value="FR">FRANCE</option>
			<option value="GF">FRENCH GUIANA</option>
			<option value="PF">FRENCH POLYNESIA</option>
			<option value="TF">FRENCH SOUTHERN TERRITORIES</option>
			<option value="GA">GABON</option>
			<option value="GM">GAMBIA</option>
			<option value="GE">GEORGIA</option>
			<option value="DE">GERMANY</option>
			<option value="GH">GHANA</option>
			<option value="GI">GIBRALTAR</option>
			<option value="GR">GREECE</option>
			<option value="GL">GREENLAND</option>
			<option value="GD">GRENADA</option>
			<option value="GP">GUADELOUPE</option>
			<option value="GU">GUAM</option>
			<option value="GT">GUATEMALA</option>
			<option value="GN">GUINEA</option>
			<option value="GW">GUINEA-BISSAU</option>
			<option value="GY">GUYANA</option>
			<option value="HT">HAITI</option>
			<!option value="HM">HEARD ISLAND AND MCDONALD ISLANDS</option>
			<option value="HN">HONDURAS</option>
			<option value="HK">HONG KONG</option>
			<option value="HU">HUNGARY</option>
			<option value="IS">ICELAND</option>
			<option value="IN">INDIA</option>
			<option value="ID">INDONESIA</option>
			<option value="IR">IRAN</option>
			<option value="IQ">IRAQ</option>
			<option value="IE">IRELAND</option>
			<option value="IL">ISRAEL</option>
			<option value="IT">ITALY</option>
			<option value="JM">JAMAICA</option>
			<option value="JP">JAPAN</option>
			<option value="JO">JORDAN</option>
			<option value="KZ">KAZAKHSTAN</option>
			<option value="KE">KENYA</option>
			<option value="KI">KIRIBATI</option>
			<option value="KP">KOREA</option>
			<option value="KR">KOREA, REPUBLIC OF</option>
			<option value="KW">KUWAIT</option>
			<option value="KG">KYRGYZSTAN</option>
			<option value="LA">LAOS</option>
			<option value="LV">LATVIA</option>
			<option value="LB">LEBANON</option>
			<option value="LS">LESOTHO</option>
			<option value="LR">LIBERIA</option>
			<option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
			<option value="LI">LIECHTENSTEIN</option>
			<option value="LT">LITHUANIA</option>
			<option value="LU">LUXEMBOURG</option>
			<option value="MO">MACAO</option>
			<option value="MK">MACEDONIA</option>
			<option value="MG">MADAGASCAR</option>
			<option value="MW">MALAWI</option>
			<option value="MY">MALAYSIA</option>
			<option value="MV">MALDIVES</option>
			<option value="ML">MALI</option>
			<option value="MT">MALTA</option>
			<option value="MH">MARSHALL ISLANDS</option>
			<option value="MQ">MARTINIQUE</option>
			<option value="MR">MAURITANIA</option>
			<option value="MU">MAURITIUS</option>
			<option value="YT">MAYOTTE</option>
			<option value="MX">MEXICO</option>
			<option value="FM">MICRONESIA</option>
			<option value="MD">MOLDOVA, REPUBLIC OF</option>
			<option value="MC">MONACO</option>
			<option value="MN">MONGOLIA</option>
			<option value="ME">MONTENEGRO</option>
			<option value="MS">MONTSERRAT</option>
			<option value="MA">MOROCCO</option>
			<option value="MZ">MOZAMBIQUE</option>
			<option value="MM">MYANMAR</option>
			<option value="NA">NAMIBIA</option>
			<option value="NR">NAURU</option>
			<option value="NP">NEPAL</option>
			<option value="NL">NETHERLANDS</option>
			<option value="AN">NETHERLANDS ANTILLES</option>
			<option value="NC">NEW CALEDONIA</option>
			<option value="NZ">NEW ZEALAND</option>
			<option value="NI">NICARAGUA</option>
			<option value="NE">NIGER</option>
			<option value="NG">NIGERIA</option>
			<option value="NU">NIUE</option>
			<option value="NF">NORFOLK ISLAND</option>
			<option value="MP">NORTHERN MARIANA ISLANDS</option>
			<option value="NO">NORWAY</option>
			<option value="OM">OMAN</option>
			<option value="PK">PAKISTAN</option>
			<option value="PW">PALAU</option>
			<option value="PS">PALESTINIAN TERRITORY, OCCUPIED</option>
			<option value="PA">PANAMA</option>
			<option value="PG">PAPUA NEW GUINEA</option>
			<option value="PY">PARAGUAY</option>
			<option value="PE">PERU</option>
			<option value="PH">PHILIPPINES</option>
			<option value="PN">PITCAIRN</option>
			<option value="PL">POLAND</option>
			<option value="PT">PORTUGAL</option>
			<option value="PR">PUERTO RICO</option>
			<option value="QA">QATAR</option>
			<option value="RE">R�UNION</option>
			<option value="RO">ROMANIA</option>
			<option value="RU">RUSSIAN FEDERATION</option>
			<option value="RW">RWANDA</option>
			<option value="SH">SAINT HELENA</option>
			<option value="KN">SAINT KITTS AND NEVIS</option>
			<option value="LC">SAINT LUCIA</option>
			<option value="PM">SAINT PIERRE AND MIQUELON</option>
			<option value="VC">SAINT VINCENT AND THE GRENADINES</option>
			<option value="WS">SAMOA</option>
			<option value="SM">SAN MARINO</option>
			<option value="ST">SAO TOME AND PRINCIPE</option>
			<option value="SA">SAUDI ARABIA</option>
			<option value="SN">SENEGAL</option>
			<option value="RS">SERBIA</option>
			<option value="SC">SEYCHELLES</option>
			<option value="SL">SIERRA LEONE</option>
			<option value="SG">SINGAPORE</option>
			<option value="SK">SLOVAKIA</option>
			<option value="SI">SLOVENIA</option>
			<option value="SB">SOLOMON ISLANDS</option>
			<option value="SO">SOMALIA</option>
			<option value="ZA">SOUTH AFRICA</option>
			<!option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
			<option value="ES">SPAIN</option>
			<option value="LK">SRI LANKA</option>
			<option value="SD">SUDAN</option>
			<option value="SR">SURINAME</option>
			<option value="SJ">SVALBARD AND JAN MAYEN</option>
			<option value="SZ">SWAZILAND</option>
			<option value="SE">SWEDEN</option>
			<option value="CH">SWITZERLAND</option>
			<option value="SY">SYRIAN ARAB REPUBLIC</option>
			<option value="TW">TAIWAN</option>
			<option value="TJ">TAJIKISTAN</option>
			<option value="TZ">TANZANIA, UNITED REPUBLIC OF</option>
			<option value="TH">THAILAND</option>
			<option value="TL">TIMOR-LESTE</option>
			<option value="TG">TOGO</option>
			<option value="TK">TOKELAU</option>
			<option value="TO">TONGA</option>
			<option value="TT">TRINIDAD AND TOBAGO</option>
			<option value="TN">TUNISIA</option>
			<option value="TR">TURKEY</option>
			<option value="TM">TURKMENISTAN</option>
			<option value="TC">TURKS AND CAICOS ISLANDS</option>
			<option value="TV">TUVALU</option>
			<option value="UG">UGANDA</option>
			<option value="UA">UKRAINE</option>
			<option value="AE">UNITED ARAB EMIRATES</option>
			<option value="GB">UNITED KINGDOM</option>
			<option value="US">UNITED STATES</option>
			<!option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
			<option value="UY">URUGUAY</option>
			<option value="UZ">UZBEKISTAN</option>
			<option value="VU">VANUATU</option>
			<option value="VE">VENEZUELA</option>
			<option value="VN">VIET NAM</option>
			<option value="VG">VIRGIN ISLANDS, BRITISH</option>
			<option value="VI">VIRGIN ISLANDS, U.S.</option>
			<option value="WF">WALLIS AND FUTUNA</option>
			<option value="EH">WESTERN SAHARA</option>
			<option value="YE">YEMEN</option>
			<option value="ZM">ZAMBIA</option>
			<option value="ZW">ZIMBABWE</option>
			</select>
		</div>
		<br>

		<div class="form-group">
      			<label class="loginlbl" for="city">City</label>
			<input type="text" name="city" placeholder=" Melbourne"/>
    		</div>
		<br>

		<label class="loginlbl" for="birthdate">Birth Year</label>
		<input id="birthdate" type="date">

		<p>
		<label class="loginlbl" for="gender">Gender</label>
			<select name="gender" id="gender">
			<option value="F">Female</option>
			<option value="M">Male</option>
			<option value="O">Other</option>
			</select>
		<p>
 		<label class="loginlbl" for="password">Password</label>
  		<input type="password" name="password" id="password" placeholder="password" onChange="valueChange()"></input><br/><p/>
   		<label class="loginlbl" for="cpassword">Confirm Password</label>
  		<input type="password" name="cpassword" id="cpassword" placeholder="cpassword" onChange="pwordCheck()" required></input><br/><p/>
		<p id="pwordcheck"></p>
		<script>
		function valueChange(){
			document.getElementById("pwordcheck").innerHTML= "";
			//alert(document.getElementById("cpassword").value + "=cpassword");
			if (document.getElementById("cpassword").value != '') {
			pwordCheck();
			}
		}

		function pwordCheck(){
			//alert(document.getElementById("password").value + "=password");
			//alert(document.getElementById("cpassword").value + "=cpassword");
			document.getElementById("pwordcheck").innerHTML= "";
			if (document.getElementById("password").value != document.getElementById("cpassword").value) {
                        	document.getElementById("pwordcheck").innerHTML= "The two passwords do not match.";
				document.getElementById("postForm").disabled = true;
			}
			else {
				document.getElementById("postForm").disabled = false;
			}
		}
		</script>

	</div><!closing the Prof Info tag>
	<!The I Can section>
	<div id="i_can" style="display:none">
		<script>
	function expandCategory(x) {
    		if (x.style.display === "none") {
        		x.style.display = "block";
    		} else {
        		x.style.display = "none";
    						}
    		}

	function createCategoryList(ul,arr) {
		var i = 0;
		var cat_ul = document.getElementById(ul);
		var catArr = arr;
		
		for (i;i<catArr.length;i++) {
			var li = document.createElement('li');
			var label = document.createElement('label');
			var input = document.createElement('input');
			
			input.setAttribute('type', 'checkbox');
			input.setAttribute('value', catArr[i]);
			input.setAttribute('id', catArr[i]);
			label.setAttribute('for', catArr[i]);
			
			cat_ul.appendChild(li);
			cat_ul.appendChild(input);
			cat_ul.appendChild(label);
			label.appendChild(document.createTextNode(catArr[i]));
			}
		alert("cat_ul = " + document.getElementById("cat_ul").value);

		}

	</script>		
	<div class="container">
		<img src="img/pic.jpg" class="cat_img" alt="Outdoors" onClick="expandCategory(Category1)">
		<div class="cat_text" onClick="expandCategory(Category1)">Outdoors</div>
	</div>
	<p />
	</ br>
	<div>
	<fieldset id="Category1" style="display:none">
	<ul class="interests_checkbox" id="cat1_ul">
		<script>
			var cat1_arr = ["Camping","Hiking","Surfing","Climbing","Diving","Bushwalking","Canyoning"];
			createCategoryList("cat1_ul",cat1_arr);
		</script>
	</ul>
	</fieldset>
	</div>
	<div class="container">
		<img src="img/pic.jpg" class="cat_img" alt="Sports" onClick="expandCategory(Category2)">
		<div class="cat_text" onClick="expandCategory(Category2)">Sports</div>
	</div>
	<p />
	</ br>
	<div>
	<fieldset id="Category2" style="display:none">
	<ul class="interests_checkbox" id="cat2_ul">
		<script>
			var cat2_arr = ["Netball","Wrestling","Surfing","Skiing","Soccer","Swimming","Running","Football","Basketball","Dancing"];
			createCategoryList("cat2_ul",cat2_arr);
		</script>
	</ul>
	</fieldset>
	</div>
	<div class="container">
		<img src="img/pic.jpg" class="cat_img" alt="Social" onClick="expandCategory(Category3)">
		<div class="cat_text" onClick="expandCategory(Category3)">Social</div>
	</div>
	<p />
	</ br>
	<div>
	<fieldset id="Category3" style="display:none">
	<ul class="interests_checkbox" id="cat3_ul">
		<script>
			var cat3_arr = ["Networking","Entrepreneurship","Communication","Listening","Story telling","Laughing","Jokes","Business","Choir","Class"];
			createCategoryList("cat3_ul",cat3_arr);
		</script>
	</ul>
	</fieldset>
	</div>

	<p />
	</div><!close I_can div>
	<div id="i_learn" style="display:none">
		<script>
	function expandCategory(x) {
    		if (x.style.display === "none") {
        		x.style.display = "block";
    		} else {
        		x.style.display = "none";
    						}
    		}

	function createCategoryList(ul,arr) {
		var i = 0;
		var cat_ul = document.getElementById(ul);
		var catArr = arr;
		
		for (i;i<catArr.length;i++) {
			var li = document.createElement('li');
			var label = document.createElement('label');
			var input = document.createElement('input');
			
			input.setAttribute('type', 'checkbox');
			input.setAttribute('value', catArr[i]);
			input.setAttribute('id', catArr[i]);
			label.setAttribute('for', catArr[i]);
			
			cat_ul.appendChild(li);
			cat_ul.appendChild(input);
			cat_ul.appendChild(label);
			label.appendChild(document.createTextNode(catArr[i]));
			}
		alert("cat_ul = " + document.getElementById("cat_ul").value);

		}

	</script>		
	<div class="container">
		<img src="img/pic.jpg" class="cat_img" alt="Outdoors" style="width:100%" onClick="expandCategory(Category1)">
		<div class="cat_text" onClick="expandCategory(Category1)">Outdoors</div>
	</div>
	<p />
	</ br>
	<div>
	<fieldset id="Category1" style="display:none">
	<ul class="interests_checkbox" id="cat1_ul">
		<script>
			var cat1_arr = ["Camping","Hiking","Surfing","Climbing","Diving","Bushwalking","Canyoning"];
			createCategoryList("cat1_ul",cat1_arr);
		</script>
	</ul>
	</fieldset>
	</div>
	<div class="container">
		<img src="img/pic.jpg" class="cat_img" alt="Sports" style="width:100%" onClick="expandCategory(Category2)">
		<div class="cat_text" onClick="expandCategory(Category2)">Sports</div>
	</div>
	<p />
	</ br>
	<div>
	<fieldset id="Category2" style="display:none">
	<ul class="interests_checkbox" id="cat2_ul">
		<script>
			var cat2_arr = ["Netball","Wrestling","Surfing","Skiing","Soccer","Swimming","Running","Football","Basketball","Dancing"];
			createCategoryList("cat2_ul",cat2_arr);
		</script>
	</ul>
	</fieldset>
	</div>
	<div class="container">
		<img src="img/pic.jpg" class="cat_img" alt="Social" style="width:100%" onClick="expandCategory(Category3)">
		<div class="cat_text" onClick="expandCategory(Category3)">Social</div>
	</div>
	<p />
	</ br>
	<div>
	<fieldset id="Category3" style="display:none">
	<ul class="interests_checkbox" id="cat3_ul">
		<script>
			var cat3_arr = ["Networking","Entrepreneurship","Communication","Listening","Story telling","Laughing","Jokes","Business","Choir","Class"];
			createCategoryList("cat3_ul",cat3_arr);
		</script>
	</ul>
	</fieldset>
	</div>
	</div><!close I learn div>
	<div id="im_ready" style="display:none">	
		<label class="ready_label">When are you available to meet?</label><br>
		<div style="height:40px"></div> 
		<label class="ready_label">Weekdays </label><input type="checkbox" id="Weekdays" class="ready_check"></input><br>
			<div style="height:10px"></div>
		<label class="ready_label">Weekends </label><input type="checkbox" id="Weekends" class="ready_check"></input><br>
			<div style="height:10px"></div>
		<label class="ready_label">Most Evenings </label><input type="checkbox" id="Evenings" class="ready_check"></input><br>
			<div style="height:10px"></div>
		<label class="ready_label">Most Mornings </label><input type="checkbox" id="Mornings" class="ready_check"></input><br>


	<script>
	function showSpecific(theBtn,specificSection) {
			if (specificSection.style.display === "none") {
    	       			specificSection.style.display = "block";
				theBtn.innerHTML = "Close";
				}
			else	{
				specificSection.style.display = "none";
				theBtn.innerHTML = "Be more specific?";
				}
    		}

	function clicked(theButton) {
		if (theButton.innerHTML == "Busy") {
		theButton.innerHTML = "Free";
		theButton.style.background = "#feca38";
			}
		else	{
		theButton.innerHTML = "Busy";
		theButton.style.background = "#f2f2f2";		
			}
		}
	</script>
	<div style="height:30px"></div>
	<button id="specificBtn" class="btn" onClick="showSpecific(this,moreSpecific)">Be more specific?</button>
	<div style="height:30px"></div>
	<table id="moreSpecific" style="margin-left:47px;display:none">
  		<tr>
			<td width="110px"></td>
    			<td width="90px">Morning</td>
    			<td width="90px">Afternoon</td>
			<td width="90px">Evening</td>
  		</tr>
  		<tr>
			<td style="float:left">Monday</td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
		</tr>
  		<tr>
			<td style="float:left">Tuesday</td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
		</tr>
  		<tr>
			<td style="float:left">Wednesday</td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
		</tr>
  		<tr>
			<td style="float:left">Thursday</td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
		</tr>
  		<tr>
			<td style="float:left">Friday</td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
		</tr>
  		<tr>
			<td style="float:left">Saturday</td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
		</tr>
  		<tr>
			<td style="float:left">Sunday</td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
    			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
			<td><button class="btn" style="background:#f2f2f2" onClick="clicked(this)">Busy</button></td>
		</tr>
	</table>
	</div><!close I'm ready div>
	<div id="i_am" style="display:none">
      		<label class="intro_label" for="intro">About me</label><br>
		<div style="height:40px"></div> 
		<input type="text" name="intro" id="intro" style="width:300px;height:200px" placeholder=" Hi! I love to..."/>
	<br>
	</div><!close I am div>
	<input type="submit" id="postForm" class="btn submission" value="Next">
	</form> 
</body>


<footer>
</footer>
</html>