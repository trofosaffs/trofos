<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <form action="login.php" method="POST">
                    <div>
                        <div class="mb-3">
                            <label>Usuário</label>
                            <input type="text" 
                            name="usuario" 
                            class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                        <label>Senha</label>
                            <input type="password" 
                            name="senha" 
                            class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>