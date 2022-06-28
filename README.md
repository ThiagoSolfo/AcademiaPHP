# <center>Academia Fiteness [PHP & MySQL]</center>

## Escopo

Fornecer um banco de dados para a academia 'Fitness' para lidar mais facilmente com seus clientes com a criação de uma página web desenvolvida na linguagem PHP regido no SGBD MySQL onde os usuários serão todos aqueles que frequentam a academia 'Fitness' e pessoas às partir de 15 anos.

## Problema

A academia Fitness tem o costume de escrever em pequenas folhas de papel para seus clientes quais as máquinas e exercícios que deverão fazer em um determinado período até novamente poder trocá-los para novos equipamentos.

Com o sucesso crescente que a academia estava obtivendo em seus últimos meses, escrever e atualizar os papéis se tornou inviável para tantos usuários por causa do grande gasto de tempo.

## Solução

Criação de um banco de dados onde os funcionários poderão gerenciar os usuários da academia como a ficha de treino dos usuários, o pagamento da mensalidade e seus dados pessoais como endereço, telefone, e dados de saúde (peso, altura etc.).

Com os dados dos usuários portados para o banco de dados, não será mais necessário tomar o tempo dos funcionários para criar, atualizar, e trocar de fichas de treino como também procurar pelos dados de inscrição.

# <center>Funcionalidades</center>

<center>

| <font size="4">Usuários</font>  | <font size="4">Funcionários</font> |  <font size="4">Equipamento</font>  |
| :-----------------------------: | :--------------------------------: | :---------------------------------: |
|             id [PK]             |              id [PK]               |               id [PK]               |
|              Nome               |                Nome                |                Nome                 |
|           E-mail (1)            |             E-mail (1)             |          Data de aquisição          |
|          Endereço (1)           |            Endereço (1)            | Usuários utilizando atualmente [FK] |
|          Telefone (1)           |            Telefone (1)            |       Status (ativo, inativo)       |
| Versão da lista de equipamentos |                CPF                 |
|         Data de início          |           Data de início           |
|         Data de término         |          Data de término           |
|       Data de nascimento        |         Data de nascimento         |
|           Mensalidade           |              Salário               |
| Atraso no pagamento (sim, não)  |      Status (ativo, inativo)       |
|     Status (ativo, inativo)     |

</center>
