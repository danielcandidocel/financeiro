<?php clearstatcache();
?>
 <div class="card-panel green accent-2 lime-text accent-2-text">ola mundo</div> 

<div class="login">
  <div class="login-all">
    <div class="login-logo">
        <!-- <img src="<?php echo BASE_URL;?>assets/images/logo_inoveh_branco.png" id="lar"/> -->
    </div>
    <div class="login-form2">
        <form method="POST" action="<?php echo BASE_URL;?>usuarios/login">
            <label>Nome:</label>
            <input type="text" name="name" />
            <label>Senha:</label>
            <input type="password" name="senha" />                                
            <!-- <input type="button" value="Entrar" class="btn-primary" id="button-login" onclick="logar()"/> -->
            <input type="submit" value="Entrar" class="btn btn-primary" id="button-login" />
        </form>
        <?php 
            if (isset($erroLogin) && !empty($erroLogin)) {
                echo '<p style="color:red">'.$erroLogin.'</p>';
            }
         ?>
        <!-- <div class="login-cadastrar">               
            <a href="<?php echo BASE_URL;?>home/esqueci" style="float: right">Esqueci minha senha</a>
        </div> -->
    </div>        
  </div>
</div>


