drop table if exists profil;
create table profil(
  ID INT,
  Name VARCHAR(50),
  Username VARCHAR(50),
  Email VARCHAR(50),
  Password VARCHAR(50),
  Phone VARCHAR(50),
  Driver INT,
  primary key (ID)
);
insert into profil values('1','Pikachu Smith', 'pikapikapikachu', 'pikachu@pokemonworld.net', 'pokepokemon', '089900990099', 1);
insert into profil values('2','Paul Sitanggang', 'paulcuk', 'paulcuk@yahoo.com', 'poletarism', '081208120812', 0);
insert into profil values('3', 'Poke John', 'johntol', 'johntol@gmail.com', '12341234', '081208130814', 1);
