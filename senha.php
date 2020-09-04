<?php
    $password = '2103';
    $senha = password_hash($password, PASSWORD_DEFAULT, [
        "cost"=>12
    ]);

    var_dump($senha);
?>