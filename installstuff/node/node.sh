#!/bin/bash

#https://www.digitalocean.com/community/tutorials/how-to-install-node-js-on-a-centos-7-server

wget http://nodejs.org/dist/v6.9.4/node-v6.9.4-linux-x64.tar.gz

sudo tar --strip-components 1 -xzvf node-v* -C /usr/local
