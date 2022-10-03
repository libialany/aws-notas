#!/bin/bash
aws lambda invoke --function-name api_gateway \
--payload file://input.txt outputfile.txt --cli-binary-format raw-in-base64-out