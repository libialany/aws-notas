 create an EFS
 
 modify SG add NFS 
 
 Inside a Instance

mount a volume

get a used volume like data >
>>/

>> data

>> ....

make a  copy 

``sudo mkdir /efs && sudo rsync -rav /data/* /efs``

umount that volume

``sudo umount /data``

configure structures

``sudo nano /etc/fstab`` 

add the efs direction, name of file , type, characteristics and default filled.

__10.0.0.241:/            /data    nfs4   nfsvers=4.1,rsize=1048576,wsize=1048576,hard,timeo=600,retrans=2,noresvport 0 0__

you can copy this from EFS

save those changes

It must seems like this
``
ubuntu@ip-10-0-0-102:~$ cat /etc/fstab 
LABEL=cloudimg-rootfs   /        ext4   defaults,discard        0 0
10.0.0.241:/            /data    nfs4   nfsvers=4.1,rsize=1048576,wsize=1048576,hard,timeo=600,retrans=2,noresvport 0 0
``
and then mount /data

> sudo mount -a

verify:

> df -h

😩 It looks too bad

