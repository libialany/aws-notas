from __future__ import print_function

import boto3
import json
from boto3.dynamodb.conditions import Key

def lambda_handler(event, context):
    operation = event['operation']

    if 'tableName' in event:
        dynamo = boto3.resource('dynamodb').Table(event['tableName'])

    operations = {
        'create': lambda x: dynamo.put_item(**x),
        'list': lambda x: dynamo.scan(**x)
    }

    if operation in operations:
        return operations[operation](event.get('payload'))
    else:
        raise ValueError('Unrecognized operation "{}"'.format(operation))