-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jun-2017 às 12:38
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `broimoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `idBanner` int(11) NOT NULL,
  `ordem` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `criado_em` datetime NOT NULL,
  `enviado_por` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tipo_banner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`idBanner`, `ordem`, `nome`, `alt`, `imagem`, `link`, `criado_em`, `enviado_por`, `status`, `tipo_banner`) VALUES
(18, 1, 'Banner Exemplo 123545', 'Descrição do Banner Exemplo 123545', '6751bc3bc68121c511ae3df916236152_51fdc1799dfb045017664ca0362316f1.jpg', '#123545', '2017-06-03 01:32:07', 1, 0, ''),
(19, 2, 'Banner Teste', 'Desc', '9b7b10bc05142ad9a2757699c5f2c140_ce928f026931df19fd3585663819838c.jpg', '#', '2017-06-05 09:44:42', 1, 1, ''),
(20, 3, 'Teste', 'Imóveis', '922782a24c856a88156739ee0a1e37bf_20b8beab74edeabd8542e92aa4ff9705.jpg', 'https://www.broimoveis.com.br/imoveis/tipo/casa', '2017-06-06 20:05:59', 2, 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id_config` int(11) NOT NULL,
  `paginaConstrucao` int(11) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id_config`, `paginaConstrucao`, `favicon`, `logo`, `telefone`, `email`, `whatsapp`, `endereco`, `copyright`) VALUES
(1, 1, '', '', '123', '1@broimoveis.com.br', 2147483647, 'blá blá', '2013');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id_contato` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id_contato`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `status`) VALUES
(1, 'Renan', 'teste@teste.com', 'renanjoppert@outlook.com', 'Teste de Assunto', 'Mensagem de contato', 0),
(2, 'Raphael', 'raphael@broimoveis.com.br', '(41) 3222-3383', 'Assunto do Contato', 'Mensagem de teste do contato no site.', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id_depoimento` int(11) NOT NULL,
  `pessoa` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `img_pessoa` varchar(255) NOT NULL,
  `profissao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id_imovel` int(11) NOT NULL,
  `tipo_imovel` varchar(255) DEFAULT NULL,
  `venda` int(11) DEFAULT NULL,
  `aluga` int(11) DEFAULT NULL,
  `quartos` int(11) DEFAULT NULL,
  `banheiros` int(11) DEFAULT NULL,
  `vagas` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `valor_aluguel` varchar(45) DEFAULT NULL,
  `valor_venda` varchar(45) DEFAULT NULL,
  `valor_iptu` varchar(45) DEFAULT NULL,
  `valor_condominio` varchar(45) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `bannerDestaque` int(11) NOT NULL,
  `homeDestaque` int(11) NOT NULL,
  `imagem_principal` varchar(255) NOT NULL,
  `valor_venda_promocional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id_imovel`, `tipo_imovel`, `venda`, `aluga`, `quartos`, `banheiros`, `vagas`, `area`, `referencia`, `endereco`, `valor_aluguel`, `valor_venda`, `valor_iptu`, `valor_condominio`, `titulo`, `cep`, `bairro`, `cidade`, `estado`, `bannerDestaque`, `homeDestaque`, `imagem_principal`, `valor_venda_promocional`) VALUES
(1, 'Casa', 1, 0, 3, 2, 2, 115, NULL, 'Rua Alberto Folloni', '', '376.000', '', '', 'Empreendimento Michelangelo Residencial', '80.530-300', 'Juvevê', 'Curitiba', 'PR', 1, 1, 'imovel__d080f9fe2756e9e87094aa22be5c86c2_DEFAULT.jpg', 0),
(2, 'Casa em Condomínio', 1, 0, 3, 3, 1, 217, NULL, 'Alameda Doutor Carlos de Carvalho', '', '935.000', '', '840', 'APARTAMENTO À VENDA Rua Simão Bolivar', '80.410-180', 'Centro', 'Curitiba', 'PR', 1, 1, 'imovel__fbb1128efc2330a5ad92556122b0e7be_DEFAULT.jpg', 0),
(3, 'Apartamento', 1, 0, 3, 3, 5, 360, NULL, 'Rua das Palmas', '', '360.000', '', '', 'Casa Afonso Pena', '83.050-280', 'Parque da Fonte', 'São José dos Pinhais', 'PR', 1, 1, 'imovel__a0d0e444f5a57257f3305eaa088074fc_DEFAULT.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter_lead`
--

CREATE TABLE `newsletter_lead` (
  `id_lead` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `criado_em` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `marcadores` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter_marcador`
--

CREATE TABLE `newsletter_marcador` (
  `id_marcador` int(11) NOT NULL,
  `nome_marcador` varchar(255) NOT NULL,
  `criado_por` int(11) NOT NULL,
  `criado_em` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_construcao_leads`
--

CREATE TABLE `pagina_construcao_leads` (
  `id_lead_pag` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `criado_em` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_imovel`
--

CREATE TABLE `tipo_imovel` (
  `id_tipo_imovel` int(11) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `criado_em` datetime NOT NULL,
  `permissao` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `criado_em`, `permissao`, `status`) VALUES
(1, 'Renan Joppert', 'renan@piscium.co', '7abdf27139953c73d8e202643e602d7c', '2017-05-24 00:00:00', 1, 1),
(2, 'Raphael', 'raphael@broimoveis.com.br', '89794b621a313bb59eed0d9f0f4e8205', '2017-06-05 22:39:00', 1, 1),
(3, 'Henrique', 'henrique@broimoveis.com.br', '89794b621a313bb59eed0d9f0f4e8205', '2017-06-05 22:39:00', 1, 1),
(4, 'Bruno', 'bruno@broimoveis.com.br', '89794b621a313bb59eed0d9f0f4e8205', '2017-06-05 22:39:00', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`idBanner`);

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id_config`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id_depoimento`);

--
-- Indexes for table `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id_imovel`);

--
-- Indexes for table `newsletter_lead`
--
ALTER TABLE `newsletter_lead`
  ADD PRIMARY KEY (`id_lead`);

--
-- Indexes for table `newsletter_marcador`
--
ALTER TABLE `newsletter_marcador`
  ADD PRIMARY KEY (`id_marcador`);

--
-- Indexes for table `pagina_construcao_leads`
--
ALTER TABLE `pagina_construcao_leads`
  ADD PRIMARY KEY (`id_lead_pag`);

--
-- Indexes for table `tipo_imovel`
--
ALTER TABLE `tipo_imovel`
  ADD PRIMARY KEY (`id_tipo_imovel`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id_depoimento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `newsletter_lead`
--
ALTER TABLE `newsletter_lead`
  MODIFY `id_lead` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `newsletter_marcador`
--
ALTER TABLE `newsletter_marcador`
  MODIFY `id_marcador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagina_construcao_leads`
--
ALTER TABLE `pagina_construcao_leads`
  MODIFY `id_lead_pag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo_imovel`
--
ALTER TABLE `tipo_imovel`
  MODIFY `id_tipo_imovel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
