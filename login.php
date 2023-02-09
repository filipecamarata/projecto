<?php include ("cabecalho.php");?>

    <h1 class="h1-login">Painel De Controle</h1>

    <aside class="login">
        <p class="pa-login">Informe seu endereço email para efectuar o login no painel de controle da plataforma.</p>
        <p class="pa-login">Caso você não possua a senha, obtenha uma nova através do link "Esqueci minha senha." </p>
    </aside>


    <h2 class="h2-login">Login</h2>

    <form class="form-login" action="#" method="post">
        <div>
            <label class="lab-login log" for="iemail">Email </label>
            <input class="in-login" type="email" name="email" id="iemail">
        </div>
        <div>
            <label class="lab-login" for="isenha">Senha </label>
            <input class="in-login" type="password" name="senha" id="isenha">
        </div>
        <div>
            <input class="btn-login" type="submit" value="Entrar">
            <a class="btn-login" href="#">Esqueci minha senha</a>
        </div>
    </form>



<?php include ("rodape.php");?>