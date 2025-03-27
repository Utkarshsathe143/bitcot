#!/bin/bash
docker pull 605134465910.dkr.ecr.eu-north-1.amazonaws.com/namespace/bitcot:latest
docker stop bitcot || true
docker rm bitcot || true
docker run -d -p 80:80 --env-file /home/ec2-user/php-app/.env 605134465910.dkr.ecr.eu-north-1.amazonaws.com/namespace/bitcot:latest
