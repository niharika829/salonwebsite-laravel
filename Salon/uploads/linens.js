/*linens*/
document.getElementById("price").disabled=true;
document.getElementById("left").disabled=true;




 $(document).ready(function() {
            $("#weekend-calendar").kendoCalendar({
                 value: new Date("11/1/2019"),
                dates: [
                  new Date("1/1/2020"),
				      new Date("1/2/2020"),
					      new Date("1/3/2020"),
						      new Date("1/4/2020"),
							      new Date("1/5/2020"),    new Date("1/6/2020"),    new Date("1/7/2020"),    new Date("1/8/2020"),
                  new Date("1/9/2020"),
                  new Date("11/16/2019"),
                  new Date("11/17/2019"),
                  new Date("11/18/2019"),
                  new Date("11/19/2019"),
                  new Date("11/20/2019"),
                  new Date("11/21/2019"),
                  new Date("12/25/2019"),
                  new Date("12/26/2019"),
                  new Date("12/27/2019"),
                  new Date("12/28/2019"),
                  new Date("12/29/2019"),
                  new Date("12/30/2019")
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
        });
		
		
		
		