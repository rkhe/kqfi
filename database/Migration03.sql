-- select * from posts
ALTER TABLE posts ADD COLUMN is_show BOOL NULL;
UPDATE posts SET is_show = 1;
UPDATE posts SET post_category_id = 3 WHERE id = 3; -- manager's corner


-- Create User table
/*Table structure for table `cake_sessions` */
DROP TABLE IF EXISTS `cake_sessions`;
CREATE TABLE `cake_sessions` (
  `id` VARCHAR(255) NOT NULL DEFAULT '',
  `data` TEXT,
  `expires` INT(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

/*Table structure for table `users` */
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) DEFAULT NULL,
  `password` VARCHAR(40) DEFAULT NULL,
  `last_login` DATETIME DEFAULT '0000-00-00 00:00:00',
  `created` DATETIME DEFAULT NULL,
  `modified` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO users (username, PASSWORD, last_login, created) VALUES ('admin', '0adaa46ff18a3cf3967a542c2f3783b8', '0000-00-00 00:00:00', NOW());
INSERT INTO users (username, PASSWORD, last_login, created) VALUES ('rkhe', '11f2a09b333b50a8af62be56e6737263', '0000-00-00 00:00:00', NOW());