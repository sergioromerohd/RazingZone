-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Servidor: db5006952814.hosting-data.io
-- Tiempo de generación: 20-01-2023 a las 11:48:12
-- Versión del servidor: 10.5.17-MariaDB-1:10.5.17+maria~deb11-log
-- Versión de PHP: 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs5740687`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `cod_foto` int(10) UNSIGNED NOT NULL,
  `foto` varchar(250) NOT NULL,
  `cod_post` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`cod_foto`, `foto`, `cod_post`) VALUES
(1, './img/yaris/yaris1.jpg', 1),
(3, './img/yaris/yaris2.jpg', 1),
(5, './img/yaris/yarisculo.jpg', 1),
(6, './img/yaris/yarismorro.jpg', 1),
(7, './img/yaris/yarisspliter.jpg', 1),
(16, './img/posts/El Audi RS6 más bestia se llama RS6-R: ABT con 750 CV/rs64.jpg', 2),
(17, './img/posts/El Audi RS6 más bestia se llama RS6-R: ABT con 750 CV/rs63.jpg', 2),
(18, './img/posts/El Audi RS6 más bestia se llama RS6-R: ABT con 750 CV/rs62.jpg', 2),
(19, './img/posts/El Audi RS6 más bestia se llama RS6-R: ABT con 750 CV/rs61.jpg', 2),
(23, './img/posts/El mejor Toyota que nunca llegara a Europa/2023-toyota-gr-corolla-circuit-edition-sliding-1200x675.jpg', 3),
(24, './img/posts/El mejor Toyota que nunca llegara a Europa/2023-Toyota-Corolla-GR-Carscoops-3-scaled.jpg', 3),
(25, './img/posts/El mejor Toyota que nunca llegara a Europa/corolla.jpg', 3),
(26, './img/posts/Toyota GT86 Rocket Bunny es puro músculo/roketbunnynosek.jpg', 4),
(27, './img/posts/Toyota GT86 Rocket Bunny es puro músculo/Pandem-Rocket-Bunny-Toyota-GT86-Subaru-BRZ-Wide-Body-Kit-Carroceria-01.jpg', 4),
(28, './img/posts/Toyota GT86 Rocket Bunny es puro músculo/Toyota-86-Rocket-Bunny-13.jpg', 4),
(29, './img/posts/Toyota GT86 Rocket Bunny es puro músculo/Pandem-Rocket-Bunny-Toyota-GR-86-2.jpg', 4),
(31, './img/posts/ALBION ONLINE/9cb5dcd153dfd8af028d73e8e9801882.jpg', 5),
(32, './img/posts/ALBION ONLINE/1556273114204.jpg', 5),
(33, './img/posts/ALBION ONLINE/Screenshot_20220207-134545_Instagram.jpg', 5),
(34, './img/posts/BMW M3 GT E36: esta es la historia de uno de los M3 más emblemáticos/bmw-m3-gt-e-36-historia-6.jpg', 6),
(35, './img/posts/BMW M3 GT E36: esta es la historia de uno de los M3 más emblemáticos/bmw-m3-gt-e-36-historia-7.jpg', 6),
(36, './img/posts/BMW M3 GT E36: esta es la historia de uno de los M3 más emblemáticos/bmw-m3-gt-e-36-historia-2.jpg', 6),
(37, './img/posts/BMW M3 GT E36: esta es la historia de uno de los M3 más emblemáticos/bmw-m3-gt-e-36-historia-1.jpg', 6),
(39, './img/posts/el mejor profesor de lenguaje de marcas/7beN.gif', 7),
(40, './img/posts/el mejor profesor de lenguaje de marcas/99-994477_wallpapers-hd-44-fondos-de-pantalla-de-dubstep.gif', 7),
(41, './img/posts/el mejor profesor de lenguaje de marcas/56-569762_8-bit-gif.gif', 7),
(47, './img/posts/Nissan Z 2023: debuta el esperado sucesor del 370Z/foto-9-1200x800-1629277659.webp', 8),
(48, './img/posts/Nissan Z 2023: debuta el esperado sucesor del 370Z/2023-nissan-z-s-32-1629277714.webp', 8),
(49, './img/posts/chupame un huevo/foto-9-1200x800-1629277659.webp', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `cod_post` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `cuerpo` varchar(1500) NOT NULL,
  `fecha` date DEFAULT current_timestamp(),
  `likes` int(11) NOT NULL DEFAULT 0,
  `cod_usuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`cod_post`, `titulo`, `cuerpo`, `fecha`, `likes`, `cod_usuario`) VALUES
(1, 'Yaris gr de agiacuzo', 'El nuevo chasis está diseñado para Escalera y hipódromo Ser adecuado y hay mucha más información sobre las llantas de aleación. Hay diferentes aqui Diseños en dos dimensiones (8 x 18 / 8,5 x 19 pulgadas) con neumáticos de las marcas de la casa Laufenn, Hankook o Michelin. Y creemos que el planeado es realmente genial kit aerodinámico. Consta de uno spoiler delantero, Faldones laterales, einem difusor trasero de tres partes y uno está planeado para el borde trasero del techo Spoiler. Somos curiosos! Si obtenemos más información sobre los cambios, por supuesto, hay una actualización para este informe. Se le informará de esto si simplemente hace lo nuestro Alimentación suscribirse. ¡Diviértete viendo las fotos y sé fiel a nosotros!', '2022-04-21', 271, 94),
(2, 'El Audi RS6 más bestia se llama RS6-R: ABT con 750 CV', 'Posiblemente el Audi RS6 sea uno de los coches que más sueños húmedos produce entre los petrolhead. La deportividad de un pura sangre unida a la versatilidad de una carrocería en configuración familiar hacen de él uno de los coches más codiciados para defender como \'compra racional\'.<br><br>\r\n\r\nPero por si los 600 CV que entrega de serie y su aspecto intimidante no son suficientes, siempre se puede recurrir a preparaciones como la que ha desarrollado el especialista ABT, creando una bestia de 750 CV que incluso supera a la desarrollada por los nada discretos 730 CV del RS6 de Mansory.<br>\r\n<br>\r\nBajo el capó los chicos de ABT han llevado al 4.0 litros V8 y doble turbo más lejos que nunca, consiguiendo sacarle 750 CV y 920 Nm de par motor. Unas cifras muy mejoradas para un bloque que de serie ya da unos más que suficientes 600 CV y 800 Nm. <br><br>\r\n\r\nCon estas cifras y la tracción quattro, el RS6-R puede alcanzar los 100 km/h en sólo 3,2 segundos, bajando 0,4 segundos el registro de serie. Para conseguirlo se recurre a una nueva pareja de turbos, intercooler, línea de escape completa y la conveniente reprogramación de la centralita.', '2022-04-25', 58, 94),
(3, 'El mejor Toyota que nunca llegara a Europa', 'El nuevo modelo deportivo de Toyota desarrollado por GAZOO Racing, el Toyota GR Corolla, ya tiene fecha de presentación: se desvelará esta misma semana, concretamente en la noche del 31 de marzo en hora de la costa este estadounidense (9:30 p.m). Queda pues muy poco para conocer sus credenciales.<br />\r\n<br />\r\nNo obstante, este esperado modelo no lo veremos por Europa. Al menos así lo ha adelantado un representante de la marca en Reino Unido según publica Evo, que ha afirmado que esta variante deportiva del compacto no se comercializará en ningún mercado europeo.<br />\r\n<br />\r\nEn lo que respecta a la mecánica, las informaciones apuntan a que el motor que le dará vida será el tres cilindros de 1.6 litros turbo G16E-GTS del Toyota GR Yaris, pero potenciado. Este pequeño y rabioso utilitario firma en su versión europea los 261 CV y en su mercado natal, en Japón, llega hasta los 275 CV.<br />\r\n<br />\r\nFuentes de Toyota han confirmado una entrega mayor de este bloque para el GR Corolla, pero la cifra de momento se desconoce. Se estima que rondará los 300 CV, dado que es la potencia que rondan algunos de sus rivales. Desde luego tiene margen, pues este motor en el Yaris WRC supera dicha cifra.', '2022-04-26', 50, 94),
(4, 'Toyota GT86 Rocket Bunny es puro músculo', 'Uno de los mayores problema del Toyota GT86 es su (para algunos sectores) poca potencia, algo que parece que es el primer área al que un preparador debería tender a ‘meter mano’. Sin embargo, este Toyota GT86 Rocket Bunny no sigue ese camino. Es puro músculo, sí; y tiene mejoras en prácticamente todas las áreas, también; pero no añade ningún caballo a los 200 CV que trae de serie.<br />\r\n<br />\r\nLo primero que destaca es el kit de ensanche V2 de Rocket Bunny, que por sí solo ya altera radicalmente su imagen. Sin embargo, no es más que el principio. En el frontal también se encuentran un splitter APR de fibra de carbono, un kit de LED Greedy y unos canards que reciben su réplica en la zaga.<br />\r\n<br />\r\nLo primero que destaca es el kit de ensanche V2 de Rocket Bunny, que por sí solo ya altera radicalmente su imagen. Sin embargo, no es más que el principio. En el frontal también se encuentran un splitter APR de fibra de carbono, un kit de LED Greedy y unos canards que reciben su réplica en la zaga.', '2022-04-26', 27, 94),
(5, 'ALBION ONLINE', 'ALBION ONLINE ES UN MMORPG NO LINEAL EN EL QUE ESCRIBES TU PROPIA HISTORIA SIN NECESIDAD DE SEGUIR UN CAMINO PREFIJADO', '2022-04-27', 122, 111),
(6, 'BMW M3 GT E36: esta es la historia de uno de los M3 más emblemáticos', 'Pero el M3 GT se encargó de elevar la potencia hasta los 295 CV y 323 Nm de par, sirviendo así de punto de partida de la evolución que más tarde recibiría ese mismo propulsor para poder alcanzar unos más holgados 321 CV. Además, este motor también se encargó de introducir lo que se conoce como VANOS, un sistema de sincornización variable de válvulas. De esta forma, era posible ofrecer más par y una respuesta del motor más contundente.<br />\r\n<br />\r\nEl 0 a 100 ocurría en unos impresionantes 5,9 segundos, una cifra que hoy en día sigue siendo propia de vehículos de gran potencia. Su línea roja pasó a situarse a las 7.000 vueltas, dejando un carácter del motor más elástico y alegre, con el objetivo de ofrecer aún más diversión.<br />\r\n<br />\r\nPor supuesto, el M3 GT también contaba con importantes mejoras a nivel dinámico, más que nada porque su razón de ser se debe a que BMW tenía que homologar el M3 en las carreras FIA GT. Un alerón más voluminoso, un splitter específico y nuevas tomas de aire que buscaban beneficiar la aerodinámica del deportivo bávaro.<br />\r\n<br />\r\nOtro aspecto que hace aún más exclusivo y raro a este M3 es que su producción estaba destinada a Alemania. Con el paso del tiempo, han sido varios los compradores de fuera los que se han hecho con una de las 356 unidades producidas, repartiéndolas por el mundo. Sin embargo, BMW fabricó 126 unidades de lo que se conoce como M3 GT LTW, una edición especial basada en el GT que se comercializó en Estados Unidos.', '2022-04-29', 36, 110),
(7, 'el mejor profesor de lenguaje de marcas', 'actualmente sin informacion', '2022-04-30', 28, 110),
(8, 'Nissan Z 2023: debuta el esperado sucesor del 370Z', 'Ya desde Car and Driver USA, confirmaron un alza de precio sobre el actual 370Z, por lo que vendría a costar en Estados Unidos unos 40.000 dólares. Para justificar este incremento Nissan ha incrementado la sensación de lujo, a lo que se añade un rendimiento mejorado y un estilo más definido, todo ello para estar a un nivel por encima de los actuales Mazda MX-5 y Subaru BRZ y pasar a competir con el mencionado Supra, BMW Z4, y el Audi TT.<br />\r\n<br />\r\nRecordemos que el actual 370Z lleva más de una década en el mercado. Un deportivo que ha sobrevivido hasta ahora gracias a su fórmula de tracción trasera, una buena puesta a punto y una buena cantidad de potencia con un precio muy asequible, pero que sin embargo se ha quedado muy atrás en tecnología y eficiencia. Por eso el diseñador jefe de Nissan confirmaba hace algo más de un año lo que todo el mundo esperaba: Un nuevo Z que por fin ha debutado.', '2022-05-17', 12, 1),
(9, 'chupame un huevo', 'y luego el otro', '2022-11-27', 1, 280);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(400) NOT NULL,
  `email` varchar(200) NOT NULL DEFAULT 'No Disponible',
  `telefono` varchar(12) NOT NULL DEFAULT '+34---------',
  `entrada` date NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(500) NOT NULL DEFAULT './img/usuarios/default.wepb',
  `rango` varchar(100) NOT NULL DEFAULT 'recluta',
  `bio` varchar(1000) NOT NULL DEFAULT 'sin biografia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `email`, `telefono`, `entrada`, `foto`, `rango`, `bio`) VALUES
(1, 'prueba', '123456', 'No Disponible', '+34---------', '2022-05-17', './img/usuarios/1/images.jpg', 'recluta', 'sergio guappo'),
(94, 'RazingZone', 'Natalia999', 'support@razingzone.es', '696589554', '2022-03-29', './img/usuarios/94/1707088.webp', '<font class=\"text-danger text-uppercase\">Admin</font>', 'Programador principal de la pagina web y sus funcionalidades'),
(110, 'sergioromero_hd', '1234', 'sergio.romero.hombre@gmail.com', '+34696589554', '2022-04-24', './img/usuarios/110/descarga.jpg', 'recluta', 'jugador profesional de litrox mmo.'),
(111, 'pitote', 'Sergio', 'No disponible', '+34---------', '2022-04-26', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(112, 'delete * from coches', 'hola', 'No disponible', '+34---------', '2022-04-26', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(113, 'Litrox', 'rafa123', 'No disponible', '+34---------', '2022-04-26', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(114, 'gonxo', 'erestofeo', 'No disponible', '+34---------', '2022-04-26', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(115, 'TU MADRE', 'LETSGOBAYBE', 'No disponible', '+34---------', '2022-04-26', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(116, 'Nerea ', 'Nerealp35', 'No disponible', '+34---------', '2022-05-03', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(117, 'jhvuyfuycfufuyf', '1234', 'No disponible', '+34---------', '2022-05-03', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(118, 'holakase', 'das', 'No disponible', '+34---------', '2022-05-03', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(119, 'TU MADRE', 'TUMADRE', 'No disponible', '+34---------', '2022-05-04', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(120, 'El Litros', 'Tumadre', 'No disponible', '+34---------', '2022-05-04', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(121, 'soycarlos', 'ter', 'No disponible', '+34---------', '2022-05-05', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(122, '123 \'OR 1=1\'', '123 \'OR 1=1\'', 'No disponible', '+34---------', '2022-05-05', './img/usuarios/default.wepb', 'recluta', 'No disponible'),
(123, '1234', '1234', 'Correoejemplo@gmail.com', '+34123456789', '2022-05-06', './img/usuarios/123/Topher Grace.jpg', 'recluta', 'verve'),
(124, 'charlie', 'litros', 'charlie@gmail.com', '+34---------', '2022-05-10', './img/usuarios/124/homcom_estufas5.jpg', 'recluta', 'sin biografia'),
(126, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(127, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(128, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(129, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(130, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(131, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(132, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(133, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(134, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(135, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(136, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(137, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(138, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(139, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(140, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(141, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(142, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(143, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(144, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(145, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(146, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(147, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(148, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(149, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(150, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(151, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(152, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(153, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(154, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(155, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(156, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(157, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(158, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(159, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(160, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(161, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(162, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(163, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(164, '1d3d2d231d2dd4', 'Secure123456$\"', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(165, '1d3d2d231d2dd4', 'Secure123456$\'', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(166, '1d3d2d231d2dd4', 'Secure123456$\\', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(167, '1d3d2d231d2dd4', 'Secure123456$-- -', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(168, '1d3d2d231d2dd4', 'Secure123456$583388', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(169, '1d3d2d231d2dd4', 'Secure123456$583388\' OR \'583388\'=\'0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(170, '1d3d2d231d2dd4', 'Secure123456$583388\' OR \'583388\'=\'583388', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(171, '1d3d2d231d2dd4', 'Secure123456$583388\' PTT_TRIGGER', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(172, '1d3d2d231d2dd4', 'Secure123456$583388\" OR \"583388\"=\"0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(173, '1d3d2d231d2dd4', 'Secure123456$583388\" OR \"583388\"=\"583388', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(174, '1d3d2d231d2dd4', 'Secure123456$583388\" PTT_TRIGGER', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(175, '1d3d2d231d2dd4', 'Secure123456$583388 OR 583388=0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(176, '1d3d2d231d2dd4', 'Secure123456$583388 OR 583388=583388', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(177, '1d3d2d231d2dd4', 'Secure123456$583388 PTT_TRIGGER', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(178, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(179, '1d3d2d231d2dd4', 'Secure123456$\'+(SELECT*FROM(SELECT(SLEEP(21)))a)+\'0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(180, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(181, '1d3d2d231d2dd4', 'Secure123456$\'||(SELECT(COUNT(pg_sleep(25))::text))||\'0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(182, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(183, '1d3d2d231d2dd4', 'Secure123456$56532\';WAITFOR DELAY \'0:0:22\';--', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(184, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(185, '1d3d2d231d2dd4', 'Secure123456$\'||(SELECT dbms_pipe.receive_message(\'ptt\',\'20\') FROM dual)||\'0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(186, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(187, '1d3d2d231d2dd4', 'Secure123456$\"+(SELECT*FROM(SELECT(SLEEP(24)))a)+\"0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(188, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(189, '1d3d2d231d2dd4', 'Secure123456$\"||(SELECT(COUNT(pg_sleep(23))::text))||\"0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(190, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(191, '1d3d2d231d2dd4', 'Secure123456$59373\";WAITFOR DELAY \'0:0:25\';--', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(192, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(193, '1d3d2d231d2dd4', 'Secure123456$\"||(SELECT dbms_pipe.receive_message(\'ptt\',\'22\') FROM dual)||\"0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(194, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(195, '1d3d2d231d2dd4', 'Secure123456$+(SELECT*FROM(SELECT(SLEEP(21)))a)+0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(196, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(197, '1d3d2d231d2dd4', 'Secure123456$||(SELECT(COUNT(pg_sleep(24))::text))||0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(198, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(199, '1d3d2d231d2dd4', 'Secure123456$55958;WAITFOR DELAY \'0:0:24\';--', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(200, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(201, '1d3d2d231d2dd4', 'Secure123456$||(SELECT dbms_pipe.receive_message(\'ptt\',\'23\') FROM dual)||0', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(202, '1d3d2d231d2dd4\"', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(203, '1d3d2d231d2dd4\'', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(204, '1d3d2d231d2dd4\\', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(205, '1d3d2d231d2dd4-- -', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(206, '1d3d2d231d2dd4527525', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(207, '1d3d2d231d2dd4527525\' OR \'5275', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(208, '1d3d2d231d2dd4527525\' OR \'5275', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(209, '1d3d2d231d2dd4527525\' PTT_TRIG', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(210, '1d3d2d231d2dd4527525\" OR \"5275', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(211, '1d3d2d231d2dd4527525\" OR \"5275', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(212, '1d3d2d231d2dd4527525\" PTT_TRIG', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(213, '1d3d2d231d2dd4527525 OR 527525', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(214, '1d3d2d231d2dd4527525 OR 527525', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(215, '1d3d2d231d2dd4527525 PTT_TRIGG', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(216, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(217, '1d3d2d231d2dd4\'+(SELECT*FROM(S', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(218, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(219, '1d3d2d231d2dd4\'||(SELECT(COUNT', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(220, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(221, '1d3d2d231d2dd459673\';WAITFOR D', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(222, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(223, '1d3d2d231d2dd4\'||(SELECT dbms_', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(224, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(225, '1d3d2d231d2dd4\"+(SELECT*FROM(S', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(226, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(227, '1d3d2d231d2dd4\"||(SELECT(COUNT', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(228, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(229, '1d3d2d231d2dd455193\";WAITFOR D', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(230, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(231, '1d3d2d231d2dd4\"||(SELECT dbms_', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(232, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(233, '1d3d2d231d2dd4+(SELECT*FROM(SE', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(234, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(235, '1d3d2d231d2dd4||(SELECT(COUNT(', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(236, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(237, '1d3d2d231d2dd453900;WAITFOR DE', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(238, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(239, '1d3d2d231d2dd4||(SELECT dbms_p', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(240, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(241, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(242, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(243, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(244, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(245, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(246, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(247, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(248, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(249, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(250, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(251, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(252, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(253, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(254, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(255, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(256, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(257, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(258, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(259, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(260, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(261, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(262, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(263, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(264, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(265, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(266, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(267, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(268, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(269, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(270, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(271, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(272, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(273, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(274, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(275, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(276, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(277, '1d3d2d231d2dd4', 'Secure123456$', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(278, 'RazingZone', '1234', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(279, ' RazingZone', '1234', 'No Disponible', '+34---------', '2022-09-30', './img/usuarios/default.wepb', 'recluta', 'sin biografia'),
(280, 'navizo', '7782', 'No Disponible', '+34---------', '2022-11-27', './img/usuarios/default.wepb', 'recluta', 'sin biografia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`cod_foto`),
  ADD UNIQUE KEY `cod_foto` (`cod_foto`),
  ADD KEY `cod_post` (`cod_post`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`cod_post`),
  ADD UNIQUE KEY `cod_post` (`cod_post`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `cod_foto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`cod_post`) REFERENCES `posts` (`cod_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
