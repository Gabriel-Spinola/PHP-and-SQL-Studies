<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>std Part 3.5</title>

    </head>

    <body>

        <?php 
        
        #tring Functions >->

            $content = 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at leo interdum, sollicitudin dolor et, fermentum est. Vivamus nec eros quis ante ultricies lobortis id et eros. Donec egestas ultrices mi, quis semper leo tristique at. Vestibulum ut hendrerit dui. Ut porta enim a neque molestie condimentum. Sed vitae eleifend odio, eget suscipit felis. Fusce ut cursus dui, at tincidunt neque. Sed porta velit vitae egestas hendrerit. Pellentesque id velit interdum, varius nisi in, accumsan turpis. Duis eu augue tellus.';

            //cut strings
            echo substr($content, 0, 21)."<br />"."<br />";
            // 2 parameter where start, 3 parameter how many lines you want\\

            $name = 'joa do bairro';

            $names = explode(' ', $name); // get the words and organize them into an array

            print_r($names); // used to see arrays

            echo "<br />"."<br />";

            $names = implode(' ', $names);

            echo $names."<br />"."<br />";

            $content1 = "<h1>GAB</h1> Another thing";

            // Remove html tags
            echo strip_tags($content1)."<br />"."<br />";

            //show the html tags
            echo htmlentities("<div></div>");

        #Pragma end --<

        echo "<br />"."<br />"."<hr />"."<br/>";

        #Array Functions >->

            $array1 = ['color' => 'red', 2, 4];
            $array2 = ['a', 'b', 'color' => 'green', 'form' => 'rect', 4];

            $result = array_merge($array1, $array2); //unify two arrays.
            print_r($result);

            echo "<br />"."<br />";

            $arr1 = ['key1' => 'value1', 'key2' => 'value2'];
            $arr2 = ['key3' => 'value3', 'key4' => 'value4'];

            $result2 = array_merge($arr1, $arr2);
            print_r($result2);

            echo "<br />"."<br />";

            $ar1 = ['A' => '1', 'B' => '2'];
            $ar2 = ['A' => '1', 'D' => '4'];

            print_r(array_intersect($ar1, $ar2)); //return the same value in two identical keys.

            $array_ = ["<p>gas</p>", 'joa', "<h1>fab</h1>"];

            print_r(array_map('strip_tags', $array_));

        #Pragma end --<

        ?>
        
    </body>
</html>