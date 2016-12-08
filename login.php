<?php
include_once ('includes/bdd.php');
header('Content-Type: text/html;charset-UTF-8');
$usuario=$_POST['username'];
$pass=$_POST['password'];
$con=crearConexion();
$con->set_charset("UTF-8");
$sql="SELECT username, password FROM usuarios";
$stmt = $con->prepare($sql);
$stmt->bind_param('ss', $usuario, $pass);
$stmt->execute();
$result2=$con->query($sql);
$row=$result2->fetch_assoc();
if ($row[$sql]==0)
{
	echo "<script>alert ('Ingreso invalido al sistema!')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}
	else
			{
				session_start();
				$_SESSION['time']=date('H:i:s');
				$_SESSION['username']=$usuario;
				$_SESSION['logeado']=true;
				header("location:welcome.php");
			};
?>