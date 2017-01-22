yum install httpd
systemctl start httpd
systemctl enable httpd


#the mariadb stuff didn't work too well on centos 7
yum install mariadb-server mariadb
systemctl start mariadb
#mysql_secure_installation
systemctl enable mariadb


yum install php php-mysql


systemctl restart httpd
