<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>JSON</title>

    </head>

    <body>
        
        <script src="jquery-3.5.1.min.js"></script>

        <script>
        
            $(function() { 
                $.ajax({
                    url: 'request.php',
                    dataType: 'json'
                }).done((data) => {
                    console.log(data.nome)
                })
            })

        </script>

    </body>

</html>