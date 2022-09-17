<?php
//Подключение к БД
require_once __DIR__ . "/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Выбор</title>
</head>
<body>
    <div class="block1">
    <div class="buttom">
    <a href="index.php">Вернуться на страницу входа</a>
    </div>
    </br>
    <h1 class="text-center">Таблица "Логины и пароли"</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Логин</th>
                <th scope="col">Пароль</th>
                <th scope="col">Статус</th>
            </tr>
        </thead>
        <tbody>
        <?php
//Вывод данных из таблицы БД
$login = $_POST["login"];
$password = $_POST["password"];
$status = (int)isset($_POST["status"]);

    $articles = $pdo->query("SELECT * FROM `admpanel`")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($articles as $article) {
        echo '<tr>
        <th scope="row">'. $article["id"] . '</th>
        <td><input type="text" class="form-control" value="' . $article["login"] . '"></td>
        <td><input type="text" class="form-control" value="' . $article["password"] . '"></td>
        <td><input type="text" class="form-control" value="' . $article["status"] . '"></td>
        </tr>';
    }
?> 
        </tbody>
    </table>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
