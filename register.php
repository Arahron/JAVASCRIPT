<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Здесь можно добавить логику вставки данных в базу данных или другую обработку данных
  // Например:
  // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  // $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
  // выполнить запрос к базе данных
  // ...
  echo "Пользователь $username успешно зарегистрирован";
}
?>