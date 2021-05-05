<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="Modelo.css">
    
        <title>Login</title>
      </head>

<body>
 
    <header>
        <h1>Login</h1>
    </header>

    <section>

        <div>

            <form action="login.php" method="POST">
    
                <div class="form-group">
                <label >Usuário</label>
                <input type="text" class="form-control"  placeholder="Digite seu usuário" name="usuario">
                </div>

                <div class="form-group">
                <label >Senha</label>
                <input type="password" class="form-control"  placeholder="Digite sua senha" name="senha">
                </div>

                <button type="submit" class="btn btn-primary" name="enviar-formulario">Enviar</button>
                
                </form>

        </div>
        
        
    </section>

    <footer>&copy; MarceloSites</footer>

 <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>
</html>