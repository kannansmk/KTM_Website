<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTM SHOWROOM</title>
    <link rel="icon" href="./images/ktm-logo.png">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <b>
        <a href="">Home</a>
        <a href="./duke.php">Duke-Bikes</a>
        <a href="./ktm.php">Ktm-Bikes</a>
        <a href="./service.php">Service</a>
        <a href="./testdrive.php">Test-Drive</a>
        </b>
    </nav>
    <br>
    <hr>
    <div class="rtr"><h1><i><marquee behavior="scroll" direction="right">READY TO RACE</i></h1></marquee></div>
    <main>
        <div>
            <p><b><u>Engine</u></b>
            <br>
            <br>
            KTM RC 200 and RC 390 are powered by mono-cylinder, 4-stroke, water-cooled engine with a displacement of 199.5cc and 373.2cc respectively. These machines are the most powerful options available in sub 500cc category. The RC 200 produces a maximum power of 25bhp while the RC 390 dishes-out an astonishing 45bhp of power.</p>
        </div>
        <div>
            <p><b><u>Gear Box</u></b>
            <br>
            <br>
            The transmission on the RCs is the same as seen on the Dukes. It is a a 6-speed claw shifted transmission that works with a mechanically operated clutch in oil bath. The gear ratio of the bike is: Primary gear ratio: 22:72; Secondary gear ratio: 14:42.
            The short ratios make the RCs feel like a shooting bullet.</p>
        </div>
        <div>
            <p><b><u>Wheels and tyres</u></b>
            <br>
            <br>
            KTM has used different set of tyres to run RC 200 and RC 390. The RC 200 boasts of MRF tyres while the RC 390 runs on Metzeler tyres. However the tyre size of both the machines is the same; the front tyre is 110mm wide while the rear is 150mm. These wider tyres offer good grip and improve manoeuverability.</p>
        </div>
        <div>
            <p><b><u>Braking</u></b>
            <br>
            <br>
            KTM has offered both the machines with a 300mm disc brake with four-pot brake caliper at the front and 230mm disc brake with one-pot brake caliper at the rear. Fortunately the company has also kept Anti-lock brake system (ABS) as a standard option but just for the RC 390.</p>
        </div>
        <div>
            <p><b><u>Suspension</u></b>
            <br>
            <br>
            KTM RC 200 and RC 390 come with one of the finest suspensions. They work with upside-down front forks from WP Suspension that offers utmost stability and WP shock absorbers at the rear for incredible tracking stability. The suspension system is also inspired from the RC8.</p>
        </div>
    </main>
    <br>
    <br>
    <aside>
        <img src="./images/ktm-super-duke.png" alt="super duke">
        <div class="inputdiv">
            <button type="submit" id="duke" onclick="naked()">Duke-Bike</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" id="ktm" onclick="sports()">Ktm-Bike</button>
        </div> 
    </aside>
    <br><br>
    <br><br>
    <!--footer section  -->
    <footer><center>Copyright&nbsp;&nbsp;  &copy;  &nbsp;&nbsp;kannan_smk </center></footer>
</body>
<script>
    function naked(){
        document.getElementById("duke").onclick=function(){
            location.href="duke.php";
        }
    }

    function sports(){
        document.getElementById("ktm").onclick=function(){
            location.href="ktm.php";
        }
    }
</script>
</html>