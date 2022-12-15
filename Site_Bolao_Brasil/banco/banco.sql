#cria banco de dados Bolao:
CREATE SCHEMA `bolao`;

#selecionando o banco desejado:
use bolao;

#cria a tabela usuarios
create table `usuarios`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`nome` varchar(100) DEFAULT NULL,
`email` varchar(100) DEFAULT NULL,
`senha` varchar(32) DEFAULT NULL,
PRIMARY KEY (`id`));


select * from usuarios;
describe usuarios;

#CUIDADO! Deleta usuario pelo ID:
#delete from usuarios where id = 7;


#comando para apagar tabela. CUIDADO!!!
#DROP TABLE usuarios;


