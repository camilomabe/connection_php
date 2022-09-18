CREATE TABLE `acudiente` (
  `id` varchar(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `acu_apellidos` varchar(30) NOT NULL,
  `acu_correo` varchar(30) NOT NULL,
  `acu_direccion` varchar(30) NOT NULL,
  `acu_telefono` varchar(15) NOT NULL,
  `pass` varchar(30) NOT NULL
);
INSERT INTO acudiente (`id`, `user`, `acu_apellidos`, `acu_correo`, `acu_direccion`, `acu_telefono`, `pass`) VALUES
('A1', 'Camilo', 'Mamian Becerra', 'camilo.mamian@cun.edu.co', 'Calle 92', '3133973592', 'CMB'),
('A2', 'JuanCamilo', 'Mamian Becerra', 'juancamilo@cun.edu.co', 'Calle 25', '3131234567', 'JMB'),
CREATE TABLE `alumnos` (
  `id` varchar(10) NOT NULL,
  `alu_nombre` varchar(30) NOT NULL,
  `alu_acudiente` varchar(30) NOT NULL,
  `alu_grupo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `acudiente`
  ADD PRIMARY KEY (`id`);

  ---- DELETE FROM alumnos WHERE id = 1111;