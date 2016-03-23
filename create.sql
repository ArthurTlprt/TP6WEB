// pour postgresql

create table contacts (
  id serial primary key,
  name varchar(20),
  mail varchar(80),
  message varchar(254)
);
