### Introdução

### - O que é Banco de Dados?

#### R: Conjunto de informações organizadas em um formato onde os dados possam ser facilmente:

- Armazenados.
- Gerenciados.
- Atualizados.
- Recuperados.

### Quais são os Principais Tipos de Bancos de Dados?

#### Categorias principais (duas):

- Banco de dados Relacional
- Banco de dados Não relacional (NoSQL)

### Estrutura de um Banco de Dados

#### Banco de Dados Relacional: Caracterizado pela forma como os dados são organizados.

Tabelas respeitam um SCHEMA, que Determina como as tabelas devem ser.

#### Sinônimos Comuns:

- Tabelas ou Entidade
- Colunas ou Atributos
- Linhas ou Tuplas

| ID  | CPF            | NOME    | IDADE |
|-----|----------------|---------|-------|
| 1   | 123.456.789-11 | Matheus | 23    |
| 2   | 123-555-777-12 | Amanda  | 20    |

Tipos de Dados:

- Text
- Integer
- Real
- Null:

<a href="https://www.sqlite.org/datatype3.html">Informações sobre os Tipos<a/>

### Chave Primaria - PK Primary Key (Geralmente nomeada ID)

- Ela serve para definir exclusividades dentro de uma tabela. Cada linha de nossa tabela é unica, PK. Só podemos definir uma unica coluna dentro da tabela como PK. Uma chave primaária pode ser com uma única coluna ou composta por 2 colunas de nossa tabela.

### ID Abreviação de Identificação ID

- (Podendo criar uma sequencia automatica)

#### Regras (PK):

- Deve ser única.
- Não pode mudar nunca.
- Não pode ser nula.

### Chave estrangeira (FK) (Foreign Key)

| PESSOAS_ID | CPF            | NOME       | CIDADE_ID |
|------------|----------------|------------|-----------|
| 1          | 123.456.789-11 | Matheus    | 2         |
| 2          | 123-555-777-12 | Amanda     | 2         |
| 3          | 322-555-666-11 | Alessandra | 1         |

| CIDADES_ID | ID                   | UF_ID |
|------------|----------------------|-------|
| 1          | São Bernado do Campo | 1     |
| 2          | Joinville            | 2     |

| ID  | ESTADO         |
|-----|----------------|
| 1   | São Paulo      |
| 2   | Santa Catarina |

### Relacionamento entre Tabelas / Entidades.

#### O relacionamento é a associação entre as Tabelas, que são conectadas por Chaves Primárias (PK), Chaves Estrangeiras (FK).

### 1:1

#### Relacionamento em 1 linha de uma tabelas com 1 linha de outras tabelas.

### 1:N

#### Relacionamento de 1 linha de uma tabela com Muitas linhas de outras tabelas.

### M:N

#### Relacionamento de Muitas linhas de uma tabela com Muitas linhas de outras tabelas.

#### 1:1 - Gerentes x Departamentos

### Gerentes:

| ID  | NOME          |
|-----|---------------|
| 1   | Walter White  |
| 2   | Jesse Pinkman |

### Departamentos:

| ID  | NOME      | GERENTE_ID |
|-----|-----------|------------|
| 1   | Produção  | 1          |
| 2   | Marketing | 2          |

### 1:N

#### Relacionamento Um para Muitos

### Marcas

| ID  | NOME  |
|-----|-------|
| 1   | Dell  |
| 2   | Apple |

### Produtos

| ID  | NOME     | MARCAS_ID |
|-----|----------|-----------|
| 1   | teclado  | 1         |
| 2   | monitor  | 1         |
| 3   | iphone 7 | 2         |
| 4   | iphone 8 | 2         |

### M:N

#### Relacionamento de Muitos pra Muitos

### Musica

| ID  | NOME                                    |
|-----|-----------------------------------------|
| 1   | Highway to Hell                         |
| 2   | Stairway to Heaven                      |
| 3   | Another Day In Paradise                 |
| 4   | Musica Ficticia Bon Scott+Phill Collins |

### Autores

| ID  | NOME          |
|-----|---------------|
| 1   | Bon Scott     |
| 2   | Angus Youg    |
| 3   | Malcom Youg   |
| 4   | Robert Plant  |
| 5   | Jimmy Page    |
| 6   | Phill Collins |

### MusicasxAutores

| ID  | MUSICA_ID | AUTORES_ID |
|-----|-----------|------------|
| 1   | 1         | 1          |
| 2   | 1         | 2          |
| 3   | 1         | 3          |
| 4   | 2         | 4          |
| 5   | 2         | 5          |
| 6   | 3         | 6          |
| 7   | 4         | 1          |
| 8   | 4         | 6          |

### Auto Relacionamento

#### Relacionamento de uma linha de uma mesma tabela com outra linha nesta tabela.

## Comandos úteis

### SELECT

#### SELECT É USADO PARA SELECIONAR DADOS RESULT-SET ou CONJUNTO DE DADOS CRIAMOS O ARQUIVO CIDADES.SQL

### SELECT DISTINCT

#### ÚTIL PARA EVITAR CAMPOS DUPLICADOS

### SELECT WHERE COM OPERADORES (BOOL)

### Operadores Lógicos (BOOL)

| Operador |    O que é     |
|----------|----------------|
|    =     |    igual a     |
| <> ou != |  diferente de  |
|    <     |   menor que    | 
|    >     |   maior que    | 
|    <=    | menor ou igual | 
|    >=    | maior ou igual |

|  Exemplo   | Resultado |
|------------|-----------|
|   1 = 1    |     1     |
|   1 <> 2   |     1     |
|   1 != 2   |     1     | 
|   1 < 2    |     1     |
|   2 > 1    |     1     |

## Outros Operadores Úteis

| Comando | Descrição                                                   |
|---------|-------------------------------------------------------------|
| IN      | Retorna 1 se o valor testado estiver na lista               | 
| LIKE    | Retorna 1 se o valor testado coincidir com o padrão passado |
| AND     | Retorna 1 se as duas expressões testadas forem 1            |
| OR      | Retorna 1 se uma das duas expressões testadas forem 1       |
| BETWEEN | Retorna 1 se o valor testado estiver no intervalo passado   |

## Funções Úteis

| Função | Descrição                            |
|--------|--------------------------------------|
| AVG    | Retorna o valor médio do grupo       |
| MIN    | Retorna o valor mínimo do grupo      |
| MAX    | Retorna o valor máximo do grupo      |
| SUM    | Retorna a soma                       |
| COUNT  | Retorna o numero de linhas da tabela |

### Outros comandos

#### Order By (ASC, DESC)

- <a href="https://www.sqlitetutorial.net/sqlite-order-by/">Usado para ordenar os campos escolhidos, se nada for definido, será usado o modo ascendente por padrão.</a>

#### GROUP BY

- <a href="https://www.sqlitetutorial.net/sqlite-group-by/">Usado para agrupar os campos escolhidos, para uma visualização mais clara.</a>

#### Junção com Where

- Usado para possivelmente fazer um comparativo entre dados de duas tabelas.<br>
Tabela 1 PESSOAS.PESSOA_CIDADE_ID<br>
Tabela 2 CIDADES.CIDADE_ID

Ex: Faça uma busca onde: <br> PESSOAS.PESSOA_CIDADE_ID = CIDADES.CIDADE_ID
