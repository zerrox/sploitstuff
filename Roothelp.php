<?php
echo "         _______________
        /               \
       /                 \
      /                   \
      |   XXXX     XXXX   |
      |   XXXX     XXXX   |
      |   XXX       XXX   |
      |         X         |
      \__      XXX     __/
        |\     XXX     /|
        | |           | |
        | I I I I I I I |
        |  I I I I I I  |
         \_           _/
          \_         _/
            \_______/

             SER JAG DÖD UT? :0000\n";
echo "Looking up kernal and Distro\n";
sleep(3);

system("uname -a"); // if something goes wrong, replace with "cat /proc/cpuinfo

echo "__________________END________________________\n";

echo "List files with permissions\n";
sleep(3);
system("ls -ail /");

echo "__________________END________________________\n";

echo "ID\n";

sleep(3);
system("id");

echo "__________________END________________________\n";

echo "Finding suid files\n";

system("find / -user root -perm -4000 -print");
sleep(3);

echo "__________________END________________________\n";

echo "Find SGID files\n";

sleep(3);
system("find / -group root -perm -2000 -print");

echo "__________________END________________________\n";

echo "Find Symlinks";
sleep(3);
system("find / -type l -ls");
echo "__________________END________________________\n";
echo "Check for cpu and processing units\n";
sleep(3);
system("lscpu");

echo "__________________END________________________\n";

echo "List Blockdevices\n";
sleep(3);
system("lsblk");
echo "__________________END________________________\n";
echo "Filesystems\n";
sleep(3);
system("mount | column -t");
echo "__________________END________________________\n";


?>
