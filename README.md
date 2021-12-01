# Lembrete-Virtual

O projeto será desenvolvido com base no framework Phreeze que é um framework para construção de aplicações PHP. Ele trabalha apenas com o banco de dados MySQL e seu visual é totalmente baseado no framework Bootstrap, além de ser livre tanto para uso particular como para uso comercial.

Phreeze Framework é composto de três componentes:

1. Arquitetura MVC (Model, View, Controller).
2. Técnica ORM (Object-Relational Mapping) para manipular o banco de dados através de classes PHP.
3. Phreeze Builder – um utilitário para gerar aplicações Phreeze.

A ideia é desenvolver um tipo de lembrete virtual, no qual é possível definir um título, nível de prioridade e uma descrição.
Modelo criado no banco de dados:


## Como criar a aplicação: 

1. Tenha um XAMPP instalado e configurado, em seguida, deixe iniciado o módulo Apache e MySQL:  <br /> 
![This is an image](https://github.com/brfratucsi/Lembrete-Virtual/blob/main/images/img1.png)   <br />  <br />

2. Com um software da sua preferência, crie um banco de dados da seguinte forma (certifique de que já não exista um banco de dados com o mesmo nome):
__________________________________________________________________

        CREATE DATABASE lembrete_virtual;
__________________________________________________________________

        CREATE TABLE lembrete( 
        registro INT NOT NULL auto_increment PRIMARY KEY, 
        titulo VARCHAR(45) NOT NULL, 
        prioridade enum('baixa' , 'alta') NOT NULL, 
        descricao VARCHAR(400) 
        );
__________________________________________________________________
<br /> 

3. Baixe ou clone o construtor do phreeze no diretório htdocs do XAMPP: https://github.com/jasonhinkle/phreeze

4. Execute o construtor do phreeze pelo localhost em um navegador:  http://localhost/phreeze/builder/

5. No phreeze builder preencha os campos de acordo com os dados criados na sua máquina em seguida clique em *Analyze Database*.
    >OBS: No campo MySQL Driver selecione a opção **mysqli_connect**.  <br />
    >OBS: No campo Schema Name é onde se preenche o nome do banco de dados, o do nosso exemplo é **lembrete_virtual**.

![This is an image](https://github.com/brfratucsi/Lembrete-Virtual/blob/main/images/img2.png)   <br />  <br />


6. Se tudo ocorrer bem, você irá para a página de análise, pode deixar todas as opções no padrão e em seguida clicar no botão **Generate Application**.

![This is an image](https://github.com/brfratucsi/Lembrete-Virtual/blob/main/images/img3.png)   <br />  <br />


7. Após gerar a aplicação, o download do projeto se iniciará, extraia o projeto dentro de uma nova pasta **(coloque o mesmo nome que está no arquivo zipado)** dentro do htdocs do XAMPP.

![This is an image](https://github.com/brfratucsi/Lembrete-Virtual/blob/main/images/img4.png)   <br />  <br />


8. Para executar a aplicação, abra o localhost pelo navegador com o endereço do projeto:  http://localhost/lembretevirtual/

9. Pronto! Você conseguiu criar o projeto, abra a aba ao lado e interaja com a aplicação.

![This is an image](https://github.com/brfratucsi/Lembrete-Virtual/blob/main/images/img5.png)   <br />  <br />

