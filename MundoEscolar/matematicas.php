<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MUNDO ESCOLAR</title>
<link href="font-awesome.min.css" rel="stylesheet">
<link href="COLEGIO.css" rel="stylesheet">
<link href="matematicas.css" rel="stylesheet">
</head>
<body>
<div id="space"><br></div>
<div id="container">
<div id="wb_Image3">
<img src="images/f1452cten1.jpg" id="Image3" alt=""></div>
<div id="wb_Shape2">
<img src="images/img0004.png" id="Shape2" alt=""></div>
<div id="wb_Shape1">
<img src="images/img0005.png" id="Shape1" alt=""></div>
<div id="wb_Text1">
<span id="wb_uid0"><strong>Inicio</strong></span></div>
<div id="wb_Text2">
<span id="wb_uid1"><strong>Matematicas</strong></span></div>
<div id="wb_Text3">
<span id="wb_uid2"><strong>Ciencias Naturales</strong></span></div>
<div id="wb_TextArt1">
<img src="images/img0006.png" id="TextArt1" alt="MARAVILLOSO MUNDO ESCOLAR" title="MARAVILLOSO MUNDO ESCOLAR"></div>
<div id="wb_FontAwesomeIcon2">
<a href="./matematicas.php"><div id="FontAwesomeIcon2"><i class="fa fa-book">&nbsp;</i></div></a></div>
<div id="wb_Text4">
<span id="wb_uid3"><strong>PENSUM ACADEMICO</strong></span></div>
<div id="wb_FontAwesomeIcon4">
<a href="./espanol.php"><div id="FontAwesomeIcon4"><i class="fa fa-paste">&nbsp;</i></div></a></div>
<div id="wb_Text5">
<span id="wb_uid4"><strong>Español</strong></span></div>
<div id="wb_FontAwesomeIcon5">
<a href="./sociales.php"><div id="FontAwesomeIcon5"><i class="fa fa-globe">&nbsp;</i></div></a></div>
<div id="wb_Text9">
<span id="wb_uid5"><strong>Ciencias Sociales</strong></span></div>
<div id="wb_Image1">
<img src="images/ipeqtuekd3.jpg" id="Image1" alt=""></div>
<div id="wb_FontAwesomeIcon1">
<a href="./naturales.php"><div id="FontAwesomeIcon1"><i class="fa fa-pagelines">&nbsp;</i></div></a></div>
<div id="wb_FontAwesomeIcon3">
<a href="./index.php"><div id="FontAwesomeIcon3"><i class="fa fa-history">&nbsp;</i></div></a></div>
<div id="wb_Image2">
<img src="images/c0mcn8kxn0.jpg" id="Image2" alt=""></div>
<div id="wb_Image4">
<img src="images/ct7d8ukjkj.jpg" id="Image4" alt=""></div>
<div id="wb_Image5">
<img src="images/0sv2s4a18i.jpg" id="Image5" alt=""></div>
<div id="wb_Text6">
<span id="wb_uid6">Resta</span></div>
<div id="wb_Text7">
<span id="wb_uid7">Division</span></div>
<div id="wb_Text8">
<span id="wb_uid8">Suma</span></div>
<div id="wb_Text10">
<span id="wb_uid9">Multiplicación</span></div>
<div id="Html1">
<form id="form1" action="" method="POST" >
<!--El selec permite que se envie un numero que correponde a uina opcion y el cual el case procesara-->
<label for="op">Seleccione la operacion</label> <br/>
<select id="op"   name="op">
  <option value="0" selected="selected">-selecciona-</option>
  <option value="1">Suma</option>
  <option value="2">Resta</option>
  <option value="3">Multiplicacion</option>
  <option value="4">Division</option>
</select>
<!--Los imput deben estar correctamente definidos estos seran capturados mediante $_POST[''] en php-->
<legend>ingrese el primer valor</legend>	
<input id="a" name="a"  type="text" placeholder="0"/>	
<legend>ingrese el segundo valor</legend>	
<input id="b" name="b"  type="text" placeholder="0"/>	
<br>
<br>
<!--El submit sera comprobado en php mediante la opreacion if(isset($_POST['submit'])){ } el cual evitara errores-->
<input id="submit" name="submit"  type="submit" value="Procesar" />
<br>	
<br>
<?php
// if(isset($_POST['submit'])){ }si no esta definido en primera instancia la operacion genera un error de (index no definido)-->
if(isset($_POST['submit'])){
$operacion=$_POST['op'];
$a=$_POST['a'];
$b=$_POST['b'];

switch($operacion) {
case 1:
//Operacion de suma
$c=$a+$b;
echo "el resultado es: " . $c ;
break;

case 2:
//Operacion resta

$c=$a-$b;
echo "el resultado es: " . $c ;
break;

case 3:
//Operacion de multiplicacion
$c=$a*$b;
echo "el resultado es: " . $c ;
break;

case 4:
//Operacion de division
$c=$a/$b;
echo "el resultado es: " . $c ;
break;

default:
//Se ejecuta en cualquier otro caso
echo "No ha seleccionado ninguna operacion";
}
}
else
{	
echo "No ha seleccionado ninguna operacion";		
}
?>
</form>	</div>
<div id="wb_Text11">
<span id="wb_uid10"><strong>Simulador matemamatico</strong></span></div>
</div>
</body>
</html>