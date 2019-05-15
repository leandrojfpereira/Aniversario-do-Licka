<?php
	$hn = 'localhost';
	$db = 'niver';
	$un = 'niver';
	$pw = '123';

		$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
	    die("Erro Fatal");

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $area_code = $_POST["area_code"];
        $phone = $_POST["phone"];
        $check = $_POST["check"];


    $sql = "INSERT INTO convidados (nome, ultimo_nome, ddd, numero, confirmacao) VALUES ('$first_name','$last_name','$area_code','$phone','$check')";
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
        exit();
    }else{
        header('Location: index.php');
        exit();
    }


?>

