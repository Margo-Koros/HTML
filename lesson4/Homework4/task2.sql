-- Задача №2: создать БД, состоящую из одной таблицы (информация об одногруппниках) с четырьмя полями (добавить поле «Адрес»): 
-- id, name, age, address.
-- create
CREATE TABLE CLASSMATES (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age TEXT NOT NULL,
	address TEXT NOT NULL
);

-- insert
INSERT INTO CLASSMATES VALUES (0001, 'Дмитрий', '30', 'Москва');
INSERT INTO CLASSMATES VALUES (0002, 'Алексей', '33', 'Воронеж');
INSERT INTO CLASSMATES VALUES (0003, 'Виталия', '30', 'Питер');
INSERT INTO CLASSMATES VALUES (0004, 'Дарья', '25', 'Сочи');
INSERT INTO CLASSMATES VALUES (0005, 'Илья', '25', 'Ростов-на-Дону');