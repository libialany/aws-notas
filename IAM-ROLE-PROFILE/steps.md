### **configure aws cli**
aws configure 
### **create role**
aws  iam create-role --role-name PROD_ROLE --assume-role-policy-document file://trust_policy.json
### **create policy**
aws iam create-policy --policy-name ProdS3ReadAccess --policy-document file://prod_s3_read_access.json

_Save the ARN showed ->arn:aws:iam::650275248637:policy/ProdS3ReadAccess_

### **attach role to policy**
aws iam attach-role-policy --role-name PROD_ROLE --policy-arn "arn:aws:iam::650275248637:policy/ProdS3ReadAccess"
### **create a profile**
aws iam create-instance-profile  --instance-profile-name PROD_PROFILE
### **attach role to profile**
aws iam add-role-to-instance-profile --instance-profile-name PROD_PROFILE --role-name PROD_ROLE

### **list changes**

aws iam get-instance-profile --instance-profile-name PROD_PROFILE

### **associate profile to ec2**

### **the id of ec2:i-06846c8e00c8ebac3**

aws ec2 associate-iam-instance-profile --instance-id i-06846c8e00c8ebac3 --iam-instance-profile  Name="PROD_PROFILE"

aws ec2 describe-instances --instance-ids i-06f387e250fa0715a
