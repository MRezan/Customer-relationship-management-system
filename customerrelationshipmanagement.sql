CREATE TABLE `user` (user_id int(11) NOT NULL AUTO_INCREMENT, user_name varchar(255) NOT NULL, user_type varchar(255) NOT NULL, user_email varchar(100) NOT NULL UNIQUE, user_address varchar(255) NOT NULL, user_phn_number varchar(255), user_password varchar(1000) NOT NULL, user_image varchar(1000), PRIMARY KEY (user_id));
CREATE TABLE messages (message_id int(11) NOT NULL AUTO_INCREMENT, msg varchar(1000), user_type varchar(255) NOT NULL, user_id int(11) NOT NULL, product_id int(11) NOT NULL, PRIMARY KEY (message_id));
CREATE TABLE products (product_id int(11) NOT NULL AUTO_INCREMENT, product_name varchar(255) NOT NULL, product_details varchar(1000) NOT NULL, product_price float NOT NULL, product_image varchar(1000) NOT NULL, product_category varchar(255) NOT NULL, PRIMARY KEY (product_id));
CREATE TABLE cart (useruser_id int(11) NOT NULL, productsproduct_id int(11) NOT NULL, cart_id int(11) NOT NULL, PRIMARY KEY (useruser_id, productsproduct_id, cart_id));
ALTER TABLE cart ADD INDEX FKcart829142 (useruser_id), ADD CONSTRAINT FKcart829142 FOREIGN KEY (useruser_id) REFERENCES `user` (user_id);
ALTER TABLE cart ADD INDEX FKcart245663 (productsproduct_id), ADD CONSTRAINT FKcart245663 FOREIGN KEY (productsproduct_id) REFERENCES products (product_id);
ALTER TABLE messages ADD INDEX FKmessages761275 (user_id), ADD CONSTRAINT FKmessages761275 FOREIGN KEY (user_id) REFERENCES `user` (user_id);
ALTER TABLE messages ADD INDEX FKmessages164222 (product_id), ADD CONSTRAINT FKmessages164222 FOREIGN KEY (product_id) REFERENCES products (product_id);
