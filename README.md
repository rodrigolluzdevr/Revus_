## Configuração do Projeto

Guia para configurar o projeto localmente.

### Configuração do Banco de Dados

Banco de dados:

Possíveis melhorias:

- Trocar o id para smallint(5) / tinyint(3)


#### CREATE CATEGORY

CREATE TABLE TB_Categories (
    category_id Smallin PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);


#### CREATE MANUFACTURER

CREATE TABLE `revus`.`TB_Manufacturers` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_category` INT UNSIGNED NOT NULL,
  `manufacturer` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_category_manufacturer_idx` (`id_category` ASC) VISIBLE,
  CONSTRAINT `fk_category_manufacturer`
    FOREIGN KEY (`id_category`)
    REFERENCES `revus`.`TB_Categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);



#### CREATE VEHICLES MODEL


CREATE TABLE `revus`.`TB_Vehicles_Model` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_manufacturer` INT UNSIGNED NOT NULL,
  `vehicle_model` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_category_manufacturer_idx` (`id_manufacturer` ASC) VISIBLE,
  CONSTRAINT `fk_manufacturer_vehicle_model`
    FOREIGN KEY (`id_manufacturer`)
    REFERENCES `revus`.`TB_Manufacturers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


Inserir categoria manual> não vou inserir no crud ( obs do gilliano colocar apenas crud onde for necessário )

INSERT INTO TB_Categories (category_name) VALUES ('car'), ('motorcycle');

### Configurações do arquivo .env

> lembrar de criar um arquivo .env na raiz do projeto com as seguintes variáveis de ambiente:

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_seu_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

> Substitua nome_do_seu_banco_de_dados, seu_usuario e sua_senha com as configurações apropriadas do seu banco de dados MySQL.

