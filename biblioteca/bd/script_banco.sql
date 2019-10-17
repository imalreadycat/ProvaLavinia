DROP DATABASE mvcd;
CREATE DATABASE mvcd;

USE mvcd;

CREATE TABLE IF NOT EXISTS `mvcd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `papel` VARCHAR(100) NOT NULL DEFAULT 'usuario'
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');


CREATE DEFINER=`root`@`localhost` PROCEDURE `cadastrarCliente`(IN rg INT(10), nome VARCHAR(60))
BEGIN
	IF(rg != 0)AND(nome != "")THEN
		INSERT INTO cliente (rg, nome) VALUES(rg, nome);
	ELSE 
		SELECT "Você deve preencher todos os campos!" AS msg;
	END IF;
END


CREATE DEFINER=`root`@`localhost` PROCEDURE `listarClientes`()
BEGIN

	SELECT * FROM cliente;

END


CREATE DEFINER=`root`@`localhost` PROCEDURE `deletarClienteId`(IN id INT(10))
BEGIN
	    DELETE FROM cliente WHERE idCliente=id;
END


CREATE DEFINER=`root`@`localhost` PROCEDURE `editarCliente`(IN id INT(10), rg INT(10), nome VARCHAR(60))
BEGIN
	UPDATE cliente SET rg=rg, nome=nome WHERE idCliente=id;
END