<?php clearstatcache();
?>
 <div class="card-panel green accent-2 lime-text accent-2-text">ola mundo</div> 

<div class="login">
  <div class="login-all">
    <div class="login-logo">
        <!-- <img src="<?php echo BASE_URL;?>assets/images/logo_inoveh_branco.png" id="lar"/> -->
    </div>
    <div class="login_form2">
        <form method="POST" action="<?php echo BASE_URL;?>usuarios/login">
            <label>Nome:</label>
            <input type="text" name="name" />
            <label>Senha:</label>
            <input type="password" name="senha" />                                
            <!-- <input type="button" value="Entrar" class="btn-primary" id="button-login" onclick="logar()"/> -->
            <input type="submit" value="Entrar" class="btn btn-primary" id="button-login" />
        </form>
     <div class="karina">teste</div>
    </div>        
  </div>
</div>


