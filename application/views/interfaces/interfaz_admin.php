<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='AD'){
        echo 'INTERFAZ DEL ADMINISTRADOR';
    }
    else{
        redirect(base_url());
    }
?>
