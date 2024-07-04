-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 17:32:05
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_gnius`
--
CREATE DATABASE IF NOT EXISTS `proyecto_gnius` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyecto_gnius`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_ActualizarPerfilUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarPerfilUsuario` (IN `nom` VARCHAR(100), IN `ape` VARCHAR(100), IN `usu` VARCHAR(100), IN `email` VARCHAR(100), IN `edad` INT, IN `tel` VARCHAR(9), IN `grado_aca` VARCHAR(100), IN `dir` VARCHAR(200), IN `prof` VARCHAR(100), IN `habilidad` TEXT, IN `vinculo` VARCHAR(100), IN `trab` CHAR(2), IN `nom_emp` VARCHAR(100), IN `descrip_puesto` TEXT, IN `puesto` VARCHAR(100), IN `tel_trabajo` VARCHAR(9), IN `id_per` INT, IN `id_usu` INT)  NO SQL
update persona, usuarios
SET persona.nombres = nom, persona.apellidos = ape, persona.edad = edad, persona.telefono = tel, persona.grado_academico = grado_aca, persona.direccion = dir, persona.profesion = prof, persona.habilidades = habilidad, persona.vinculo_utec = vinculo, persona.trabaja = trab, persona.nombre_empresa = nom_emp, persona.descripcion_puesto = descrip_puesto, persona.puesto_trabajo = puesto, persona.telefono_empresa = tel_trabajo, usuarios.nombre_usuario = usu, usuarios.correo = email
where persona.id_persona = id_per and usuarios.id_usuario = id_usu$$

DROP PROCEDURE IF EXISTS `sp_AgregarEquipoTec`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarEquipoTec` (IN `nomEqui` VARCHAR(100), IN `descEqui` VARCHAR(100), IN `est` VARCHAR(100))  NO SQL
INSERT INTO equipo_tecnologico(nombre_equipo, descripcion, estado)
VALUES(nomEqui, descEqui, est)$$

DROP PROCEDURE IF EXISTS `sp_AgregarEvento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarEvento` (IN `nomE` VARCHAR(100), IN `horaE` TIME, IN `fechaE` DATE, IN `lugarE` VARCHAR(100), IN `cantE` INT(11), IN `estado` VARCHAR(50), IN `tipoE` INT(11))  NO SQL
INSERT INTO evento(nombre_evento, hora, fecha, lugar_evento, cantidad, estado, id_tipo_evento)
VALUES(nomE, horaE, fechaE, lugarE, cantE, estado, tipoE)$$

DROP PROCEDURE IF EXISTS `sp_AgregarIdea`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarIdea` (IN `nombre_proyecto` VARCHAR(100), IN `id_tipo_idea` INT, IN `id_tipo_servicio` INT, IN `razon_social` TEXT, IN `fecha_inicio` DATE, IN `oportunidades` TEXT, IN `horas_trabajar` VARCHAR(100), IN `equipo_propio` CHAR(2), IN `descripcion_equipo` TEXT, IN `id_persona` INT, IN `plan_de_negocio` TEXT)  NO SQL
insert into idea_negocio (nombre_proyecto,id_tipo_idea,id_tipo_servicio,razon_social,fecha_inicio,oportunidades,horas_trabajar,equipo_propio,descripcion_equipo,id_persona,plan_de_negocio,estado)
values (nombre_proyecto,id_tipo_idea,id_tipo_servicio,razon_social,fecha_inicio,oportunidades,horas_trabajar,equipo_propio,descripcion_equipo,id_persona,plan_de_negocio,'En Proceso')$$

DROP PROCEDURE IF EXISTS `sp_AgregarOficina`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarOficina` (IN `nomOfi` VARCHAR(100), IN `capOfi` INT(11))  NO SQL
INSERT INTO oficina(nombre,capacidad_de_personas)
VALUES (nomOfi,capOfi)$$

DROP PROCEDURE IF EXISTS `sp_AgregarPersona`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarPersona` (IN `nombres` VARCHAR(100), IN `apellidos` VARCHAR(100), IN `edad` INT, IN `nit` VARCHAR(17), IN `nacionalidad` VARCHAR(100), IN `genero` VARCHAR(10), IN `lugar_nac` VARCHAR(100), IN `fecha_nac` DATE, IN `telefono` VARCHAR(9), IN `direccion` VARCHAR(200), IN `grado_academico` VARCHAR(100), IN `habilidades` TEXT, IN `vinculo_utec` VARCHAR(100), IN `hoja_de_vida` TEXT, IN `profesion` VARCHAR(100), IN `trabaja` CHAR(2), IN `puesto_trabajo` VARCHAR(100), IN `descripcion_puesto` VARCHAR(100), IN `id_usuario` INT, IN `nombre_empresa` VARCHAR(100), IN `telefono_empresa` VARCHAR(9))  NO SQL
insert into persona (nombres,apellidos,edad,nit, nacionalidad,genero,lugar_nac,fecha_nac,telefono,direccion,grado_academico, habilidades,vinculo_utec,hoja_de_vida,profesion,trabaja,puesto_trabajo,descripcion_puesto,id_usuario,nombre_empresa,telefono_empresa)
values(nombres,apellidos,edad,nit,nacionalidad,genero,lugar_nac,fecha_nac,telefono,direccion,grado_academico,habilidades,vinculo_utec,hoja_de_vida,profesion,trabaja,puesto_trabajo,descripcion_puesto,id_usuario,nombre_empresa,telefono_empresa)$$

DROP PROCEDURE IF EXISTS `sp_AgregarUsoOficina`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarUsoOficina` (IN `actividad_realizar` VARCHAR(200), IN `fecha` DATE, IN `hora` TIME, IN `estado` VARCHAR(100), IN `tiempo_de_estadia` VARCHAR(100), IN `cantidad_acompa` INT, IN `id_oficina` INT, IN `id_persona` INT)  NO SQL
insert into uso_de_oficina (actividad_realizar, fecha, hora, estado, tiempo_de_estadia, cantidad_acompa, id_oficina, id_persona)
values(actividad_realizar, fecha, hora, estado, tiempo_de_estadia, cantidad_acompa, id_oficina, id_persona)$$

DROP PROCEDURE IF EXISTS `sp_AgregarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarUsuario` (IN `nom` VARCHAR(100), IN `pass` TEXT, IN `correo` VARCHAR(100), IN `dui` VARCHAR(9), IN `pasaporte` VARCHAR(9), IN `id_rol` INT)  NO SQL
insert into usuarios (nombre_usuario, contrasena, correo, dui, pasaporte, id_rol)
values (nom, pass, correo, dui, pasaporte, id_rol)$$

DROP PROCEDURE IF EXISTS `sp_AsignarMentor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AsignarMentor` (IN `idPersona` INT(11), IN `idEquipo` INT(11))  NO SQL
INSERT INTO miembros_de_equipo(id_persona,id_equipo)
VALUES(idPersona,idEquipo)$$

DROP PROCEDURE IF EXISTS `sp_EliminarEvento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_EliminarEvento` (IN `idEve` INT(11))  NO SQL
DELETE FROM evento
WHERE id_evento = idEve$$

DROP PROCEDURE IF EXISTS `sp_EliminarMentor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_EliminarMentor` (IN `idMiembro` INT)  NO SQL
DELETE FROM miembros_de_equipo
WHERE id_miembro=idMiembro$$

DROP PROCEDURE IF EXISTS `sp_Eventos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Eventos` ()  NO SQL
select a.id_evento, a.nombre_evento, b.nombre_tipo, a.hora, a.fecha, a.lugar_evento, a.cantidad from evento a  inner join tipo_de_evento b on a.id_tipo_evento=b.id_tipo_evento 
where a.estado='Activo'$$

DROP PROCEDURE IF EXISTS `sp_InsEquipo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_InsEquipo` (IN `id_persona` INT, IN `id_equipo` INT)  NO SQL
insert into miembros_de_equipo (id_persona, id_equipo)
values (id_persona, id_equipo)$$

DROP PROCEDURE IF EXISTS `sp_InsertBitacora`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_InsertBitacora` (IN `numero_reunion` INT, IN `fecha` DATE, IN `tema` VARCHAR(100), IN `actividades_realizadas` TEXT, IN `id_idea_neg` INT, IN `id_persona` INT)  NO SQL
insert into bitacoras (numero_reunion, fecha, tema, actividades_realizadas, id_idea_neg, id_persona)	values(numero_reunion,fecha,tema,actividades_realizadas,id_idea_neg,id_persona)$$

DROP PROCEDURE IF EXISTS `sp_InsertPrestEquip`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_InsertPrestEquip` (IN `id_equipo_tec` INT, IN `id_persona` INT, IN `estado` VARCHAR(100), IN `fecha` DATE, IN `hora` TIME, IN `tiempo_uso` VARCHAR(100))  NO SQL
insert into prestamo_equipo (id_equipo_tec, id_persona, estado, fecha, hora, tiempo_uso)
values(id_equipo_tec,id_persona,estado,fecha,hora,tiempo_uso)$$

DROP PROCEDURE IF EXISTS `sp_InsEvento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_InsEvento` (IN `id_persona` INT, IN `id_evento` INT)  NO SQL
insert into inscripcion_eventos (fecha_inscripcion, id_persona, id_evento)
values(CURDATE(),id_persona,id_evento)$$

DROP PROCEDURE IF EXISTS `sp_Login`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Login` (IN `usu` VARCHAR(100), IN `cla` VARCHAR(100))  NO SQL
select * from usuarios a WHERE usu=a.nombre_usuario and cla=a.contrasena$$

DROP PROCEDURE IF EXISTS `sp_Login2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Login2` (IN `mail` VARCHAR(100))  NO SQL
SELECT * FROM usuarios WHERE mail = usuarios.correo$$

DROP PROCEDURE IF EXISTS `sp_Menus`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Menus` (IN `id_rol` INT)  NO SQL
select * from menus a inner join privilegios b on a.id_menu=b.id_menu
where id_rol=b.id_rol$$

DROP PROCEDURE IF EXISTS `sp_ModificarBitacora`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarBitacora` (IN `numero_reunion` INT, IN `fecha` DATE, IN `tema` VARCHAR(100), IN `actividades_realizadas` TEXT, IN `id` INT)  NO SQL
update bitacoras 
SET numero_reunion = numero_reunion, fecha = fecha, tema = tema, actividades_realizadas = actividades_realizadas 
WHERE id_bitacora = id$$

DROP PROCEDURE IF EXISTS `sp_ModificarBitacoraMentor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarBitacoraMentor` (IN `comentario` TEXT, IN `id` INT)  NO SQL
update bitacoras 
SET comentario_mentor = comentario
WHERE id_bitacora = id$$

DROP PROCEDURE IF EXISTS `sp_ModificarBitacora_Id`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarBitacora_Id` (IN `id_bitacora` INT, IN `numero_reunion` INT, IN `fecha` DATE, IN `tema` VARCHAR(100), IN `actividades_realizadas` TEXT)  NO SQL
UPDATE bitacoras
SET numero_reunion = numero_reunion, fecha = fecha, tema = tema, actividades_realizadas = actividades_realizadas
WHERE id_bitacora = id_bitacora$$

DROP PROCEDURE IF EXISTS `sp_ModificarClave`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarClave` (IN `clave` TEXT, IN `idUser` INT(11))  NO SQL
UPDATE usuarios
SET contrasena = clave
WHERE id_usuario = idUser$$

DROP PROCEDURE IF EXISTS `sp_ModificarEquipoTec`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarEquipoTec` (IN `idTec` INT(11), IN `nomTec` VARCHAR(100), IN `descTec` VARCHAR(100))  NO SQL
UPDATE equipo_tecnologico
SET nombre_equipo = nomTEc, descripcion = descTec
WHERE id_equipo_tec = idTec$$

DROP PROCEDURE IF EXISTS `sp_ModificarEstadoEvento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarEstadoEvento` (IN `idEvent` INT(11), IN `estad` VARCHAR(100))  NO SQL
UPDATE evento
SET estado = estad
WHERE id_evento = idEvent$$

DROP PROCEDURE IF EXISTS `sp_ModificarEstadoIdea`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarEstadoIdea` (IN `idIdea` INT(11), IN `estad` VARCHAR(100))  NO SQL
UPDATE idea_negocio
SET estado = estad
WHERE id_idea_neg = idIdea$$

DROP PROCEDURE IF EXISTS `sp_ModificarEstadoPrestamoTec`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarEstadoPrestamoTec` (IN `estad` VARCHAR(100), IN `codpres` INT(11), IN `codTec` INT(11))  NO SQL
IF estad = 'Devuelto' OR estad = 'Rechazado' THEN
	UPDATE prestamo_equipo, equipo_tecnologico SET prestamo_equipo.estado = estad, equipo_tecnologico.estado = 'Disponible' WHERE prestamo_equipo.id_prestamo = codpres and equipo_tecnologico.id_equipo_tec = codTec;
    ELSE
    	UPDATE prestamo_equipo, equipo_tecnologico SET prestamo_equipo.estado = estad, equipo_tecnologico.estado = estad WHERE prestamo_equipo.id_prestamo = codpres and equipo_tecnologico.id_equipo_tec = codTec;
    END IF$$

DROP PROCEDURE IF EXISTS `sp_ModificarOficina`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarOficina` (IN `idOfi` INT(11), IN `nomOfi` VARCHAR(100), IN `capOfi` INT(11))  NO SQL
UPDATE oficina
SET nombre = nomOfi, capacidad_de_personas = capOfi
WHERE id_oficina = idOfi$$

DROP PROCEDURE IF EXISTS `sp_ModificarPrestamoTec`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarPrestamoTec` (IN `idPres` INT(11), IN `estadPres` VARCHAR(100))  NO SQL
UPDATE prestamo_equipo
SET estado = estadPres
WHERE id_prestamo = idPres$$

DROP PROCEDURE IF EXISTS `sp_ModificarRol`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarRol` (IN `idusuario` INT(11), IN `idRol` INT(11))  NO SQL
UPDATE usuarios
SET id_rol = idRol 
WHERE id_usuario = idusuario$$

DROP PROCEDURE IF EXISTS `sp_ModificarUsoOfi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarUsoOfi` (IN `codRes` INT(11), IN `estad` VARCHAR(100))  NO SQL
UPDATE uso_de_oficina
SET estado = estad
WHERE id_reserva = codRes$$

DROP PROCEDURE IF EXISTS `sp_MostrarBitacoraId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_MostrarBitacoraId` (IN `id_bitacora` INT)  NO SQL
SELECT * FROM bitacoras WHERE id_bitacora=id_bitacora$$

DROP PROCEDURE IF EXISTS `sp_MostrarEquipoTec`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_MostrarEquipoTec` ()  NO SQL
SELECT * FROM equipo_tecnologico order by id_equipo_tec DESC$$

DROP PROCEDURE IF EXISTS `sp_MostrarEquipoTec_Id`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_MostrarEquipoTec_Id` (IN `id` INT(11))  NO SQL
SELECT * FROM equipo_tecnologico WHERE id_equipo_tec=id$$

DROP PROCEDURE IF EXISTS `sp_MostrarOficinas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_MostrarOficinas` ()  NO SQL
SELECT * FROM oficina$$

DROP PROCEDURE IF EXISTS `sp_MostrarOficinas_Id`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_MostrarOficinas_Id` (IN `idOfi` INT(11))  NO SQL
SELECT * FROM oficina
WHERE id_oficina = idOfi$$

DROP PROCEDURE IF EXISTS `sp_MostrarPersona_Rol`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_MostrarPersona_Rol` ()  NO SQL
SELECT a.id_persona, a.nombres, a.apellidos, c.nombre_rol, b.id_usuario FROM persona a INNER JOIN usuarios b ON a.id_usuario=b.id_usuario
INNER JOIN roles c on c.id_rol=b.id_rol$$

DROP PROCEDURE IF EXISTS `sp_MostrarPersona_Rol_Id`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_MostrarPersona_Rol_Id` (IN `idusuario` INT(11))  NO SQL
SELECT a.id_persona, a.nombres, a.apellidos, c.nombre_rol, b.id_usuario FROM persona a INNER JOIN usuarios b ON a.id_usuario=b.id_usuario
INNER JOIN roles c on c.id_rol=b.id_rol WHERE a.id_usuario =idusuario$$

DROP PROCEDURE IF EXISTS `sp_MostrarRoles`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_MostrarRoles` ()  NO SQL
SELECT * FROM roles$$

DROP PROCEDURE IF EXISTS `sp_ObtenerPersona`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ObtenerPersona` (IN `id_usuario` INT)  NO SQL
select * from persona a where id_usuario=a.id_usuario$$

DROP PROCEDURE IF EXISTS `sp_PerfilUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_PerfilUsuario` (IN `id_usuario` INT)  NO SQL
SELECT b.id_persona, b.nombres, b.apellidos, a.nombre_usuario, a.correo, b.edad, b.telefono, b.direccion, b.grado_academico, b.habilidades, b.vinculo_utec, b.profesion, b.trabaja, b.puesto_trabajo, b.descripcion_puesto, b.nombre_empresa, b.telefono_empresa, b.fecha_nac, a.contrasena, a.id_usuario
from usuarios a inner join persona b on a.id_usuario=b.id_usuario
where a.id_usuario=id_usuario$$

DROP PROCEDURE IF EXISTS `sp_Roles`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Roles` ()  NO SQL
SELECT * FROM roles a where a.id_rol=1 or a.id_rol=5$$

DROP PROCEDURE IF EXISTS `sp_TipoEvento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_TipoEvento` ()  NO SQL
SELECT * FROM tipo_de_evento$$

DROP PROCEDURE IF EXISTS `sp_TipoFormaJuridica`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_TipoFormaJuridica` ()  NO SQL
select * from tipo_idea_negocio_juridica$$

DROP PROCEDURE IF EXISTS `sp_TipoServicio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_TipoServicio` ()  NO SQL
select * from tipo_servicio$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

DROP TABLE IF EXISTS `bitacoras`;
CREATE TABLE `bitacoras` (
  `id_bitacora` int(11) NOT NULL,
  `numero_reunion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `tema` varchar(100) NOT NULL,
  `actividades_realizadas` text NOT NULL,
  `comentario_mentor` text NOT NULL,
  `id_idea_neg` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacoras`
--

INSERT INTO `bitacoras` (`id_bitacora`, `numero_reunion`, `fecha`, `tema`, `actividades_realizadas`, `comentario_mentor`, `id_idea_neg`, `id_persona`) VALUES
(1, 1, '2020-06-03', 'Conociendo a los encargados de la empresa', 'Se realizo una reunión para conocer a los encargados de explicarnos las generalidades del sistema que desean', 'Comenzar a pensar en ideas para solucionar los problemas del area.', 4, 8),
(2, 2, '2020-07-15', 'Diagrama ER', 'Se decidió realizar el diagrama ER para la base de datos, el cual irá cambiando con respecto a los diferentes campos y tablas que se necesitaran para el sistema.', '', 4, 8),
(3, 3, '2020-08-20', 'Windows 10 y XAMPP', 'Se decidió utilizar Windows 10 y XAMPP para realizar el sistema.', '', 4, 8),
(5, 4, '2020-10-03', 'Tema de prueba 3 ', 'Esta es una prueba de actualizacion 5 ', '', 4, 8),
(6, 1, '2020-09-27', 'Reunión para conocer al mentor encargado', 'Se llevo a cabo una reunión con el mentor que nos acompañara en el proceso de la idea de negocio.', '', 12, 14),
(7, 2, '2020-10-04', 'Pasos a trabajar para comenzar con el proyecto.', 'Se decidió realizar una reunión con personas del medio para saber más y recopilar más información del tema.', '', 12, 14),
(8, 3, '2020-10-11', 'Diagrama Entidad Relación', 'Se comenzará a trabajar con el diagrama ER que nos permitirá tener la idea principal de nuestra base de datos.', '', 12, 14),
(9, 1, '2020-09-29', 'Conociendo a al mentor encargado del grupo.', 'Se realizó una reunión para que el grupo conozca al mentor.', '', 6, 13),
(10, 2, '2020-10-06', 'Diagrama ER', 'Se comenzará el diagrama ER que servirá para el desarrollo de la Base de Datos.', '', 6, 13),
(11, 1, '2020-10-31', 'Primera reunión con el mentor a cargo de nuestra idea.', 'Conocimos al mentor que nos brindará apoyo a lo largo del proyecto y a cumplir nuestros objetivos.', '', 13, 15),
(12, 2, '2020-11-07', 'Planeamiento de pasos a seguir en el proyecto.', 'Se discutieron y crearon los pasos que nos llevarán a la realización del proyecto.', '', 13, 15),
(13, 3, '2020-11-14', 'Diagrama ER', 'Se comenzó a crear el diagrama ER, esperamos tener lista una primera versión del mismo para su revisión la siguiente reunión.', '', 13, 15),
(14, 4, '2020-11-21', 'Revisión del diagrama ER', 'El mentor hizo la revisión del diagrama ER, nos sugirió cambios y diferentes campos y tablas que agregar para un mejor funcionamiento.', '', 13, 15),
(15, 1, '2020-10-27', 'Reunión para conocer al mentor encargado', 'Nos reunimos con el mentor encargado de nuestra idea.', '', 14, 20),
(16, 2, '2020-11-03', 'Reunión con personas expertas en seguridad para niños.', 'Nos reunimos con personas que se especializan en seguridad para niños, ellos nos explicaron más a fondo todo lo que lleva este tema y nos despejaron muchas dudas. ', '', 14, 20),
(17, 3, '2020-11-10', 'Creación de pasos para hacer realidad nuestra idea.', 'Comenzamos a trabajar en los pasos que realizaremos para que cumplir nuestra idea y comenzar de inmediato.', '', 14, 20),
(18, 1, '2020-11-04', 'Reunión para conocer al mentor encargado', 'Nos reunimos con el mentor encargado de nuestra idea y proyecto.', '', 15, 25),
(19, 2, '2020-11-11', 'Diagrama ER', 'Se comenzó a trabajar en la creación del diagrama ER, esta será una primera versión para que nuestro mentor pueda revisar y sugerirnos cambios o mejoras.', '', 15, 25),
(20, 3, '2020-11-18', 'Revisión del diagrama ER', 'Nuestro mentor reviso el diagrama ER y nos sugirió cambios en algunos campos y la creación de tablas nuevas que nos faciliten el funcionamiento.', '', 15, 25),
(21, 4, '2020-11-25', 'Finalización de Diagrama ER', 'Se finalizó el diagrama ER y comenzamos a trabajar en la creación de la base de datos.', '', 15, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

DROP TABLE IF EXISTS `equipos`;
CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `id_idea_neg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `id_idea_neg`) VALUES
(2, 4),
(1, 6),
(3, 12),
(4, 13),
(5, 14),
(6, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_tecnologico`
--

DROP TABLE IF EXISTS `equipo_tecnologico`;
CREATE TABLE `equipo_tecnologico` (
  `id_equipo_tec` int(11) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo_tecnologico`
--

INSERT INTO `equipo_tecnologico` (`id_equipo_tec`, `nombre_equipo`, `descripcion`, `estado`) VALUES
(1, 'Laptop ASUS', 'Ram 4gb, Disco Duro 500gb, Intel Core I3', 'Disponible'),
(2, 'LAPTOP DELL VOSTRO 5490', '10th Generation Intel® Core™ i5-10210U Processor (6MB Cache, up to 4.2 GHz)', 'Disponible'),
(3, 'LAPTOP HUAWEI MATEBOOK D14', 'AMD Ryzen 5 3500U, Memoria RAM 8GB, Colaboración Multi-pantalla', 'Disponible'),
(4, 'LAPTOP DELL INSPIRON 13-5392', 'Intel® Core™ i5-10210U 10a. Generación (4 Núcleos 6MB Cache, hasta 4.40 GHz), Memoria RAM 12GB, LPDD', 'Disponible'),
(5, 'Escáner Matter Form V2', 'Permite escanear un objeto con una altura máxima de 25 cm y un diámetro de 18 cm.', 'Disponible'),
(6, 'Escáner RangeVision Smart', 'Proporciona una precisión de 0,1 mm, una resolución de 0,12 mm y una velocidad que va de 4 a 12 segu', 'Disponible'),
(7, 'Impresora 3D MP Select Mini V2', 'Tiene un volumen de impresión de 120 x 120 x 120 mm y una resolución de 100-300 micras.', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nombre_evento` varchar(100) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `lugar_evento` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `id_tipo_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `nombre_evento`, `hora`, `fecha`, `lugar_evento`, `cantidad`, `estado`, `id_tipo_evento`) VALUES
(1, 'Plan de Negocio', '09:00:00', '2020-11-25', 'Auditorio de la Paz', 49, 'Inactivo', 10),
(2, 'Idea de Negocio Locales', '01:30:00', '2020-12-01', 'Aula Magna', 75, 'Activo', 3),
(3, 'Taller de Ciberseguridad', '09:26:00', '2020-09-30', 'Laboratorio 3', 95, 'Activo', 11),
(4, 'Las reglas APA y su importancia', '08:00:00', '2020-10-27', 'Laboratorio 2', 75, 'Activo', 10),
(5, 'Diseños 3D', '10:00:00', '2020-10-31', 'Laboratorio 3', 90, 'Activo', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idea_negocio`
--

DROP TABLE IF EXISTS `idea_negocio`;
CREATE TABLE `idea_negocio` (
  `id_idea_neg` int(11) NOT NULL,
  `nombre_proyecto` varchar(100) NOT NULL,
  `id_tipo_idea` int(11) NOT NULL,
  `id_tipo_servicio` int(11) NOT NULL,
  `razon_social` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `oportunidades` text NOT NULL,
  `horas_trabajar` varchar(100) NOT NULL,
  `equipo_propio` char(2) NOT NULL,
  `descripcion_equipo` text NOT NULL,
  `id_persona` int(11) NOT NULL,
  `plan_de_negocio` text NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `idea_negocio`
--

INSERT INTO `idea_negocio` (`id_idea_neg`, `nombre_proyecto`, `id_tipo_idea`, `id_tipo_servicio`, `razon_social`, `fecha_inicio`, `oportunidades`, `horas_trabajar`, `equipo_propio`, `descripcion_equipo`, `id_persona`, `plan_de_negocio`, `estado`) VALUES
(4, 'Inventario en Farmacias', 1, 1, 'fefqe', '2020-09-30', 'grwgwr', '10 horas', 'Si', 'Laptop ASUS', 8, '', 'En proceso'),
(6, 'Fabricacion de Elementos', 1, 5, 'Mayor demanda de productos tecnologicos', '2020-09-29', 'ascsasasd', '10 horas', 'Si', 'Laptop HP', 13, '', 'En proceso'),
(12, 'Sitio Web para la busqueda de empleo', 3, 1, 'irwfnrwinvrvnpecweq', '2020-10-27', 'wenfrwingwiepfpqeofjq', '6 Horas', 'No', '', 14, '', 'En proceso'),
(13, 'Página web de reserva para restaurantes de comida rápida', 1, 5, 'La solución para no tener que hacer fila para recoger la comida al mediodía.', '2021-02-02', 'La idea es llegar justo en el momento en el que el pedido está listo.', '10 horas', 'Si', 'Laptop ASUS Intel Core i3 7ma Generación', 15, './archivos/plan_de_negocio/Plan de Negocio 1.docx', 'En Proceso'),
(14, 'Consultora de seguridad para niños', 5, 1, 'Así se pueden evitar sustos y accidentes domésticos.', '2021-01-12', 'Consejos y medidas para una casa más segura.', '6 Horas', 'Si', 'Laptop HP Intel Core i3 8va Generación', 20, './archivos/plan_de_negocio/Plan de Negocio 2.docx', 'En Proceso'),
(15, 'Sitio Web para ofrecer los servicios de diferentes trabajadores.', 1, 5, 'Ofrecer los diferentes oficios de diferentes personas a través de un sitio web.', '2021-03-03', 'La motivación para ayudar a los trabajadores independientes a ofrecer sus servicios.', '9 Horas', 'Si', 'Laptop ASUS Intel Core i5 9na Generación', 25, './archivos/plan_de_negocio/Plan de Negocio 4.docx', 'En Proceso');

--
-- Disparadores `idea_negocio`
--
DROP TRIGGER IF EXISTS `insertEquipos`;
DELIMITER $$
CREATE TRIGGER `insertEquipos` AFTER INSERT ON `idea_negocio` FOR EACH ROW insert into equipos (id_idea_neg)
values (new.id_idea_neg)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_eventos`
--

DROP TABLE IF EXISTS `inscripcion_eventos`;
CREATE TABLE `inscripcion_eventos` (
  `id_inscripcion` int(11) NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion_eventos`
--

INSERT INTO `inscripcion_eventos` (`id_inscripcion`, `fecha_inscripcion`, `id_persona`, `id_evento`) VALUES
(1, '2020-10-02', 8, 3),
(2, '2020-10-03', 8, 2),
(3, '2020-10-05', 8, 2),
(4, '2020-10-05', 8, 1),
(5, '2020-10-12', 14, 3),
(6, '2020-10-12', 3, 3),
(7, '2020-10-16', 3, 1);

--
-- Disparadores `inscripcion_eventos`
--
DROP TRIGGER IF EXISTS `inscritosEventosResta`;
DELIMITER $$
CREATE TRIGGER `inscritosEventosResta` AFTER INSERT ON `inscripcion_eventos` FOR EACH ROW update evento
set cantidad = cantidad - 1
where id_evento = new.id_evento
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `nombre_opcion` varchar(100) NOT NULL,
  `url_archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `nombre_opcion`, `url_archivo`) VALUES
(1, 'Inicio', 'index.php?acc=inicioConsultor'),
(2, 'Idea de Negocio', 'index.php?acc=vIngresarIdeaNegocio'),
(3, 'Eventos', 'index.php?acc=vInscribirEvento'),
(4, 'Uso de Oficina', 'index.php?acc=vUsoOficina1'),
(5, 'Prestamo de Equipos', 'index.php?acc=vIngresarPrestamoEquipo'),
(6, 'Bitácoras', 'index.php?acc=vListaBitacoras'),
(7, 'Inscripción Idea de Negocio', 'index.php?acc=vInscribirseIdeaNeg'),
(8, 'Bitácoras', 'index.php?acc=vIngresarBitacora'),
(9, 'Bitácoras', 'index.php?acc=bitaMentor'),
(10, 'Oficinas', 'index.php?acc=vOficinas'),
(11, 'Equipo Tecnológico', 'index.php?acc=vEquipoTecnologico'),
(12, 'Eventos', 'index.php?acc=vCrearEvento'),
(13, 'Inscritos a Eventos', 'index.php?acc=vMostrarInsEvent'),
(14, 'Equipos de Proyectos', 'index.php?acc=vMostrarEquiProyect'),
(15, 'Asignar Roles', 'index.php?acc=vAsignarRoles'),
(16, 'Asignar Mentores', 'index.php?acc=vAsignarMentores'),
(17, 'Prestamos de Equipos', 'index.php?acc=vMostrarPrestamoTec'),
(18, 'Uso de Oficina', 'index.php?acc=vMostrarUsoOfi'),
(19, 'Ideas de Negocio', 'index.php?acc=vIdeasMostrar'),
(20, 'Bitácoras', 'index.php?acc=vMostrarBitacoras'),
(21, 'Reportes', 'index.php?acc=vReportes'),
(22, 'Perfil de Usuario', 'index.php?acc=vPerfilUsuario'),
(23, 'Cerrar Sesión', 'index.php?acc=cerrar_sesion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros_de_equipo`
--

DROP TABLE IF EXISTS `miembros_de_equipo`;
CREATE TABLE `miembros_de_equipo` (
  `id_miembro` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `miembros_de_equipo`
--

INSERT INTO `miembros_de_equipo` (`id_miembro`, `id_persona`, `id_equipo`) VALUES
(1, 3, 2),
(2, 8, 2),
(3, 9, 1),
(4, 10, 2),
(5, 3, 2),
(6, 12, 1),
(7, 13, 1),
(9, 9, 2),
(12, 14, 3),
(13, 15, 4),
(14, 16, 4),
(15, 17, 4),
(16, 18, 4),
(17, 19, 4),
(18, 20, 5),
(19, 21, 5),
(20, 22, 5),
(21, 23, 5),
(22, 24, 5),
(23, 25, 6),
(24, 26, 6),
(25, 27, 6),
(26, 28, 6),
(27, 29, 4),
(28, 29, 6),
(29, 12, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficina`
--

DROP TABLE IF EXISTS `oficina`;
CREATE TABLE `oficina` (
  `id_oficina` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `capacidad_de_personas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oficina`
--

INSERT INTO `oficina` (`id_oficina`, `nombre`, `capacidad_de_personas`) VALUES
(1, 'Sala de Reuniones', 10),
(2, 'Sala de Prototipado', 15),
(3, 'Sala de Co-Working', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `nit` varchar(17) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `lugar_nac` varchar(100) NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `grado_academico` varchar(100) NOT NULL,
  `habilidades` text NOT NULL,
  `vinculo_utec` varchar(100) NOT NULL,
  `hoja_de_vida` text NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `trabaja` char(2) NOT NULL,
  `puesto_trabajo` varchar(100) NOT NULL,
  `descripcion_puesto` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_empresa` varchar(100) NOT NULL,
  `telefono_empresa` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `apellidos`, `edad`, `nit`, `nacionalidad`, `genero`, `lugar_nac`, `fecha_nac`, `telefono`, `direccion`, `grado_academico`, `habilidades`, `vinculo_utec`, `hoja_de_vida`, `profesion`, `trabaja`, `puesto_trabajo`, `descripcion_puesto`, `id_usuario`, `nombre_empresa`, `telefono_empresa`) VALUES
(3, 'Emilio José', 'Amaya Muñoz', 23, '0512-060597-188-0', 'Salvadoreño', 'Masculino', 'Hospital Maternidad', '1997-06-09', '7887-7452', '10 av norte pasaje 2 casa 15', 'Universitario Egresado', 'Facilidad para trabajar en equipo, Persistencia y constancia para obtener los resultados deseados, Buena capacidad de comunicación, tanto verbal como escrita, Ser un gran apasionado por el trabajo que se desempeña.', 'Egresado', '', 'Técnico en Software', 'Si', 'Programador de Software', 'Escribir programas para controlar el funcionamiento interno de los ordenadores, lo que implica diseño.', 2, 'SEGA', '2255-9933'),
(8, 'Lenny Alexander', 'Servino Henriquez', 22, '0512-060597-188-0', 'Salvadoreño', 'Masculino', 'Hospital 1° de Mayo', '1998-05-02', '7399-0051', '10 av norte pasaje 2 casa 15', 'Universitario Egresado', 'Facilidad para trabajar en equipo, Persistencia y constancia para obtener los resultados deseados, Buena capacidad de comunicación, tanto verbal como escrita, Ser un gran apasionado por el trabajo que se desempeña', 'Egresado', '', 'Técnico en Software', 'Si', 'Programador de Software', 'Crear Programas', 3, 'Microsoft', '2255-9933'),
(9, 'Luis Mario', 'Martinez Hernandez', 22, '0512-060597-188-0', 'Salvadoreño', 'Masculino', 'Hospital 1° de Mayo', '1997-05-02', '7399-0051', '10 av norte pasaje 2 casa 15', 'Universitario Egresado', 'fwegwegwegwe', 'Egresado', '', 'Técnico en Software', 'Si', 'Programador de Software', 'gwgwrgrwg', 8, 'Microsoft', '2255-9933'),
(10, 'Luis Antonio', 'Herrera Cruz', 22, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 5, '', ''),
(11, 'Mario Antonio', 'Hernandez Sanchez', 22, '', 'Salvadoreño', '', '', '2000-08-04', '', '', '', '', '', '', '', '', '', '', 6, '', ''),
(12, 'Camilo Alexander', 'Alfaro Chacon', 22, '', '', '', '', '2000-10-08', '', '', '', '', '', '', '', '', '', '', 7, '', ''),
(13, 'Josué Mario', 'Ramírez González', 23, '0512-060597-188-0', 'Salvadoreño', 'Masculino', 'Hospital Maternidad', '1997-06-05', '7030-1048', '10 av norte pasaje 2 casa 20', 'Universitario Egresado', 'Trabajo en grupo, Capacidad de aprender de los demás.', 'Estudiante', '', 'Técnico en Software', 'Si', 'Programador de Software', 'Es muy importante que el desarrollador pueda ser capaz de aprender cosas por sí mismo, tener autonom', 11, 'Microsoft', '2255-9933'),
(14, 'Sandra Veronica', 'Gonzalez Martinez', 23, '0512-060597-188-0', 'Salvadoreña', 'Femenino', 'Hospital Maternidad', '1997-06-06', '7399-0051', '10 av norte pasaje 2 casa 15', 'Universitario Egresado', 'Trabajo en equipo', 'Estudiante', '', 'Técnico en Software', 'Si', 'Programador de Software', 'Diseño y creación de software', 12, 'Microsoft', '2255-9933'),
(15, 'Jaime Francisco', 'Aguayo González', 23, '0698-020697-155-0', 'Salvadoreño', 'Masculino', 'Hospital Nacional Rosales', '1997-02-02', '7563-2011', 'AV. GUADALUPE S/N', 'Universitario Egresado', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Egresado', './archivos/hojas_de_vida/Hoja de Vida 1.docx', 'Ninguna', 'No', '', '', 16, '', ''),
(16, 'Andrea Celaya', 'Chávez Heredia', 22, '0574-020598-187-0', 'Salvadoreña', 'Femenino', 'Hospital Paravida', '1998-08-03', '7920-9911', 'AVENIDA NIÑOS HEROES NO. 3', 'Universitario', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 2.docx', 'Técnico en Software', 'Si', 'Programador de Software', 'Crear y diseñar programas.', 17, 'Microsoft', '2356-9014'),
(17, 'Ruth Silvana', 'Cortés Lagunes', 23, '0349-020597-155-0', 'Salvadoreña', 'Femenino', 'Hospital 1° de Mayo', '1997-08-06', '7629-0205', 'AV. LIC. VICENTE AGUIRRE S/N', 'Universitaria', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 2.docx', 'Ninguna', 'No', '', '', 18, '', ''),
(18, 'Ariana', 'de Jesús Ramos', 27, '0358-020593-166-0', 'Salvadoreña', 'Femenino', 'Hospital Nacional Rosales', '1993-05-02', '7596-0054', 'AV. REVOLUCION S/N', 'Universitaria', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 4.docx', 'Técnico en Software', 'Si', 'Analista de Base de Datos', 'Análisis de bases de datos.', 19, 'EPA', '2495-6987'),
(19, 'Luis Felipe', 'Delgado Barrón', 23, '0146-020597-168-0', 'Salvadoreño', 'Masculino', 'Hospital Maternidad', '1997-05-02', '7620-1598', '5 DE MAYO NO.1', 'Universitario', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 5.docx', 'Ninguna', 'No', '', '', 20, '', ''),
(20, 'Hansel Andres', 'Espejo Ramos', 25, '0647-050995-168-0', 'Salvadoreño', 'Masculino', 'Hospital Nacional Rosales', '1995-09-05', '7320-0015', '10 av norte pasaje 2 casa 20', 'Universitario', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 1.docx', 'Ninguna', 'No', '', '', 21, '', ''),
(21, 'Aniyensy Sarai', 'Flores Aguilar', 20, '0519-060600-155-0', 'Salvadoreña', 'Femenino', 'Hospital Paravida', '2000-06-06', '7362-0000', '10 av norte pasaje 2 casa 15', 'Universitaria', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Egresado', './archivos/hojas_de_vida/Hoja de Vida 2.docx', 'Ninguna', 'No', '', '', 22, '', ''),
(22, 'Paulette', 'Flores Silva', 23, '0615-090697-166-0', 'Salvadoreña', 'Femenino', 'Hospital 1° de Mayo', '1997-06-09', '6025-7413', 'AV. GUADALUPE S/N', 'Universitaria', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 3.docx', 'Ninguna', 'No', '', '', 23, '', ''),
(23, 'Montserrat Carolina', 'García Arreguín', 22, '0574-020598-187-0', 'Salvadoreña', 'Femenino', 'Hospital Maternidad', '1998-05-02', '6599-0057', 'AV. REVOLUCION S/N', 'Universitaria', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 4.docx', 'Ninguna', 'No', '', '', 24, '', ''),
(24, 'Lisset Vianey', 'García Orozco', 21, '0649-010199-144-0', 'Salvadoreña', 'Femenino', 'Hospital 1° de Mayo', '1999-01-01', '6699-1458', 'AVENIDA NIÑOS HEROES NO. 3', 'Universitaria', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 5.docx', 'Ninguna', 'No', '', '', 25, '', ''),
(25, 'José Ignacio', 'Gómez Vargas', 23, '0614-050797-144-0', 'Salvadoreño', 'Masculino', 'Hospital 1° de Mayo', '1997-07-05', '6798-0201', '10 av norte pasaje 2 casa 20', 'Universitario', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 1.docx', 'Ninguna', 'No', '', '', 26, '', ''),
(26, 'Rocio', 'González Díaz', 23, '0236-120397-123-0', 'Salvadoreña', 'Femenino', 'Hospital Nacional Rosales', '1997-03-12', '6249-8710', '10 av norte pasaje 2 casa 15', 'Universitaria', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 2.docx', 'Ninguna', 'Si', 'Cajera', 'Persona responsable de sumar la cantidad debida por una compra.', 27, 'Super Selectos', '2649-0025'),
(27, 'Cipriano Ariel', 'González Trejo', 22, '0574-020598-187-0', 'Salvadoreño', 'Masculino', 'Hospital 1° de Mayo', '1998-05-02', '6498-0032', 'AV. REVOLUCION S/N', 'Universitaria', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 3.docx', 'Ninguna', 'Si', 'Cajero', 'Persona responsable de sumar la cantidad debida por una compra.', 28, 'Despensa Familiar', '2469-0159'),
(28, 'Miguel Alejandro', 'Guerrero Padrés', 28, '0517-200892-159-0', 'Salvadoreño', 'Masculino', 'Hospital Maternidad', '1992-08-20', '7200-9820', '10 av norte pasaje 2 casa 25', 'Universitario', 'Capacidad para trabajar bajo presión, Exactitud, Adaptabilidad, Asesoramiento a las personas, Análisis de datos, Análisis de problemas, Equipo de montaje, Atención a los detalles, Reunión creativa.', 'Estudiante', './archivos/hojas_de_vida/Hoja de Vida 5.docx', 'Ninguna', 'No', '', '', 29, '', ''),
(29, 'Vinicio Alonso', 'Sibrian Rodriguez', 23, '0649-100197-166-8', 'Salvadoreño', 'Masculino', 'Hospital Nacional Rosales', '1997-01-10', '7530-6594', '10 av norte pasaje 2 casa 17', 'Graduado', 'Responsabilidad, Eficiencia, Ambición y Contemporaneidad.', 'Profesor', './archivos/hojas_de_vida/Hoja de Vida 4.docx', 'Ingeniero en Sistemas', 'Si', 'Profesor', 'Impartir diferentes materias en diferentes niveles y carreras en las universidad.', 30, 'UTEC', '2649-9872');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_equipo`
--

DROP TABLE IF EXISTS `prestamo_equipo`;
CREATE TABLE `prestamo_equipo` (
  `id_prestamo` int(11) NOT NULL,
  `id_equipo_tec` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tiempo_uso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo_equipo`
--

INSERT INTO `prestamo_equipo` (`id_prestamo`, `id_equipo_tec`, `id_persona`, `estado`, `fecha`, `hora`, `tiempo_uso`) VALUES
(1, 1, 8, 'Rechazado', '2020-10-02', '17:31:00', '2 horas'),
(2, 1, 8, 'Devuelto', '2020-10-04', '18:28:00', '2 horas'),
(3, 1, 14, 'Rechazado', '2020-10-12', '15:51:00', '1 Hora'),
(4, 1, 14, 'Devuelto', '2020-10-13', '12:00:00', '2 Horas');

--
-- Disparadores `prestamo_equipo`
--
DROP TRIGGER IF EXISTS `cambiarEstadoEquipo`;
DELIMITER $$
CREATE TRIGGER `cambiarEstadoEquipo` AFTER INSERT ON `prestamo_equipo` FOR EACH ROW update equipo_tecnologico
set estado = 'Espera'
where id_equipo_tec = new.id_equipo_tec
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

DROP TABLE IF EXISTS `privilegios`;
CREATE TABLE `privilegios` (
  `id_privilegio` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`id_privilegio`, `id_rol`, `id_menu`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 22),
(9, 1, 23),
(10, 2, 1),
(11, 2, 2),
(12, 2, 3),
(13, 2, 4),
(14, 2, 5),
(15, 2, 7),
(16, 2, 8),
(17, 2, 22),
(18, 2, 23),
(19, 3, 1),
(20, 3, 2),
(21, 3, 3),
(22, 3, 4),
(23, 3, 5),
(24, 3, 7),
(25, 3, 9),
(26, 3, 22),
(27, 3, 23),
(28, 4, 1),
(29, 4, 10),
(30, 4, 11),
(31, 4, 12),
(32, 4, 13),
(33, 4, 14),
(34, 4, 15),
(35, 4, 16),
(36, 4, 17),
(37, 4, 18),
(38, 4, 19),
(39, 4, 20),
(40, 4, 21),
(41, 4, 22),
(42, 4, 23),
(43, 5, 1),
(44, 5, 3),
(45, 5, 4),
(46, 5, 22),
(47, 5, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Emprendedor'),
(2, 'Emprendedor Lider'),
(3, 'Mentor Emprendedor'),
(4, 'Administrador'),
(5, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `rptusooficina`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `rptusooficina`;
CREATE TABLE `rptusooficina` (
`cod_res` int(11)
,`act` varchar(200)
,`nom_ofi` varchar(100)
,`nom_com` varchar(201)
,`cant` int(11)
,`fch` date
,`hrs` time
,`time_est` varchar(100)
,`est` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_evento`
--

DROP TABLE IF EXISTS `tipo_de_evento`;
CREATE TABLE `tipo_de_evento` (
  `id_tipo_evento` int(11) NOT NULL,
  `nombre_tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_de_evento`
--

INSERT INTO `tipo_de_evento` (`id_tipo_evento`, `nombre_tipo`) VALUES
(1, 'Capacitación'),
(2, 'Competencias o Concursos'),
(3, 'Conferencia'),
(4, 'Congreso'),
(5, 'Conversatorio'),
(6, 'Diplomados'),
(7, 'Ferias'),
(8, 'Investigaciones'),
(9, 'Panel Fórum'),
(10, 'Seminario'),
(11, 'Talleres'),
(12, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_idea_negocio_juridica`
--

DROP TABLE IF EXISTS `tipo_idea_negocio_juridica`;
CREATE TABLE `tipo_idea_negocio_juridica` (
  `id_tipo_idea` int(11) NOT NULL,
  `nombre_tipo_idea` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_idea_negocio_juridica`
--

INSERT INTO `tipo_idea_negocio_juridica` (`id_tipo_idea`, `nombre_tipo_idea`) VALUES
(1, 'Empresario Individual'),
(2, 'Sociedad Limitada'),
(3, 'Sociedad Limitada Nueva Empresa'),
(4, 'Sociedad Anónima'),
(5, 'Sociedades Laborales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

DROP TABLE IF EXISTS `tipo_servicio`;
CREATE TABLE `tipo_servicio` (
  `id_tipo_servicio` int(11) NOT NULL,
  `nombre_tipo_servicio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id_tipo_servicio`, `nombre_tipo_servicio`) VALUES
(1, 'Social'),
(2, 'Tecnológico'),
(3, 'Educativo'),
(4, 'Científico'),
(5, 'Económico'),
(6, 'Turístico'),
(7, 'Arquitectura'),
(8, 'Diseño y Arte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uso_de_oficina`
--

DROP TABLE IF EXISTS `uso_de_oficina`;
CREATE TABLE `uso_de_oficina` (
  `id_reserva` int(11) NOT NULL,
  `actividad_realizar` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(100) NOT NULL,
  `tiempo_de_estadia` varchar(100) NOT NULL,
  `cantidad_acompa` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `uso_de_oficina`
--

INSERT INTO `uso_de_oficina` (`id_reserva`, `actividad_realizar`, `fecha`, `hora`, `estado`, `tiempo_de_estadia`, `cantidad_acompa`, `id_oficina`, `id_persona`) VALUES
(6, 'Avanzar en la programación del sistema.', '2020-10-21', '19:47:00', 'Finalizado', '2 Horas', 2, 1, 3);

--
-- Disparadores `uso_de_oficina`
--
DROP TRIGGER IF EXISTS `tg_actualizarDispoOfi`;
DELIMITER $$
CREATE TRIGGER `tg_actualizarDispoOfi` AFTER UPDATE ON `uso_de_oficina` FOR EACH ROW update oficina
set capacidad_de_personas = (capacidad_de_personas + new.cantidad_acompa)
where id_oficina = new.id_oficina
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `updateDisponiblesOficina`;
DELIMITER $$
CREATE TRIGGER `updateDisponiblesOficina` AFTER INSERT ON `uso_de_oficina` FOR EACH ROW update oficina
set capacidad_de_personas = (capacidad_de_personas - new.cantidad_acompa)
where id_oficina = new.id_oficina
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `contrasena` text NOT NULL,
  `correo` varchar(100) NOT NULL,
  `dui` varchar(9) NOT NULL,
  `pasaporte` varchar(9) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `contrasena`, `correo`, `dui`, `pasaporte`, `id_rol`) VALUES
(2, 'emilio', '$2y$12$UENAtc53p35UWmBu.6gE7uy1F1b09LocAELcXJOjjZuRfbjiJo0iS', 'emilio.amaya@gmail.com', '1234567-8', '', 1),
(3, 'lenny', '$2y$12$ywCGjGL2vYEpPEeo7CI6hOI.yie/GR7cdAdbmmZvvfrrahS.7UcGS', 'lenny@gmail.com', '9876543-2', '', 4),
(4, 'pedro', '$2y$12$jlQimAgppweyyvGlbaCgKOLrX9926vrpd9D/umqvBJob0mryZoQ7i', 'pedro@gmail.com', '4561237-9', '', 3),
(5, 'luis', '$2y$12$AIGwNCMFc7dZpt9oflBezODvPEpcucKtrSYEnfOvsFEp4UmVsWc72', 'luis@gmail.com', '3462187-5', '', 4),
(6, 'mario', '$2y$12$nttjuCiVYjnemWxYrwSOHedO9Yg5Z4Ep8ifZC.ecJ5yfpIjHODDL6', 'mario@gmail.com', '3461087-2', '', 5),
(7, 'camilo', '$2y$12$Z1VnoO93t5eKUgdMUnSPVuW2XVfT1kzu5Q22Q2vOAHWtGDoxLIUGO', 'camilio@gmail.com', '1234567-8', '9876543-2', 3),
(8, 'luis2', '$2y$12$VZ1iMPhCQoKMsbvhSycyC.Qlx5NpkCYp6GYvrGPSWAjst2/JSAXam', 'luis2@gmail.com', '1234567-8', '', 3),
(9, 'carlos007', '$2y$12$fYyianSjK4ejD90Yd9UY0eX/JiTwdEZsuRMzwOA58U2NlrBmRfhmK', 'carlos007@gmail.com', '1234567-8', '9876543-2', 3),
(10, 'jose', '$2y$12$9ZIxjHUwlzGZsB/O6MYvquWML3Z7rpMI4uUajYBktyXMVZN8/3t/m', 'jose@gmail.com', '1234567-8', '', 1),
(11, 'josue', '$2y$12$DLsQTphQfYBwJGfkou9J0O/kaR81v2GgZsvS0IV0NU3smWGxu.3Dy', 'josue@gmail.com', '1234567-8', '9876543-2', 2),
(12, 'sandra', '$2y$12$4QxDUjbOgVdG9qSXspBcY.HkmeCXI.W7UKgd1Daapv.FQzCwzwcH2', 'sandra@mail.com', '1234567-8', '9876543-2', 2),
(15, 'kevin12', '$2y$12$QiNd9NMoznYKU5C4aTcTE.mNf0Z6/MSmDakIWXdv3IQiYhdlleGUS', 'kevin12@gmail.com', '1234567-2', '', 1),
(16, 'francisco', '$2y$12$mXd07g8nHeQQqSFHAmnamuBPNC13n629FBD5k0EtkdIFB5SSzXnxG', 'francisco@mail.com', '0065497-8', '', 2),
(17, 'andrea', '$2y$12$8Np/quS6lOuJ3z5ccYN/2uQVFA7fGsuHLuHzy.AmW3YfH.nyefvc6', 'andrea@mail.com', '006497-8', '', 1),
(18, 'ruth', '$2y$12$4IQHBsLaRCeMXC3wPcxoNeK3UMVFYV/zQK.wU8l.jGJjrp.BKCkie', 'silvana@mail.com', '004697-5', '', 1),
(19, 'ariana', '$2y$12$QgG8Fvs/icgheGE38c92Z.0lhklmXcvoXA65VOzxhrbM0LEjcKE.e', 'ariana@mail.com', '0036497-8', '', 1),
(20, 'felipe', '$2y$12$Rvy8CAT0XeS6wjP0pJvhw.0K3LGhs8327SpiNprpviLIajRsc34Eq', 'felipe@mail.com', '0034961-7', '', 1),
(21, 'andres', '$2y$12$7KqmitCv4rhRAN/H9uWhBObYZLSzaGVoF9KNkv2nDRtvtRlVlDaDK', 'andres@mail.com', '0067916-7', '', 2),
(22, 'sarai', '$2y$12$o4sNfT7tiBS0kRVZ6N6HN.0F6I3A9hI87CXur454mDB/r0TQV4wtC', 'sarai@mail.com', '0064978-9', '', 1),
(23, 'paulette', '$2y$12$SVVJCvoNc8efOwm.HIlks.VodwdXnbHRS8bN.3SuDW5S4GERpLqkq', 'paulette@mail.com', '0036721-5', '', 1),
(24, 'carolina', '$2y$12$BO7RwMkO88tEcIcULuayjeuix1weaTpbmXOtGGe5TAWkVtMOHtgeO', 'carolina@mail.com', '0064921-7', '', 1),
(25, 'lisset', '$2y$12$gBVQKJhfC6fABq9DlYoi7ewOwA3kQnKjzSWV6T36Gsq6Ttd5o0loC', 'lisset@mail.com', '0064928-3', '', 1),
(26, 'ignacio', '$2y$12$PG6EQ00ouE5DMwKP4B3GpeGhP1RSN2yhGV5wDrVOXuBm7WkEhO1Ya', 'ignacio@mail.com', '0031794-8', '', 2),
(27, 'rocio', '$2y$12$4Nd42ukkAZyWkoDXMo0Fm.g.McCiKY4x7TsonDT5sNKaxjwgCAw/.', 'rocio@mail.com', '0068719-4', '', 1),
(28, 'ariel', '$2y$12$i7YYpFrBvQgn00Hay.xfYuDtzz9b4dF9fGJbqPmh9.37kRvJgqwZG', 'ariel@mail.com', '0016975-2', '', 1),
(29, 'miguel', '$2y$12$MpUq9nc8kGvMq6GK1IP5zuuCMfwXcHzk5HIgGdkRBkG69fblINbTC', 'miguel@mail.com', '0015976-9', '', 1),
(30, 'vinicio', '$2y$12$/77CNpbG4SuDqljSjB.RN.0AZpY6oy9ekjqUE55qyVYHFC4UzTmNm', 'vinicio@mail.com', '0064928-2', '', 3);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vbitacoras`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vbitacoras`;
CREATE TABLE `vbitacoras` (
`cod_bit` int(11)
,`num_r` int(11)
,`fch` date
,`thm` varchar(100)
,`act_rea` text
,`com_men` text
,`cod_equi` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vbitamentor`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vbitamentor`;
CREATE TABLE `vbitamentor` (
`cod_bit` int(11)
,`num_r` int(11)
,`fch` date
,`thm` varchar(100)
,`act` text
,`com_men` text
,`cod_p` int(11)
,`cod_equip` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vbitproyect`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vbitproyect`;
CREATE TABLE `vbitproyect` (
`cod_bit` int(11)
,`num_re` int(11)
,`fch` date
,`thm` varchar(100)
,`actividades` varchar(75)
,`comentario` varchar(50)
,`cod_equi` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vequip`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vequip`;
CREATE TABLE `vequip` (
`cod_equi` int(11)
,`cod_p` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vequipotecno`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vequipotecno`;
CREATE TABLE `vequipotecno` (
`cod` int(11)
,`nom` varchar(100)
,`des` varchar(100)
,`est` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vequiptec`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vequiptec`;
CREATE TABLE `vequiptec` (
`codigo` int(11)
,`nom_equi` varchar(100)
,`des` varchar(45)
,`est` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vevnts`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vevnts`;
CREATE TABLE `vevnts` (
`codigo` int(11)
,`nom_eve` varchar(100)
,`nom_tip` varchar(100)
,`hrs` time
,`fch` date
,`lug_eve` varchar(100)
,`cant` int(11)
,`est` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vgruposideaneg`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vgruposideaneg`;
CREATE TABLE `vgruposideaneg` (
`cod` int(11)
,`nom_com` varchar(201)
,`email` varchar(100)
,`tlf` varchar(9)
,`nom_rol` varchar(50)
,`nom_pro` varchar(100)
,`cod_equi` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `videaequipo`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `videaequipo`;
CREATE TABLE `videaequipo` (
`nom_pro` varchar(100)
,`cod_p` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `videaneg`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `videaneg`;
CREATE TABLE `videaneg` (
`cod_neg` int(11)
,`cod_p` int(11)
,`nom_pro` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `videasendesarrollo`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `videasendesarrollo`;
CREATE TABLE `videasendesarrollo` (
`cod` int(11)
,`nom_pro` varchar(100)
,`jur` varchar(100)
,`ser` varchar(100)
,`razon` text
,`fch` date
,`nom_com` varchar(201)
,`est` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `videaslist`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `videaslist`;
CREATE TABLE `videaslist` (
`codIdea` int(11)
,`codTeam` int(11)
,`nomProyect` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `videasproceso`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `videasproceso`;
CREATE TABLE `videasproceso` (
`codigo` int(11)
,`proyecto` varchar(100)
,`estado` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vins_event`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vins_event`;
CREATE TABLE `vins_event` (
`nomPer` varchar(100)
,`apePer` varchar(100)
,`fechIns` date
,`codEvent` int(11)
,`nomEvent` varchar(100)
,`ubiEvent` varchar(100)
,`fechEvent` date
,`horaEvent` time
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vjuridica`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vjuridica`;
CREATE TABLE `vjuridica` (
`codigo` int(11)
,`descripcion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vlistaoficina`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vlistaoficina`;
CREATE TABLE `vlistaoficina` (
`cod_ofi` int(11)
,`nom_ofi` varchar(100)
,`cap_per` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vlisteventinscrip`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vlisteventinscrip`;
CREATE TABLE `vlisteventinscrip` (
`codigo` int(11)
,`nom_eve` varchar(100)
,`nom_tip` varchar(100)
,`fch` date
,`hrs` time
,`lug_eve` varchar(100)
,`fch_ins` date
,`cod_per` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vlistideasmentor`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vlistideasmentor`;
CREATE TABLE `vlistideasmentor` (
`cod_idea` int(11)
,`cod_equip` int(11)
,`nom_pro` varchar(100)
,`cod_p` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vmiembrosequipo`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vmiembrosequipo`;
CREATE TABLE `vmiembrosequipo` (
`codPer` int(11)
,`nomPer` varchar(100)
,`apePer` varchar(100)
,`codTeam` int(11)
,`codMiembro` int(11)
,`nomProyect` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vmostrarmentores`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vmostrarmentores`;
CREATE TABLE `vmostrarmentores` (
`codper` int(11)
,`nomPer` varchar(100)
,`apePer` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vmostrarmentores_idea`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vmostrarmentores_idea`;
CREATE TABLE `vmostrarmentores_idea` (
`codPer` int(11)
,`nomPer` varchar(100)
,`apePer` varchar(100)
,`codTeam` int(11)
,`codMiembro` int(11)
,`nomProyect` varchar(100)
,`codRol` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vmostrarusooficina`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vmostrarusooficina`;
CREATE TABLE `vmostrarusooficina` (
`codRes` int(11)
,`actRea` varchar(200)
,`fechUso` date
,`horaUso` time
,`tiempUso` varchar(100)
,`cantAcomp` int(11)
,`estad` varchar(100)
,`codOfi` int(11)
,`nomofi` varchar(100)
,`nomPer` varchar(100)
,`apePer` varchar(100)
,`codPer` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vmostrar_ideas_inicio`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vmostrar_ideas_inicio`;
CREATE TABLE `vmostrar_ideas_inicio` (
`codIdea` int(11)
,`nomProyect` varchar(100)
,`rSocial` text
,`estad` varchar(100)
,`fechInicio` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vmostrar_persona_rol`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vmostrar_persona_rol`;
CREATE TABLE `vmostrar_persona_rol` (
`codPer` int(11)
,`nomPer` varchar(100)
,`apePer` varchar(100)
,`nomRol` varchar(50)
,`codUsu` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vmostrar_roles`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vmostrar_roles`;
CREATE TABLE `vmostrar_roles` (
`codRol` int(11)
,`nomRol` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vnomproyect`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vnomproyect`;
CREATE TABLE `vnomproyect` (
`cod` int(11)
,`nom_pro` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vpersonas`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vpersonas`;
CREATE TABLE `vpersonas` (
`codigo` int(11)
,`nom` varchar(100)
,`ape` varchar(100)
,`ag` int(11)
,`nt` varchar(17)
,`naci` varchar(100)
,`gen` varchar(10)
,`l_nac` varchar(100)
,`f_nac` date
,`tel` varchar(9)
,`dir` varchar(200)
,`g_aca` varchar(100)
,`hab` text
,`utec` varchar(100)
,`hoja` text
,`prof` varchar(100)
,`trab` char(2)
,`p_trab` varchar(100)
,`des_puesto` text
,`cod_u` int(11)
,`nom_emp` varchar(100)
,`tel_emp` varchar(9)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vprestamoequipo`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vprestamoequipo`;
CREATE TABLE `vprestamoequipo` (
`codPer` int(11)
,`codPres` int(11)
,`codTec` int(11)
,`nomTec` varchar(100)
,`nomPer` varchar(100)
,`apePer` varchar(100)
,`estadPres` varchar(100)
,`fechPres` date
,`horaPres` time
,`tiempoPres` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vprestamoequipotec`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vprestamoequipotec`;
CREATE TABLE `vprestamoequipotec` (
`cod_pres` int(11)
,`nom_equi` varchar(100)
,`nom_com` varchar(201)
,`fch` date
,`hrs` time
,`time_uso` varchar(100)
,`est` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vprestequip`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vprestequip`;
CREATE TABLE `vprestequip` (
`cod` int(11)
,`nom_e` varchar(100)
,`est` varchar(100)
,`fch` date
,`hrs` time
,`tmp_uso` varchar(100)
,`cod_p` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vrptinscritoseventos`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vrptinscritoseventos`;
CREATE TABLE `vrptinscritoseventos` (
`cod_ins` int(11)
,`nom_com` varchar(201)
,`nom_eve` varchar(100)
,`hrs` time
,`fch` date
,`fch_ins` date
,`lug_eve` varchar(100)
,`cod_eve` int(11)
,`est` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vrptusuarios`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vrptusuarios`;
CREATE TABLE `vrptusuarios` (
`cod` int(11)
,`nom_com` varchar(201)
,`usu` varchar(100)
,`email` varchar(100)
,`dui` varchar(9)
,`pas` varchar(9)
,`tel` varchar(9)
,`dir` varchar(200)
,`cod_rol` int(11)
,`nom_rol` varchar(50)
,`gen` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vservicio`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vservicio`;
CREATE TABLE `vservicio` (
`codigo` int(11)
,`descripcion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vsservicio`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vsservicio`;
CREATE TABLE `vsservicio` (
`id_tipo_servicio` int(11)
,`nombre_tipo_servicio` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `rptusooficina`
--
DROP TABLE IF EXISTS `rptusooficina`;

DROP VIEW IF EXISTS `rptusooficina`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rptusooficina`  AS SELECT `a`.`id_reserva` AS `cod_res`, `a`.`actividad_realizar` AS `act`, `b`.`nombre` AS `nom_ofi`, concat(`c`.`nombres`,' ',`c`.`apellidos`) AS `nom_com`, `a`.`cantidad_acompa` AS `cant`, `a`.`fecha` AS `fch`, `a`.`hora` AS `hrs`, `a`.`tiempo_de_estadia` AS `time_est`, `a`.`estado` AS `est` FROM ((`uso_de_oficina` `a` join `oficina` `b` on(`a`.`id_oficina` = `b`.`id_oficina`)) join `persona` `c` on(`a`.`id_persona` = `c`.`id_persona`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vbitacoras`
--
DROP TABLE IF EXISTS `vbitacoras`;

DROP VIEW IF EXISTS `vbitacoras`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vbitacoras`  AS SELECT `c`.`id_bitacora` AS `cod_bit`, `c`.`numero_reunion` AS `num_r`, `c`.`fecha` AS `fch`, `c`.`tema` AS `thm`, `c`.`actividades_realizadas` AS `act_rea`, `c`.`comentario_mentor` AS `com_men`, `b`.`id_equipo` AS `cod_equi` FROM ((`idea_negocio` `a` join `equipos` `b` on(`a`.`id_idea_neg` = `b`.`id_idea_neg`)) join `bitacoras` `c` on(`a`.`id_idea_neg` = `c`.`id_idea_neg`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vbitamentor`
--
DROP TABLE IF EXISTS `vbitamentor`;

DROP VIEW IF EXISTS `vbitamentor`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vbitamentor`  AS SELECT `a`.`id_bitacora` AS `cod_bit`, `a`.`numero_reunion` AS `num_r`, `a`.`fecha` AS `fch`, `a`.`tema` AS `thm`, `a`.`actividades_realizadas` AS `act`, `a`.`comentario_mentor` AS `com_men`, `d`.`id_persona` AS `cod_p`, `c`.`id_equipo` AS `cod_equip` FROM (((`bitacoras` `a` join `idea_negocio` `b` on(`a`.`id_idea_neg` = `b`.`id_idea_neg`)) join `equipos` `c` on(`b`.`id_idea_neg` = `c`.`id_idea_neg`)) join `miembros_de_equipo` `d` on(`c`.`id_equipo` = `d`.`id_equipo`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vbitproyect`
--
DROP TABLE IF EXISTS `vbitproyect`;

DROP VIEW IF EXISTS `vbitproyect`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vbitproyect`  AS SELECT `c`.`id_bitacora` AS `cod_bit`, `c`.`numero_reunion` AS `num_re`, `c`.`fecha` AS `fch`, `c`.`tema` AS `thm`, left(`c`.`actividades_realizadas`,75) AS `actividades`, left(`c`.`comentario_mentor`,50) AS `comentario`, `b`.`id_equipo` AS `cod_equi` FROM ((`idea_negocio` `a` join `equipos` `b` on(`a`.`id_idea_neg` = `b`.`id_idea_neg`)) join `bitacoras` `c` on(`a`.`id_idea_neg` = `c`.`id_idea_neg`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vequip`
--
DROP TABLE IF EXISTS `vequip`;

DROP VIEW IF EXISTS `vequip`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vequip`  AS SELECT `b`.`id_equipo` AS `cod_equi`, `a`.`id_persona` AS `cod_p` FROM (`persona` `a` join `miembros_de_equipo` `b` on(`a`.`id_persona` = `b`.`id_persona`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vequipotecno`
--
DROP TABLE IF EXISTS `vequipotecno`;

DROP VIEW IF EXISTS `vequipotecno`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vequipotecno`  AS SELECT `a`.`id_equipo_tec` AS `cod`, `a`.`nombre_equipo` AS `nom`, `a`.`descripcion` AS `des`, `a`.`estado` AS `est` FROM `equipo_tecnologico` AS `a` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vequiptec`
--
DROP TABLE IF EXISTS `vequiptec`;

DROP VIEW IF EXISTS `vequiptec`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vequiptec`  AS SELECT `equipo_tecnologico`.`id_equipo_tec` AS `codigo`, `equipo_tecnologico`.`nombre_equipo` AS `nom_equi`, left(`equipo_tecnologico`.`descripcion`,45) AS `des`, `equipo_tecnologico`.`estado` AS `est` FROM `equipo_tecnologico` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vevnts`
--
DROP TABLE IF EXISTS `vevnts`;

DROP VIEW IF EXISTS `vevnts`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vevnts`  AS SELECT `a`.`id_evento` AS `codigo`, `a`.`nombre_evento` AS `nom_eve`, `b`.`nombre_tipo` AS `nom_tip`, `a`.`hora` AS `hrs`, `a`.`fecha` AS `fch`, `a`.`lugar_evento` AS `lug_eve`, `a`.`cantidad` AS `cant`, `a`.`estado` AS `est` FROM (`evento` `a` join `tipo_de_evento` `b` on(`a`.`id_tipo_evento` = `b`.`id_tipo_evento`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vgruposideaneg`
--
DROP TABLE IF EXISTS `vgruposideaneg`;

DROP VIEW IF EXISTS `vgruposideaneg`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vgruposideaneg`  AS SELECT `b`.`id_persona` AS `cod`, concat(`b`.`nombres`,' ',`b`.`apellidos`) AS `nom_com`, `e`.`correo` AS `email`, `b`.`telefono` AS `tlf`, `f`.`nombre_rol` AS `nom_rol`, `d`.`nombre_proyecto` AS `nom_pro`, `c`.`id_equipo` AS `cod_equi` FROM (((((`miembros_de_equipo` `a` join `persona` `b` on(`a`.`id_persona` = `b`.`id_persona`)) join `equipos` `c` on(`a`.`id_equipo` = `c`.`id_equipo`)) join `idea_negocio` `d` on(`c`.`id_idea_neg` = `d`.`id_idea_neg`)) join `usuarios` `e` on(`b`.`id_usuario` = `e`.`id_usuario`)) join `roles` `f` on(`e`.`id_rol` = `f`.`id_rol`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `videaequipo`
--
DROP TABLE IF EXISTS `videaequipo`;

DROP VIEW IF EXISTS `videaequipo`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `videaequipo`  AS SELECT `d`.`nombre_proyecto` AS `nom_pro`, `a`.`id_persona` AS `cod_p` FROM (((`persona` `a` join `miembros_de_equipo` `b` on(`a`.`id_persona` = `b`.`id_persona`)) join `equipos` `c` on(`b`.`id_equipo` = `c`.`id_equipo`)) join `idea_negocio` `d` on(`c`.`id_idea_neg` = `d`.`id_idea_neg`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `videaneg`
--
DROP TABLE IF EXISTS `videaneg`;

DROP VIEW IF EXISTS `videaneg`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `videaneg`  AS SELECT `a`.`id_idea_neg` AS `cod_neg`, `a`.`id_persona` AS `cod_p`, `a`.`nombre_proyecto` AS `nom_pro` FROM `idea_negocio` AS `a` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `videasendesarrollo`
--
DROP TABLE IF EXISTS `videasendesarrollo`;

DROP VIEW IF EXISTS `videasendesarrollo`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `videasendesarrollo`  AS SELECT `a`.`id_idea_neg` AS `cod`, `a`.`nombre_proyecto` AS `nom_pro`, `b`.`nombre_tipo_idea` AS `jur`, `c`.`nombre_tipo_servicio` AS `ser`, `a`.`razon_social` AS `razon`, `a`.`fecha_inicio` AS `fch`, concat(`d`.`nombres`,' ',`d`.`apellidos`) AS `nom_com`, `a`.`estado` AS `est` FROM (((`idea_negocio` `a` join `tipo_idea_negocio_juridica` `b` on(`a`.`id_tipo_idea` = `b`.`id_tipo_idea`)) join `tipo_servicio` `c` on(`a`.`id_tipo_servicio` = `c`.`id_tipo_servicio`)) join `persona` `d` on(`a`.`id_persona` = `d`.`id_persona`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `videaslist`
--
DROP TABLE IF EXISTS `videaslist`;

DROP VIEW IF EXISTS `videaslist`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `videaslist`  AS SELECT `a`.`id_idea_neg` AS `codIdea`, `b`.`id_equipo` AS `codTeam`, `a`.`nombre_proyecto` AS `nomProyect` FROM (`idea_negocio` `a` join `equipos` `b` on(`a`.`id_idea_neg` = `b`.`id_idea_neg`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `videasproceso`
--
DROP TABLE IF EXISTS `videasproceso`;

DROP VIEW IF EXISTS `videasproceso`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `videasproceso`  AS SELECT `idea_negocio`.`id_idea_neg` AS `codigo`, `idea_negocio`.`nombre_proyecto` AS `proyecto`, `idea_negocio`.`estado` AS `estado` FROM `idea_negocio` GROUP BY `idea_negocio`.`nombre_proyecto` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vins_event`
--
DROP TABLE IF EXISTS `vins_event`;

DROP VIEW IF EXISTS `vins_event`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vins_event`  AS SELECT `a`.`nombres` AS `nomPer`, `a`.`apellidos` AS `apePer`, `b`.`fecha_inscripcion` AS `fechIns`, `b`.`id_evento` AS `codEvent`, `c`.`nombre_evento` AS `nomEvent`, `c`.`lugar_evento` AS `ubiEvent`, `c`.`fecha` AS `fechEvent`, `c`.`hora` AS `horaEvent` FROM ((`persona` `a` join `inscripcion_eventos` `b` on(`a`.`id_persona` = `b`.`id_persona`)) join `evento` `c` on(`b`.`id_evento` = `c`.`id_evento`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vjuridica`
--
DROP TABLE IF EXISTS `vjuridica`;

DROP VIEW IF EXISTS `vjuridica`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vjuridica`  AS SELECT `tipo_idea_negocio_juridica`.`id_tipo_idea` AS `codigo`, `tipo_idea_negocio_juridica`.`nombre_tipo_idea` AS `descripcion` FROM `tipo_idea_negocio_juridica` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vlistaoficina`
--
DROP TABLE IF EXISTS `vlistaoficina`;

DROP VIEW IF EXISTS `vlistaoficina`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vlistaoficina`  AS SELECT `oficina`.`id_oficina` AS `cod_ofi`, `oficina`.`nombre` AS `nom_ofi`, `oficina`.`capacidad_de_personas` AS `cap_per` FROM `oficina` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vlisteventinscrip`
--
DROP TABLE IF EXISTS `vlisteventinscrip`;

DROP VIEW IF EXISTS `vlisteventinscrip`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vlisteventinscrip`  AS SELECT `c`.`id_inscripcion` AS `codigo`, `b`.`nombre_evento` AS `nom_eve`, `a`.`nombre_tipo` AS `nom_tip`, `b`.`fecha` AS `fch`, `b`.`hora` AS `hrs`, `b`.`lugar_evento` AS `lug_eve`, `c`.`fecha_inscripcion` AS `fch_ins`, `c`.`id_persona` AS `cod_per` FROM ((`tipo_de_evento` `a` join `evento` `b` on(`a`.`id_tipo_evento` = `b`.`id_tipo_evento`)) join `inscripcion_eventos` `c` on(`b`.`id_evento` = `c`.`id_evento`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vlistideasmentor`
--
DROP TABLE IF EXISTS `vlistideasmentor`;

DROP VIEW IF EXISTS `vlistideasmentor`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vlistideasmentor`  AS SELECT `a`.`id_idea_neg` AS `cod_idea`, `b`.`id_equipo` AS `cod_equip`, `a`.`nombre_proyecto` AS `nom_pro`, `c`.`id_persona` AS `cod_p` FROM ((`idea_negocio` `a` join `equipos` `b` on(`a`.`id_idea_neg` = `b`.`id_idea_neg`)) join `miembros_de_equipo` `c` on(`b`.`id_equipo` = `c`.`id_equipo`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vmiembrosequipo`
--
DROP TABLE IF EXISTS `vmiembrosequipo`;

DROP VIEW IF EXISTS `vmiembrosequipo`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmiembrosequipo`  AS SELECT `a`.`id_persona` AS `codPer`, `a`.`nombres` AS `nomPer`, `a`.`apellidos` AS `apePer`, `b`.`id_equipo` AS `codTeam`, `b`.`id_miembro` AS `codMiembro`, `e`.`nombre_proyecto` AS `nomProyect` FROM ((((`persona` `a` join `miembros_de_equipo` `b` on(`a`.`id_persona` = `b`.`id_persona`)) join `usuarios` `c` on(`a`.`id_usuario` = `c`.`id_usuario`)) join `equipos` `d` on(`b`.`id_equipo` = `d`.`id_equipo`)) join `idea_negocio` `e` on(`d`.`id_idea_neg` = `e`.`id_idea_neg`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vmostrarmentores`
--
DROP TABLE IF EXISTS `vmostrarmentores`;

DROP VIEW IF EXISTS `vmostrarmentores`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmostrarmentores`  AS SELECT `a`.`id_persona` AS `codper`, `a`.`nombres` AS `nomPer`, `a`.`apellidos` AS `apePer` FROM (`persona` `a` join `usuarios` `b` on(`a`.`id_usuario` = `b`.`id_usuario`)) WHERE `b`.`id_rol` = 3 ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vmostrarmentores_idea`
--
DROP TABLE IF EXISTS `vmostrarmentores_idea`;

DROP VIEW IF EXISTS `vmostrarmentores_idea`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmostrarmentores_idea`  AS SELECT `a`.`id_persona` AS `codPer`, `a`.`nombres` AS `nomPer`, `a`.`apellidos` AS `apePer`, `b`.`id_equipo` AS `codTeam`, `b`.`id_miembro` AS `codMiembro`, `e`.`nombre_proyecto` AS `nomProyect`, `c`.`id_rol` AS `codRol` FROM ((((`persona` `a` join `miembros_de_equipo` `b` on(`a`.`id_persona` = `b`.`id_persona`)) join `usuarios` `c` on(`a`.`id_usuario` = `c`.`id_usuario`)) join `equipos` `d` on(`b`.`id_equipo` = `d`.`id_equipo`)) join `idea_negocio` `e` on(`d`.`id_idea_neg` = `e`.`id_idea_neg`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vmostrarusooficina`
--
DROP TABLE IF EXISTS `vmostrarusooficina`;

DROP VIEW IF EXISTS `vmostrarusooficina`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmostrarusooficina`  AS SELECT `a`.`id_reserva` AS `codRes`, `a`.`actividad_realizar` AS `actRea`, `a`.`fecha` AS `fechUso`, `a`.`hora` AS `horaUso`, `a`.`tiempo_de_estadia` AS `tiempUso`, `a`.`cantidad_acompa` AS `cantAcomp`, `a`.`estado` AS `estad`, `a`.`id_oficina` AS `codOfi`, `b`.`nombre` AS `nomofi`, `c`.`nombres` AS `nomPer`, `c`.`apellidos` AS `apePer`, `a`.`id_persona` AS `codPer` FROM ((`uso_de_oficina` `a` join `oficina` `b` on(`a`.`id_oficina` = `b`.`id_oficina`)) join `persona` `c` on(`a`.`id_persona` = `c`.`id_persona`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vmostrar_ideas_inicio`
--
DROP TABLE IF EXISTS `vmostrar_ideas_inicio`;

DROP VIEW IF EXISTS `vmostrar_ideas_inicio`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmostrar_ideas_inicio`  AS SELECT `idea_negocio`.`id_idea_neg` AS `codIdea`, `idea_negocio`.`nombre_proyecto` AS `nomProyect`, `idea_negocio`.`razon_social` AS `rSocial`, `idea_negocio`.`estado` AS `estad`, `idea_negocio`.`fecha_inicio` AS `fechInicio` FROM `idea_negocio` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vmostrar_persona_rol`
--
DROP TABLE IF EXISTS `vmostrar_persona_rol`;

DROP VIEW IF EXISTS `vmostrar_persona_rol`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmostrar_persona_rol`  AS SELECT `a`.`id_persona` AS `codPer`, `a`.`nombres` AS `nomPer`, `a`.`apellidos` AS `apePer`, `c`.`nombre_rol` AS `nomRol`, `b`.`id_usuario` AS `codUsu` FROM ((`persona` `a` join `usuarios` `b` on(`a`.`id_usuario` = `b`.`id_usuario`)) join `roles` `c` on(`c`.`id_rol` = `b`.`id_rol`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vmostrar_roles`
--
DROP TABLE IF EXISTS `vmostrar_roles`;

DROP VIEW IF EXISTS `vmostrar_roles`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmostrar_roles`  AS SELECT `roles`.`id_rol` AS `codRol`, `roles`.`nombre_rol` AS `nomRol` FROM `roles` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vnomproyect`
--
DROP TABLE IF EXISTS `vnomproyect`;

DROP VIEW IF EXISTS `vnomproyect`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnomproyect`  AS SELECT `b`.`id_equipo` AS `cod`, `a`.`nombre_proyecto` AS `nom_pro` FROM (`idea_negocio` `a` join `equipos` `b` on(`a`.`id_idea_neg` = `b`.`id_idea_neg`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vpersonas`
--
DROP TABLE IF EXISTS `vpersonas`;

DROP VIEW IF EXISTS `vpersonas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpersonas`  AS SELECT `persona`.`id_persona` AS `codigo`, `persona`.`nombres` AS `nom`, `persona`.`apellidos` AS `ape`, `persona`.`edad` AS `ag`, `persona`.`nit` AS `nt`, `persona`.`nacionalidad` AS `naci`, `persona`.`genero` AS `gen`, `persona`.`lugar_nac` AS `l_nac`, `persona`.`fecha_nac` AS `f_nac`, `persona`.`telefono` AS `tel`, `persona`.`direccion` AS `dir`, `persona`.`grado_academico` AS `g_aca`, `persona`.`habilidades` AS `hab`, `persona`.`vinculo_utec` AS `utec`, `persona`.`hoja_de_vida` AS `hoja`, `persona`.`profesion` AS `prof`, `persona`.`trabaja` AS `trab`, `persona`.`puesto_trabajo` AS `p_trab`, `persona`.`descripcion_puesto` AS `des_puesto`, `persona`.`id_usuario` AS `cod_u`, `persona`.`nombre_empresa` AS `nom_emp`, `persona`.`telefono_empresa` AS `tel_emp` FROM `persona` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vprestamoequipo`
--
DROP TABLE IF EXISTS `vprestamoequipo`;

DROP VIEW IF EXISTS `vprestamoequipo`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vprestamoequipo`  AS SELECT `b`.`id_persona` AS `codPer`, `a`.`id_prestamo` AS `codPres`, `c`.`id_equipo_tec` AS `codTec`, `c`.`nombre_equipo` AS `nomTec`, `b`.`nombres` AS `nomPer`, `b`.`apellidos` AS `apePer`, `a`.`estado` AS `estadPres`, `a`.`fecha` AS `fechPres`, `a`.`hora` AS `horaPres`, `a`.`tiempo_uso` AS `tiempoPres` FROM ((`prestamo_equipo` `a` join `persona` `b` on(`a`.`id_persona` = `b`.`id_persona`)) join `equipo_tecnologico` `c` on(`a`.`id_equipo_tec` = `c`.`id_equipo_tec`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vprestamoequipotec`
--
DROP TABLE IF EXISTS `vprestamoequipotec`;

DROP VIEW IF EXISTS `vprestamoequipotec`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vprestamoequipotec`  AS SELECT `a`.`id_prestamo` AS `cod_pres`, `b`.`nombre_equipo` AS `nom_equi`, concat(`c`.`nombres`,' ',`c`.`apellidos`) AS `nom_com`, `a`.`fecha` AS `fch`, `a`.`hora` AS `hrs`, `a`.`tiempo_uso` AS `time_uso`, `a`.`estado` AS `est` FROM ((`prestamo_equipo` `a` join `equipo_tecnologico` `b` on(`a`.`id_equipo_tec` = `b`.`id_equipo_tec`)) join `persona` `c` on(`a`.`id_persona` = `c`.`id_persona`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vprestequip`
--
DROP TABLE IF EXISTS `vprestequip`;

DROP VIEW IF EXISTS `vprestequip`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vprestequip`  AS SELECT `b`.`id_prestamo` AS `cod`, `a`.`nombre_equipo` AS `nom_e`, `b`.`estado` AS `est`, `b`.`fecha` AS `fch`, `b`.`hora` AS `hrs`, `b`.`tiempo_uso` AS `tmp_uso`, `b`.`id_persona` AS `cod_p` FROM (`equipo_tecnologico` `a` join `prestamo_equipo` `b` on(`a`.`id_equipo_tec` = `b`.`id_equipo_tec`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vrptinscritoseventos`
--
DROP TABLE IF EXISTS `vrptinscritoseventos`;

DROP VIEW IF EXISTS `vrptinscritoseventos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vrptinscritoseventos`  AS SELECT `a`.`id_inscripcion` AS `cod_ins`, concat(`c`.`nombres`,' ',`c`.`apellidos`) AS `nom_com`, `b`.`nombre_evento` AS `nom_eve`, `b`.`hora` AS `hrs`, `b`.`fecha` AS `fch`, `a`.`fecha_inscripcion` AS `fch_ins`, `b`.`lugar_evento` AS `lug_eve`, `b`.`id_evento` AS `cod_eve`, `b`.`estado` AS `est` FROM ((`inscripcion_eventos` `a` join `evento` `b` on(`a`.`id_evento` = `b`.`id_evento`)) join `persona` `c` on(`a`.`id_persona` = `c`.`id_persona`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vrptusuarios`
--
DROP TABLE IF EXISTS `vrptusuarios`;

DROP VIEW IF EXISTS `vrptusuarios`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vrptusuarios`  AS SELECT `b`.`id_persona` AS `cod`, concat(`b`.`nombres`,' ',`b`.`apellidos`) AS `nom_com`, `a`.`nombre_usuario` AS `usu`, `a`.`correo` AS `email`, `a`.`dui` AS `dui`, `a`.`pasaporte` AS `pas`, `b`.`telefono` AS `tel`, `b`.`direccion` AS `dir`, `c`.`id_rol` AS `cod_rol`, `c`.`nombre_rol` AS `nom_rol`, `b`.`genero` AS `gen` FROM ((`usuarios` `a` join `persona` `b` on(`a`.`id_usuario` = `b`.`id_usuario`)) join `roles` `c` on(`a`.`id_rol` = `c`.`id_rol`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vservicio`
--
DROP TABLE IF EXISTS `vservicio`;

DROP VIEW IF EXISTS `vservicio`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vservicio`  AS SELECT `tipo_servicio`.`id_tipo_servicio` AS `codigo`, `tipo_servicio`.`nombre_tipo_servicio` AS `descripcion` FROM `tipo_servicio` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vsservicio`
--
DROP TABLE IF EXISTS `vsservicio`;

DROP VIEW IF EXISTS `vsservicio`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsservicio`  AS SELECT `tipo_servicio`.`id_tipo_servicio` AS `id_tipo_servicio`, `tipo_servicio`.`nombre_tipo_servicio` AS `nombre_tipo_servicio` FROM `tipo_servicio` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `id_idea_neg` (`id_idea_neg`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `id_idea_neg` (`id_idea_neg`);

--
-- Indices de la tabla `equipo_tecnologico`
--
ALTER TABLE `equipo_tecnologico`
  ADD PRIMARY KEY (`id_equipo_tec`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_tipo_evento` (`id_tipo_evento`);

--
-- Indices de la tabla `idea_negocio`
--
ALTER TABLE `idea_negocio`
  ADD PRIMARY KEY (`id_idea_neg`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_tipo_servicio` (`id_tipo_servicio`),
  ADD KEY `id_tipo_idea` (`id_tipo_idea`);

--
-- Indices de la tabla `inscripcion_eventos`
--
ALTER TABLE `inscripcion_eventos`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `miembros_de_equipo`
--
ALTER TABLE `miembros_de_equipo`
  ADD PRIMARY KEY (`id_miembro`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `oficina`
--
ALTER TABLE `oficina`
  ADD PRIMARY KEY (`id_oficina`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `prestamo_equipo`
--
ALTER TABLE `prestamo_equipo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_equipo_tec` (`id_equipo_tec`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`id_privilegio`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_de_evento`
--
ALTER TABLE `tipo_de_evento`
  ADD PRIMARY KEY (`id_tipo_evento`);

--
-- Indices de la tabla `tipo_idea_negocio_juridica`
--
ALTER TABLE `tipo_idea_negocio_juridica`
  ADD PRIMARY KEY (`id_tipo_idea`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`id_tipo_servicio`);

--
-- Indices de la tabla `uso_de_oficina`
--
ALTER TABLE `uso_de_oficina`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_oficina` (`id_oficina`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `equipo_tecnologico`
--
ALTER TABLE `equipo_tecnologico`
  MODIFY `id_equipo_tec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `idea_negocio`
--
ALTER TABLE `idea_negocio`
  MODIFY `id_idea_neg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `inscripcion_eventos`
--
ALTER TABLE `inscripcion_eventos`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `miembros_de_equipo`
--
ALTER TABLE `miembros_de_equipo`
  MODIFY `id_miembro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `oficina`
--
ALTER TABLE `oficina`
  MODIFY `id_oficina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `prestamo_equipo`
--
ALTER TABLE `prestamo_equipo`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `id_privilegio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_de_evento`
--
ALTER TABLE `tipo_de_evento`
  MODIFY `id_tipo_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_idea_negocio_juridica`
--
ALTER TABLE `tipo_idea_negocio_juridica`
  MODIFY `id_tipo_idea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  MODIFY `id_tipo_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `uso_de_oficina`
--
ALTER TABLE `uso_de_oficina`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD CONSTRAINT `bitacoras_ibfk_1` FOREIGN KEY (`id_idea_neg`) REFERENCES `idea_negocio` (`id_idea_neg`),
  ADD CONSTRAINT `bitacoras_ibfk_2` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`id_idea_neg`) REFERENCES `idea_negocio` (`id_idea_neg`);

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_tipo_evento`) REFERENCES `tipo_de_evento` (`id_tipo_evento`);

--
-- Filtros para la tabla `idea_negocio`
--
ALTER TABLE `idea_negocio`
  ADD CONSTRAINT `idea_negocio_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `idea_negocio_ibfk_4` FOREIGN KEY (`id_tipo_idea`) REFERENCES `tipo_idea_negocio_juridica` (`id_tipo_idea`),
  ADD CONSTRAINT `idea_negocio_ibfk_5` FOREIGN KEY (`id_tipo_servicio`) REFERENCES `tipo_servicio` (`id_tipo_servicio`);

--
-- Filtros para la tabla `inscripcion_eventos`
--
ALTER TABLE `inscripcion_eventos`
  ADD CONSTRAINT `inscripcion_eventos_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `inscripcion_eventos_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`);

--
-- Filtros para la tabla `miembros_de_equipo`
--
ALTER TABLE `miembros_de_equipo`
  ADD CONSTRAINT `miembros_de_equipo_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `miembros_de_equipo_ibfk_2` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `prestamo_equipo`
--
ALTER TABLE `prestamo_equipo`
  ADD CONSTRAINT `prestamo_equipo_ibfk_1` FOREIGN KEY (`id_equipo_tec`) REFERENCES `equipo_tecnologico` (`id_equipo_tec`),
  ADD CONSTRAINT `prestamo_equipo_ibfk_2` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD CONSTRAINT `privilegios_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menus` (`id_menu`),
  ADD CONSTRAINT `privilegios_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `uso_de_oficina`
--
ALTER TABLE `uso_de_oficina`
  ADD CONSTRAINT `uso_de_oficina_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `uso_de_oficina_ibfk_2` FOREIGN KEY (`id_oficina`) REFERENCES `oficina` (`id_oficina`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
