<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='CO'){
    }
    else{
        redirect('login/index');
    }
?>