
# create database csonline default character set utf8;
# grant all on csonline.* to csonline@'localhost' identified by 'moocsRus';
# grant all on csonline.* to csonline@'127.0.0.1' identified by 'moocsRus';

CREATE TABLE Users (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY, 
  email VARCHAR(999) NOT NULL, 
  first VARCHAR(1024) NOT NULL, 
  last VARCHAR(1024) NOT NULL, 
  twitter VARCHAR(32), 
  privacy INT,
  subscribe INT,
  role INT,
  lat VARCHAR(128), 
  lng VARCHAR(128),
  homepage VARCHAR(1024), 
  blog VARCHAR(1024), 
  avatar VARCHAR(1024), 
  avatarlink VARCHAR(1024), 
  comment VARCHAR(2048), 
  created_at DATETIME NOT NULL,
  modified_at DATETIME NOT NULL,
  login_at DATETIME NOT NULL,
  login_ip VARCHAR(999) NOT NULL,
  identity VARCHAR(999) NOT NULL,
  identitysha VARCHAR(64) NOT NULL,
  emailsha VARCHAR(64) NOT NULL
);

alter table Users Add UNIQUE(identitysha);
alter table Users Add UNIQUE(emailsha);

CREATE INDEX UsersIdentity ON Users(identity);
CREATE INDEX UsersEmail ON Users(email);

CREATE TABLE Courses (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY, 
  code VARCHAR(32) NOT NULL,
  title VARCHAR(1024) NOT NULL, 
  start_at DATETIME NOT NULL,
  end_at DATETIME NOT NULL,
  consumer_key VARCHAR(1024) NOT NULL,
  consumer_secret VARCHAR(1024) NOT NULL
);

CREATE TABLE Enrolment (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY, 
  course_id INT,
  user_id INT,
  role INT,
  grade DOUBLE,
  enroll_at DATETIME NOT NULL,
  launch_at DATETIME NOT NULL
);


