-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05/12/2018 às 19:05
-- Versão do servidor: 10.1.36-MariaDB
-- Versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_integrador`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_info`
--

CREATE TABLE `tbl_info` (
  `PublicID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publication` text,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tbl_info`
--

INSERT INTO `tbl_info` (`PublicID`, `title`, `publication`, `photo`) VALUES
(1, 'O que é lixo?', 'Todo material considerado inútil, que tenha ou não valor, gerado através da atividade humana e que precisa ser eliminado é chamado de lixo.\r\nO lixo pode ser classificado em vários tipos, entre eles, úmido, seco, verde e especial. \r\n• Lixo úmido (resto de comida, guardanapo, papel toalha, papel higiênico) não é reciclável;\r\n• Lixo seco (papel, papelão, plástico, metal, vidro inteiro, óleo de cozinha);\r\n• Lixo verde (resto de podas ou cortes, madeira, serragem, cavaco de madeira);\r\n• Lixo de descarte especial (pilha, bateria, embalagem de agrotóxico, vidro quebrado, material hospitalar, lâmpadas, equipamentos eletrônicos e de informática) são recicláveis;\r\nExiste outra forma de classificação de lixo, que é através de sua origem:\r\n• Domiciliar: são os resíduos provenientes das residências. É muito diversificado, mas contém principalmente restos de alimentos, produtos deteriorados, embalagens em geral, retalhos, jornais e revistas, papel higiênico, fraldas descartáveis etc.\r\n• Comercial: são os resíduos originados nos diversos estabelecimentos comerciais e de serviços, tais como supermercados, bancos, lojas, bares, restaurantes etc.\r\n• Público: são aqueles originados nos serviços de limpeza urbana, como restos de poda e produtos da varrição das áreas públicas, limpeza de praias e galerias pluviais, resíduos das feiras livres e outros. \r\n• De serviços de saúde: resíduos provenientes de hospitais, clínicas médicas ou odontológicas, laboratórios, farmácias etc. É potencialmente perigoso, pois pode conter materiais contaminados com agentes biológicos ou perigosos, produtos químicos e quimioterápicos, agulhas, seringas, lâminas, ampolas de vidro, brocas etc.\r\n• Industrial: são os resíduos resultantes dos processos industriais. O tipo de lixo varia de acordo com o ramo de atividade da indústria. Nessa categoria está a maior parte dos materiais considerados perigosos ou tóxicos.\r\n• Agrícola: resulta das atividades de agricultura e pecuária. É constituído por embalagens de agrotóxicos, rações, adubos, restos de colheita, dejetos da criação de animais etc.\r\n• Entulho: restos da construção civil, reformas, demolições, solos de escavações etc\r\n\r\n', ''),
(2, 'Geração de Lixo.', 'No Brasil, a geração de lixo per capita varia de acordo com o porte populacional do município. Segundo dados da Pesquisa Nacional de Saneamento Básico (PNSB), elaborada pelo IBGE em 2000, a geração per capita de resíduos no Brasil varia entre 450 e 700 gramas para os municípios com população inferior a 200 mil habitantes e entre 700 e 1.200 gramas em municípios com população superior a 200 mil habitantes.\r\nPara calcular a quantidade de lixo gerado numa cidade, basta multiplicar este valor pelo número de habitantes. \r\nEm Rio Claro, uma pesquisa feita em 2013, aponta que para o ano de 2019, cada habitante, independente de idade, gerará em média cerca de 23Kg de lixo por mês. Acreditasse que este número seja maior. \r\nSegundo o IBGE, a estimativa de habitantes para 2018 em Rio Claro é de cerca de 204.797 pessoas, sendo assim Rio Claro deve gerar aproximadamente, 4.700 toneladas de lixo sólido por mês.', ''),
(3, 'Descarte de lixo', 'O lixo deve ser descartado em local apropriado, que seguem normas para este fim. Rio Claro conta com o serviço público de Coleta de lixo, Coleta seletiva/cata bagulho e Ecopontos. Porém, mesmo assim muitas pessoas descartam o lixo em lugar inapropriado, como terrenos baldios, área rural e locais públicos.\r\nO acumulo de lixo em local inadequado, gera sérios problemas de saúde pública e abre brecha para a alimentação de animais sinantrópicos (que abandonam seu habitat natural para se alimentar do resíduo gerado pelas pessoas) e peçonhentos; dengue e leptospirose, situações consideradas bastante agressivas ao bem estar geral da população.\r\nHoje em Rio Claro há cerca de 180 locais de descarte de lixo irregular.', ''),
(4, 'Ecopontos', 'Ecopontos são locais apropriados para o descarte correto de resíduos de construção civil, madeira, telhas, resíduos eletrônicos, pilhas, monitores, móveis velhos, papelão, plásticos, metais e outros materiais. No entanto, mesmo com a oferta destes serviços, algumas pessoas insistem em jogar lixo e demais materiais em ruas, bueiros, rios e terrenos, ocasionando enchentes e desvalorizando a cidade.', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_markers`
--

CREATE TABLE `tbl_markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tbl_markers`
--

INSERT INTO `tbl_markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(1, 'Escritório', 'Rua 9 N°855, Centro Rio Claro, SP', -22.413441, -47.564819),
(2, 'Polo Univesp', ' Rodovia Washington Luis, Km 173 - Bairro Chácara Lusa', -22.429768, -47.572498);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `userEmail`, `userPassword`) VALUES
(1, 'jhonatan.rampim@gmail.com', '123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`PublicID`);

--
-- Índices de tabela `tbl_markers`
--
ALTER TABLE `tbl_markers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `PublicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbl_markers`
--
ALTER TABLE `tbl_markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
