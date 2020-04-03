document.getElementById("priceunder").disabled=true;
document.getElementById("leftunder").disabled=true;


$(document).ready(function() {
            $("#weekend-calendar").kendoCalendar({
                 value: new Date("11/1/2019"),
                dates: [
                  new Date("2/1/2020"),
				      new Date("2/2/2020"),
					      new Date("2/3/2020"),
						      new Date("4/4/2020"),
							      new Date("4/5/2020"),    new Date("4/6/2020"),    new Date("4/7/2020"),    new Date("4/8/2020"),
                  new Date("11/9/2020"),
                  new Date("11/16/2019"),
                  new Date("11/17/2019"),
                  new Date("11/18/2019"),
                  new Date("11/19/2019"),
                  new Date("11/20/2019"),
                  new Date("12/21/2019"),
                  new Date("12/25/2019"),
                  new Date("12/26/2019"),
                  new Date("12/27/2019"),
                  new Date("6/28/2020"),
                  new Date("6/29/2020"),
                  new Date("6/30/2020")
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
		