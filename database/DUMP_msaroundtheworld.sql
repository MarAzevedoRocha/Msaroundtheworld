-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 05:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msaroundtheworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinos`
--

CREATE TABLE `destinos` (
  `id_destino` int(11) NOT NULL,
  `codigo_destino` varchar(45) NOT NULL,
  `nome_destino` varchar(45) NOT NULL,
  `imagem_destino` varchar(45) NOT NULL,
  `mapa_destino` varchar(45) NOT NULL,
  `link_destino` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinos`
--

INSERT INTO `destinos` (`id_destino`, `codigo_destino`, `nome_destino`, `imagem_destino`, `mapa_destino`, `link_destino`) VALUES
(2, 'GER', 'Alemanha', 'germany.jpg', 'alemanha.svg', 'destinos_resultado.php'),
(3, 'AUS', 'Áustria', 'austria.jpg', 'austria.svg', 'destinos_resultado.php'),
(4, 'BR', 'Brasil', 'rio.jpg', 'brasil.svg', 'destinos_resultado.php'),
(5, 'KH', 'Cambodja', 'camboja.jpg', 'cambodja.svg', 'destinos_resultado.php'),
(6, 'HR', 'Croácia', 'dubrovnik.jpg', 'croatia.svg', 'destinos_resultado.php'),
(7, 'SCT', 'Escócia', 'edimburgo.jpg', 'united-kingdom.svg', 'destinos_resultado.php'),
(8, 'ES', 'Espanha', 'sevilha.jpg', 'spain.svg', 'destinos_resultado.php'),
(9, 'FR', 'França', 'paris.jpg', 'france.svg', 'destinos_resultado.php'),
(10, 'GR', 'Grécia', 'atenas.jpg', 'greece.svg', 'destinos_resultado.php'),
(11, 'HU', 'Hungria', 'budapeste.jpg', 'hungary.svg', 'destinos_resultado.php'),
(13, 'GB', 'Inglaterra', 'londres.jpg', 'united-kingdom.svg', 'destinos_resultado.php'),
(14, 'IE', 'Irlanda', 'irlanda.jpg', 'ireland.svg', 'destinos_resultado.php'),
(15, 'IL', 'Israel', 'israel.jpeg', 'israel.svg', 'destinos_resultado.php'),
(16, 'IT', 'Itália', 'roma.jpg', 'italy.svg', 'destinos_resultado.php'),
(17, 'JO', 'Jordânia', 'jordania.jpg', 'jordania.svg', 'destinos_resultado.php'),
(18, 'MT', 'Malta', 'malta.jpg', 'malta.svg', 'destinos_resultado.php'),
(19, 'ME', 'Montenegro', 'kotor.jpg', 'montenegro.svg', 'destinos_resultado.php'),
(20, 'NL', 'Países Baixos', 'amesterdao.jpg', 'netherlands.svg', 'destinos_resultado.php'),
(21, 'PL', 'Polónia', 'cracovia.jpg', 'poland.svg', 'destinos_resultado.php'),
(22, 'PT', 'Portugal', 'porto.jpg', 'portugal.svg', 'destinos_resultado.php'),
(23, 'CZ', 'República Checa', 'praga.jpg', 'czech-republic.svg', 'destinos_resultado.php'),
(24, 'RU', 'Rússia', 'russia.jpg', 'russia.svg', 'destinos_resultado.php'),
(25, 'VN', 'Vietname', 'vietnam.jpg', 'vietname.svg', 'destinos_resultado.php'),
(26, 'TR', 'Turquia', 'turquia.jpg', 'turquia.svg', 'destinos_resultado.php');

-- --------------------------------------------------------

--
-- Table structure for table `destino_tem_roteiro`
--

CREATE TABLE `destino_tem_roteiro` (
  `fk_id_destino` int(11) NOT NULL,
  `fk_id_roteiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dicas`
--

CREATE TABLE `dicas` (
  `id_dica` int(11) NOT NULL,
  `nome_dica` varchar(90) DEFAULT NULL,
  `intro_dica` varchar(100) DEFAULT NULL,
  `bg_dica` varchar(45) DEFAULT NULL,
  `icon_dica` varchar(45) DEFAULT NULL,
  `texto_botao_dica` varchar(45) DEFAULT NULL,
  `link_dica` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dicas`
--

INSERT INTO `dicas` (`id_dica`, `nome_dica`, `intro_dica`, `bg_dica`, `icon_dica`, `texto_botao_dica`, `link_dica`) VALUES
(5, 'Destinos', 'Escolhe o destino, faz o roteiro e cria a tua história', 'destino.jpg', 'location.svg', 'Destinos', 'destinos.php'),
(6, 'Voos', 'Pesquisa antecipadamente e consegue os melhores preços.', 'voo.jpeg', 'aviao.svg', 'SKYSCANNER', 'https://www.skyscanner.pt/'),
(7, 'ESTADIA', 'Chamamos casa aos sítios onde nos sentimos bem.', 'room.jpeg', 'bed.svg', 'BOOKING', 'https://www.booking.com/index.pt-pt.html'),
(8, 'SEGUROS', 'Viajante prevenido, vale por dois!', 'seguros.jpg', 'insurance.svg', 'World nomads', 'https://www.worldnomads.pt/'),
(9, 'SAÚDE', 'Porque ter cuidados de saúde nunca é demais!', 'saude.jpg', 'health.svg', 'Consulta viajante', 'https://www.sns24.gov.pt/guia/consulta-do-viajante/'),
(10, 'VISTOS', 'Já sabes onde vais?  Sabes se precisas de visto?', 'vistos.jpg', 'passport.svg', 'E-VISA', 'https://pedidodevistos.mne.pt/VistosOnline/'),
(11, 'CONSELHOS', 'Cada destino vale um conselho.', 'conselhos.jpg', 'conselhos.svg', 'PORTAL COMUNIDADES', 'https://www.portaldascomunidades.mne.pt/pt/'),
(12, 'TOURS', 'As melhores tours para viveres a cidade como um local!', 'tours.jpg', 'tour1.svg', 'SANDEMANS NEW EUROPE', 'https://www.neweuropetours.eu/pt/'),
(13, 'ATIVIDADES', 'Sente a cidade, aproveita tudo o que ela tem para oferecer.', 'ballon.jpg', 'atividades.svg', 'Get your guide', 'https://www.getyourguide.pt/'),
(14, 'DINHEIRO', 'A moeda oficial do país que vais visitar não é igual. E agora?', 'dinheiro.jpg', 'money.svg', 'Revolut', 'https://www.revolut.com/pt-PT'),
(15, 'RENT A CAR', 'A liberdade de escolher a hora para estar naquele lugar!', 'rental.jpg', 'rentalcar.svg', 'Rentalcars', 'https://www.rentalcars.com/pt/'),
(16, 'CAMPERS', 'Começa aqui a Road Trip que sempre sonhaste!', 'campers.jpeg', 'motorhome.svg', 'INDIE CAMPERS', 'https://indiecampers.pt/');

-- --------------------------------------------------------

--
-- Table structure for table `inspiracao`
--

CREATE TABLE `inspiracao` (
  `id_inspiracao` int(11) NOT NULL,
  `codigo_inspiracao` varchar(45) DEFAULT NULL,
  `nome_inspiracao` varchar(45) DEFAULT NULL,
  `imagem_inspiracao` varchar(45) DEFAULT NULL,
  `texto_inspiracao` text DEFAULT NULL,
  `link_inspiracao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inspiracao`
--

INSERT INTO `inspiracao` (`id_inspiracao`, `codigo_inspiracao`, `nome_inspiracao`, `imagem_inspiracao`, `texto_inspiracao`, `link_inspiracao`) VALUES
(1, 'POUP', 'Poupanças para viajar', 'kotor.jpg', 'Queres viajar e não sabes como poupar? Descobre aqui. ', NULL),
(2, 'MIN', 'Viajar com o mínimo', 'minimalist.jpg', 'Queres viajar e não sabes como poupar? Descobre aqui. ', NULL),
(3, 'COV', 'E depois do COVID?', 'map_pin.jpg', 'Queres viajar e não sabes como poupar? Descobre aqui. ', NULL),
(4, 'CON', 'Conselhos ao viajante', 'plitvice.jpg', 'Queres viajar e não sabes como poupar? Descobre aqui. ', NULL),
(5, 'MAQ', 'As melhores máquinas', 'camera.jpg', 'Queres viajar e não sabes como poupar? Descobre aqui. ', NULL),
(6, 'AIR', 'O que não pode faltar?', 'airport.jpg', 'Queres viajar e não sabes como poupar? Descobre aqui. ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roteiros`
--

CREATE TABLE `roteiros` (
  `id_roteiro` int(11) NOT NULL,
  `codigo_roteiro` varchar(45) DEFAULT NULL,
  `nome_roteiro` varchar(45) DEFAULT NULL,
  `imagem_roteiro` varchar(45) DEFAULT NULL,
  `texto_roteiro` text DEFAULT NULL,
  `link_roteiro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roteiros`
--

INSERT INTO `roteiros` (`id_roteiro`, `codigo_roteiro`, `nome_roteiro`, `imagem_roteiro`, `texto_roteiro`, `link_roteiro`) VALUES
(1, 'IIWW', 'Roteiro 2ª Guerra Mundial', 'holocaust.jpg', 'Já viste todos os documentários, leste todos os livros e sentes vontade de saber e ver mais? Este é o roteiro ideal para ti.', 'destinos_resultado_interior.php'),
(2, 'BER', '6 dias em Berlim', 'berlin.jpg', 'Cidades das infinitas possibilidades, Berlim cativa por ser fora do comum, pelas atrações turísticas, pela vida noturna, cultura e história.', 'destinos_resultado_interior.php'),
(3, 'MUN', '5 dias na capital da Baviera', 'munique.jpg', 'A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.', 'destinos_resultado_interior.php'),
(4, 'HAM', 'Hamburgo, Colónia e Frankfurt', 'hamburg.jpg', 'A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.', 'destinos_resultado_interior.php'),
(5, 'NUR', 'Rothenburg ob der e Nuremberga', 'rothenburg.jpg', 'A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.', 'destinos_resultado_interior.php'),
(6, 'NATAL', 'Mercados de Natal Alemães', 'natal.jpg', 'Já viste todos os documentários, leste todos os livros e sentes vontade de saber e ver mais? Este é o roteiro ideal para ti. ', 'destinos_resultado_interior.php');

-- --------------------------------------------------------

--
-- Table structure for table `roteiro_especifico`
--

CREATE TABLE `roteiro_especifico` (
  `id_roteiro_especifico` int(11) NOT NULL,
  `fk_id_roteiro` int(11) NOT NULL,
  `codigo_roteiro_especifico` varchar(45) NOT NULL,
  `nome_roteiro_especifico` varchar(45) NOT NULL,
  `imagem_apresentacao_roteiro_especifico` varchar(60) NOT NULL,
  `texto_apresentacao_roteiro_especifico` text NOT NULL,
  `imagem1_roteiro_especifico` varchar(45) NOT NULL,
  `imagem2_roteiro_especifico` varchar(45) NOT NULL,
  `imagem3_roteiro_especifico` varchar(45) NOT NULL,
  `imagem4_roteiro_especifico` varchar(45) DEFAULT NULL,
  `imagem5_roteiro_especifico` varchar(45) DEFAULT NULL,
  `imagem6_roteiro_especifico` varchar(45) DEFAULT NULL,
  `imagem7_roteiro_especifico` varchar(45) DEFAULT NULL,
  `imagem8_roteiro_especifico` varchar(45) DEFAULT NULL,
  `texto1_roteiro_especifico` text NOT NULL,
  `texto2_roteiro_especifico` text DEFAULT NULL,
  `texto3_roteiro_especifico` text DEFAULT NULL,
  `texto4_roteiro_especifico` text DEFAULT NULL,
  `texto5_roteiro_especifico` text DEFAULT NULL,
  `texto6_roteiro_especifico` text DEFAULT NULL,
  `texto7_roteiro_especifico` text DEFAULT NULL,
  `texto8_roteiro_especifico` text DEFAULT NULL,
  `titulo1_roteiro_especifico` varchar(100) DEFAULT NULL,
  `titulo2_roteiro_especifico` varchar(100) DEFAULT NULL,
  `titulo3_roteiro_especifico` varchar(100) DEFAULT NULL,
  `titulo4_roteiro_especifico` varchar(100) DEFAULT NULL,
  `titulo5_roteiro_especifico` varchar(100) DEFAULT NULL,
  `titulo6_roteiro_especifico` varchar(100) DEFAULT NULL,
  `titulo7_roteiro_especifico` varchar(100) DEFAULT NULL,
  `titulo8_roteiro_especifico` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id_utilizador` int(11) NOT NULL,
  `nome_utilizador` varchar(45) DEFAULT NULL,
  `email_utilizador` varchar(45) DEFAULT NULL,
  `password_utilizador` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilizadores`
--

INSERT INTO `utilizadores` (`id_utilizador`, `nome_utilizador`, `email_utilizador`, `password_utilizador`) VALUES
(1, 'marcia', 'marcia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id_destino`);

--
-- Indexes for table `destino_tem_roteiro`
--
ALTER TABLE `destino_tem_roteiro`
  ADD PRIMARY KEY (`fk_id_destino`,`fk_id_roteiro`),
  ADD KEY `fk_Destinos_has_Roteiros_Roteiros1_idx` (`fk_id_roteiro`),
  ADD KEY `fk_Destinos_has_Roteiros_Destinos_idx` (`fk_id_destino`);

--
-- Indexes for table `dicas`
--
ALTER TABLE `dicas`
  ADD PRIMARY KEY (`id_dica`);

--
-- Indexes for table `inspiracao`
--
ALTER TABLE `inspiracao`
  ADD PRIMARY KEY (`id_inspiracao`);

--
-- Indexes for table `roteiros`
--
ALTER TABLE `roteiros`
  ADD PRIMARY KEY (`id_roteiro`);

--
-- Indexes for table `roteiro_especifico`
--
ALTER TABLE `roteiro_especifico`
  ADD PRIMARY KEY (`id_roteiro_especifico`),
  ADD UNIQUE KEY `imagem3_roteiro_especifico_UNIQUE` (`imagem3_roteiro_especifico`),
  ADD KEY `fk_roteiro_especifico_roteiros1_idx` (`fk_id_roteiro`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id_utilizador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id_destino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `dicas`
--
ALTER TABLE `dicas`
  MODIFY `id_dica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `inspiracao`
--
ALTER TABLE `inspiracao`
  MODIFY `id_inspiracao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roteiros`
--
ALTER TABLE `roteiros`
  MODIFY `id_roteiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roteiro_especifico`
--
ALTER TABLE `roteiro_especifico`
  MODIFY `id_roteiro_especifico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destino_tem_roteiro`
--
ALTER TABLE `destino_tem_roteiro`
  ADD CONSTRAINT `fk_Destinos_has_Roteiros_Destinos` FOREIGN KEY (`fk_id_destino`) REFERENCES `destinos` (`id_destino`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Destinos_has_Roteiros_Roteiros1` FOREIGN KEY (`fk_id_roteiro`) REFERENCES `roteiros` (`id_roteiro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `roteiro_especifico`
--
ALTER TABLE `roteiro_especifico`
  ADD CONSTRAINT `fk_roteiro_especifico_roteiros1` FOREIGN KEY (`fk_id_roteiro`) REFERENCES `roteiros` (`id_roteiro`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
