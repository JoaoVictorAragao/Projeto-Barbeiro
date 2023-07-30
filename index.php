<html>
    <head>
        <title>eBarbeiro</title>
    </head>
    <body>
        <form method="POST" id="login_user_form" action="private/User_Controller.php?action=login">
            <label>Login</label>
            <input type="email" name="login" id="login" placeholder="email" value="barbeiro@gmail.com"/>
            <label>Senha</label>
            <input type="password" name="senha" id="senha" placeholder="senha" value="123@senha"/>
            <input type="submit" value="Entrar" id="login_user"/>

            <a href="http://">Não possuí conta? Cadastre-se</a>
        </form>
        
    </body>
</html>