<!DOCTYPE html>
<html>
    <header>
        <a href="main.html" class="logo">Via.</a>
    </header>
    <body>
<br><br>
        <h1 style="text-align: center" ><b>AVAILABLE FLIGHTS</b></h1>
        <br><br><br>
        <?php
        if($_POST['submit']) {
        $i=0;
        $to = $_POST['to'];
        $from = $_POST['from'];
        $depdate = $_POST['departure-date'];

            $sql = "SELECT * FROM flight WHERE fl_destination='$to' AND fl_source='$from'";
            $result = mysqli_query($conn, $result);
            if(!$result) {
                echo "error: ".mysqli_error();
                return;
            }
            $flights = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
            foreach($flights as $flight) {
                ?>
        <div class="flightlist">
        <p id="p1" style="text-align: left">FLIGHT NAME  : <b><?= $flight['fl_name'] ?></b></p>
        <p id="p1" style="text-align: left"><b><?= $flight['fl_source'] ?></b></p>
        <p id="p1">&#8594</p>
        <p id="p1"><b><?= $flight['fl_destination'] ?></b></p>
        <p id="p1" style="float: right"><b style="padding-right : 8px;color:rgb(255, 255, 255);"><?= $flight['price'] ?></b></p>
        <br>
        <p id="p2" >DEPARTURE TIME : <b><?= $flight['fl_departure_time'] ?></b></p>
        <p id="p2" >DATE : <b><?= $flight['fl_departure_dt'] ?></b></p>
        <input type="submit" class="btnstyle" value="book now" style="float: right;">
                    </div>
                    <br>
                    <br>
                    <?php
            }
        }
        ?>
    </body>
</html>