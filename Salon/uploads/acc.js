
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstname = "saurav";
	 $scope.lastname = "singh";
	  $scope.number = "9856748766";
	   $scope.email = "saurav_02@gmail.com";
	    $scope.locate = "delhi";
});



$('#elementId').click(function(){
        $('#first').prop('disabled', false);
		  $('#last').prop('disabled', false);
		    $('#mobile').prop('disabled', false);
			  $('#email').prop('disabled', false);
			    $('#location').prop('disabled', false);
				  $('#pwd').prop('disabled', false);
				    $('#pswd').prop('disabled', false);
});



   $(document).ready(function() {
            $("#weekend-calendar").kendoCalendar({
                 value: new Date("11/1/2019"),
                dates: [
                  new Date("1/1/2019"),
                  new Date("1/19/2019"),
                  new Date("2/16/2019"),
                  new Date("4/16/2019"),
                  new Date("5/10/2019"),
                  new Date("5/25/2019"),
                  new Date("6/21/2019"),
                  new Date("7/3/2019"),
                  new Date("9/7/2019"),
                  new Date("10/12/2019"),
                  new Date("11/11/2019"),
                  new Date("11/26/2019"),
                  new Date("11/27/2019"),
                  new Date("12/25/2019")
                ],
                disableDates: function (date) {
                    var dates = $("#weekend-calendar").data("kendoCalendar").options.dates;
                    if (date && compareDates(date, dates)) {
                        return true;
                    } else {
                        return false;
                    }
                }
            });

          

            function compareDates(date, dates) {
                for (var i = 0; i < dates.length; i++) {
                    if (dates[i].getDate() == date.getDate() &&
                        dates[i].getMonth() == date.getMonth() &&
                        dates[i].getYear() == date.getYear()) {
                      return true
                    }
                }
            }
			
			
			
			 $('#1').prop('disabled', true);
		  $('#2').prop('disabled', true);
		    $('#3').prop('disabled', true);
			  $('#4').prop('disabled', true);
			    $('#5').prop('disabled', true);
				  $('#6').prop('disabled', true);
				    $('#7').prop('disabled', true);
			 $('#8').prop('disabled', true);
			    $('#9').prop('disabled', true);
				  $('#10').prop('disabled', true);
				    $('#11').prop('disabled', true);
			
			
			
        });

function save(){
var first= document.getElementById("first").value;
var last= document.getElementById("last").value;
var mob= document.getElementById("mobile").value;
var mail= document.getElementById("email").value;
var loc= document.getElementById("location").value;
var pass1= document.getElementById("pwd").value;
var pass2= document.getElementById("pswd").value;
if(pass1 != pass2){alert("passwords are not matching!!!");}
else if (mob.length != 10){alert(" incorrect mobile no.")}
else{
alert("details updated successfully")



}
}
	$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});


 function finalCost(){
            var roomType = document.getElementById("room_type").value;
            var roomNum = document.getElementById("room_number").value;
            var personNum = document.getElementById("person_number").value;
            var childNum = document.getElementById("child_number").value;
            var res = document.getElementById("res_facilities").value;
 var pick = document.getElementById("pick_facilities").value;
 var tour = document.getElementById("tour_facilities").value;

            total1 = (parseInt(roomType)*110)*(roomNum) + ((personNum)*4)+ ((childNum)*2)+ ((res)*20)+ ((pick)*5)+ ((tour)*20)

            document.getElementById("result1").innerHTML = total1;
			 document.getElementById("invoice").innerHTML = total1;
			
			
        }
		
	
		function diningCost(){
            var roomType = document.getElementById("room_type_dining").value;
            var roomNum = document.getElementById("room_number_dining").value;
            var personNum = document.getElementById("person_number_dining").value;
            var childNum = document.getElementById("child_number_dining").value;
            var res = document.getElementById("res_facilities_dining").value;


            total2 = (parseInt(roomType)*20)*(roomNum) + ((personNum)*4)+ ((childNum)*2)+ ((res)*10)                   

            document.getElementById("result2").innerHTML = total2;
			
        }
		
		function bothCost(){
            var roomType = document.getElementById("room_type_both").value;
            var roomNum = document.getElementById("room_number_both").value;
            var food = document.getElementById("food_type_both").value;
			var tab_num = document.getElementById("table_number_both").value;
			  var personNum = document.getElementById("person_number_both").value;
            var childNum = document.getElementById("child_number_both").value;
            var res = document.getElementById("res_facilities_both").value;
 var pick = document.getElementById("pick_facilities_both").value;
 var tour = document.getElementById("tour_facilities_both").value;


	

            total3 = (parseInt(roomType)*110)*(roomNum)+((food)*10)+((personNum)*4)+ ((childNum)*2)+ ((res)*10) + ((pick)*2)+ ((tour)*10)   + ((tab_num)*5)                  

            document.getElementById("result3").innerHTML = total3;
        }
		
		
		


function linens() {
	var e1 = document.getElementById("room_type");
				var type = e1.options[e1.selectedIndex].text;
				var e2 = document.getElementById("room_number");
				var num = e2.options[e2.selectedIndex].text;
				var e3 = document.getElementById("person_number");
				var person = e3.options[e3.selectedIndex].text;
			var e4 = document.getElementById("child_number");
				var child = e4.options[e4.selectedIndex].text;
				var e5 = document.getElementById("res_facilities");
				var res = e5.options[e5.selectedIndex].text;
				var e6 = document.getElementById("pick_facilities");
				var pick = e6.options[e6.selectedIndex].text;
				var e7 = document.getElementById("tour_facilities");
				var tour = e7.options[e7.selectedIndex].text;
				var inn=document.getElementById("checkin").value;
				var out=document.getElementById("checkout").value;
				var e8 = document.getElementById("proof");
				var proof = e8.options[e8.selectedIndex].text;
				var sr=document.getElementById("source").value;
		//alert(type +" "+num+" "+person+" "+child+" "+res +" "+pick+" "+tour+" "+inn+" "+out+" "+proof+" "+sr);
if((type.length !=0) && (num.length !=0) && (person.length !=0) && (child.length !=0) && (res.length !=0) && (pick.length !=0) && (tour.length !=0) && (inn.length !=0) &&(out.length !=0) &&(proof.length !=0) &&(sr.length !=0)){	

var var1=document.getElementById("result1").innerHTML;
var queryString="?Invoice = "+var1;
window.location.href = "payment1.html" + queryString;
	
}
	else{alert("please fill all the details!!!")}
}	


function dining() {
var e1 = document.getElementById("room_type_dining");
				var type = e1.options[e1.selectedIndex].text;
				var e2 = document.getElementById("room_number_dining");
				var num = e2.options[e2.selectedIndex].text;
				var e3 = document.getElementById("person_number_dining");
				var person = e3.options[e3.selectedIndex].text;
			var e4 = document.getElementById("child_number_dining");
				var child = e4.options[e4.selectedIndex].text;
				var e5 = document.getElementById("res_facilities_dining");
				var res = e5.options[e5.selectedIndex].text;
			
				var date=document.getElementById("date").value;
				var time=document.getElementById("time").value;
				var e8 = document.getElementById("proof_dining");
				var proof = e8.options[e8.selectedIndex].text;
				var sr=document.getElementById("sr_dining").value;
				if((type.length !=0) && (num.length !=0) && (person.length !=0) && (child.length !=0) && (res.length !=0) && (date.length !=0) &&(time.length !=0) &&(proof.length !=0) &&(sr.length !=0)){		


	var var1=document.getElementById("result2").innerHTML;
var queryString="?Invoice = "+var1;
window.location.href = "payment1.html" + queryString;
}
	else{alert("please fill all the details!!!")}
}	

function both() {
var e1 = document.getElementById("room_type_both");
				var type = e1.options[e1.selectedIndex].text;
				var e2 = document.getElementById("room_number_both");
				var num = e2.options[e2.selectedIndex].text;
				var e3 = document.getElementById("food_type_both");
				var food = e3.options[e3.selectedIndex].text;
				var date=document.getElementById("date_both").value;
				var time=document.getElementById("time_both").value;
			
			var e4 = document.getElementById("table_number_both");
				var table = e4.options[e4.selectedIndex].text;
				var e5 = document.getElementById("person_number_both");
				var person = e5.options[e5.selectedIndex].text;
			var e6 = document.getElementById("child_number_both");
				var child = e6.options[e6.selectedIndex].text;
				
				var e7 = document.getElementById("res_facilities_both");
				var res = e7.options[e7.selectedIndex].text;
				var e8 = document.getElementById("pick_facilities_both");
				var pick = e8.options[e8.selectedIndex].text;
				var e9 = document.getElementById("tour_facilities_both");
				var tour = e9.options[e9.selectedIndex].text;
				var inn=document.getElementById("checkin_both").value;
				var out=document.getElementById("checkout_both").value;
				var e10 = document.getElementById("proof_both");
				var proof = e10.options[e10.selectedIndex].text;
				var sr=document.getElementById("source_both").value;
				
				
					if((type.length !=0) && (num.length !=0) && (food.length !=0) && (date.length !=0) && (time.length !=0) && (table.length !=0) &&(person.length !=0) &&(child.length !=0) &&(res.length !=0)&&(pick.length !=0) &&(tour.length !=0) &&(inn.length !=0) &&(out.length !=0) &&(proof.length !=0) &&(sr.length !=0) ){		

	var var1=document.getElementById("result3").innerHTML;
var queryString="?Invoice = "+var1;
window.location.href = "payment1.html" + queryString;}
	else{alert("please fill all the details!!!")}
}	


