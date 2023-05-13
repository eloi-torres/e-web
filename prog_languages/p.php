<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="design.css">
<box>
    <img id="php" src="photos/php_logo.jpeg" width="100%"height="65%"> </box>
    <ul class="nav justify-content-left">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://csmath.uprm.edu/~eloitz/prog_languages/home.html"style="color: black;font-family:fantasy;">GO BACK</a>
        </li>
        <br>
        <br>
        <br>
        <br>
    </ul>
</head>
<body>
<div align="center"> <img id="std" src="photos/std.jpg" width="80%" height="80%"> </div>
    <?php
        $students = array('abneror', 'amarilysoa', 'arielcs', 'darellar', 'diegorc','diegorg','eloitz (ME)','franciscocc','harryrq','kevinac','norbertocc');
    ?>
     <div align="center">
         <br>
    <u><h1 style="color: black;font-family:fantasy;">Students Username List: </h1></u>
    <br>
    <ul>
    <?php foreach ($students as $student) { ?>
        <h3 style="color: black;font-family:fantasy;">
            <?php echo $student ?>
        <br>
       
    <?php }  ?>
    <br>
    <br>
    <br>
    </div>
    <div align="center"> <img id="calendar" src="photos/calendar.jpeg" width="75%" height="110%"> </div>
     <br>
     <br>
    <div align="center">
    <u><h1 style="color: black;font-family:fantasy;">TODAY'S DATE: </h1></u>
    <br>

            <?php
        echo 'TODAY IS <b>' . date('Y/m/d') . '</b> AND IT IS A <b>'.date('l');
        ?>
    </div>
    <br>
    <br>
    <br>
    <?php
$PrimerValor = 25; 
$SegundoValor = 440; 
$suma = $PrimerValor + $SegundoValor; 
$resta = $PrimerValor - $SegundoValor; 
$multiplicacion = $PrimerValor * $SegundoValor; 
$division = $PrimerValor / $SegundoValor; 
?>
<div align="center"> <img id="math" src="photos/math.jpg" width="80%" height="80%"> </div>
<br>
<br>
<div align="center">
<u><h1 style="color: black;font-family:fantasy;text">OPERATIONS IN PHP: </h1></u>
<br>
<br>

<h3 style="color: black;font-family:fantasy;">
<?php
echo "<h1>TEXTUAL FORMAT</h1>";
?>
<br>
<br>
<?php
echo "SUM: <strong>".$PrimerValor."</strong> AND <strong>".$SegundoValor."</strong> IT IS <strong>".$suma."</strong><br/>";
echo "SUBSTRACTION <strong>".$PrimerValor."</strong> AND <strong>".$SegundoValor."</strong> IT IS <strong>".$resta."</strong><br/>";
echo "MULTIPLICATION <strong>".$PrimerValor."</strong> AND <strong>".$SegundoValor."</strong> IT IS <strong>".$multiplicacion."</strong><br/>";
echo "DIVISION: <strong>".$PrimerValor."</strong> AND <strong>".$SegundoValor."</strong> IT IS <strong>".$division."</strong><br/>"; 
?>
<br>
<br>
<?php
echo "<h1>MATH FORMAT</h1>";
?>
<br>
<br>
<?php
echo "".$PrimerValor." + ".$SegundoValor." = <strong>".$suma."</strong><br/>";
echo "".$PrimerValor." - ".$SegundoValor." = <strong>".$resta."</strong><br/>";
echo "".$PrimerValor." * ".$SegundoValor." = <strong>".$multiplicacion."</strong><br/>";
echo "".$PrimerValor." / ".$SegundoValor." = <strong>".$division."</strong><br/>";
?>
</div>
    </ul>
    <br>
    <br>



</body>


</html>