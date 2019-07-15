
DROP DATABASE IF EXISTS carla;
CREATE DATABASE carla CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE carla;
CREATE TABLE IF NOT EXISTS account (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL UNIQUE,
  phone varchar(50) NOT NULL,
  password varchar(100) NOT NULL,
  address varchar(100) NOT NULL,
  level tinyint(1) DEFAULT '0' COMMENT '0 is customer, 1 is admin',
  created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO account(name, email, phone, password, address, level) 
VALUES("trung", "trung@gmail.com", "01234", "123123", "hà nội",1),
("luan", "luan@gmail.com", "01234", "123123", "hà nội",1),
("Donald Trump", "khach@gmail.com", "123", "123", "hà nội",0);

CREATE TABLE IF NOT EXISTS category (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(100) NOT NULL UNIQUE,
  parent_id int(11) NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL DEFAULT '1',
  ordering int(11) NULL DEFAULT '0',
  created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO category(name, parent_id, ordering)
values('Man',0,1),
('Woman',0,2),
('shirt',1,3),
('dress',2,4),
('accessories',1, 5),
('trading',1,6),
('topRate',2,7);

CREATE TABLE IF NOT EXISTS product (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(150) NOT NULL,
  image varchar(200) NOT NULL,
  content text NOT NULL,
  category_id int(11) NOT NULL,
  price int(11) NOT NULL,
  sale_price int(11)  NULL,
  status tinyint(1) NOT NULL DEFAULT '1',
  created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE product ADD 
FOREIGN KEY FK_PRODUDT_CATEGORY (category_id)
REFERENCES category(id);

INSERT INTO product(name, image, content, category_id, price, sale_price)
values('Beige Sweater','product-1.jpg','this is the content',3, 290, 133),
('Pink Sweater','product-2.jpg','this is the content.',4, 100, 98),
('Gray Sweater','product-3.jpg','this is the content?',7, 130, 100),
('Denim Shirt','product-4.jpg','this is the content?',5, 125, 100),
('Black Skirt','product-5.jpg','this is the content.',5, 170, 155),
('Gray Sweater','product-6.jpg','this is the content!',6, 123, 69),
('Gray Sweater','product-7.jpg','this is the content!',7, 145, 122);



CREATE TABLE IF NOT EXISTS product_image (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  product_id int NOT NULL,
  image varchar(200) NOT NULL,
  ordering int(11) NULL DEFAULT '0'
);
ALTER TABLE product_image ADD 
FOREIGN KEY FK_PRODUDT_IMAGE (product_id)
REFERENCES product(id);

INSERT INTO product_image(product_id, image, ordering)
VALUES (1, 'team-1.jpg', 1),(1, 'team-2.jpg', 2),(1, 'team-3.jpg', 3),
(2, 'team-1.jpg', 1),(2, 'team-2.jpg', 2),(2, 'team-3.jpg', 3),
(3, 'team-1.jpg', 1),(3, 'team-2.jpg', 2),(3, 'team-3.jpg', 3),
(4, 'team-1.jpg', 1),(4, 'team-2.jpg', 2),(4, 'team-3.jpg', 3),
(5, 'team-1.jpg', 1),(5, 'team-2.jpg', 2),(5, 'team-3.jpg', 3),
(5, 'team-1.jpg', 1),(5, 'team-2.jpg', 2),(5, 'team-3.jpg', 3),
(7, 'team-1.jpg', 1),(7, 'team-2.jpg', 2),(7, 'team-3.jpg', 3);


CREATE TABLE IF NOT EXISTS attribute (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(150) NOT NULL unique,
	value varchar(150) NOT NULL,
	type varchar(150) not null,
	created timestamp not null default CURRENT_TIMESTAMP
);

INSERT INTO `attribute`(`name`, `value`, `type`) 
VALUES ('red','red','color'),
('green','green','color'),
('yellow','yellow','color'),
('blue','blue','color'),
('white','#ffe','color'),
('black','black','color'),
('pink','pink','color'),
('gray','gray','color'),
('purple','purple','color'),
('orange','orange','color'),
('Extra Small','xs','size'),
('Small','s','size'),
('Medium ','m','size'),
('Large ','l','size'),
('Extra Large','xl','size'),
('Extra Extra Large','xxl','size');


CREATE TABLE IF NOT EXISTS product_attribute (
	product_id int(11) not null  REFERENCES product(id),
    attribute_id int(11) not null REFERENCES attribute(id)
);

INSERT INTO product_attribute (product_id, attribute_id) values
(1, 1),(1, 2),(1, 3),(1, 4),(1, 5),(1, 6),(1, 11),(1, 12),(1, 13),(1, 14),(1, 15),(1, 16),
(2, 1),(2, 2),(2, 3),(2, 4),(2, 5),(2, 6),(2, 11),(2, 12),(2, 13),(2, 14),(2, 15),(2, 16),
(3, 1),(3, 2),(3, 3),(3, 4),(3, 5),(3, 6),(3, 11),(3, 12),(3, 13),(3, 14),(3, 15),(3, 16),
(4, 1),(4, 2),(4, 3),(4, 4),(4, 5),(4, 6),(4, 11),(4, 12),(4, 13),(4, 14),(4, 15),(4, 16),
(5, 1),(5, 2),(5, 3),(5, 4),(5, 5),(5, 6),(5, 11),(5, 12),(5, 13),(5, 14),(5, 15),(5, 16),
(6, 1),(6, 2),(6, 3),(6, 4),(6, 5),(6, 6),(6, 11),(6, 12),(6, 13),(6, 14),(6, 15),(6, 16),
(7, 1),(7, 2),(7, 3),(7, 4),(7, 5),(7, 6),(7, 11),(7, 12),(7, 13),(7, 14),(7, 15),(7, 16);


-- ===============================================
CREATE TABLE IF NOT EXISTS color (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(150) NOT NULL
);

CREATE TABLE IF NOT EXISTS size (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(150) NOT NULL
);

insert into color(name)
values('white'),('red'),('blue'),('yellow'),('green');
insert into size(name)
values('S'),('M'),('L'),('XL'),('XXL');

-- ======================================

CREATE TABLE IF NOT EXISTS orders (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	account_id int NULL DEFAULT '0',
	name varchar(100) NULL,
	email varchar(100) NULL,
	phone varchar(50) NULL,
	address varchar(100) NULL,
	status tinyint(1) DEFAULT '0' COMMENT '0 là chưa duyệt, 1 là đã duyệt, 2 là đã giao hàng',
	color_id int not null default '1',
	size_id int not null default '1',
	created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);
alter TABLE orders ADD
FOREIGN KEY FK_COLOR_DETAIL (color_id)
references color(id);
alter TABLE orders ADD
FOREIGN KEY FK_SIZE_DETAIL (size_id)
references size(id);

CREATE TABLE IF NOT EXISTS order_detail (
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

CREATE TABLE IF NOT EXISTS banner (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(200) NOT NULL,
	image varchar(200) NOT NULL,
	ordering int(11) NULL DEFAULT '0',	
	status tinyint(1) DEFAULT '0' COMMENT '0 là chưa duyệt, 1 là đã duyệt, 2 là đã giao hàng',
	created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	content text 
);

insert into banner(name, image, ordering, content)
	values('test1', 'girl-2.png', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicingue inventore us!');

CREATE TABLE IF NOT EXISTS post (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(200) NOT NULL,
	image varchar(200) NOT NULL,
	content text,	
	status tinyint(1) DEFAULT '0' COMMENT '0 là chua duy?t, 1 là dã duy?t, 2 là dã giao hàng',
	created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);


