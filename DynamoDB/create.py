import boto3

dynamodb = boto3.resource('dynamodb', region_name='us-east-1')

table = dynamodb.Table('Anime') 
# Create table
table = dynamodb.create_table(
    TableName='Anime', # Input table name
    KeySchema=[
        {
            'AttributeName': 'episodes', 
            'KeyType': 'HASH'  #Partition key
        },
        {
            'AttributeName': 'title',
            'KeyType': 'RANGE'  #Sort key
        }
    ],
    AttributeDefinitions=[
        {
            'AttributeName': 'episodes',
            'AttributeType': 'N'  # 'N' for number
        },
        {
            'AttributeName': 'title',
            'AttributeType': 'S'  # 'S' for string
        },

    ],
    ProvisionedThroughput={
        'ReadCapacityUnits': 10,
        'WriteCapacityUnits': 10
    }
)

print("Table status:", table.table_status) 