CREATE TABLE IF NOT EXISTS `categorias` ( `id` int(11) NOT NULL AUTO_INCREMENT, `nombre` varchar(256) NOT NULL, `descripcion` text NOT NULL,
`creado` datetime NOT NULL,
`modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;


INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `creado`, `modificado`) VALUES
(1, 'Moda', 'Categoría para todo lo relacionado con la moda.', '2019-06- 01 00:35:07', '2019-05-30 17:34:33'),
(2, 'Electronicos', 'Gadgets, drones y más.', '2019-06-01 00:35:07', '2019-05-30 17:34:33'),
(3, 'Motores', 'Deportes de motor y más', '2019-06-01 00:35:07', '2019- 05-30 17:34:54'),
(5, 'Peliculas', ' Productos de cine.', '0000-00-00 00:00:00', '2019-01-08 13:27:26'),
(6, 'Libros', 'Libros Kindle, audiolibros y más.', '0000-00-00 00:00:00', '2019-01-08 13:27:47'),
(13, 'Deportes', 'Ropa, calzados y articulos deportivos.', '2019-01-09 02:24:24', '2019-01-09 01:24:24');


CREATE TABLE IF NOT EXISTS `productos` ( `id` int(11) NOT NULL AUTO_INCREMENT, `nombre` varchar(32) NOT NULL, `descripcion` text NOT NULL,
`precio` decimal(10,0) NOT NULL,
`categoria_id` int(11) NOT NULL,
`creado` datetime NOT NULL,
`modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;


INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria_id`, `creado `, `modificado`) VALUES
(1, 'Samsung Galaxy Note 10 Plus', ' El mejor celular Samsung en este momento y el más co mpleto', '1110', 2, '2019-06-01 01:12:26', '2019-05-31 17:12:26'),
(2, ' Huawei P30 Pro', ' Cámara que ofrece zoom óptico 5X', '719', 2, '2019-06- 01 01:12:26', '2019-05-31 17:12:26'),
(3, 'Samsung Galaxy S10', '¿Qué tal este smartphone?', '800', 3, '2019-06-
01 01:12:26', '2019-05-31 17:12:26'),
(6, 'Ropa para levantar Pesas', 'De tipo Bench Shirt', '29', 1, '2019-06-
01 01:12:26', '2019-05-31 02:12:21'),
(7, 'Laptop Lenovo', 'Mi socio comercial', '399', 2, '2019-06-01 01:13:45', '2019-05-
31 02:13:39'),
(8, 'Samsung Galaxy Tab 10.1', 'Buena Tableta', '259', 2, '2019-06-01 01:14:13', '2019- 05-31 02:14:08'),
(9, 'Reloj Spalding', 'Mi reloj deportivo', '199', 1, '2019-06-01 01:18:36', '2019-05-
31 02:18:31'),
(10, ' Smart Watch de Sony', '¡El reloj inteligente más genial!', '300', 2, '2019-06-
06 17:10:01', '2019-06-05 18:09:51'),
(11, 'Huawei Y9s', 'Para fines de prueba.', '350', 2, '2019-06-06 17:11:04', '2019-06-
05 18:10:54'),
(12, 'Camisa Abercrombie Lake Arnold', 'Perfecto como regalo!', '60', 1, '2019-06-
06 17:12:21', '2019-06-05 18:12:11'),
(13, 'Camisa Abercrombie Allen Brook', '¡Camisa roja genial!', '70', 1, '2019-06-
06 17:12:59', '2019-06-05 18:12:49'),
(26, 'Camara Canon EOS 6D', 'Excelente camara profesional', '1455', 2, '2019-11-
22 19:07:34', '2019-11-21 20:07:34'),
(28, 'Billetera', '¡Absolutamente puedes usar este!', '199', 6, '2019-12-
04 21:12:03', '2019-12-03 22:12:03'),
(31, 'Camisa de Amanda Waller', 'Nueva camisa impresionante!', '333', 1, '2019-12-
13 00:52:54', '2019-12-12 01:52:54'),
(42, 'Zapatillas Nike para hombre', 'Zapatillas Nike', '129', 3, '2019-12-
12 06:47:08', '2019-12-12 05:47:08'),
(48, 'Zapatos Bristol', 'Zapatos impresionantes', '199', 5, '2019-01-08 06:36:37', '2019- 01-08 05:36:37'),
(60, 'Reloj Rolex', 'Reloj de lujo.', '25000', 1, '2019-01-11 15:46:02', '2019-01-
11 14:46:02');