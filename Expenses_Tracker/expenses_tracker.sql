create table expenses(
id int primary key auto_increment,
title varchar(50) not null,
amount double not null,
description text,
expenses_date timestamp,
created_at timestamp default current_timestamp not null,
updated_at timestamp default current_timestamp not null,
category_id int,
Foreign key (id)
References categories (id)
);
select * from expenses;

create table categories(
id int primary key auto_increment,
label varchar(150) not null,
created_at timestamp default current_timestamp not null,
updated_at timestamp default current_timestamp not null
);
insert into categories(label)values('Food & Groceries'),
('Transportation'),
('Housing & Utilities'),
('Entertainment & Leisure'),
('Education'),
('Health & Wellness');
select * from categories;