import boto3
dynamodb=boto3.resource('dynamodb', region_name='us-east-1')


table=dynamodb.Table('Anime')

with table.batch_writer() as batch:
    batch.put_item(Item={"episodes": 366, "title": "Bleach"})
    batch.put_item(Item={"episodes": 100, "title": "Seven Deadly Sins"})
    batch.put_item(Item={"episodes": 24, "title": "Tokyo Ghoul"})
    batch.put_item(Item={"episodes": 24, "title": "One Punch Man"})
    batch.put_item(Item={"episodes": 26, "title": "Demon Slayer"})
    batch.put_item(Item={"episodes": 1115, "title": "Pokemon"})
    batch.put_item(Item={"episodes": 24, "title": "Parasyte"})
    batch.put_item(Item={"episodes": 73, "title": "Sword Art Online"})
    batch.put_item(Item={"episodes": 86, "title": "Attack on Titan"})
    batch.put_item(Item={"episodes": 37, "title": "Death Note"})
    
print(batch)