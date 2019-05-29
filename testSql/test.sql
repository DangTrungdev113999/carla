

DROP DATABASE IF EXISTS carla;
CREATE DATABASE carla CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE carla;
CREATE TABLE account (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL UNIQUE,
  phone varchar(50) NOT NULL,
  password varchar(100) NOT NULL,
  address varchar(100) NOT NULL,
  level tinyint(1) DEFAULT '0' COMMENT '0 la khách hàng, 1 là qu?n tr?',
  created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE category (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(100) NOT NULL UNIQUE,
  parent_id int(11) NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL DEFAULT '1',
  ordering int(11) NULL DEFAULT '0',
  created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE product (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(150) NOT NULL,
  image varchar(200) NOT NULL,
  content text NOT NULL,
  category_id int(11) NOT NULL,
  price int(11) NOT NULL,
  sale_price int(11) NOT NULL,
  status tinyint(1) NOT NULL DEFAULT '1',
  created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE product ADD 
FOREIGN KEY FK_PRODUDT_CATEGORY (category_id)
REFERENCES category(id);

CREATE TABLE product_image (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  product_id int NOT NULL,
  image varchar(200) NOT NULL,
  ordering int(11) NULL DEFAULT '0'
);

ALTER TABLE product_image ADD 
FOREIGN KEY FK_PRODUDT_IMAGE (product_id)
REFERENCES product(id);

CREATE TABLE orders (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	account_id int NULL DEFAULT '0',
	name varchar(100) NULL,
	email varchar(100) NULL,
	phone varchar(50) NULL,
	address varchar(100) NULL,
	status tinyint(1) DEFAULT '0' COMMENT '0 là chua duy?t, 1 là dã duy?t, 2 là dã giao hàng',
	created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE order_detail (
	order_id int NOT NULL,
	product_id int NOT NULL,
	quantity int NOT NULL,
	price int NOT NULL,
	PRIMARY KEY(product_id,order_id)
);

ALTER TABLE order_detail ADD 
FOREIGN KEY FK_PRODUDT_DETAIL (product_id)
REFERENCES product(id);

ALTER TABLE order_detail ADD 
FOREIGN KEY FK_ORDERS_DETAIL (order_id)
REFERENCES orders(id);

CREATE TABLE comments (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	account_id int NULL DEFAULT '0',
	product_id int NOT NULL,
	name varchar(100) NULL,
	email varchar(100) NULL,
	phone varchar(50) NULL,
	content text NOT NULL,
	status tinyint(1) DEFAULT '0' COMMENT '0 là chua duy?t, 1 là dã duy?t, 2 là dã giao hàng',
	created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE comments ADD 
FOREIGN KEY FK_COMMENT_PRODUCT (product_id)
REFERENCES product(id);

CREATE TABLE banner (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(200) NOT NULL,
	image varchar(200) NOT NULL,
	ordering int(11) NULL DEFAULT '0',	
	status tinyint(1) DEFAULT '0' COMMENT '0 là chưa duyệt, 1 là đã duyệt, 2 là đã giao hàng',
	created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	content text 
);

insert into banner(name, image, ordering, content)
	values('test1', 'girl-2.png', 2, 'deo co ahu hu')

CREATE TABLE post (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(200) NOT NULL,
	image varchar(200) NOT NULL,
	content text,	
	status tinyint(1) DEFAULT '0' COMMENT '0 là chua duy?t, 1 là dã duy?t, 2 là dã giao hàng',
	created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);
