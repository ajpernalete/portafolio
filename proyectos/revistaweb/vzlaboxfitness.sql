-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2015 a las 22:07:14
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vzlaboxfitness`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombre`) VALUES
(1, 'Noticias'),
(2, 'Eventos'),
(3, 'WOD'),
(4, 'Retos'),
(5, 'Tips');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `idestatus` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`idestatus`, `nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `idpublicacion` int(11) NOT NULL AUTO_INCREMENT,
  `idestatus` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idsubcategoria` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `subtitulo` varchar(500) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`idpublicacion`),
  KEY `idestatus` (`idestatus`),
  KEY `idcategoria` (`idcategoria`),
  KEY `idsubcategoria` (`idsubcategoria`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idpublicacion`, `idestatus`, `idcategoria`, `idsubcategoria`, `idusuario`, `titulo`, `subtitulo`, `descripcion`, `fecha`, `hora`) VALUES
(1, 1, 1, 5, 1, 'Las tres razones!! por las que está arrasando el CrossFit, el entrenamiento de moda.', 'Cuando el expolicía estadounidense Greg Glassman creó su rutina de ejercicios en el año 2000, pensó sobre todo en entrenar a militares, bomberos y policías; profesionales que necesitan estar siempre en un excelente estado de forma.', 'Cuando el expolicía estadounidense Greg Glassman creó su rutina de ejercicios en el año 2000, pensó sobre todo en entrenar a militares, bomberos y policías; profesionales que necesitan estar siempre en un excelente estado de forma.\r\n\r\nCuando el expolicía estadounidense Greg Glassman creó su rutina de ejercicios en el año 2000, pensó sobre todo en entrenar a militares, bomberos y policías; profesionales que necesitan estar siempre en un excelente estado de forma. Para ello diseñó un programa de entrenamiento diario, de no más de una hora, que combinara una gran variedad de ejercicios ejecutados a alta intensidad.\r\n\r\nAsi nació el CrossFit que, catorce años después, se practica en más de 10.000 gimnasios de todo el mundo (o boxes, como se les llama en la jerga del mundillo). Y no sólo acuden a él los profesionales. Se trata del entrenamiento de moda en EEUU y cada vez más en Europa por su capacidad de enganchar a todo aquel que lo práctica ya que cuenta con una característica que lo distingue de muchos otros ejercicios: no es sólo un deporte sino también, como pretendía su creador, una filosofía del ejercicio físico.\r\n\r\n“Si alguien de tu entorno practica CrossFit, seguro que has pensado que forma parte de una secta”, explica la periodista J. C. Herz, autora de Learning to Breathe Fire: The Rise of CrossFit and the Primal Future of Fitness (Crown Archetype). “Es una respuesta natural a su insistencia implacable de que el CrossFit ha cambiado su vida, y también podría cambiar la tuya”.', '2015-02-03', '20:45:00'),
(2, 1, 1, 5, 1, 'Froning: "Pese a ganar, siempre se puede mejorar"', 'Por cuarto año consecutivo, Rich Froning se llevó los 2014 Reebok Cross FitGame y aseguró que no todo es físico y mental; está una motivación extra...', 'Rich Froning, campeón masculino de los 2014 Reebok Cross FitGames habló en conferencia de prensa sobre la diferencias que encontró este en año en relación a los anteriores. Desde 2011 ha acaparado el primer lugar.\r\n\r\n"Todos los años son diferentes, pero esta vez ha sido más difícil gracias a este tipo (Dave Castro, fundador y organizador de los CrossFit Games). Ahora las pruebas son más difíciles. Se pusieron rocosas a la mitad del camino, pero ha sido muy divertido", describió el tetracampeón.\r\n\r\nDe igual forma aceptó que pese a ganar tantas veces seguidas la competencia aún tiene aspectos que mejorar: "Correr. Creo que siempre hay rango para mejorar, pero creo que correr sería una de esas cosas que habría de mejorar".\r\n\r\nAsimismo, Froning explicó cómo le hace para administrar su energía y mantenerse estable mentalmente durante estos últimos días de competencia, los cuales son de altísimo nivel competitivo y exigencia física: "Cuando ves que la gente te apoya y grita tu nombre, ahí sale todo. Es una motivación que ayuda a dar todo de ti, no importa la circunstancia".', '2015-02-03', '20:47:00'),
(3, 1, 5, 26, 1, '4 consejos para entrenar con kettlebells.', 'Las kettlebell tiene la forma de un cencerro, pero ya sabes lo que pasa con las apariencias: que engañan. Y es que la kettlebell permite que te ejercites de forma rápida y completa.', 'Hay una razón para que la kettlebell despierte cada vez más interés y se esté convirtiendo en un fijo de los gimnasios: es práctica y no requiere tanta flexibilidad en las muñecas, los hombros ni la parte superior de la espalda como las barras o las mancuernas. Además, puedes pasar de un movimiento al siguiente sin parar, lo que hace que el entrenamiento sea más intenso en menos tiempo. Así aceleras el metabolismo y quemas más calorías, y al mismo tiempo aumentas los músculos.\r\n\r\nToma nota de estos cuatro consejos para sacarle el máximo partido sin lesiones.\r\n\r\n1. TEN CUIDADO\r\n\r\n1-Levantar la kettlebell implica mucho movimiento, así que es importante hacerlo bien para evitar lesiones y fortalecer al máximo la musculación. 2-Realiza los ejercicios delante de un espejo. 3-Puntos clave: para los levantamientos por encima de la cabeza y los ejercicios olímpicos, debes mantener los codos cerca del cuerpo. 4-Y en todos los ejercicios de levantamiento, mantén los hombros hacia abajo y hacia atrás como si intentaras juntarlos.', '2015-02-03', '20:50:00'),
(4, 1, 5, 24, 1, 'ATLETAS DE CROSSFIT: DIETA PALEO AUMENTARÁ TU RENDIMIENTO!', 'CUÁL ES LA DIETA MÁS POPULAR ENTRE LOS PRACTICANTES DE CROSSFIT? DIETA PALEO!\r\n\r\nEl crossfit para los que no lo conocen es un tipo de entrenamiento de alta intensidad y corta duración.', 'RECOMENDACIONES GENERALES\r\n\r\nDormir!\r\n\r\nAl menos 8 horas diarias.\r\nEl descanso permite al cuerpo restaurarse, y ayuda a un buen funcionamiento hormonal.\r\nEs importante dormir en una habitación totalmente oscura.\r\nTratar en lo posible de empezar un habito de acostarse mas temprano.\r\nEvita realizar ejercicios físicos antes de dormir.\r\nEvita pasar mucho tiempo frente a la computadora (ordenador) antes de dormir.\r\nCarbohidratos de estarcha y de bajo contenido glicemico:\r\n\r\nDependiendo de cada persona, es importante consumir un 40% de carbohidratos (60% durante competencias o periodos aun mas intensos), alrededor de 150 gramos carbohidratos durante los dias de entrenamiento normales de Crossfit.  Por ejemplo, estarias consumiendo entre 50 y 75 gramos en las comidas antes y después del entrenamiento.\r\nTrata de descubrir cual es la medida adecuada para tu cuerpo, empieza con 50 gramos en el desayuno y si todavia te sientes muy agotado, intenta aumentar la cantidad a lo largo de la semana.\r\nNo necesariamente se recomienda consumir carbohidratos cada hora, o cada dos horas.\r\nDependiendo de la intensidad del entrenamiento y de la masa corporal, el consumo de carbohidratos puede ser de 150 a 300 gramos al día.\r\nAlgunas fuentes de carbohidratos son: yuca, plátano, batata (camote), papa, calabazas, cebollas, remolacha (betabel), zanahorias.\r\nProteínas limpias:\r\n\r\nDependiendo de cada persona, un atleta de Crossfit debería consumir aproximadamente un 30% de proteínas en su dieta.\r\nSe hace una estimación de 0.5 gramos a 1 gramo de proteína por 1/2 kilo de masa corporal, entonces, un atleta de 100 kilos, por ejemplo, estaría consumiendo entre 140 a 200 gramos de proteína al día.\r\nAlgunas fuentes de proteínas limpias son: carnes y pollos sin hormonas ni antibióticos, preferentemente de pastura.\r\nGrasas buenas:\r\n\r\nDependiendo de cada persona, un atleta de Crossfit estaria consumiendo un 30% de grasas en su dieta.\r\nAlgunas fuentes de grasas buenas son: aguacate (palta), aceite de coco, mantequilla y/o grasa de animal de pastura, huevos (también van dentro de esta clasificación).\r\nEvitar aceites hidrogenados, de maiz, de semilla de girasol, entre otros.\r\nPara aquellos que toleran los lácteos, es importante que estos sean crudos y puros (con toda la grasa).\r\nAlimentos con alto contenido de nutrientes:\r\n\r\nHígado de animal de pastura, caldo de hueso de animal de pastura, vegetales de hoja verde, muchos probioticos (chucrut, vegetales fermentados, yogurt hecho en casa con leche de coco o cruda de animal de pastura, etc), aceite de hígado de bacalao fermentado, entre otros.\r\nUna buena recomendación es la de consumir al menos 1/4 de taza de vegetales fermentados o chucrut con el desayuno.\r\nEntrenar de acuerdo a tus capacidades:\r\n\r\nEn todo momento escucha a tu cuerpo, descansar al sentir dolor, no entrenar de mas.\r\nBaños de sales:\r\n\r\nRelaja los músculos, y evita los mal esterares post-entrenamiento.  Instrucciones: Aproximadamente 1 taza de bicarbonato de sodio, 1 taza de epsom sal, y gotitas de tus aceites esenciales preferidos (a nosotros nos encanta lavanda y menta), en agua caliente (pero todavía cómoda).\r\nVistar un masajista y/o quiropractico:\r\n\r\nEvitando la inflamación de músculos, tejidos y ligamentos, previniendo lesiones.\r\nAlgunos suplementos a considerar:\r\n\r\nAceite de higado de bacalao fermentado: como fuente de vitaminas A, D, E, K2, y omega-3.\r\nMagnesio: cientos de procesos enzimáticos en el cuerpo utilizan este mineral, y muchas personas son deficientes del mismo.\r\nAcido lipoico: promueve la conversión de carbohidratos en energía.\r\nVitamina C: gran antioxidante, previene inflamación y ayuda a la absorción de hierro.\r\nOligoelementos: en el agua o bebida favorita.\r\nEvitar:\r\n\r\nEl gluten: ya que promueve a la inflamacion del cuerpo.\r\nPolvos de proteina de baja calidad', '2015-02-03', '20:55:00'),
(5, 1, 5, 27, 1, 'Cafeína y Rendimiento Deportivo', 'Ya sea para empezar el día, para aumentar nuestra concentración, para mejorar el rendimiento deportivo, o como parte de un hábito social, la cafeína es el estimulante de mayor consumo en todo el mundo.', 'Ya sea para empezar el día, para aumentar nuestra concentración, para mejorar el rendimiento deportivo, o como parte de un hábito social, la cafeína es el estimulante de mayor consumo en todo el mundo. Técnicamente hablando, se trata de un alcaloide y la podemos encontrar naturalmente en diversas fuentes, como café, té, chocolate, guaraná, mate, etc. El consumo de cafeína y sus efectos psicológicos y fisiológicos en el mundo del deporte  han sido y continúan siendo bastante estudiados y la información que se tiene sobre el tema es bastante amplia. Se ha experimentado con ella para ver sus efectos en el entrenamiento de resistencia, fuerza, recuperación, hidratación y muchos otros campos. Veremos brevemente algunos de ellos.\r\n\r\nEntrenamiento aeróbico\r\n\r\nEstá bien establecido que la cafeína tiene un efecto ergogénico positivo (potenciador del rendimiento) en el entrenamiento de resistencia aeróbica.  Una de las posibles explicaciones podría ser el hecho de que la cafeína economiza el uso del glucógeno muscular durante entrenamientos de este tipo. Numerosos estudios experimentales que comparan el desempeño aeróbico entre dos grupos de atletas, unos suplementados con cafeína y otros no, demuestran que esta aumenta el rendimiento aumentando el tiempo en el que estos llegan al cansancio máximo.\r\n\r\nEntrenamientos intensos de corta duración\r\n\r\nEl consumo de cafeína también ha demostrado ser beneficioso para entrenamientos más cortos e intensos. Experimentos realizados en atletas han encontrado que los participantes que consumían cafeína antes de realizar ejercicios de este tipo alcanzaron picos de potencia más altos y disminuyeron los tiempos requeridos para la ejecución estos en comparación con aquellos atletas que consumieron un placebo. Estos efectos, sin embargo, a diferencia del caso del entrenamiento aeróbico, sólo parecen aparecer en atletas que ya tienen un buen nivel de acondicionamiento físico y no en personas no entrenadas.\r\n\r\nEntrenamiento de fuerza\r\n\r\nSi bien los efectos positivos de la cafeína sobre el entrenamiento aeróbico están claros y bien documentados, no pasa lo mismo con el entrenamiento de fuerza pues los datos de distintos estudios son contradictorios. Sin embargo, muchos de ellos muestran mejores resultados al ingerir dosis de cafeína previos al entrenamiento ya que se ve un aumento en el peso cargado, una menor sensación de cansancio y una mayor tolerancia al dolor causado por el esfuerzo máximo (lo cual permite al atleta continuar trabajando).\r\n\r\nDosis y formas de consumo\r\n\r\nEs importante conocer las dosis y el tiempo en el que este suplemento debe ser consumido para sacarle el máximo provecho. La fuente más asequible y más comúnmente utilizada es el café, sin embargo el contenido de cafeína del café es sumamente variable y depende no sólo del tipo de preparación sino también de factores ambientales de cultivo de la planta, es por esto que una taza de café americano por ejemplo puede aportar dosis de cafeína que difieren ampliamente una de la otra, así se haya usado un mismo tipo de preparación, si es que se adquieren en sitios diferentes. Un estudio que comparó el contenido de cafeína de una taza de café estándar de diferentes establecimientos en Estados Unidos encontró un aporte que iba desde los 76mg hasta los 112mg por 8 onzas de bebida. Otras fuentes, sin embargo, como los suplementos  diseñados para ser ingeridos antes de entrenar, y bebidas energizantes sí tienen un contenido estándar, lo cual facilita determinar la cantidad de producto que debemos consumir dependiendo de nuestros requerimientos.\r\n\r\nLa cafeína se absorbe rápidamente y llega a la sangre en aproximadamente media hora alcanzando un pico máximo de concentración a la hora o dos horas de haber sido consumida. Luego se va catabolizando lentamente, y puede mantenerse en la sangre por un lapso de cuatro a cinco horas.  Una dosis de 3 a 6mg por kilogramo de peso corporal (un promedio de 300mg para un atleta de 70kg de peso) media a una hora antes de empezar el ejercicio es suficiente para obtener los beneficios ergogénicos de la cafeína. Estudios que comparan esta cantidad con dosis más altas han demostrado que estas no incrementarían sus efectos.  Para potenciar aún más sus beneficios, y especialmente para el caso de los deportistas que realizan ejercicios de larga duración, se ha demostrado que la mezcla de dosis moderadas de cafeína (5mg/kg aproximadamente) con una bebida con un contenido de carbohidratos de aproximadamente 6.4% (lo comúnmente encontrado en las bebidas deportivas del mercado) es efectiva para producir una mejora en el rendimiento.\r\n\r\nFuente	Presentación	Contenido de cafeína\r\nCafé pasado	1 taza de 240mL	170mg\r\nCafé espresso	1 taza de 200mL	64mg\r\nRed Bull	1 lata de 8.4oz	80mg\r\nCoca Cola	1 botella de 500mL	58mg\r\nCoca Cola Zero	1 botella de 500mL	57mg\r\nPepsi	1 botella de 500mL	63mg\r\nTé negro	1 taza de 240mL	55mg\r\nNOS (óxido nítrico)	16oz	260mg\r\nAmino Energy (ON)	2 scoops	160mg\r\nContenido de cafeína en bebidas. Fuente: Journal of the American Medical Association\r\n\r\n \r\n\r\nPosibles efectos adversos\r\n\r\nUna de las mayores preocupaciones que rodean el consumo de cafeína es su efecto diurético, y efecto deshidratante que pudiera tener en el atleta que hace uso de ella, sin embargo se ha demostrado que la cafeína aumenta la producción de orina en estado de reposo o después del ejercicio, no durante la ejecución de este, así se consuman dosis altas del nivel de 8mg/kg de peso corporal. Si se consumen las dosis recomendadas y se cuida el consumo de líquidos durante el día, la deshidratación no debería ser un tema de preocupación.\r\n\r\nEs importante que cada atleta experimente y conozca su propia tolerancia a esta sustancia ya que la sensibilidad a sus efectos varía entre las personas, y puede que en algunos casos produzca efectos no deseados como aceleración, ansiedad, nerviosismo, etc., aun cuando se ingieren dosis mínimas. Si es que nunca se ha hecho uso de algún suplemento que contenga cafeína y se quieren comprobar sus efectos, una regla de oro es nunca hacerlo un día de entrenamiento importante o de competencia, sino en sesiones de entrenamiento regulares, e ir ajustando las dosis hasta encontrar cuál es la que más nos funciona.', '2015-02-08', '12:02:00'),
(6, 1, 5, 25, 1, '¿QUÉ ES LA HALTEROFILIA?', 'Muchos deportes utilizan los ejercicios de halterofilia para desarrollar la fuerza explosiva y la velocidad (atletismo, fútbol, rugby…)', 'Halterofilia o levantamiento olímpico es un deporte que consiste en el levantamiento de peso en una barra en cuyos extremos se fijan varios discos, los cuales determinan el peso final que se va a levantar. \r\n\r\nLa halterofilia desarrolla en el atleta potencia, fuerza, velocidad, flexibilidad, coordinación y equilibrio, gracias a grandes dosis de técnica.\r\n\r\nMuchos deportes utilizan los ejercicios de halterofilia para desarrollar la fuerza explosiva y la velocidad (atletismo, fútbol, rugby…)\r\n\r\n\r\n\r\nExisten dos modalidades de competición:\r\nArrancada \r\nSe eleva sin interrupción la barra desde el suelo hasta la total extensión de los brazos sobre la cabeza. \r\nDos tiempos \r\nSe eleva la barra desde el suelo hasta la total extensión de los brazos sobre la cabeza, pero se permite una interrupción del movimiento cuando la barra se haya a la altura de los hombros. \r\n\r\n\r\nBENEFICIOS DE LA HALTEROFILIA\r\n\r\nEl desarrollo de la fuerza explosiva y la velocidad que aporta la halterofilia está muy por encima a las desarrolladas mediante otros deportes de musculación como son el culturismo y el trabajo con máquinas.\r\n\r\nPracticando halterofilia aumentamos la densidad ósea y se corrigen las malas posturas de la espalda.  Además favorece nuestra coordinación de movimientos al utilizar multitud de fibras musculares en breves espacios de tiempo (piensa que una arrancada o una cargada se realiza en espacios de tiempo de 1 segundo).\r\n\r\nLa práctica de la Halterofilia, aporta grandes beneficios a cualquier disciplina deportiva y desde luego de un modo fundamental al CrossFit. La técnica y las correcciones posturales de la halterofilia, son esenciales para multitud de ejercicios en CrossFit y favorecen la progresión de nuestros entrenamientos.\r\n\r\nLevantar pesos es una experiencia divertida y agradable que todos deberían probar, pero es un deporte muy técnico y debe ser practicado correctamente:\r\n¡No comiences una rutina de halterofilia sin el asesoramiento de un entrenador profesional!', '2015-02-08', '12:08:00'),
(7, 1, 3, 13, 1, 'WOD Barbara', 'Este es un wod que pueden hacer en Box y Street Workout.', '20 Pull Ups. 30 Push Ups. 40 Sit Ups. 50 Squats. Descansar 3min. Repetir todo por 5 rounds. Mucha suerte!!', '2015-02-08', '12:41:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rpublicacionfoto`
--

CREATE TABLE IF NOT EXISTS `rpublicacionfoto` (
  `idrpublicacionfoto` int(11) NOT NULL AUTO_INCREMENT,
  `idpublicacion` int(11) NOT NULL,
  `piedefoto` varchar(250) NOT NULL,
  PRIMARY KEY (`idrpublicacionfoto`),
  KEY `idpublicacion` (`idpublicacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `rpublicacionfoto`
--

INSERT INTO `rpublicacionfoto` (`idrpublicacionfoto`, `idpublicacion`, `piedefoto`) VALUES
(1, 1, 'El levantamiento de pesas es uno de los ejercicios habituales en el CrossFit. (iStock)\r\n\r\nLeer más:  Las tres razones por las que está arrasando el CrossFit, el entrenamiento de moda - Noticias de Alma, Corazón, Vida  http://bit.ly/16j2QY9\r\n'),
(2, 2, 'Rich Fronning en conferencia de prensa (Foto: Juan Manuel Navarrete)'),
(3, 3, 'kettlebell-CrossFit-fitness-ejercicios-pesas'),
(4, 4, 'Dieta Paleo!!'),
(5, 5, 'Efectos de la cafeina en el Crossfit'),
(6, 6, 'chicas levantando pesas en Crossfit Games'),
(7, 7, 'Workout of the day, name Barbara.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rpublicacionvideo`
--

CREATE TABLE IF NOT EXISTS `rpublicacionvideo` (
  `idrpublicacionvideo` int(11) NOT NULL AUTO_INCREMENT,
  `idpublicacion` int(11) NOT NULL,
  `ruta` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  PRIMARY KEY (`idrpublicacionvideo`),
  KEY `idpublicacion` (`idpublicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`idsubcategoria`),
  KEY `idcategoria` (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`idsubcategoria`, `idcategoria`, `nombre`) VALUES
(5, 1, 'Internacionales'),
(6, 1, 'Nacionales'),
(7, 1, 'Estadales'),
(8, 1, 'Box'),
(9, 1, 'Otros'),
(10, 2, 'Nacionales'),
(11, 2, 'Estadales'),
(12, 2, 'Open Box'),
(13, 3, 'Girl'),
(14, 3, 'Hero'),
(15, 3, 'AMRAP'),
(16, 3, 'EMOM'),
(17, 3, 'TABATA'),
(18, 3, 'For Time'),
(19, 4, 'Hombres'),
(20, 4, 'Mujeres'),
(21, 5, 'Nutricion'),
(22, 5, 'Mobility'),
(23, 5, 'Fisioterapia'),
(24, 5, 'Paleo'),
(25, 5, 'Halterofilia'),
(26, 5, 'Gimnacia'),
(27, 5, 'Salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeusuario`
--

CREATE TABLE IF NOT EXISTS `tipodeusuario` (
  `idtipodeusuario` int(11) NOT NULL AUTO_INCREMENT,
  `idestatus` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`idtipodeusuario`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipodeusuario`
--

INSERT INTO `tipodeusuario` (`idtipodeusuario`, `idestatus`, `nombre`) VALUES
(1, 1, 'Administrador'),
(2, 1, 'Operador'),
(3, 1, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `idestatus` int(11) NOT NULL,
  `idtipodeusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `fecharegistro` date NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idestatus` (`idestatus`),
  KEY `idtipodeusuario` (`idtipodeusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `idestatus`, `idtipodeusuario`, `nombre`, `apellido`, `correo`, `telefono`, `clave`, `fecharegistro`) VALUES
(1, 1, 1, 'Alberto', 'Pernalete', 'ajpernaletel@gmail.com', '04166442720', '18412', '2015-02-03');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`),
  ADD CONSTRAINT `publicaciones_ibfk_2` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`),
  ADD CONSTRAINT `publicaciones_ibfk_3` FOREIGN KEY (`idsubcategoria`) REFERENCES `subcategorias` (`idsubcategoria`),
  ADD CONSTRAINT `publicaciones_ibfk_5` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `rpublicacionfoto`
--
ALTER TABLE `rpublicacionfoto`
  ADD CONSTRAINT `rpublicacionfoto_ibfk_1` FOREIGN KEY (`idpublicacion`) REFERENCES `publicaciones` (`idpublicacion`);

--
-- Filtros para la tabla `rpublicacionvideo`
--
ALTER TABLE `rpublicacionvideo`
  ADD CONSTRAINT `rpublicacionvideo_ibfk_1` FOREIGN KEY (`idpublicacion`) REFERENCES `publicaciones` (`idpublicacion`);

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `subcategorias_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`);

--
-- Filtros para la tabla `tipodeusuario`
--
ALTER TABLE `tipodeusuario`
  ADD CONSTRAINT `tipodeusuario_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idtipodeusuario`) REFERENCES `tipodeusuario` (`idtipodeusuario`),
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
