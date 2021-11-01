# Lembrete-Virtual

O projeto será desenvolvido com base no framework Phreeze que é um framework para construção de aplicações PHP. Ele trabalha apenas com o banco de dados MySQL e seu visual é totalmente baseado no framework Bootstrap, além de ser livre tanto para uso particular como para uso comercial.

Phreeze Framework é composto de três componentes:

1. Arquitetura MVC (Model, View, Controller).
2. Técnica ORM (Object-Relational Mapping) para manipular o banco de dados através de classes PHP.
3. Phreeze Builder – um utilitário para gerar aplicações Phreeze.

A ideia é desenvolver um tipo de lembrete virtual, no qual é possível definir o nível de prioridade e a partir disso adicionar novas funções.

Modelo criado no banco de dados:

CREATE DATABASE desenvolvimento_servidores_2_final;

CREATE TABLE lembrete(
registro INT NOT NULL auto_increment PRIMARY KEY,
titulo VARCHAR(45) NOT NULL,
prioridade enum('baixa' , 'alta') NOT NULL,
descricao VARCHAR(400)
);
