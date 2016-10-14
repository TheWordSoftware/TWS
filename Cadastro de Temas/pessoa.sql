CREATE TABLE IF NOT EXISTS `pessoa` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` int(3) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

