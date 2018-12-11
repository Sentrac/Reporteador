<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='CO'){
        echo 'INTERFAZ DE CONSULTAS';
    }
    else{
        redirect(base_url());
    }
?>