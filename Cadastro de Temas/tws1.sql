create table `tw_tema` (
  `tm_nome` varchar(50) not null,
  `tm_codigo` int not null primary key auto_increment
); 

create table `tw_item` (
  `it_nome` varchar(50) not null,
  `it_id` int not null primary key auto_increment,
  `it_audio` varchar(256) not null,
  `it_imagem` varchar(256) not null,
  `it_tm_codigo` int not null,
  constraint `it_tm_fk` foreign key (`it_tm_codigo`) references `tw_tema` (`tm_codigo`)
);
