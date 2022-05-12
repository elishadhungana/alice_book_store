USERS TABLE
----------------------------------
CREATE TABLE `alicebooks`.`users` ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
     `first_name` VARCHAR(50) NOT NULL ,
     `last_name` VARCHAR(50) NOT NULL ,
     `email` VARCHAR(80) NOT NULL ,
     `phone_number` VARCHAR(11) NOT NULL ,
     `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


BOOK PRODUCT TABLE
-----------------------------------
CREATE TABLE `alicebooks`.`book_product` ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(255) NOT NULL , `product_price` VARCHAR(255) NOT NULL , `product_image` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

STATIONERIES PRODUCT TABLE
-----------------------------------
CREATE TABLE `alicebooks`.`stationeries_product` ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(255) NOT NULL , `product_price` VARCHAR(255) NOT NULL , `product_image` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

OFFICE ITEM PRODUCT TABLE
-----------------------------------
CREATE TABLE `alicebooks`.`office_item_product` ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(255) NOT NULL , `product_price` VARCHAR(255) NOT NULL , `product_image` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

FEEDBACK TABLE
----------------------------------
CREATE TABLE `alicebooks`.`feedback` ( `id` INT NOT NULL AUTO_INCREMENT , `full_name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `subject` VARCHAR(255) NOT NULL , `message` LONGTEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
