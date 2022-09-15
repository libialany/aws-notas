DataStorages

=>s3 

¿What is Replication Rule feature supported by AWS S3?

Ans:  

**Replication rules allows us to replicate the data to a secondary region so that AWS classes can continuously allow our users  and customers to access the data.**

=>Glaciar 

Amazon Glacier is designed for: 

A. active database storage.

**B. infrequently accessed data.**

**C. data archives.**

D. frequently accessed data.

E. cached session data.

[Glaciar](https://awstrainingandcertification.s3.amazonaws.com/production/AWS_certified_solutions_architect_associate_examsample.pdf)

=>Elastic Block Storage

¿You need to support a cluster of instances that will host a high-volume, high-load Oracle database installation. You cannot use RDS because of a custom plug-in that the database instances require. Which EBS volume type should you choose for the instances?

A. Cold HDD

B. Throughput Optimized HDD

C. General Purpose SSD

**D. Provisioned IOPS SSD**

[EBS questions](https://t3chflicks.medium.com/aws-solutions-architect-quiz-2-s3-ec2-ebs-173d40515dd)

=> Elastic File System

¿AWS uses NFS protocol for EFS. Is NFS is an encrypted protocol?

Ans: NFS uses DES to encrypt a time stamp in the remote procedure call (RPC) messages sent between NFS servers and clients.

[EFS Questions](https://suleymanyildirim.org/aws/aws-certified-solutions-architect-efs-study-questions/)


=> Storage Gateway

1. A company currently hosts a lot of data on their On-premises location. 

They want to start storing backups of this data on AWS. How can this be achieved in the most efficient way possible?

A. Create EBS Volumes and store the data.

B. Create EBS Snapshots and store the data.

C. Make use of Storage Gateway Stored volumes.

D. Make use of Amazon Glacier.

[ebs questions](https://ahireharshal.com/cloud/aws-storage-gateway/)

**Plus**

1) You host a static website in an S3 bucket and there are global clients from multiple regions.
You want to use an AWS service to store cache for frequently accessed content so that the latency 
is reduced and the data transfer rate is increased. Which of the following options would you choose? 

"cache is a high-speed data storage layer that stores a subset of data, usually temporally(transient)"

A. Use AWS SDKs to horizontally scale parallel requests to the Amazon S3 service endpoints.
F>AWS interact with programing languages, not apply fr cache
B. Create multiple Amazon S3 buckets and put Amazon EC2 and S3 in the same AWS Region.
F> Not apply .
C. Enable Cross-Region Replication to several AWS Regions to serve customers from different locations.
F> Not working with the cache.
D. Configure CloudFront to deliver the content in the S3 bucket.
T> I read a feacture of S3 was CloundFront ,and Cloudfront deals with  the content delivery.

