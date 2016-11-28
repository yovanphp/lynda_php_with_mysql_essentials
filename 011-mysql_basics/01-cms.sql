CREATE TABLE subjects (
	id INT(11) NOT NULL AUTO_INCREMENT,
	menu_name VARCHAR(30) NOT NULL,
	position INT(3) NOT NULL,
	visible TINYINT(1) NOT NULL DEFAULT TRUE,
	PRIMARY KEY(id)
);

CREATE TABLE pages(
	id INT(11) NOT NULL AUTO_INCREMENT,
	subject_id INT(11) NOT NULL,
	menu_name VARCHAR(30) NOT NULL,
	position INT(3) NOT NULL,
	visible TINYINT(1) NOT NULL,
	content TEXT,
	PRIMARY KEY (id),
	INDEX (subject_id),
	creation_date DATETIME NOT NULL DEFAULT NOW(),
	modification_date DATETIME NOT NULL DEFAULT NOW()
);

DESCRIBE subjects;
DESCRIBE pages;

INSERT INTO subjects(menu_name, position, visible)
	VALUES('About Widget Corp', 1, TRUE);

/* We can either use TRUE or 1 for TINYINT = true */
INSERT INTO subjects(menu_name, position, visible)
	VALUES('Products', 2, 1);

/* Here visible should be set to 1 which is the default value */
INSERT INTO subjects(menu_name, position)
	VALUES('Services', 3);

INSERT INTO subjects(menu_name, position, visible)
	VALUES('Misc', 4, 0);

SELECT menu_name AS menu, position FROM subjects 
	WHERE visible = 1
	ORDER BY position desc;

UPDATE subjects
	SET visible = 1, menu_name = 'Miscellaneous'
WHERE id = 4;

DELETE FROM subjects 
WHERE id = 4;

ALTER TABLE subjects
ADD COLUMN created_at DATETIME NOT NULL DEFAULT now() AFTER visible;

ALTER TABLE subjects
ADD COLUMN modified_at DATETIME NOT NULL DEFAULT now() AFTER created_at;

SHOW COLUMNS FROM sujects;
DESCRIBE subjects;

ALTER TABLE subjects
CHANGE created_at creation_date DATETIME NOT NULL DEFAULT NOW();

ALTER TABLE subjects
CHANGE modified_at modification_date DATETIME NOT NULL DEFAULT NOW();

INSERT INTO pages (subject_id, menu_name, position, visible, content)
	VALUES (1, 'Our mission', 1, 1, 'Our mission has always been...');

INSERT INTO pages (subject_id, menu_name, position, visible, content)
	VALUES (1, 'Our history', 2, 1, 'Founded by two enterprising engineers...');

INSERT INTO pages (subject_id, menu_name, position, visible, content)
	VALUES (2, 'Large Widgets', 1, 1, 'Our large widgets have to be seen to be believed...');

INSERT INTO pages (subject_id, menu_name, position, visible, content)
	VALUES (2, 'Small Widgets', 2, 1, 'They say big things come in small packages...');

INSERT INTO pages (subject_id, menu_name, position, visible, content)
	VALUES (3, 'Retrofitting', 1, 1, 'We love to replace widgets...');

INSERT INTO pages (subject_id, menu_name, position, visible, content)
	VALUES (3, 'Small Widgets', 2, 1, 'We can certify any widget, not just our own...');

