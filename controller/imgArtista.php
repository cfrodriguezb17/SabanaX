<?php
    function perfilCliente(){

        $email = $_SESSION['email'];
        $objetoConsulta = new consultasAdmin();

        $resultado = $objetoConsulta-> imgCliente($email);

        foreach ($resultado as $f) {
            echo '
                
                <p style="margin-right: 20px; font-size:14px;color:#fff">'.$f['nickname'].'</p>
                <img style="width:50%" class="ticket"   src="../'.$f['foto'].'"> 
                
            ';
        }
    }

?>