<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='AD'){
    }
    else{
        redirect('login/index');
    }
?>
