aws lambda create-function --function-name api_gateway \
--zip-file fileb://function.zip --handler api_gateway.handler --runtime python3.8 \
--role arn:....