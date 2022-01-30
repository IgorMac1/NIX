show databases;

use phenix;

show tables;

desc citrus;

select * from citrus;

rename table citrus to fruits;

show tables;

alter table fruits add column color varchar(20); // добавляем колонку 

truncate table fruits;							// очищаем таблицу с обнулением первичного ключа

insert into fruits (title,type,color) VALUES ("Peach", "Stone", "Yellow" ),("Apple", "Stone", "Green" 

	),("Apple", "Stone", "Red" ),("Avocado", "Stone", "Green" );   // 3 раза, наполняем таблицу

delete from fruits where id>4; //удаляем лишнее

insert into fruits set title="orange",color="orange";  //добавили еще одну запись 

update fruits set id=5, title="Lemon", type="Citrus", color="Yellow" where title="orange"; // изменяем последнюю запись





