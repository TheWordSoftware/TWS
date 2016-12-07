create table `tw_tema` (
  `tm_nome` varchar(50) not null,
  `tm_codigo` int not null primary key auto_increment
); 

create table `tw_objeto` (
  `ob_codigo` int(10) not null auto_increment primary key,
  `ob_nomePortugues` varchar(50) not null,
  `ob_nomeIngles` varchar(50) not null,
  /* Dados do áudio */
  `ob_nome_audio` varchar(25) not null,
  `ob_tamanho_audio` varchar(25) not null,
  `ob_tipo_audio` varchar(25) not null,
  `ob_audio` longblob not null,
  /* Dados da imagem */
  `ob_nome_imagem` varchar(25) not null,
  `ob_tamanho_imagem` varchar(25) not null,
  `ob_tipo_imagem` varchar(25) not null,
  `ob_imagem` longblob not null,
  /* --------------- */
  `ob_tm_codigo` int not null,
  constraint `ob_tm_fk` foreign key (`ob_tm_codigo`) references `tw_tema` (`tm_codigo`)
);

/* Temas */
INSERT INTO tw_tema(tm_nome) 
VALUES('Personal Items');

INSERT INTO tw_tema(tm_nome) 
VALUES('Countries And Nationalities');

INSERT INTO tw_tema(tm_nome) 
VALUES('Clothing');

INSERT INTO tw_tema(tm_nome) 
VALUES('Action Verbs');

INSERT INTO tw_tema(tm_nome) 
VALUES('Furniture');

INSERT INTO tw_tema(tm_nome) 
VALUES('Jobs');

INSERT INTO tw_tema(tm_nome) 
VALUES('Food ');

INSERT INTO tw_tema(tm_nome) 
VALUES('Parts of the body');

