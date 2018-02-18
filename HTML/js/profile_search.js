window.onload = function() {
        var fileInput = document.getElementById('myFile');
        //var fileDisplayArea = document.getElementById('output');

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
						default:	
												
					}	//switch				
	
                    		} //individual profile loop
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
prof_respi.setAttribute("src","img/responsiveness.jpg");
prof_respi.setAttribute("style","float:left");
prof_stats.appendChild(prof_respi);
prof_stats.appendChild(document.createTextNode(srchprof_resp));
prof_stats.appendChild(document.createElement('br'));

var prof_apprs = document.createElement('img');
prof_apprs.setAttribute("src","img/meets.jpg");
prof_apprs.setAttribute("style","float:left");
prof_stats.appendChild(prof_apprs);
prof_stats.appendChild(document.createTextNode(srchprof_apprs));
prof_stats.appendChild(document.createElement('br'));

var div_btn = document.createElement('div');
var more_btn = document.createElement('button');
more_btn.setAttribute("class","btn");
//more_btn.setAttribute("style","bottom:0px");
more_btn.appendChild(document.createTextNode("More"));
div_btn.appendChild(more_btn);
prof_stats.appendChild(div_btn);

row.appendChild(tdata3);

tble.appendChild(row);
div_srchprof.appendChild(tble);
document.getElementById("search_res").appendChild(div_srchprof);






				} //profile list loop
			
                } //if

                reader.readAsText(file);    
            } else {
                document.getElementByID("search_res").innerText = "File not supported!"
            }
        });
}
