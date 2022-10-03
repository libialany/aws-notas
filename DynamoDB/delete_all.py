import boto3
from boto3.dynamodb.conditions import Key

client=boto3.client('dynamodb',region_name="us-east-1")

try:
    resp=client.delete_table(TableName="Anime")
    print("Table Successfully Deleted")
except Exception as e:
    print("Error deleting Table")
    print(e)