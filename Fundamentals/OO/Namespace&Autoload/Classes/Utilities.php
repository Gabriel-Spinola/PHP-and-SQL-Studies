<?php 

use Home\Initial;

class Utilities
{
    function __construct() 
    {
        new Initial();

        echo 'The utilities class has been called with success!' . "<br> \n";
    }
}