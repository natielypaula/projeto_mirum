CREATE TABLE IF NOT EXISTS `Store` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL, 
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

insert into Store(name, address) values('Armazem 1', 'Av Paulista 3000');
insert into Store(name, address) values('Armazem 2', 'Av Neopolina 1000');

CREATE TABLE IF NOT EXISTS `Category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

insert into Category(name ) values('Eletro');
insert into Category(name ) values('Alimentos');

CREATE TABLE IF NOT EXISTS `Product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `price` DECIMAL(7,2) NOT NULL ,
  `store_id` INT NOT NULL ,
  `category_id` INT NOT NULL ,
  PRIMARY KEY (`id`),
  CONSTRAINT fk_category FOREIGN KEY (category_id) REFERENCES Category(id),
  CONSTRAINT fk_store FOREIGN KEY (store_id) REFERENCES Store(id))
ENGINE = InnoDB;

