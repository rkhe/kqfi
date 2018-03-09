/* CREATE DATABASE */
-- CREATE DATABASE kingsfoods;
USE kingsfoods;

/* POSTS (for news and others */
CREATE TABLE post_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

/* Then insert some posts for testing: */
INSERT INTO post_categories (title,created) VALUES ('News', NOW());
INSERT INTO post_categories (title,created) VALUES ('Promo', NOW());
INSERT INTO post_categories (title,created) VALUES ('Manager', NOW());

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_category_id INT,
    title VARCHAR(50),
    body TEXT,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

ALTER TABLE posts ADD FOREIGN KEY (post_category_id) REFERENCES post_categories(id);

/* Then insert some posts for testing: */
INSERT INTO posts (post_category_id,title,body,created)
    VALUES (2, 'SEASON''S PROMOTION', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porta at erat ac bibendum. Proin viverra libero id est consequat congue...', NOW());
INSERT INTO posts (post_category_id,title,body,created)
    VALUES (1, 'BE A KING''S DEALER', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porta at erat ac bibendum. Proin viverra libero id est consequat congue...', NOW());
INSERT INTO posts (post_category_id,title,body,created)
    VALUES (1, 'Manager''s Corner', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porta at erat ac bibendum. Proin viverra libero id est consequat congue. Integer vehicula in mi at aliquam...', NOW());
    
/* products */
CREATE TABLE product_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    url VARCHAR(128),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_category_id INT,
    title VARCHAR(50),
    description TEXT,
    url VARCHAR(128),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL,
    
    FOREIGN KEY (product_category_id) REFERENCES product_categories(id)
);

/* INSERT PRODUCT CATEGORY */
INSERT INTO product_categories (title, url, created) VALUES ('Hams', 'cat_hams.png', NOW());
INSERT INTO product_categories (title, url, created) VALUES ('Sausages', 'cat_sausages.png', NOW());
INSERT INTO product_categories (title, url, created) VALUES ('Cold Cuts', 'cat_coldcuts.png', NOW());
INSERT INTO product_categories (title, url, created) VALUES ('Patties', 'cat_patties.png', NOW());
INSERT INTO product_categories (title, url, created) VALUES ('Dried Products', 'cat_driedproducts.png', NOW());
INSERT INTO product_categories (title, url, created) VALUES ('IQF Products', 'cat_iqfproducts.png', NOW());

/* INSERT PRODUCTS */
/* HAMS */
INSERT INTO products (product_category_id, title, description, url, created) 
	VALUES (1, 'Chicken Ham', 'Description here...', '', NOW());
INSERT INTO products (product_category_id, title, description, url, created) 
	VALUES (1, 'Cooked Ham', 'Description here...', '', NOW());
INSERT INTO products (product_category_id, title, description, url, created) 
	VALUES (1, 'Luncheon Meat', 'Description here...', 'luncheonmeat.jpg', NOW());
INSERT INTO products (product_category_id, title, description, url, created) 
	VALUES (1, 'Meat Loaf', 'Description here...', 'meatloaf.jpg', NOW());
INSERT INTO products (product_category_id, title, description, url, created) 
	VALUES (1, 'Spiced Ham', 'Description here...', 'spicedham.jpg', NOW());

/* SAUSAGES */

/* COLD CUTS */

/* PATTIES */

/* DRIED PRODUCTS */

/* IQF PRODUCTS */







 