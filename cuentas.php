<HTML>
<BODY>
<HEAD></HEAD>
<?PHP
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$edad=$_POST['edad'];
$ced=$_POST['ced'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$ope=$_POST['lista'];
$ope2=$_POST['lista2'];

if($ope ==1){
	switch($ope2)
	{
	case 1:
	$resultado=20000;
	break;
	case 2:
	$resultado=35000;
	break;
	case 3:
	$resultado=40000;
	break;
	case 4:
	$resultado=45000;
	break;
	}

}else if($ope == 2){
	switch($ope2)
	{
	case 1:
	$resultado=30000;
	break;
	case 2:
	$resultado=48000;
	break;
	case 3:
	$resultado=50000;
	break;
	case 4:
	$resultado=60000;
	break;
	}
}else if($ope ==3){
	switch($ope2)
	{
	case 1:
	$resultado=55000;
	break;
	case 2:
	$resultado=60000;
	break;
	case 3:
	$resultado=60000;
	break;
	case 4:
	$resultado=80000;
	break;
	}

}
	echo "el valor de la consulta $resultado</BR>";


switch($ope2)
{
	case 1:
	$Resultado1="Sede Sur";
	break;
	case 2:
	$Resultado1="Sede centro";
	break;
	case 3:
	$Resultado1="Sede oriente";
	break;
	case 4:
	$Resultado1="Sede occidente";
	break;
}
echo "le toca en: $Resultado1</BR>";
echo "Nombre:$nom</BR>";
echo "Apellido:$ape</BR>";
echo "Edad:$edad</BR>";
echo "Cedula:$ced</BR>";
echo "Direccion:$dir</BR>";
echo "Telefono:$tel</BR>";
?>
<HTML>
<BODY>