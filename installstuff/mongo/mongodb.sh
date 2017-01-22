#!/bin/bash

#https://docs.mongodb.com/manual/tutorial/install-mongodb-on-red-hat/

cp ./mongodb.repo /etc/yum.repos.d/

yum update

yum install -y mongodb-org
