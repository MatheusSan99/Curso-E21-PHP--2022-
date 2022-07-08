CREATE TABLE `PEDIDOS` (
                           `PEDIDOS_ID` int NOT NULL ,
                           `ITENS_ID` int NOT NULL ,
                           `CLIENTES_ID` int NOT NULL ,
                           `VENDEDOR_ID` int NOT NULL ,
                           PRIMARY KEY (
                                        `PEDIDOS_ID`
                               )
);

CREATE TABLE `VENDEDOR` (
                            `VENDEDOR_ID` int NOT NULL ,
                            `VENDEDOR_NOME` string NOT NULL ,
                            `VENDEDOR_CIDADE` int NOT NULL ,
                            `VENDEDOR_DATA_DE_NASCIMENTO` string NOT NULL ,
                            `VENDEDOR_ENDEREÇO_ID` INT NOT NULL ,
                            `VENDEDOR_TELEFONE_ID` INT NOT NULL ,
                            `CLIENTE_ID` int NOT NULL ,
                            PRIMARY KEY (
                                         `VENDEDOR_ID`
                                )
);

CREATE TABLE `CLIENTES` (
                            `CLIENTE_ID` int NOT NULL ,
                            `CLIENTE_NOME` string NOT NULL ,
                            `CLIENTE_CIDADE` string NOT NULL ,
                            `DATA_DE_NASCIMENTO` string NOT NULL ,
                            `ENDERECO` int NOT NULL ,
                            `TELEFONE` int NOT NULL ,
                            `PEDIDOS_ID` int NOT NULL ,
                            PRIMARY KEY (
                                         `CLIENTE_ID`
                                )
);

CREATE TABLE `ITENS` (
                         `ITENS_ID` int NOT NULL ,
                         `ITENS_NOME` string NOT NULL ,
                         `ITENS_MARCAS` int NOT NULL ,
                         PRIMARY KEY (
                                      `ITENS_ID`
                             )
);

CREATE TABLE `CARROS` (
                          `CARROS_ID` int NOT NULL ,
                          `CARROS_VERSAO` string NOT NULL ,
                          `CARROS_ANO` int NOT NULL ,
                          `CARROS_COR` string NOT NULL ,
                          PRIMARY KEY (
                                       `CARROS_ID`
                              )
);

CREATE TABLE `MODELO` (
                          `MODELO_ID` int NOT NULL ,
                          `MODELO_CARROS` int NOT NULL ,
                          PRIMARY KEY (
                                       `MODELO_ID`
                              )
);

CREATE TABLE `CIDADES` (
                           `CIDADE_ID` int NOT NULL ,
                           `CIDADE_NOME` string NOT NULL ,
                           `UF_ID` string NOT NULL ,
                           `CLIENTE_ID` int NOT NULL ,
                           `VENDEDOR_ID` string NOT NULL ,
                           PRIMARY KEY (
                                        `CIDADE_ID`
                               )
);

CREATE TABLE `ESTOQUE` (
                           `ESTOQUE_ID` int NOT NULL ,
                           `PRODUTO_ID` string NOT NULL ,
                           `QUANTIDADE_ID` int NOT NULL ,
                           PRIMARY KEY (
                                        `ESTOQUE_ID`
                               )
);

CREATE TABLE `UF` (
                      `UF_ID` int NOT NULL ,
                      `CIDADE_ID` int NOT NULL ,
                      PRIMARY KEY (
                                   `UF_ID`
                          )
);

CREATE TABLE `MARCA` (
                         `MARCA_ID` int NOT NULL ,
                         `MODELO_ID` int NOT NULL ,
                         `MARCA_NOME` string NOT NULL ,
                         `MARCA_SITE` string NOT NULL ,
                         PRIMARY KEY (
                                      `MARCA_ID`
                             )
);

ALTER TABLE `PEDIDOS` ADD CONSTRAINT `fk_PEDIDOS_PEDIDOS_ID` FOREIGN KEY(`PEDIDOS_ID`)
    REFERENCES `CLIENTES` (`CLIENTE_ID`);

ALTER TABLE `PEDIDOS` ADD CONSTRAINT `fk_PEDIDOS_ITENS_ID` FOREIGN KEY(`ITENS_ID`)
    REFERENCES `ITENS` (`ITENS_ID`);

ALTER TABLE `VENDEDOR` ADD CONSTRAINT `fk_VENDEDOR_VENDEDOR_ID` FOREIGN KEY(`VENDEDOR_ID`)
    REFERENCES `PEDIDOS` (`PEDIDOS_ID`);

ALTER TABLE `CLIENTES` ADD CONSTRAINT `fk_CLIENTES_CLIENTE_ID` FOREIGN KEY(`CLIENTE_ID`)
    REFERENCES `CIDADES` (`CIDADE_ID`);

ALTER TABLE `ITENS` ADD CONSTRAINT `fk_ITENS_ITENS_MARCAS` FOREIGN KEY(`ITENS_MARCAS`)
    REFERENCES `MARCA` (`MARCA_ID`);

ALTER TABLE `MODELO` ADD CONSTRAINT `fk_MODELO_MODELO_ID` FOREIGN KEY(`MODELO_ID`)
    REFERENCES `MARCA` (`MODELO_ID`);

ALTER TABLE `MODELO` ADD CONSTRAINT `fk_MODELO_MODELO_CARROS` FOREIGN KEY(`MODELO_CARROS`)
    REFERENCES `CARROS` (`CARROS_ID`);

ALTER TABLE `CIDADES` ADD CONSTRAINT `fk_CIDADES_VENDEDOR_ID` FOREIGN KEY(`VENDEDOR_ID`)
    REFERENCES `VENDEDOR` (`VENDEDOR_ID`);

ALTER TABLE `ESTOQUE` ADD CONSTRAINT `fk_ESTOQUE_ESTOQUE_ID` FOREIGN KEY(`ESTOQUE_ID`)
    REFERENCES `ITENS` (`ITENS_ID`);

ALTER TABLE `UF` ADD CONSTRAINT `fk_UF_CIDADE_ID` FOREIGN KEY(`CIDADE_ID`)
    REFERENCES `CIDADES` (`CIDADE_ID`);