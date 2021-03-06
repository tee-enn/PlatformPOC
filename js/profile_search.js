var glob_srch_cities; //var to track if the cities checkbox has been built already.
var u_profile = new Object();
//declare global variables

function readProfiles(theFile) {
        //var fileInput = document.getElementById('myFile');
	var fileInput = theFile;	
        fileInput.addEventListener('change', function(e) {
            var file = fileInput.files[0];
            var textType = /text.*/;

            if (file.type.match(textType)) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    //fileDisplayArea.innerText = reader.result;
			
			var profiles = reader.result.split("\n"); //contains list of profile
			var profile;
                    	for (profile = 0; profile < profiles.length; profile++) {
			var profile_details = profiles[profile];
			var lines = profile_details.split("/");
                    	var list = [];
			var line;
                    		for (line = 0; line < lines.length; line++) {
                        		list.push(lines[line]);
					//alert("lines[line] = "+lines[line]);
					switch (list[line]) {
						case "TIM":
							line = line + 1;
							list.push(lines[line]);
							var text = list[line];
							var free_time = text.split(",");
							break;
						case "PIC":
							line = line + 1;
							list.push(lines[line]);
							var srchprof_img = list[line];
							break;
						case "NME": 
							line = line + 1;
							list.push(lines[line]);
							var srchprof_name = list[line];
							break;
						case "INT":
							line = line + 1;
							list.push(lines[line]);
							var srchprof_intro = list[line]
							break;
						case "CAN":
							line = line + 1;
							list.push(lines[line]); //get the list of interests
							var catch_interests = [];
							var text = list[line]; //convert list of lines to text from array
							var can_list = text.split(",");
							break;
						case "LRN":
							line = line + 1;
							list.push(lines[line]);
							var catch_interests = [];
							var text = list[line];
							var learn_list = text.split(",");
							break;	
						case "JND":
							line = line + 1;
							list.push(lines[line]);
							var joined = list[line];
							break;	
						case "RSP":
							line = line + 1;
							list.push(lines[line]);
							var srchprof_resp = list[line];
							break;	
						case "APR":
							line = line + 1;
							list.push(lines[line]);
							var srchprof_apprs = list[line];
							break;	
						case "CNT":
							line = line + 1;
							list.push(lines[line]);
							var srchprof_country = list[line];
							break;	
						case "CTY":
							line = line + 1;
							list.push(lines[line]);
							var srchprof_city = list[line];
							break;

						case "UID":
							line = line + 1;
							list.push(lines[line]);
							var prof_uid = list[line];
							break;						
						default:	
												
					}	//switch				
	
                    		} //individual profile loop
//capture users details
if (profile == 0){

//alert("inside 0 = " + profile);

u_profile.uid = prof_uid;
u_profile.nme = srchprof_name;
u_profile.cnt = srchprof_country.trim();
u_profile.cty = srchprof_city.trim();
u_profile.rsp = srchprof_resp;
u_profile.can = can_list;
u_profile.lrn = learn_list;
u_profile.tim = free_time;
u_profile.int = srchprof_intro;
u_profile.jnd = joined;

//Set applicable cities for search
var u_country = srchprof_country.trim();
var u_city = srchprof_city.trim();
var txt = u_city + ", "+ u_country;
document.getElementById("state_country").appendChild(document.createTextNode(txt));
}
else //skip the first record as that is the signed on user's profile and take all the other records
{ 

//alert("inside profile = " + profile);
//creating a table for every profile in the file
var div_srchprof = document.createElement('div');
div_srchprof.setAttribute("class","search_prof");


var tble = document.createElement('table');
//tble.setAttribute("style","border:1px solid white");
var row = document.createElement('tr');

var tdata1 = document.createElement('td');
var prof_image = document.createElement('img');
prof_image.setAttribute("src",srchprof_img);
prof_image.setAttribute("class","searchprof_img");
tdata1.appendChild(prof_image);
row.appendChild(tdata1);

var tdata2 = document.createElement('td');
var prof_name = document.createElement('div');
prof_name.setAttribute("class","searchprof_name");
prof_name.appendChild(document.createTextNode(srchprof_name));
tdata2.appendChild(prof_name);

var prof_intro = document.createElement('div');
prof_intro.setAttribute("class","searchprof_intro");
prof_intro.appendChild(document.createTextNode(srchprof_intro.substring(0,100)+"..."));
var prof_jnd = document.createElement('p');
prof_jnd.appendChild(document.createTextNode("Joined : "+joined));
prof_intro.appendChild(prof_jnd);
tdata2.appendChild(prof_intro);

row.appendChild(tdata2);

var tdata3 = document.createElement('td');

var prof_stats = document.createElement('div');
prof_stats.setAttribute("class","searchprof_stats");
tdata3.appendChild(prof_stats);

var prof_respi = document.createElement('img');
prof_respi.setAttribute("src","img/responsiveness.png");
prof_respi.setAttribute("style","float:left");
prof_stats.appendChild(prof_respi);
prof_stats.appendChild(document.createTextNode(srchprof_resp));
prof_stats.appendChild(document.createElement('br'));

var prof_apprs = document.createElement('img');
prof_apprs.setAttribute("src","img/meets.png");
prof_apprs.setAttribute("style","float:left");
prof_stats.appendChild(prof_apprs);
prof_stats.appendChild(document.createTextNode(srchprof_apprs));
prof_stats.appendChild(document.createElement('br'));

var div_btn = document.createElement('div');
var more_btn = document.createElement('button');
more_btn.setAttribute("class","btn");

more_btn.setAttribute("value",prof_uid);

more_btn.setAttribute("onClick","sendUID(this)");
more_btn.setAttribute("style","bottom:0px");
more_btn.appendChild(document.createTextNode("More"));
div_btn.appendChild(more_btn);
prof_stats.appendChild(div_btn);

row.appendChild(tdata3);

tble.appendChild(row);
div_srchprof.appendChild(tble);
document.getElementById("search_res").appendChild(div_srchprof);

}//close building profile table
				} //profile list loop
                } //if
                reader.readAsText(file);    
            } else {
                document.getElementByID("search_res").innerText = "File not supported!"
            }
        });
}


function dispCitiesSearch(uctycnt){

document.getElementById("get_cities").setAttribute("style","display:block");
var au_vic_cities = ["Fitzroy","Melbourne","Carlton","St. Kilda","Thornbury","Buleen","Fairfield","Burwood"];
var fr_prs_cities = ["city1","city8","city59","city43","city67","city4","city13","city81","city9","city10"];

var txt = uctycnt.innerHTML;

if (glob_srch_cities != 1) { //only proceed down this path if the city checkboxes have not been built before
switch (txt) {
	case "Melbourne, Australia":
		//display checkboxes
		for (var i = 0; i<au_vic_cities.length; i++)
			{
			//alert("inside for = "+ uctycnt.innerHTML);
			var city_chkbx = document.createElement('input');
			city_chkbx.setAttribute("type","checkbox");
			city_chkbx.setAttribute("value",au_vic_cities[i]);
			city_chkbx.setAttribute("id",au_vic_cities[i]);

			var label = document.createElement('label');
			label.setAttribute("for", au_vic_cities[i]);
			label.appendChild(document.createTextNode(au_vic_cities[i]));

			document.getElementById("city_chkbx").appendChild(city_chkbx);
			document.getElementById("city_chkbx").appendChild(label);
			}
		glob_srch_cities = 1; //therefore, this checklist should not be recreated.
			
	
	break;
	case "Paris, France":
	break;

	}
}
}

function sendUID(the_profile)
	{
	window.location.href = 'Profile.html?uuid=' + the_profile.value;
	//displayName("Sam_func");
	}