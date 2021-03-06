-- MySQL Script generated by MySQL Workbench
-- Sun Nov  4 16:06:54 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema DB1
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema DB1
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `DB1` DEFAULT CHARACTER SET utf8 ;
USE `DB1` ;

-- -----------------------------------------------------
-- Table `DB1`.`Empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Empleado` (
  `idEmpleado` INT NOT NULL AUTO_INCREMENT,
  `NombreE` VARCHAR(45) NULL,
  `ApellidoE` VARCHAR(45) NULL,
  `FechaNac` VARCHAR(45) NULL,
  `Telefono` INT NULL,
  `Direccion` VARCHAR(45) NULL,
  `Nick` VARCHAR(15) NULL,
  `Password` VARCHAR(45) NULL,
  PRIMARY KEY (`idEmpleado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `NombreC` VARCHAR(45) NULL,
  `ApellidoCliente` VARCHAR(45) NULL,
  `DireccionCliente` VARCHAR(45) NULL,
  `Telefono` INT NULL,
  `Email` VARCHAR(45) NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`Orden`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Orden` (
  `idOrden` INT NOT NULL AUTO_INCREMENT,
  `Fecha` DATETIME NULL,
  `Total` DECIMAL(2) NULL,
  `FormaPago` VARCHAR(45) NULL,
  `Estado` VARCHAR(45) NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  `Cliente_idCliente` INT NOT NULL,
  PRIMARY KEY (`idOrden`),
  INDEX `fk_Orden_Empleado_idx` (`Empleado_idEmpleado` ASC),
  INDEX `fk_Orden_Cliente1_idx` (`Cliente_idCliente` ASC),
  CONSTRAINT `fk_Orden_Empleado`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `DB1`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orden_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `DB1`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`Proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Proveedor` (
  `idProveedor` INT NOT NULL AUTO_INCREMENT,
  `NombreProveedor` VARCHAR(45) NULL,
  `DireccionProveedor` VARCHAR(45) NULL,
  `Telefono` INT NULL,
  `EmailProv` VARCHAR(45) NULL,
  PRIMARY KEY (`idProveedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Pedido` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `FechaPedido` DATETIME NULL,
  `TotalPedido` DECIMAL(2) NULL,
  `FormaPago` VARCHAR(45) NULL,
  `Descuento` DECIMAL(2) NULL,
  `Estado` VARCHAR(45) NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  `Proveedor_idProveedor` INT NOT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_Pedido_Empleado1_idx` (`Empleado_idEmpleado` ASC),
  INDEX `fk_Pedido_Proveedor1_idx` (`Proveedor_idProveedor` ASC),
  CONSTRAINT `fk_Pedido_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `DB1`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Proveedor1`
    FOREIGN KEY (`Proveedor_idProveedor`)
    REFERENCES `DB1`.`Proveedor` (`idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`CuentaPorPagar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`CuentaPorPagar` (
  `idCuentaPorPagar` INT NOT NULL AUTO_INCREMENT,
  `FechaPago` DATETIME NULL,
  `MontoPago` DECIMAL(2) NULL,
  `TipoPago` VARCHAR(45) NULL,
  `Pedido_idPedido` INT NOT NULL,
  PRIMARY KEY (`idCuentaPorPagar`),
  INDEX `fk_CuentaPorPagar_Pedido1_idx` (`Pedido_idPedido` ASC),
  CONSTRAINT `fk_CuentaPorPagar_Pedido1`
    FOREIGN KEY (`Pedido_idPedido`)
    REFERENCES `DB1`.`Pedido` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`Caja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Caja` (
  `idCaja` INT NOT NULL AUTO_INCREMENT,
  `FechaCaja` DATETIME NULL,
  `MontoCaja` DECIMAL(2) NULL,
  `TotalCaja` VARCHAR(2) NULL,
  `Cajacol` VARCHAR(45) NULL,
  PRIMARY KEY (`idCaja`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`CuentaPorCobrar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`CuentaPorCobrar` (
  `idCuentaPorCobrar` INT NOT NULL AUTO_INCREMENT,
  `FechaPago` DATETIME NULL,
  `MontoPago` DECIMAL(2) NULL,
  `TipoPago` VARCHAR(45) NULL,
  `Orden_idOrden` INT NOT NULL,
  PRIMARY KEY (`idCuentaPorCobrar`, `Orden_idOrden`),
  INDEX `fk_CuentaPorCobrar_Orden1_idx` (`Orden_idOrden` ASC),
  CONSTRAINT `fk_CuentaPorCobrar_Orden1`
    FOREIGN KEY (`Orden_idOrden`)
    REFERENCES `DB1`.`Orden` (`idOrden`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `NombreProducto` VARCHAR(45) NULL,
  `CostoProd` DECIMAL(2) NULL,
  `PrecioProd` DECIMAL(2) NULL,
  `CodigoBarras` INT NULL,
  `Unidad` INT NULL,
  `Orden_idOrden` INT NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `fk_Producto_Orden1_idx` (`Orden_idOrden` ASC),
  CONSTRAINT `fk_Producto_Orden1`
    FOREIGN KEY (`Orden_idOrden`)
    REFERENCES `DB1`.`Orden` (`idOrden`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`Impuesto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Impuesto` (
  `idImpuesto` INT NOT NULL AUTO_INCREMENT,
  `NombreI` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(45) NULL,
  `Tasa` DECIMAL(3) NULL,
  PRIMARY KEY (`idImpuesto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`RetiroCaja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`RetiroCaja` (
  `Pedido_idPedido` INT NOT NULL,
  `Caja_idCaja` INT NOT NULL,
  `FechaRetiro` DATETIME NULL,
  `CantidadRetiro` DECIMAL(2) NULL,
  `RetiroCajacol` VARCHAR(45) NULL,
  PRIMARY KEY (`Pedido_idPedido`, `Caja_idCaja`),
  INDEX `fk_Pedido_has_Caja_Caja1_idx` (`Caja_idCaja` ASC),
  INDEX `fk_Pedido_has_Caja_Pedido1_idx` (`Pedido_idPedido` ASC),
  CONSTRAINT `fk_Pedido_has_Caja_Pedido1`
    FOREIGN KEY (`Pedido_idPedido`)
    REFERENCES `DB1`.`Pedido` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_has_Caja_Caja1`
    FOREIGN KEY (`Caja_idCaja`)
    REFERENCES `DB1`.`Caja` (`idCaja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`DEtallaP`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`DEtallaP` (
  `Pedido_idPedido` INT NOT NULL,
  `Producto_idProducto` INT NOT NULL,
  `Cantidad` DECIMAL(2) NULL,
  `SubTotal` DECIMAL(2) NULL,
  PRIMARY KEY (`Pedido_idPedido`, `Producto_idProducto`),
  INDEX `fk_Pedido_has_Producto_Producto1_idx` (`Producto_idProducto` ASC),
  INDEX `fk_Pedido_has_Producto_Pedido1_idx` (`Pedido_idPedido` ASC),
  CONSTRAINT `fk_Pedido_has_Producto_Pedido1`
    FOREIGN KEY (`Pedido_idPedido`)
    REFERENCES `DB1`.`Pedido` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_has_Producto_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `DB1`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB1`.`Genera`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB1`.`Genera` (
  `Impuesto_idImpuesto` INT NOT NULL,
  `Producto_idProducto` INT NOT NULL,
  PRIMARY KEY (`Impuesto_idImpuesto`, `Producto_idProducto`),
  INDEX `fk_Impuesto_has_Producto_Producto1_idx` (`Producto_idProducto` ASC),
  INDEX `fk_Impuesto_has_Producto_Impuesto1_idx` (`Impuesto_idImpuesto` ASC),
  CONSTRAINT `fk_Impuesto_has_Producto_Impuesto1`
    FOREIGN KEY (`Impuesto_idImpuesto`)
    REFERENCES `DB1`.`Impuesto` (`idImpuesto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Impuesto_has_Producto_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `DB1`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
