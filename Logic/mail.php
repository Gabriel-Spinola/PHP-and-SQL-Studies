<?php
    //isset = exists ?
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        
        if(strlen($name) >= 5) {
            echo 'your name has more or equal to 5 letters' . "<br>";
        }

        if(is_numeric($number)) {
            echo 'Number' . "<br>";
        }
        
        if(strstr($email, '@') != '') {
            echo 'have @';
        }
    }
?> 

<form method = "post">

    <input type = "text" name = "name"     />
    <input type = "text" name = "number"   />
    <input type = "text" name = "email"    />
    <input type = "submit" name = "submit" />

</form>