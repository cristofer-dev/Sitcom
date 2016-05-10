CREATE DATABASE IF NOT EXISTS  sitcom
        DEFAULT CHARACTER SET  utf8
              DEFAULT COLLATE  utf8_spanish_ci;

USE sitcom;

CREATE TABLE IF NOT EXISTS contrato(
    contrato_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    denominacion VARCHAR(30),
    fecha DATETIME
)ENGINE=InnoDB;