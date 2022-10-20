create a HA VPC 

![set](https://github.com/libialany/aws-notas/blob/main/VPC/HA/intro.png)

1. Create a VPC:

10.20.0.0/16:LabVPC

2. Create 4 Subnets

Public Subnets

LabPVCPublicA:10.20.1.0/24

LabPVCPublicB:10.20.2.0/24

Private Subnets

LabPVCPrivateA:10.20.3.0/24

LabPVCPrivateB:10.20.3.0/24


create internet gateway

ig-LabVPC

create RT:

Public 

Associate LabPVCPublicA y LabPVCPublicB

Add in the inboud rules ig-LabVPC

Private 

Associate LabPVCPrivateA y LabPVCPrivateB

Crear SG 

Public 

Inbound rules HTTPS

sgLabVPCPublic

Private 

Inbound rules HTTPS,SSH

sgLabVPCPrivate

Crear un VPC Flow Log

FLogLabVPC

ARN bucket:
