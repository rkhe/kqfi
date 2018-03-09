INSERT INTO post_categories (title, created) VALUES ('Home Banner', NOW());
INSERT INTO post_categories (title, created) VALUES ('News Banner', NOW());
INSERT INTO post_categories (title, created) VALUES ('Product Banner', NOW());

-- Home Banner
INSERT INTO posts (post_category_id, title, body, is_show, image_url, created) VALUES (4, 'Home Banner 01', 'This shows at home page', TRUE, 'banner01.png', NOW());

-- News Banner
INSERT INTO posts (post_category_id, title, body, is_show, image_url, created) VALUES (5, 'News Banner 01', 'This shows at news page', TRUE, 'banner_page_promotion01.png', NOW());
INSERT INTO posts (post_category_id, title, body, is_show, image_url, created) VALUES (5, 'News Banner 02', 'This shows at news page', TRUE, 'banner_page_promotion02.png', NOW());
INSERT INTO posts (post_category_id, title, body, is_show, image_url, created) VALUES (5, 'News Banner 03', 'This shows at news page', TRUE, 'banner_page_promotion03.png', NOW());
INSERT INTO posts (post_category_id, title, body, is_show, image_url, created) VALUES (5, 'News Banner 04', 'This shows at news page', TRUE, 'banner_page_promotion04.png', NOW());
INSERT INTO posts (post_category_id, title, body, is_show, image_url, created) VALUES (5, 'News Banner 05', 'This shows at news page', TRUE, 'banner_page_promotion05.png', NOW());

-- Product Banner
INSERT INTO posts (post_category_id, title, body, is_show, image_url, created) VALUES (6, 'Product Banner 01', 'This shows at products page', TRUE, 'banner_product01.png', NOW());