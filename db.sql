CREATE DATABASE registros;
USE registros;

--
-- Base de datos: `registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--
DROP TABLE IF EXISTS registros;
CREATE TABLE `registros` (
  `id` int(10) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `parentesco` varchar(50) NOT NULL,
  `celular` int(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombrevictima` varchar(50) NOT NULL,
  `apellido1vic` varchar(50) NOT NULL,
  `apellido2vic` varchar(50) NOT NULL,
  `nacimiento` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `lugarnaci` varchar(50) NOT NULL,
  `estadocivil` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numeroext` varchar(15) NOT NULL,
  `numeroint` varchar(15) NOT NULL,
  `cp` int(5) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `alcaldia` varchar(50) NOT NULL,
  `entidad` varchar(50) NOT NULL,
  `telefonovic` int(10) NOT NULL,
  `nombrevictima2` varchar(50) NOT NULL,
  `ralacion` varchar(50) NOT NULL,
  `callehechos` varchar(50) NOT NULL,
  `numeroexthechos` varchar(15) NOT NULL,
  `numerointhechos` varchar(15) NOT NULL,
  `cphechos` int(5) NOT NULL,
  `coloniahechos` varchar(50) NOT NULL,
  `alcaldiahechos` varchar(50) NOT NULL,
  `entidadhechos` varchar(50) NOT NULL,
  `fechahechos` date NOT NULL,
  `complemento` varchar(3000) NOT NULL,
  `hechos` varchar(4000) NOT NULL,
  `tutor` varchar(50) NOT NULL,
  `adulto` varchar(50) NOT NULL,
  `indigente` varchar(50) NOT NULL,
  `discapacidad` varchar(50) NOT NULL,
  `migrante` varchar(50) NOT NULL,
  `indigena` varchar(50) NOT NULL,
  `refugiado` varchar(50) NOT NULL,
  `defensora` varchar(50) NOT NULL,
  `periodista` varchar(50) NOT NULL,
  `dezplazo` varchar(50) NOT NULL,
  `causa` varchar(50) NOT NULL,
  `mujer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `lugar`, `fecha`, `nombre`, `apellido1`, `apellido2`, `parentesco`, `celular`, `telefono`, `correo`, `tipo`, `nombrevictima`, `apellido1vic`, `apellido2vic`, `nacimiento`, `sexo`, `nacionalidad`, `curp`, `lugarnaci`, `estadocivil`, `calle`, `numeroext`, `numeroint`, `cp`, `colonia`, `alcaldia`, `entidad`, `telefonovic`, `nombrevictima2`, `ralacion`, `callehechos`, `numeroexthechos`, `numerointhechos`, `cphechos`, `coloniahechos`, `alcaldiahechos`, `entidadhechos`, `fechahechos`, `complemento`, `hechos`, `tutor`, `adulto`, `indigente`, `discapacidad`, `migrante`, `indigena`, `refugiado`, `defensora`, `periodista`, `dezplazo`, `causa`, `mujer`) VALUES
(8, 'asdasda', '0000-00-00', 'asdfasdf', 'fdasg fdg', 'dfgadfgadfg', 'asdfasdf', 2147483647, 0, 'ralex724@hotmail.com', 'dsfgasdfg', 'asdfasdf', 'fdasg fdg', 'dfgadfgadfg', '10/10/1010', 'adfgadfg', 'asdfasdf', 'TOHO970710HMCRRS03', 'sdfafadf', 'adfgadfg', 'adfgadfg', '2135', '4566', 45544, 'asdasdasd', 'asdasdasd', 'asdasdasdasd', 2147483647, 'asdasdasd', 'asdasdasdasd', 'adfgadfg', '2135', '1111', 45544, 'asdasdasd', 'asdasdasd', 'asdasdasd', '0000-00-00', 'asdasdasdasdasdasdasda', 'asdasdasdasdasdasdasdasdasdadsads', 'asdasdasdasd', 'no', 'no', 'asdasdasdasd', 'asdasdasd', 'asdasdasd', 'no', 'asdasdasd', 'asdasdasdasd', 'asdasdasda asdasdasda', 'asdasdasd', 'asdasdasdas'),
(9, 'asdasda', '0000-00-00', 'asdfasdf', 'fdasg fdg', 'dfgadfgadfg', 'asdfasdf', 2147483647, 0, 'ralex724@hotmail.com', 'dsfgasdfg', 'asdfasdf', 'fdasg fdg', 'dfgadfgadfg', '10/10/1010', 'adfgadfg', 'asdfasdf', 'TOHO970710HMCRRS03', 'sdfafadf', 'adfgadfg', 'adfgadfg', '2135', '4566', 45544, 'asdasdasd', 'asdasdasd', 'asdasdasdasd', 2147483647, '', 'asdasdasdasd', 'adfgadfg', '2135', '1111', 45544, 'asdasdasd', 'asdasdasd', 'asdasdasd', '0000-00-00', 'asdasdasdasdasdasdasda', 'asdasdasdasdasdasdasdasdasdadsads', 'asdasdasdasd', 'no', 'no', 'asdasdasdasd', 'asdasdasd', 'asdasdasd', 'no', 'asdasdasd', 'asdasdasdasd', 'asdasdasda asdasdasda', 'asdasdasd', 'asdasdasdas'),
(10, 'asdasda', '0000-00-00', 'asdfasdf', 'fdasg fdg', 'dfgadfgadfg', 'asdfasdf', 2147483647, 0, 'ralex724@hotmail.com', 'dsfgasdfg', 'asdfasdf', 'fdasg fdg', 'dfgadfgadfg', '10/10/1010', 'adfgadfg', 'asdfasdf', 'TOHO970710HMCRRS03', 'sdfafadf', 'adfgadfg', 'adfgadfg', '2135', '4566', 45544, 'asdasdasd', 'asdasdasd', 'asdasdasdasd', 2147483647, '', 'asdasdasdasd', 'adfgadfg', '2135', '1111', 45544, 'asdasdasd', 'asdasdasd', 'asdasdasd', '0000-00-00', 'asdasdasdasdasdasdasda', 'asdasdasdasdasdasdasdasdasdadsads', 'asdasdasdasd', 'no', 'no', 'asdasdasdasd', 'asdasdasd', 'asdasdasd', 'no', 'asdasdasd', 'asdasdasdasd', 'asdasdasda asdasdasda', 'asdasdasd', 'asdasdasdas'),
(11, 'asdasda', '0000-00-00', 'asdfasdf', 'fdasg fdg', 'dfgadfgadfg', 'asdfasdf', 2147483647, 0, 'ralex724@hotmail.com', 'dsfgasdfg', 'asdfasdf', 'fdasg fdg', 'dfgadfgadfg', '10/10/1010', 'adfgadfg', 'asdfasdf', 'TOHO970710HMCRRS03', 'sdfafadf', 'adfgadfg', 'adfgadfg', '2135', '4566', 45544, 'asdasdasd', 'asdasdasd', 'asdasdasdasd', 2147483647, '', 'asdasdasdasd', 'adfgadfg', '2135', '1111', 45544, 'asdasdasd', 'asdasdasd', 'asdasdasd', '0000-00-00', 'asdasdasdasdasdasdasda', 'asdasdasdasdasdasdasdasdasdadsads', 'asdasdasdasd', 'no', 'no', 'asdasdasdasd', 'asdasdasd', 'asdasdasd', 'no', 'asdasdasd', 'asdasdasdasd', 'asdasdasda asdasdasda', 'asdasdasd', 'asdasdasdas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombres VARCHAR(200) NOT NULL,
  apellidos VARCHAR(200) NOT NULL,
  telefono BIGINT NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  pass VARCHAR(200) NOT NULL
);

DROP TABLE IF EXISTS denuncia;
CREATE TABLE denuncia(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `lugar` VARCHAR(50) NOT NULL,
  `fecha` DATE NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido1` VARCHAR(50) NOT NULL,
  `apellido2` VARCHAR(50) NOT NULL,
  `parentesco` VARCHAR(50) NOT NULL,
  `celular` INT NOT NULL,
  `telefono` INT NOT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `tipo` VARCHAR(50) NOT NULL,
  `nombrevictima` VARCHAR(50) NOT NULL,
  `apellido1vic` VARCHAR(50) NOT NULL,
  `apellido2vic` VARCHAR(50) NOT NULL,
  `nacimiento` VARCHAR(50) NOT NULL,
  `sexo` VARCHAR(50) NOT NULL,
  `nacionalidad` VARCHAR(50) NOT NULL,
  `curp` VARCHAR(18) NOT NULL,
  `lugarnaci` VARCHAR(50) NOT NULL,
  `estadocivil` VARCHAR(50) NOT NULL,
  `calle` VARCHAR(50) NOT NULL,
  `numeroext` VARCHAR(15) NOT NULL,
  `numeroint` VARCHAR(15) NOT NULL,
  `cp` INT NOT NULL,
  `colonia` VARCHAR(50) NOT NULL,
  `alcaldia` VARCHAR(50) NOT NULL,
  `entidad` VARCHAR(50) NOT NULL,
  `telefonovic` INT NOT NULL,
  `nombrevictima2` VARCHAR(50) NOT NULL,
  `ralacion` VARCHAR(50) NOT NULL,
  `callehechos` VARCHAR(50) NOT NULL,
  `numeroexthechos` VARCHAR(15) NOT NULL,
  `numerointhechos` VARCHAR(15) NOT NULL,
  `cphechos` INT NOT NULL,
  `coloniahechos` VARCHAR(50) NOT NULL,
  `alcaldiahechos` VARCHAR(50) NOT NULL,
  `entidadhechos` VARCHAR(50) NOT NULL,
  `fechahechos` DATE NOT NULL,
  `complemento` VARCHAR(3000) NOT NULL,
  `hechos` VARCHAR(4000) NOT NULL,
  `tutor` VARCHAR(50) NOT NULL,
  `adulto` VARCHAR(50) NOT NULL,
  `indigente` VARCHAR(50) NOT NULL,
  `discapacidad` VARCHAR(50) NOT NULL,
  `migrante` VARCHAR(50) NOT NULL,
  `indigena` VARCHAR(50) NOT NULL,
  `refugiado` VARCHAR(50) NOT NULL,
  `defensora` VARCHAR(50) NOT NULL,
  `periodista` VARCHAR(50) NOT NULL,
  `dezplazo` VARCHAR(50) NOT NULL,
  `causa` VARCHAR(50) NOT NULL,
  `mujer` VARCHAR(50) NOT NULL
);

DELIMITER **

DROP PROCEDURE if EXISTS crearUsuario**
CREATE PROCEDURE crearUsuario(
	IN iNombres VARCHAR(200),
	IN iApellidos VARCHAR(200),
	IN iTelefono BIGINT,
	IN iEmail VARCHAR(500),
	IN iPass VARCHAR(200)
)
BEGIN
  DECLARE num INT;
  DECLARE msg VARCHAR(50);
  DECLARE error INT;
  SET num = (SELECT COUNT(*) FROM usuario u WHERE u.telefono = iTelefono);

  IF num = 0 THEN
    INSERT INTO usuario (nombres, apellidos, telefono, email, pass)
      VALUES(iNombres, iApellidos, iTelefono, iEmail, iPass);
    
    SET num = LAST_INSERT_ID();
    SET msg = "Usuario creado correctamente!";
    SET error = 0;
  ELSE 
    SET num = -1;
    SET msg = "Número de teléfono ya está en uso!";
    SET error = 1;
  END IF;

  SELECT msg, error, num AS 'id';
END **

DROP PROCEDURE if EXISTS loginUsuario**
CREATE PROCEDURE loginUsuario(
	IN iTelefono BIGINT,
	IN iEmail VARCHAR(500),
	IN iPass VARCHAR(200)
)
BEGIN
  DECLARE num INT;

  SET num = (SELECT COUNT(*) FROM usuario u WHERE u.telefono = iTelefono AND u.email = iEmail AND u.pass = iPass);

  SELECT num AS 'login';
END **