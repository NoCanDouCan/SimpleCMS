db erstellen
tabelle anlegen

use cms;
add table user 

CREATE DATABASE cms;
use cms;
CREATE TABLE user (userid int AUTO_INCREMENT PRIMARY KEY, username varchar(255),password X, isadmin ?);
CREATE TABLE page (pageid int AUTO_INCREMENT PRIMARY KEY, name varchar(255), link varchar(255), skinid int);
CREATE TABLE skin (skinid int AUTO_INCREMENT PRIMARY KEY, name varchar(255), filename varchar(255));