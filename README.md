# <div align="center">Academia Fiteness [PHP & MySQL]</div>

## Setup

- [Baixe a versão PHP Non Thread Safe(NTS)](https://www.php.net/downloads).
- Extraia na raiz “C:”.
- Adicionar a pasta extraída nas Variáveis de Ambiente de **sistema** (PATH C:\php).
- Configure o arquivo “hosts" em (C:\Windows\System32\drivers\etc) para apontar o nome localhost para 127.0.0.1. Basta remover o comentário.
- Na pasta do PHP, renomeie o arquivo “php.ini-development” para somente “php.ini”.
- Descomente as extensões `extension=cur`, `extension=fileinfo`, `extension=gd`, `extension=intl`, `extension=imap`, `extension=mbstring`, `extension=exif`, `extension=mysqli`, `extension=openssl` e `extension=pdo_mysql`.
- Teste PHP no cmd com o comando `php --version [-v]`
- Inicie o servidor embutido com o comando `php -S localhost:8080` e acesse no navegador com `localhost:8080`. _Obs: inicie o cmd na pasta do projeto!_
- **Pronto para começar!**

## Escopo

Fornecer um banco de dados para a academia 'Fitness' para lidar mais facilmente com seus clientes com a criação de uma página web desenvolvida na linguagem PHP regido no SGBD MySQL onde os usuários serão todos aqueles que frequentam a academia 'Fitness' e pessoas às partir de 15 anos.

## Problema

A academia Fitness tem o costume de escrever em pequenas folhas de papel para seus clientes quais as máquinas e exercícios que deverão fazer em um determinado período até novamente poder trocá-los para novos equipamentos.

Com o sucesso crescente que a academia estava obtivendo em seus últimos meses, escrever e atualizar os papéis se tornou inviável para tantos usuários por causa do grande gasto de tempo.

## Solução

Criação de um banco de dados onde os funcionários poderão gerenciar os usuários da academia como a ficha de treino dos usuários, o pagamento da mensalidade e seus dados pessoais como endereço, telefone, e dados de saúde (peso, altura etc.).

Com os dados dos usuários portados para o banco de dados, não será mais necessário tomar o tempo dos funcionários para criar, atualizar, e trocar de fichas de treino como também procurar pelos dados de inscrição.

# <div align="center">Funcionalidades</div>

<div align="center">

| <font size="4">Usuários</font>  | <font size="4">Funcionários</font> |     <font size="4">Equipamento</font>     |
| :-----------------------------: | :--------------------------------: | :---------------------------------------: |
|             id [PK]             |              id [PK]               |                  id [PK]                  |
|              Nome               |                Nome                |                   Nome                    |
|           E-mail (1)            |             E-mail (1)             |             Data de aquisição             |
|          Endereço (1)           |            Endereço (1)            | Usuários utilizando atualmente [FK] [WIP] |
|          Telefone (1)           |            Telefone (1)            |          Status (ativo, inativo)          |
| Versão da lista de equipamentos |                CPF                 |
|         Data de início          |           Data de início           |
|         Data de término         |          Data de término           |
|       Data de nascimento        |         Data de nascimento         |
|           Mensalidade           |              Salário               |
| Atraso no pagamento (sim, não)  |      Status (ativo, inativo)       |
|     Status (ativo, inativo)     |

</div>

## Rascunhos e ideias

- Preço dos equipamentos
