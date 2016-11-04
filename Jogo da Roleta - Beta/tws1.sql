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

/* Temas */
INSERT INTO tw_tema(tm_nome) 
VALUES('Carinho');

INSERT INTO tw_tema(tm_nome) 
VALUES('Desafio');

INSERT INTO tw_tema(tm_nome) 
VALUES('JOffline');

INSERT INTO tw_tema(tm_nome) 
VALUES('JOnline');

INSERT INTO tw_tema(tm_nome) 
VALUES('Mico');

INSERT INTO tw_tema(tm_nome) 
VALUES('Manual');

INSERT INTO tw_tema(tm_nome) 
VALUES('Cultura');

INSERT INTO tw_tema(tm_nome) 
VALUES('Pintura');

/* Itens tema 1 */
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('bear', 'bear.mp3', 'imagens/bear.jpg', 1);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('bir', 'bir.mp3', 'imagens/bir.jpg', 1);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('brow', 'brow.mp3', 'imagens/brow.jpg', 1);

/* Itens tema 2 */
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('catdog', 'catdog.mp3', 'imagens/catdog.jpg', 2);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('cell', 'cell.mp3', 'imagens/cell.jpg', 2);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('chaves', 'chaves.mp3', 'imagens/chaves.jpg', 2);

/* Itens tema 3 */
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('color', 'color.mp3', 'imagens/color.jpg', 3);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('creed', 'creed.mp3', 'imagens/creed.jpg', 3);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('dogs', 'dogs.mp3', 'imagens/dogs.jpg', 3);

/* Itens tema 4 */
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('flor', 'flor.mp3', 'imagens/flor.jpg', 4);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('hip', 'hip.mp3', 'imagens/hip.jpg', 4);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('inu', 'inu.mp3', 'imagens/inu.jpg', 4);

/* Itens tema 5 */
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('iron', 'iron.mp3', 'imagens/iron.jpg', 5);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('lego', 'lego.mp3', 'imagens/lego.jpg', 5);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('mario', 'mario.mp3', 'imagens/mario.jpg', 5);

/* Itens tema 6 */
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('nk', 'nk.mp3', 'imagens/nk.jpg', 6);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('pass', 'pass.mp3', 'imagens/pass.jpg', 6);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('pat', 'pat.mp3', 'imagens/pat.gif', 6);

/* Itens tema 7 */
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('pid', 'pid.mp3', 'imagens/pid.jpg', 7);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('smile', 'smile.mp3', 'imagens/smile.jpg', 7);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('sol', 'sol.mp3', 'imagens/sol.gif', 7);

/* Itens tema 8 */
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('sql', 'sql.mp3', 'imagens/sql.jpg', 8);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('turt', 'turt.mp3', 'imagens/turt.jpg', 8);
INSERT INTO tw_item(it_nome, it_audio, it_imagem, it_tm_codigo) 
VALUES('woody', 'woody.mp3', 'imagens/woody.gif', 8);