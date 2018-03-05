var u_profile = new Object();




function disp_profile()
	{
	
	}



function displayDetails(prof_div_id,b,c,d)
 {


	var div_id = prof_div_id.id;

	switch (div_id)
	{
		case "p_ican":
		prof_div_id.innerHTML = u_profile.can;

		break;
		case "p_ilrn":
		prof_div_id.innerHTML = u_profile.lrn;

		break;
		case "p_tim":
		prof_div_id.innerHTML = u_profile.tim;

		break;
		case  "p_apr":
		prof_div_id.innerHTML = u_profile.apr;

		break;
	}

		prof_div_id.style.display = "block";
		b.style.display = "none";
		c.style.display = "none";
		d.style.display = "none";
}


function displayProfile()
	
{
	
	
	var parameters = location.search.substring(1).split("&");

 
	var temp = parameters[0].split("=");
	
	var display_uid = unescape(temp[1]);

		
	var db_profiles = "UID/12345/PIC/img\\p2.jpeg/NME/Mas/INT/sdfsdfsdfsdf and then some info info info that i can test to limit the size of the intro/CAN/hockey,swimming,dancing/LRN/camping,networking/TIM/weekends,evenings/JND/27th Feb,2013/RSP/100%/APR/10/CNT/Australia/CTY/Melbourne\nUID/23456/PIC/img\\p8.jpeg/NME/Sam/INT/sdfsdfsdfsdf and then some info info info that i can test to limit the size of the intro/CAN/hockey,swimming,dancing/LRN/camping,networking/TIM/weekends,evenings/JND/27th Feb,2013/RSP/100%/APR/10/CNT/Australia/CTY/Melbourne\nUID/34567/PIC/img\\p3.jpeg/NME/Nim/INT/I love the typos that i make when i just allow myself to go craxy with the writing. exchitation!! :D am testing different names out for the application. it's fun and exciting! almost there with this one let's see what happens now/CAN/hockey,swimming,dancing/LRN/camping,networking/TIM/weekends,evenings/JND/5th Mar,2016/RSP/75%/APR/100/CNT/France/CTY/Paris\nUID/45678/PIC/img\\p7.jpeg/NME/Ricardo/INT/intro intro intro intro intro intro intro intro sdfsdfsfsdf/CAN/hockey,swimming,dancing/LRN/camping,networking/TIM/weekends,evenings/JND/13th Jul,2017/RSP/20%/APR/70/CNT/Australia/CTY/Melbourne";

		var profiles = db_profiles.split("\n"); //contains list of profile
		var profile;

   for (profile = 0; profile < profiles.length; profile++) {
	var profile_details = profiles[profile];
	var lines = profile_details.split("/");
	var list = [];
	var line;
	
		var loopcount = lines.length - 2

     		for (line = 0; line < lines.length; line++) {
   		list.push(lines[line]);
			//alert("lines[line] = "+lines[line]);

			
				if  (list[line] == "UID"){
					line = line + 1;
					list.push(lines[line]);
					if (list[line] == display_uid) {
						var prof_uid = list[line];
						var srchprof_city;
						for (line = line+1; line < lines.length; line++) {	//loop through rest of profile record
							list.push(lines[line]);
								switch (list[line]) {
									case "TIM":
										line = line + 1;
										list.push(lines[line]);
										var text_t = list[line];
										var free_time = text_t.split(",");
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
										list.push(lines[line]);
										var text_c = list[line]; //convert list of lines to text from array
										var can_list = text_c.split(",");
										break;
									case "LRN":
										line = line + 1;
										list.push(lines[line]);
										var text_l = list[line];
										var learn_list = text_l.split(",");
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
									default:	
									} //switch
									
						}	//loop through that one user profile where UID matches				
						} else{break;}	//if user=uid

						}	//if UID
              		
						}	//individual profile loop
		} //profile list loop

		u_profile.uid = prof_uid;

		u_profile.nme = srchprof_name;

		document.getElementById("div_profname").innerHTML = u_profile.nme;
		//var impgpath = "img\" + srchprof_img ;
		document.getElementById("profile_pic").setAttribute("src",srchprof_img);
		u_profile.cnt = srchprof_country;

		u_profile.cty = srchprof_city;

		u_profile.rsp = srchprof_resp;

		document.getElementById("pulse").innerHTML = u_profile.rsp;

		u_profile.can = can_list; //p_ican

		u_profile.lrn = learn_list; //p_ilrn

		u_profile.tim = free_time;

		//document.getElementById("p_tim").innerHTML = u_profile.tim;

		u_profile.int = srchprof_intro;

		document.getElementById("intro").innerHTML = u_profile.int;
		
		u_profile.jnd = joined;
		document.getElementById("jndt").innerHTML = u_profile.jnd;

 
		u_profile.apr = srchprof_apprs;


	}