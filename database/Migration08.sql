-- update product_categories set sequence = 3 where title = ''

ALTER TABLE product_categories ADD COLUMN settings VARCHAR(255);

UPDATE product_categories SET sequence = 2, settings = '0,0,425,350' WHERE title = 'Sausages';
UPDATE product_categories SET sequence = 3, settings = '425,0,703,350' WHERE title = 'Hotdogs';
UPDATE product_categories SET sequence = 4, settings = '703,0,980,350' WHERE title = 'Hams';
UPDATE product_categories SET sequence = 5, settings = '0,350,425,700' WHERE title = 'Cold Cuts';
UPDATE product_categories SET sequence = 6, settings = '0,350,578,700' WHERE title = 'Patties';
UPDATE product_categories SET sequence = 7, settings = '0,350,737,700' WHERE title = 'Dried Products';
UPDATE product_categories SET sequence = 8, settings = '0,350,980,700' WHERE title = 'IQF Products';

