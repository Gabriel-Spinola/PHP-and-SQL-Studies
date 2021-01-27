<?php
    //isset = exists ?
    if(isset($_POST["acao"])) {
        $nome = $_POST["nome"];
        $numero = $_POST["numero"];
        $email = $_POST["email"];
        
        if(strlen($nome) >= 5) {
            echo 'your name has more or equal to 5 letters'."<br />";
        }

        if(is_numeric($numero)) {
            echo 'Number'."<br />";
        }
        
        if(strstr($email, '@') != '') {
            echo 'have @';
        }
    }
?> 

<form method = "post">

    <input type = "text" name = "nome"   />
    <input type = "text" name = "numero" />
    <input type = "text" name = "email"  />
    <input type = "submit" name = "acao" />

</form>