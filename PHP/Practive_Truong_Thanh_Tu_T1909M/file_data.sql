DROP DATABASE Practive;
CREATE DATABASE Practive;
USE Practive;
CREATE TABLE users (
    'id' int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     'username' varchar(100) NOT NULL,
     'email' varchar(100) NOT NULL,
     'password' varchar(100) NOT NULL,
     'fullname' varchar(100) NOT NULL,
     'email'varchar(100) NOT NULL
 }
INSERT INTO users (ID,USERNAME,EMAIL,PASSWORD,FULLNAME) VALUES (1, 'NGUYENVANA123','NGUYENVANA123@GMAIL.COM', 'NGUYENVANA123', "NGUYEN VAN A" );
INSERT INTO users (ID,USERNAME,EMAIL,PASSWORD,FULLNAME) VALUES (2, 'NGUYENVANB123','NGUYENVANB123@GMAIL.COM', 'NGUYENVANB123', "NGUYEN VAN B" );
INSERT INTO users (ID,USERNAME,EMAIL,PASSWORD,FULLNAME) VALUES (3, 'NGUYENVANC123','NGUYENVANC123@GMAIL.COM', 'NGUYENVANC123', "NGUYEN VAN C" );
INSERT INTO users (ID,USERNAME,EMAIL,PASSWORD,FULLNAME) VALUES (4, 'NGUYENVAND123','NGUYENVAND123@GMAIL.COM', 'NGUYENVAND123', "NGUYEN VAN D" );
INSERT INTO users (ID,USERNAME,EMAIL,PASSWORD,FULLNAME) VALUES (5, 'NGUYENVANF123','NGUYENVANF123@GMAIL.COM', 'NGUYENVANF123', "NGUYEN VAN F" );