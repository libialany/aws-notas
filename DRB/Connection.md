===========SSH Tuneling==============

In AWS:

Create an ec2 instance with an public ipv4 and allow rule to ssh from you  anywhere.
important: install failban in your ec2.

Create an RDS in the same VPC as the ec2 , in th e inbound rules configura the default rule  like:

![set](https://github.com/libialany/aws-notas/blob/main/DRB/last-set.png)

look at the source ,which is the private IP of the EC2 instance.

In your Machine:

create ssh connection:


ssh -N -L "3306:&lt;endpoint-database-rds&gt;:3306" &lt;user-of-ec2&gt;@&lt;ec2-public-ip&gt; -i "&lt;ssh-key&gt;"

in security settings of your rdb  you find end-point.

user-of-ec2 for default is like ec2-user

===========SSH Tuneling==============
