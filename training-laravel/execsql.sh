#!/bin/bash
docker exec -it $1 mysql -u root -p sample -e"$2"