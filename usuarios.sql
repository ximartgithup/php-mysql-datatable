CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ;

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`) VALUES
(1, 'Drake Pruitt', 'Santana', 'Ap #880-9509 In Avenue', '+57-3000031056', 'metus@google.com'),
(2, 'Philip Mcdonald', 'Castillo', '6172 In Road', '+57-3004814016', 'donec.tempor@google.org'),
(3, 'Kelly Bond', 'Dillard', '445-2381 Suspendisse Av.', '+57-3003298490', 'eget.venenatis@protonmail.couk'),
(4, 'Cameron May', 'Hunter', '204-952 Quisque Rd.', '+57-3006262124', 'molestie.sodales@yahoo.couk'),
(5, 'Chaim Frank', 'Peters', '833 Sit Ave', '+57-3009431119', 'consequat.dolor.vitae@aol.org'),
(6, 'Charissa Rowland', 'Leach', '1700 Proin Ave', '+57-3006217665', 'orci@outlook.edu'),
(7, 'Lucas Schmidt', 'Stephenson', '9373 Netus Rd.', '+57-3008037408', 'vitae@hotmail.ca'),
(8, 'Gretchen Miles', 'Glass', 'P.O. Box 310, 1991 Consequat, Street', '+57-3002234341', 'aliquet.lobortis@yahoo.edu'),
(9, 'Kane Fitzpatrick', 'Joseph', 'P.O. Box 951, 3552 Turpis Road', '+57-3002026528', 'malesuada.vel@google.net'),
(10, 'Ruby Dawson', 'Sargent', 'Ap #214-7088 Fringilla, Rd.', '+57-3007745630', 'et.malesuada@yahoo.net');

-- 
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

  -- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
