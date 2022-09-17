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
  <section>  
    <div class="container">
      <div class="row d-flex justify-content-center">
          <div class="col-lg-3">
            <h1>Выберите вид входа: </h1>
            </br>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Регистрация
            </button>
            </br>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="reg.php" method="POST">
            <h1>Пожалуйста, зарегистрируйтесь в системе</h1>
            <input type="text" name="login" id="login" class="form-control" placeholder="Логин">
            </br>
            <input type="text" name="password" id="password" class="form-control" placeholder="Пароль">
            <input type="checkbox" name="status" class="form-check-input" id="status">
            <p>Вы Администратор?</p>
            <input type="submit" class="form-control btn btn-primary" id="authorization" value="Зарегистрироваться">
            </form>
      </div>
    </div>
  </div>
</div>
</br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            Авторизация
            </button>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="sigh.php" method="POST">
            <h1>Пожалуйста, войдите в систему</h1>
            <input type="text" name="login" id="login" class="form-control" placeholder="Логин" required>
            </br>
            <input type="text" name="password" id="password" class="form-control" placeholder="Пароль" required>
            </br>
            <input type="submit" class="form-control btn btn-primary" id="authorization" value="Войти">
            </form>
      </div>
    </div>
  </div>
</div>
</div>
      </div>
    </div>
</section>


  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>