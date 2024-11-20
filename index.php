<?php
    session_start();

    require_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $sql = "SELECT * FROM users WHERE name = ? AND email = ?";

    $stmt = $conn->prepare($sql);
    $stmt ->bind_param("ss", $name, $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc(); 

        if (password_verify($password, $row['password'])) {

            $_SESSION["loggedin"] = true; 

            header("Location: site.php"); 
            exit; 

        }
    }

    else {
        $error = "Usuário ou senha incorretos";
    }

?>

<style>
body {
  background-image: url('https://media.discordapp.net/attachments/1290043141575147675/1307520607281479760/Design_sem_nome_2.png?ex=673b43b5&is=6739f235&hm=dfd78bbcc749eeb8fbb03892f7b52db256de03ede39d7c095ffaef509b25ea09&=&format=webp&quality=lossless&width=763&height=429');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

</style>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <img src="https://media.discordapp.net/attachments/1290043141575147675/1307517189674369084/Trofos-removebg-preview.png?ex=673b4086&is=6739ef06&hm=09afcbca6599dac3c5a082bc3eee88dc8da0dc79a7870a4549e4d445c027edc9&=&format=webp&quality=lossless" alt="" width="250px" height="150px">

    <form method="post" action="index.php">
        Nome: <input type="text" name="name" required><br>

        E-mail: <input type="email" name="email" required><br>

        Senha: <input type="password" name="password" required><br>

        <input type="submit" value="Logar">

    </form>
    

</body>
</html>