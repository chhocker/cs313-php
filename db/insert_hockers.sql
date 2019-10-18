INSERT INTO family_members (first_name, middle_name, last_name, birth_date, is_male) 
VALUES ('Jeffrey', 'Alexander', 'Hocker', '1999-03-02', true);

INSERT INTO family_members (first_name, middle_name, last_name, birth_date, is_male) 
VALUES ('Claire', 'Haderlie', 'Hocker', '2000-02-02', false);


INSERT INTO site_users (username, user_password, member_id) VALUES ('clairehhocker', 'helloworld', 
(SELECT member_id FROM family_members WHERE first_name='Claire' AND last_name='Hocker'));

SELECT * FROM family_members;
SELECT * FROM site_users;
