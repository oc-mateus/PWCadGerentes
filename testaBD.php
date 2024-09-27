<?php include "config.php"; ?>
<?php include DBAPI; ?>

<?php
    try {
            $db = open_database();
            echo "<h1>Banco de dados conectado com sucesso!</h1>\n";
        } catch (Exception $e){
        echo "<H3> Ocorreu um erro: <br>\n " . $e->getMessage() . "</H3>\n";
    }
    ?>
    