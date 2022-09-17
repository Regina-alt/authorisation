<?php
//Занесение в переменные ранее введенные данные
$login=$_POST["login"];
$password = $_POST["password"];
$status = (int)isset($_POST["status"]);

//Подключение к БД
$db = mysqli_connect("localhost","root", "","test");
mysqli_query($db,"set names utf8");

//Выполнение запроса на добавление
$ir = mysqli_query($db,"INSERT INTO `admpanel`(`login`, `password`, `status`) VALUES ('$login', '$password', '$status')");
if ($ir=='true')
{
echo "<script>alert('Успешно')</script><meta http-equiv='refresh' content='0; url=index.php'>";
	}
else
{
echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' content='0; url=index.php'>";
	}
?>