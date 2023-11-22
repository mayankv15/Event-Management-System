<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
    <link rel="stylesheet" href="../CSS/usercontainer.css">
    <title>User Page</title>
    <script>
        function showEvent(str) {
            if (str == "") {
                document.getElementById("eventlist").innerHTML = "";
            return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("eventlist").innerHTML = this.responseText;
                        }
                };
                xmlhttp.open("GET","getevent.php?q="+str,true);
                xmlhttp.send();
            }
        }

        function showEventDetails(str) {
            if (str == "") {
                document.getElementById("eventdetaillist").innerHTML = "";
            return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("eventdetaillist").innerHTML = this.responseText;
                        }
                };
                $cityname=document.querySelector('select[name="city"]').value;
                xmlhttp.open("GET","geteventdetaillist.php?q="+str+","+$cityname,true);
                xmlhttp.send();
            }
        }

        $(document).on('click', '.btn_print', function(event) 
		{  
			event.preventDefault();
			var element = document.getElementById('ticket'); 
			var opt = 
			{
			  margin:       1,
			  filename:     'ticket'+js.AutoCode()+'.pdf',
			  image:        { type: 'jpeg', quality: 0.98 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
			};
			html2pdf().set(opt).from(element).save(); 
		});

    </script>
</head>
<!-- style="background-image:url('../images/smoke.jpg'); background-repeat:no-repeat;background-size:100%;" -->
<body >
    <div class="user-container-box" style="margin-top:1%;">
        <form>
            <h1><u>User</u> Panel</h1>
            <span>
            <select name="city" class="btn btn-secondary dropdown-toggle drop-down" onchange="showEvent(this.value)" style="padding:1% 4%;">
            <option value="">Select City Name</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Vanarasi">Vanarasi</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Kerala">Kerala</option>
            <option value="Haryana">Haryana</option>
            </select>
            <a href="logout.php" class="btn btn-danger" style="padding:1.19% 4%;margin-left:5%">Logout</a>
            </span>
            <div id="eventlist"><b></b></div>
            <div id="eventdetaillist"><b></b></div>
            <div id="ticketbookingdetail"></div>
        </form>
    </div>
    <script>
       $(document).ready(function(){
         $("#eventdetaillist").click(function(){
            var table = document.getElementById('eventtable');
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {   $city=document.querySelector('select[name="city"]').value;
                        $eventname=document.querySelector('select[name="eventname"]').value;
                        $seatsavailable=this.cells[2].innerHTML;
                        $eventdate=this.cells[0].innerHTML;
                        $eventtime=this.cells[1].innerHTML;
                        if($seatsavailable>0){
                            bookticket($city,$eventname,$eventdate,$eventtime);
                        }
                        else{
                            alert("Show is Housefull");
                        }
                    };
                }
             });
            });
        
        function bookticket($city,$eventname,$eventdate,$eventtime){
            $username="<?php echo $_SESSION['username']; ?>";
            // var xmlhttp = new XMLHttpRequest();
            // xmlhttp.open("GET","bookticket.php?q1="+$city+"q2="+$eventname+"q3="+$eventdate+"q4="+$eventtime+"q5="+$username,true);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("ticketbookingdetail").innerHTML = this.responseText;
                    }
            };
            xmlhttp.open("GET","bookticket.php?q1="+$city+","+$eventname+","+$eventdate+","+$eventtime+","+$username,true);
            xmlhttp.send();
        }

    </script>
</body>
</html>