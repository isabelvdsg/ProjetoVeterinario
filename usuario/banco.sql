CREATE DATABASE `veterinaria`;

CREATE TABLE  `usuario` (
  `cpf` int(11) unsigned NOT NULL auto_increment,
  `telefone` varchar(11) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `nome_use` varchar(100) NOT NULL default '',
  `senha` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE  `animal` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `nome_animal` varchar(100) NOT NULL default '',
  `raca` varchar(100) NOT NULL default '',
  `sexo` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE  `consulta` (
  `cod` int(5) unsigned NOT NULL auto_increment,
  `data` varchar(10) NOT NULL default '',
  `nome_animal` varchar(100) NOT NULL default '',
  `raca` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

