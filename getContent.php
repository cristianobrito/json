<?php
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $database   = "fseletro";

        $tabela = $_GET['table'];

        $conn = mysqli_connect($servername, $username, $password, $database);
        if(!$conn){
                die("a conexão falhou".mysqli_connect_error());
        }  
        
        $sql ="select * from $tabela";
        $result = $conn->query($sql);
        //echo $result->fetch_all();
        print_r(json_encode( $result->fetch_all(MYSQLI_ASSOC) ) );

        mysqli_close($conn);
    ?>