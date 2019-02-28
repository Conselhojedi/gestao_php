<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="<?php echo BASE_URL; ?>/assets/css/login.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Login</h1>
        <div class="loginarea">
        	<form method="POST">
                Login:
        		<input type="email" name="email" placeholder="seuemail@exemplo.com.br" required  /><br>
                Senha: 
        		<input type="password" name="password" placeholder="******" required /> <br><br>

        		<input type="submit" value="Entrar" /><br/>

        		<?php if(isset($error) && !empty($error)): ?>
        		<div class="warning"><?php echo $error; ?></div>
        		<?php endif; ?>
        	</form>
        </div>
    </body>
</html>
