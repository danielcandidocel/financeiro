
<?php

class homeController extends controller {
    public function index() {
        $dados = array();
        if(isset($_SESSION['tbFinan']) && !empty($_SESSION['tbFinan'])){
                        
            $this->loadTemplate('painel', $dados);
            
            } else {
                $this->loadTemplate('login', $dados);
            }
    }  
}


