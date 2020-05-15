--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(10, 'Hardware'),
(11, 'Software'),
(12, 'Periféricos'),
(13, 'Games');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `nroproduto` int(11) NOT NULL,
  `nomeproduto` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fornecedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES
(14, 1200, 'GTA IV', 'Games', 98, 'Intel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_forn` int(11) NOT NULL,
  `nome_forn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_forn`, `nome_forn`) VALUES
(5, 'NVDIA'),
(6, 'Sony'),
(7, 'Oracle'),
(8, 'Intel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(200) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(100) DEFAULT NULL,
  `nivel_usuario` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES
(6, 'João', 'joao@gmail.com', '81bce1f3bf343c464685d875c626820cdb58e309', 2, 'Ativo'),
(7, 'Jose', 'jose@gmail.com', '81bce1f3bf343c464685d875c626820cdb58e309', 3, 'Ativo'),
(11, 'Vagner Souza', 'vagner@gmail.com', '81bce1f3bf343c464685d875c626820cdb58e309', 1, 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_forn`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_forn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
