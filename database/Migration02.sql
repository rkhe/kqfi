-- NEW CATEGORY; select * from product_categories
INSERT INTO product_categories (title, url, is_active, created) VALUES ('Christmas Hams', 'cat_chirstmashams.png', TRUE, NOW());

-- ADD isActive SELECT * FROM product_categories */
ALTER TABLE product_categories ADD COLUMN is_active BOOL NULL;
UPDATE product_categories SET is_active = TRUE;

-- create new table
CREATE TABLE product_packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    remarks VARCHAR(128), -- used for extra comments
    quantity DECIMAL (18,9),
    quantity_unit VARCHAR(10),
    price DECIMAL (18,9),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

ALTER TABLE product_packages ADD FOREIGN KEY (product_id) REFERENCES product(id);

-- INSERT NEW PRODUCTS; select * from products
INSERT INTO products (product_category_id, title, description, created) VALUES (7, 'Pi&ntilde;a Ham', 'Celebrate every traditional occasion with this savory pineapple-shaped ham! The Pi&ntilde;a Ham comes as in a festive package containing trimmed, skinless, hind leg that has been sweet-pickle-cured and glazed with caramelized brown sugar. A deliciously tender and juicy feast sure to tickle your taste buds.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (7, 'Pear Shaped Ham', 'Special occasions are made even more special with King\'s pear shaped ham to feast on. Packed with the highest quality meat, and savory spices and seasoning, this treat is bound to satisfy your appetite. It\'s a tradition you\'d never want to break.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (7, 'Chinese Ham', 'Here\'s an oriental mouth-watering favorite that\'s cured and smoked in the old traditional Chinese style. It\'s well cooked in glazing syrup of caramelized brown sugar that provides the sweet gustatory encore to the whole ensemble that\'s packed in a festive gift box.', NOW());


-- INSERT PRODUCT PACKAGES
INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (6, 1, 'kilograms', 400, NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (6, 950, 'grams', 380, NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (6, 900, 'grams', 360, NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (6, 850, 'grams', 340, NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (6, 800, 'grams', 320, NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (7, 1, 'kilograms', 212, NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (7, 750, 'grams', 172, NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (7, 500, 'grams', 123, NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, price, created) VALUES (8, 1, 'kilo', 800, NOW());
