<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/loginsystem/style.css">
</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" offeset-lg-4>
                    <div class="card">
                        <div class="card-body">
                            <h3>Access restricted</h3>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST"> <!-- quando o formulário for enviado irá executar na action o script do login.php, iniciando o processo de backend do login-->
                                <div>
                                    <mb-3>
                                        <label for="">Usuário</label>
                                        <input type="text" name="user" class="form-control">
                                    </mb-3>
                                </div>
                                <div>
                                    <mb-3>
                                        <label for="">Senha</label>
                                        <input type="password" name="password" class="form-control">
                                    </mb-3>
                                </div>
                                <div>
                                    <mb-3>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </mb-3>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>