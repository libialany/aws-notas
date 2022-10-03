import boto3
from boto3.dynamodb.conditions import Key

dynamodb = boto3.resource('dynamodb', region_name='us-east-1')

table = dynamodb.Table('Anime') 

response= table.delete_item(Key={'episodes':24,'title':'Parasyte'})

print(response)