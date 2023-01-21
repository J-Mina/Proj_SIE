<?php

    include "../acoes/geral/checkPermissions.php";

    if($permission == 4){
    echo "<div><a href=\"join.php\"><button><i class=\"fa fa-mouse-pointer\" aria-hidden=\"true\"></i> Junta-te a Nós </button></a></div>";
    } elseif ($permission == 3) {
    echo "<div><a href=\"jogador.php\"><button><i class=\"fa fa-futbol-o\" aria-hidden=\"true\"></i> Jogador </button></a></div>";
    }elseif ($permission == 2) {
    echo "<div><a href=\"equipa.php\"><button><i class=\"fa fa-futbol-o\" aria-hidden=\"true\"></i> Equipa </button></a></div>";
    }elseif ($permission == 1) {
    echo "<div><a href=\"join.php\"><button><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> Alteraçoes </button></a></div>";
    }


?>