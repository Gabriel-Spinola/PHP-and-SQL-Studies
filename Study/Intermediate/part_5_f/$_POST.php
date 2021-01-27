<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">

        <title>$_POSTf</title>

    </head>

    <body>

        <?php 
        
            if(isset($_POST['action'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];

                echo 'name: '.$name."<br />";
                echo 'email: '.$email;
            }

            echo "<br />";

        ?>

        <br />

        <form method="post">

            <input type="text" name="name"                  />
            <input type="text" name="email"                 />
            <input type="submit" name="action" value="Send" />

        </form>

        <br />
        <hr />
        <br />

        <?php
        
            if( isset( $_POST['act'] ) ):
                if( ($_POST['number1'] != null) and ($_POST['number2'] != null) ):
                    print( $_POST['number1'] + $_POST['number2'] );

                endif;

            endif;

            if( isset( $_POST['sub'] ) ):
                if($_POST['value'] != null):
                    foreach( $_POST['value'] as $key => $value ):
                        print($key);
                        print(' => '); 
                        print($value."<br />"."<hr />");

                    endforeach;

                endif;

            endif;

        ?>

        <br />

        <form method="post">

            <input type="text" name="number1"            />
            <input type="text" name="number2"            />
            <input type="submit" name="act" value="Send" />

            <br />
            <br />

            <select name="name">

                <option value="g">g</option>
                <option value="a">a</option>

            </select>

            <input type="checkbox" name="value[]" value="10" /> <span>10</span> 
            <input type="checkbox" name="value[]" value="20" /> <span>20</span>
            <input type="checkbox" name="value[]" value="30" /> <span>30</span>
            <input type="checkbox" name="value[]" value="40" /> <span>40</span>
            <input type="submit" name="sub" value="Send"     /> <span>  </span>

        </form>

        <br />
        <hr />

    </body>

</html>