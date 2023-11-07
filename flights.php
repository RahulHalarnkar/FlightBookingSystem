<?php
    require "connection.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial scale=1.0">
        <title>airport management system</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
       <style>
            body {
            background-image: url('fllist8.jpg');
            background-size: cover;
            }
                .flightlist {

  border: 3px solid rgb(232, 179, 81);
  border-radius: 20px;
  padding: 20px;
  background-image: url('fl1.jpg');
  background-size: cover;
  margin: auto;
  width: 50%;
}

#p1{
    display: inline-block;
    padding-left : 30px;
    color:rgb(233, 198, 133);
}
#p2{
    display: inline-block;
    padding-left : 30px;
    padding-top: 15px;
    color:rgb(233, 198, 133);
}
h1{
    color:rgb(255, 255, 255);
}
.ffl{
    text-align: center;
}
	    </style>
    </head>
    <body >
        <header>
            <a href="main.html" class="logo">Via.</a>
        </header>    
        <br><br><br><br><br><br><br><br><br><br>
        <form action="availableflights.php" method="POST">
        <div class="ffl">
        <div>
        <label style="font-size:17px">Flying From</label>
<select name="from" class="custom-class" placeholder="City" style="opacity:0.7">
                <option value="1">Goa</option>
                <option value="2">Mumbai</option>
<option value="3">New Delhi</option>
             </select>

        <label style="font-size:17px;   padding-left : 30px;">Flying To  </label>
<select name="to" class="custom-class" placeholder="City" style="opacity:0.7">
                <option value="1">Goa</option>
                <option value="2">Mumbai</option>
<option value="3">New Delhi</option>
<option value="4">lisbon</option>
<option value="5">dubai</option>
<option value="6">paris</option>
<option value="7">sydney</option>
<option value="8">new york</option>
            </select>
            <br>
    </div>
        <div class="inputs">
        
        </div>

        <div class="inputs">
            <label style="font-size:17px">Departing</label>
            <select name="departure-date" class="custom-class" style="opacity:0.7">
                <input type="date" style="opacity:0.7">
             </select>
        </div>

    <br><br>
        <input type="submit" class="btnstyle" name="submit" value="Search flights">
    </div>   
        </form>

    </body>
</html>