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

CREATE TABLE admins(
	id INT(11) NOT NULL AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL,
	hashed_password VARCHAR(60) NOT NULL,
	PRIMARY KEY (id)
);

DESCRIBE subjects;
DESCRIBE pages;

INSERT INTO subjects(menu_name, position, visible) VALUES('About Widget Corp', 1, TRUE);
INSERT INTO subjects(menu_name, position, visible) VALUES('Products', 2, 1);
INSERT INTO subjects(menu_name, position) VALUES('Services', 3);
INSERT INTO subjects(menu_name, position, visible) VALUES('Misc', 4, 0);

INSERT INTO pages (subject_id, menu_name, position, visible, content) VALUES (1, 'Our mission', 1, 1, 'Our mission has always been...');
INSERT INTO pages (subject_id, menu_name, position, visible, content) VALUES (1, 'Our history', 2, 1, 'Founded by two enterprising engineers...');
INSERT INTO pages (subject_id, menu_name, position, visible, content) VALUES (2, 'Large Widgets', 1, 1, 'Our large widgets have to be seen to be believed...');
INSERT INTO pages (subject_id, menu_name, position, visible, content) VALUES (2, 'Small Widgets', 2, 1, 'They say big things come in small packages...');
INSERT INTO pages (subject_id, menu_name, position, visible, content) VALUES (3, 'Retrofitting', 1, 1, 'We love to replace widgets...');
INSERT INTO pages (subject_id, menu_name, position, visible, content) VALUES (3, 'Small Widgets', 2, 1, 'We can certify any widget, not just our own...');

