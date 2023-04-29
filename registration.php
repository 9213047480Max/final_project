<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1 class = "text-center"> Регистрация на сайте</h1>
    <div class="col-sm-6 mx auto"></div>
    <form action="/registrer" method="post">
    <div class="mb-3"></div>
    <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Имя"></div>
    <div class="mb-3"><input type="email" class="form-control" placeholder="Email"></div>
    <div class="mb-3"><input type="password" name="pass" class="form-control" placeholder="Пароль"></div>
    <div class="mb-3"><input type="password" name="pass" class="form-control" placeholder="Подтвердите пароль"></div>
    <button type="button" class="btn btn-success">Зарегистрироваться</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>