-- CHRISTMAS HAMS
INSERT INTO products (product_category_id, title, description, created) VALUES (7, 'Ball Ham', 'Round ham in semi-emulsion form cured and seasoned with spices to give delicate ham flavor.', NOW());
UPDATE products SET description = 'Pinkish molded ham in semi-emulsion form cured and seasoned with spices to give delicate ham flavor.' WHERE id = 7;
UPDATE products SET description = 'Rounded whole musscle hams with brown to golden brown colors, cured and seasoned with spices to give a delicate ham and  pineapple flavor.' WHERE id = 6;
UPDATE products SET description = 'Brown colored ham in whole cut or mini-cut ham legs,cured with salt and seasoned with spices to give delicate ham flavor' WHERE id = 8;

-- HAMS
UPDATE products SET description = 'Pink moulded ham in emulsion form, seasoned with spices to give a delicate chicken ham flavor.' WHERE id = 1;
UPDATE products SET description = 'Pinkish red moulded ham in semi-emulsion form, cured and seasoned with spices to give delicate ham flavor.' WHERE id = 2;
UPDATE products SET description = 'Light pink semi-emulsified product,seasoned with spices to give a pleasing aroma and taste.' WHERE id = 3;
UPDATE products SET description = 'Pink semi-emulsified product, seasoned with spices to give pleasing aroma and taste.' WHERE id = 4;
UPDATE products SET description = 'Brigth pinkish red semi-emulsified product,seasoned with a distinct spicy flavored and molded into square loaf and sliced uniformly.' WHERE id = 5;

-- SAUSAGES
INSERT INTO products (product_category_id, title, description, created) VALUES (2, 'Chorizo Cebuano', 'Pinkish red semi-emulsified product, seasoned with a distinct sweet and spicy flavor', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (2, 'Chorizo Pinoy', 'Orange brown with very few fine dark speckles, semi-emulsified meat.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (2, 'Longaniza Hamonada', 'Light brown,semi-emulsified meat,spiced,stuffed and smoked in an edible collagen casing.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (2, 'Hotdog Classic', 'Dark Brownish emulsion,stuffed in red cellulose casing.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (2, 'Hotdog Franks', 'Light pinkish brown emulsion seasoned with spices,stuffed in clear cellulose casing.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (2, 'Royal Hotdog', 'Cherry red emulsified,stuffed in a cellulose red casing with spicy flavor and with a pleasing smoky odor.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (2, 'Royal Jumbo', 'Cherry red emulsified,stuffed in a cellulose red casing with spicy flavor and with a pleasing smoky odor.', NOW());

-- COLD CUTS
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Bacon Premium', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Bacon Regular', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Bacon Bits', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Corned Beef', 'Strips of cured and pleasingly seasoned beef,purplish red in color and pack in thin slices.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Lumpia Shanghai', 'Ground pork seasoned with spices,rolled with off white lumpia wrapper.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Meat Balls', 'Ground pork seasoned with spices.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Pork Tocino', 'Orange red, thinly sliced premium pork cured and seasoned to attain a pleasing distinct spicy flavor.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Siomai', 'Ground pork seasoned with spices, rolled with off white siomai wrapper.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (3, 'Chicken Balls', 'Ground chicken seasoned with spices.', NOW());

-- DRIED PRODUCTS
INSERT INTO products (product_category_id, title, description, created) VALUES (5, 'Chorizo Macao Original', 'Reddish brown to brown dried sausage,cured and seasoned with spices.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (5, 'Beef Tapa', 'Thin dried sheets of beef lean, reddish brown in color, cured and seasoned with spices and condiments.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (5, 'Pork Tapa', 'Thin dried sheets of pork lean, reddish brown in color, cured and seasoned with spices and condiments.', NOW());

-- PATTIES
INSERT INTO products (product_category_id, title, description, created) VALUES (4, 'Chicken Burger', 'Yellowish to light brown circular mixed ground chicken with spices to give a chicken taste and aroma.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (4, 'Hamburger Patties', 'Ligth brown circular mixed gorund meat with spices to give a meaty spicy taste and aroma.', NOW());

-- IQF PRODUCTS
INSERT INTO products (product_category_id, title, description, created) VALUES (6, 'IQF Chicken Longaniza', 'Very light brown semi-emulsified meat,spiced to give a delicate chicken flavoir,stuffed and smoked in an edible collagen casing.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (6, 'IQF Royal Hotdog', 'Cherry red emulsified,stuffed in a cellulose red casing with spicy flavor and with a pleasing smoky odor.', NOW());
INSERT INTO products (product_category_id, title, description, created) VALUES (6, 'IQF Pear Shaped Ham', 'Pinkish brown  molded ham in semi-emulsion form cured and seasoned with spice to give delicate ham flavor.', NOW());


/* UPDATE product_package */

-- CHRISTMAS HAMS
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (9, 800, 'grams', '', NOW());

-- HAMS
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (1, 1, 'kilograms', '32 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (1, 250, 'grams', '10 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (2, 1, 'kilograms', '27-28 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (2, 250, 'grams', '8 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (3, 1, 'kilograms', '40 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (3, 250, 'grams', '8 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (4, 1, 'kilograms', '30 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (4, 250, 'grams', '10 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (5, 1, 'kilograms', '36-38 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (5, 250, 'grams', '10 pieces', NOW());

-- SAUSAGES
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (10, 1, 'kilograms', '40 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (10, 250, 'grams', '10 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (11, 1, 'kilograms', '48-49 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (11, 250, 'grams', '12 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (12, 1, 'kilograms', '42-44 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (12, 250, 'grams', '12 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (13, 1, 'kilograms', '25 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (13, 200, 'grams', '5 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (14, 1, 'kilograms', '25 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (14, 200, 'grams', '5 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (15, 1, 'kilograms', '52-53 pieces', NOW());
INSERT INTO product_packages (product_id, quantit`product_packages`Y, quantity_unit, remarks, created) VALUES (15, 200, 'grams', '13 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (16, 1, 'kilograms', '25 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (16, 250, 'grams', '6 pieces', NOW());

-- COLD CUTS
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (17, 1, 'kilograms', '', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (17, 250, 'grams', '', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (18, 1, 'kilograms', '', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (18, 250, 'grams', '', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (19, 1, 'kilograms', '', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (19, 250, 'grams', '', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (20, 1, 'kilograms', '', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (20, 250, 'grams', '', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (21, 1, 'kilograms', '50 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (21, 250, 'grams', '10 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (21, 160, 'grams', '8 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (22, 1, 'kilograms', '50 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (22, 200, 'grams', '10 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (23, 1, 'kilograms', '', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (23, 250, 'grams', '', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (24, 1, 'kilograms', '48 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (24, 250, 'grams', '12 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (25, 1, 'kilograms', '72 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (25, 170, 'grams', '12 pieces', NOW());

-- DRIED PRODUCTS
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (26, 1, 'kilograms', '19-21 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (26, 400, 'grams', '8-9 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (26, 160, 'grams', '4 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (27, 100, 'grams', '-', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (28, 80, 'grams', '-', NOW());

-- PATTIES
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (29, 1, 'kilograms', '32 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (29, 250, 'grams', '8 pieces', NOW());

INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (30, 1, 'kilograms', '32 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (30, 250, 'grams', '8 pieces', NOW());

-- IQF PRODUCTS
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (31, 250, 'grams', '12 pieces', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (32, 250, 'grams', '13 pcs regular, 6 pcs Jumbo', NOW());
INSERT INTO product_packages (product_id, quantity, quantity_unit, remarks, created) VALUES (33, 1, 'kilograms', '8 pieces', NOW());
