yum install httpd
systemctl start httpd
systemctl enable httpd


yum install mariadb-server mariadb
systemctl start mariadb
mysql_secure_installation
systemctl enable mariadb


yum install php php-mysql


systemctl restart httpd
