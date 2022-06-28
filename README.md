# <p align="center">Academia Fiteness [PHP & MySQL]</p>

## Escopo

Fornecer um banco de dados para a academia 'Fitness' para lidar mais facilmente com seus clientes com a criação de uma página web desenvolvida na linguagem PHP regido no SGBD MySQL onde os usuários serão todos aqueles que frequentam a academia 'Fitness' e pessoas às partir de 15 anos.

## Problema

A academia Fitness tem o costume de escrever em pequenas folhas de papel para seus clientes quais as máquinas e exercícios que deverão fazer em um determinado período até novamente poder trocá-los para novos equipamentos.

Com o sucesso crescente que a academia estava obtivendo em seus últimos meses, escrever e atualizar os papéis se tornou inviável para tantos usuários por causa do grande gasto de tempo.

## Solução

Criação de um banco de dados onde os funcionários poderão gerenciar os usuários da academia como a ficha de treino dos usuários, o pagamento da mensalidade e seus dados pessoais como endereço, telefone, e dados de saúde (peso, altura etc.).

Com os dados dos usuários portados para o banco de dados, não será mais necessário tomar o tempo dos funcionários para criar, atualizar, e trocar de fichas de treino como também procurar pelos dados de inscrição.

# <p align="center">Funcionalidades</p>

## Usuários

- id (PK)
- Nome
- E-mail
- Endereço
- Telefone (1)
- Versão da lista de equipamentos
- Data de início
- Data de término
- Data de nascimento
- Mensalidade
- Atraso no pagamento (sim, não)
- Status (ativo, inativo)

## Funcionários

- id (PK)
- Nome
- CPF
- Endereço
- Telefone (1)
- Data de início
- Data de término
- Data de nascimento
- Salário
- Status (ativo, inativo)

## Equipamento

- id (PK)
- Nome do equipamento
- Data de aquisição
- Usuários utilizando atualmente (FK)
- Status atual (funcional, não funcional)
