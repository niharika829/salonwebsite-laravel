


function GetSelectedText(){
				var e = document.getElementById("slot");
				var result1 = e.options[e.selectedIndex].text;
					var e1 = document.getElementById("dream");
				var result2 = e1.options[e1.selectedIndex].text;
				var res=document.getElementById("startDate").value;
				var result4=document.getElementById("taskNameID").value;
				/*alert("slot choosen is " + result1 + " dream choosen is "+ result2 +" date choosen is "+  res +" no. of guests are "+  result4 +);*/
				if( (result1.length === 0)||(result2.length === 0)||(res.length === 0)||(result4.length === 0)){alert("please fill all the details!!!   kindly refresh and try again")
				}
				else{
				alert("slot choosen is                                                                             " + result1 + " dream choosen is                                                   "+ result2+" date choosen is                                                                   "+  res +" no. of guests are                                                                          "+  result4);

window.location.href = "login.html";
}}
			