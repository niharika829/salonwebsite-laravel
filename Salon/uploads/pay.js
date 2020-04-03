
var queryString = decodeURIComponent(window.location.search); 
queryString = queryString.substring(1);
var queries = queryString.split("&");
for (var i = 0; i < queries.length; i++)
{
  document.getElementById("invoice").innerHTML=(queries[i] + "<br>");
}
 function pay(){
	
	var num=document.getElementById("cardNumber").value;
	 var holder=document.getElementById("cardHolder").value;
	 var mon=document.getElementById("Month").value;
	 var yr=document.getElementById("Year").value;
	 var code=document.getElementById("Code").value;
	if((num.length == 14) &&(num.length == 14) && (holder.length>2) && (mon.length == 2) && (yr.length == 2) &&(code.length == 3)){
		 alert("payment successfull!!")
		 window.location.href = "../vid.html"}
 else{alert("fill all the details correctly")}
 	/* alert(num.length+" "+holder.length+" "+mon.length+" "+yr.length+" "+code.length);*/
 }
 
 
