-- ALTER product_categories
ALTER TABLE product_categories ADD Sequence INT NULL

-- INSERT NEW PRODUCT CATEGORY
INSERT INTO product_categories (title, url, created, is_active) 
VALUES ('Hotdogs', '', CURDATE(), 0)

DECLARE @hotdogsCatId INT = mysql_insert_id();

UPDATE product_categories SET Sequence = 1 WHERE id = 7
UPDATE product_categories SET Sequence = 2 WHERE id = 2
UPDATE product_categories SET Sequence = 3 WHERE id = 1
UPDATE product_categories SET Sequence = 4 WHERE id = @hotdogsCatId
UPDATE product_categories SET Sequence = 5 WHERE id = 3
UPDATE product_categories SET Sequence = 6 WHERE id = 4
UPDATE product_categories SET Sequence = 7 WHERE id = 5
UPDATE product_categories SET Sequence = 8 WHERE id = 6

-- ADD NEW COLUMN code
ALTER TABLE



-- INSERT NEW PRODUCT



