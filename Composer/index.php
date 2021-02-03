<?php 

    require 'vendor/autoload.php'; 

    use Carbon\Carbon;

    $tomorrow = Carbon :: now() -> addDay();
    
    echo date('d/m/Y', strtotime($tomorrow));

echo "<br><br>" . '==============================================' . "<br><br>";

    use FlyingLuscas\Correios\Client;
    use FlyingLuscas\Correios\Service;

    $correios = new Client;

    print_r($correios -> zipcode() -> find('88080-230'));

echo "<br>" . '==============================================' . "<br>";

    print_r($correios -> 
        freight() -> 
        origin('01001-000') ->
        destination('87047-230') ->
        services(Service :: SEDEX, Service :: PAC) ->
        item(16, 16, 16, .3, 1) ->
        calculate()
    );
