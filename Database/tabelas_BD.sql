-- -----------------------------------------------------
-- Tabela Clientes
-- -----------------------------------------------------
CREATE TABLE Clientes (
    ClienteID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(255) NOT NULL,
    RazaoSocial VARCHAR(255),
    CPF VARCHAR(20),
    RG VARCHAR(15),
    DataNascimento DATE,
    Sexo CHAR(1),
    Email VARCHAR(100),
    Telefone VARCHAR(15),
    Celular VARCHAR(15),
    Rua VARCHAR(100),
    CEP CHAR(10),
    CidadeID INTEGER,
    NumeroCNH VARCHAR(30),
    NumeroRegistroCNH VARCHAR(30),
    ValidadeCNH DATE,
    CategoriaCNH VARCHAR(5),
    Observacao VARCHAR(255),
    Situacao INTEGER,
    CNPJ VARCHAR(18),
    InscricaoMunicipal VARCHAR(20),
    InscricaoEstadual VARCHAR(20),
    TipoPessoa CHAR(1),
    Senha VARCHAR(50) NOT NULL,
    FOREIGN KEY (CidadeID) REFERENCES Cidades(CidadeID)
);
-- -----------------------------------------------------
-- Tabela Cidades
-- -----------------------------------------------------
CREATE TABLE Cidades (
    CidadeID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL, 
    EstadoID INTEGER  NOT NULL,
    FOREIGN KEY (EstadoID) REFERENCES Estados(id)
);
-- -----------------------------------------------------
-- Tabela Estados
-- -----------------------------------------------------
CREATE TABLE Estados (
    EstadoID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    UF CHAR(2) NOT NULL
);
-- -----------------------------------------------------
-- Tabela Cargos
-- -----------------------------------------------------
CREATE TABLE Cargos (
    CargoID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    SalarioBase MONEY,
    Situacao INTEGER NOT NULL
);
-- -----------------------------------------------------
-- Tabela Funcionarios
-- -----------------------------------------------------
CREATE TABLE Funcionarios (
    FuncionarioID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    CPF VARCHAR(20),
    RG VARCHAR(15),
    DataNascimento DATE,
    Sexo CHAR,
    Email VARCHAR(100),
    Telefone VARCHAR(15),
    Celular VARCHAR(15),
    Rua VARCHAR(100),
    Numero INTEGER,
    Complemento VARCHAR(100),
    Bairro VARCHAR(100),
    CidadeID INTEGER,
    CEP CHAR(10),
    NumeroCTPS VARCHAR(30),
    Pis VARCHAR(30),
    Salario MONEY,
    DataAdmissao DATE,
    DataDemissao DATE,
    CargoID INTEGER NOT NULL,
    LOGIN_ VARCHAR(100),
    Senha VARCHAR(100),
    Situacao INTEGER NOT NULL,
    NumeroCNH VARCHAR(30),
    NumeroRegistroCNH VARCHAR(30),
    ValidadeCNH DATE,
    CategoriaCNH VARCHAR(5),
    Observacao VARCHAR(255),
    TipoUser INTEGER NOT NULL,
    FOREIGN KEY (CidadeID) REFERENCES Cidades(CidadeID),
    FOREIGN KEY (CargoID) REFERENCES Cargos(CargoID)
);
-- -----------------------------------------------------
-- Tabela FuncionarioPermissao
-- -----------------------------------------------------
CREATE TABLE FuncionarioPermissao (
    FuncionarioPermissaoID SERIAL PRIMARY KEY NOT NULL,
    PermissaoID INTEGER NOT NULL,
    FuncionarioID INTEGER NOT NULL
    FOREIGN KEY (PermissaoID) REFERENCES Permissao(PermissaoID),
    FOREIGN KEY (FuncionarioID) REFERENCES Funcionarios(FuncionarioID)
);
-- -----------------------------------------------------
-- Tabela TiposCobrancasRecebimentos
-- -----------------------------------------------------
CREATE TABLE TiposCobrancasRecebimentos (
    TipoCobrancaRecebimentoID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Situacao INTEGER NOT NULL
);
-- -----------------------------------------------------
-- Tabela Permissao
-- -----------------------------------------------------
CREATE TABLE Permissao (
    PermissaoID INTEGER PRIMARY KEY NOT NULL,
    Permissao VARCHAR(50) NOT NULL
);
-- -----------------------------------------------------
-- Tabela ContasReceber
-- -----------------------------------------------------
CREATE TABLE ContasReceber (
    ContaReceberID SERIAL PRIMARY KEY NOT NULL,
    Valor MONEY NOT NULL,
    DataVencimento DATE NOT NULL,
    Desconto MONEY,
    Juros MONEY,
    DataPagamento DATE,
    ValorPago MONEY,
    Situacao INTEGER NOT NULL,
    PlanoContaID INTEGER NOT NULL,
    ClienteID INTEGER NOT NULL,
    TipoCobrancaRecebimentoID INTEGER NOT NULL,
    LocacaoDevolucaoID INTEGER,
    Observacao VARCHAR(255),
    FOREIGN KEY (PlanoContaID) REFERENCES PlanosContas(PlanoContaID),
    FOREIGN KEY (ClienteID) REFERENCES Clientes(ClienteID),
    FOREIGN KEY (TipoCobrancaRecebimentoID) REFERENCES TiposCobrancasRecebimentos(TipoCobrancaRecebimentoID),
    FOREIGN KEY (LocacaoDevolucaoID) REFERENCES LocacoesDevolucoes(LocacaoDevolucaoID)
);
-- -----------------------------------------------------
-- Tabela TiposCobrancasExtras
-- -----------------------------------------------------
CREATE TABLE TiposCobrancasExtras (
    TipoCobrancaExtraID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Descricao VARCHAR(255),
    Valor MONEY NOT NULL,
    Situacao INTEGER NOT NULL
);
-- -----------------------------------------------------
-- Tabela CobrancaExtraLocacaoDevolucao
-- -----------------------------------------------------
CREATE TABLE CobrancasExtrasLocacaoDevolucao (
    CobrancaExtraID SERIAL PRIMARY KEY NOT NULL AUTO_INCREMENT,
    TipoCobrancaExtraID INTEGER NOT NULL,
    LocacaoDevolucaoID INTEGER NOT NULL,
    Situacao INTEGER NOT NULL,
    FOREIGN KEY (TipoCobrancaExtraID) REFERENCES TiposCobrancasExtras(TipoCobrancaExtraID),
    FOREIGN KEY (LocacaoDevolucaoID) REFERENCES LocacoesDevolucoes(LocacaoDevolucaoID)
);
-- -----------------------------------------------------
-- Tabela LocacoesDevolucoes
-- -----------------------------------------------------
CREATE TABLE LocacoesDevolucoes (
    LocacaoDevolucaoID SERIAL PRIMARY KEY NOT NULL,
    ClienteID INTEGER NOT NULL,
    VeiculoID INTEGER NOT NULL,
    DataLocacao TIMESTAMP NOT NULL,
    HoraLocacao TIMESTAMP NOT NULL,
    DataPrevistaDevolucao TIMESTAMP NOT NULL,
    HoraPrevistaDevolucao TIMESTAMP NOT NULL,
    DataDevolucao TIMESTAMP,
    HoraDevolucao TIMESTAMP,
    FuncionarioID INTEGER NOT NULL,
    ValorTotal MONEY NOT NULL,
    SeguroID INTEGER NOT NULL,
    QtdeDias INTEGER NOT NULL,
    KMDevolucao DECIMAL,
    FOREIGN KEY (ClienteID) REFERENCES Clientes(ClienteID),
    FOREIGN KEY (VeiculoID) REFERENCES Veiculos(VeiculoID),
    FOREIGN KEY (FuncionarioID) REFERENCES Funcionarios(FuncionarioID),
    FOREIGN KEY (SeguroID) REFERENCES Seguros(SeguroID) 
);
-- -----------------------------------------------------
-- Tabela Adicionais
-- -----------------------------------------------------
CREATE TABLE Adicionais (
    AdicionalID SERIAL PRIMARY KEY NOT NULL,
    TipoAdicionalID INTEGER NOT NULL,
    LocacaoDevolucaoID INTEGER NOT NULL,
    Situacao INTEGER NOT NULL,
    FOREIGN KEY (TipoAdicionalID) REFERENCES TiposAdicionais(TipoAdicionalID),
    FOREIGN KEY (LocacaoDevolucaoID) REFERENCES LocacoesDevolucoes(LocacaoDevolucaoID)
);
-- -----------------------------------------------------
-- Tabela ItensCheckinLocacaoDevolucao
-- -----------------------------------------------------
CREATE TABLE ItensCheckinLocacaoDevolucao (
    LocacaoDevolucaoCheckinID SERIAL PRIMARY KEY NOT NULL,
    ItemCheckinID INTEGER NOT NULL,
    LocacaoDevolucaoID INTEGER NOT NULL,
    Situacao INTEGER NOT NULL,
    Observacao VARCHAR(255),
    FOREIGN KEY (ItemCheckinID) REFERENCES ItensCheckin(ItemCheckinID),
    FOREIGN KEY (LocacaoDevolucaoID) REFERENCES LocacoesDevolucoes(LocacaoDevolucaoID)
);
-- -----------------------------------------------------
-- Tabela PlanosContas
-- -----------------------------------------------------
CREATE TABLE PlanosContas (
    PlanoContaID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Codigo VARCHAR(20),
    Tipo CHAR(1) NOT NULL,
    Situacao INTEGER NOT NULL
);
-- -----------------------------------------------------
-- Tabela ContasPagar
-- -----------------------------------------------------
CREATE TABLE ContasPagar (
    ContaPagarID SERIAL PRIMARY KEY NOT NULL,
    Valor MONEY NOT NULL,
    DataVencimento DATE NOT NULL,
    Desconto MONEY,
    Juros MONEY,
    DataPagamento DATE,
    ValorPago MONEY,
    Situacao INTEGER NOT NULL,
    FornecedorID INTEGER NOT NULL,
    FuncionarioID INTEGER NOT NULL,
    PlanoContaID INTEGER NOT NULL,
    TipoCobrancaRecebimentoID INTEGER NOT NULL,
    Observacao VARCHAR(255),
    FOREIGN KEY (FornecedorID) REFERENCES Fornecedores(FornecedorID),
    FOREIGN KEY (FuncionarioID) REFERENCES Funcionarios(FuncionarioID),
    FOREIGN KEY (PlanoContaID) REFERENCES PlanosContas(PlanoContaID),
    FOREIGN KEY (TipoCobrancaRecebimentoID) REFERENCES TiposCobrancasRecebimentos(TipoCobrancaRecebimentoID)
);
-- -----------------------------------------------------
-- Tabela Fornecedores
-- -----------------------------------------------------
CREATE TABLE Fornecedores (
    FornecedorID SERIAL PRIMARY KEY NOT NULL,
    NomeFantasia VARCHAR(100) NOT NULL,
    RazaoSocial VARCHAR(100),
    CPF VARCHAR(20),
    InscricaoMunicipal VARCHAR(30),
    InscricaoEstadual VARCHAR(30),
    Rua VARCHAR(100),
    Numero INTEGER,
    Complemento VARCHAR(100),
    Bairro VARCHAR(100),
    CidadeID INTEGER NOT NULL,
    CEP CHAR(10),
    Email VARCHAR(100),
    Telefone VARCHAR(15),
    Fax VARCHAR(15),
    Celular VARCHAR(15),
    TipoFornecedorID INTEGER NOT NULL,
    Situacao INTEGER NOT NULL,
    CNPJ VARCHAR(18),
    RG VARCHAR(20),
    TipoPessoa CHAR(1),
    Observacao INTEGER,
    FOREIGN KEY (CidadeID) REFERENCES Cidades(CidadeID),
    FOREIGN KEY (TipoFornecedorID) REFERENCES TiposFornecedores(TipoFornecedorID)
);
-- -----------------------------------------------------
-- Tabela TiposFornecedores
-- -----------------------------------------------------
CREATE TABLE TiposFornecedores (
    TipoFornecedorID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Situacao INTEGER NOT NULL
);
-- -----------------------------------------------------
-- Tabela Log
-- -----------------------------------------------------
CREATE TABLE Log (
    LogID SERIAL PRIMARY KEY NOT NULL,
    Tabela VARCHAR(50) NOT NULL,
    Chave INTEGER NOT NULL,
    DataHora SERIAL NOT NULL,
    FuncionarioID INTEGER NOT NULL,
    TipoAlteracao INTEGER,
    FOREIGN KEY (FuncionarioID) REFERENCES Funcionarios(FuncionarioID)
);
-- -----------------------------------------------------
-- Tabela Seguros
-- -----------------------------------------------------
CREATE TABLE Seguros (
    SeguroID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Valor MONEY NOT NULL,
    Descricao VARCHAR(255),
    FornecedorID INTEGER NOT NULL,
    Situacao INTEGER NOT NULL,
    FOREIGN KEY (FornecedorID) REFERENCES Fornecedores(FornecedorID)
);
-- -----------------------------------------------------
-- Tabela Grupos
-- -----------------------------------------------------
CREATE TABLE Grupos (
    GrupoID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Observacao VARCHAR(100),
    Situacao INTEGER NOT NULL
);
-- -----------------------------------------------------
-- Tabela Veiculos
-- -----------------------------------------------------
CREATE TABLE Veiculos (
    VeiculoID SERIAL PRIMARY KEY NOT NULL,
    Proprietario VARCHAR(100),
    Renavam VARCHAR(30),
    Placa CHAR(8),
    Chassi VARCHAR(30),
    Marca VARCHAR(50) NOT NULL,
    Modelo VARCHAR(50) NOT NULL,
    Ano INTEGER,
    ValorLocacao MONEY,
    DataAquisicao DATE,
    Cor VARCHAR(50),
    NumeroPortas INTEGER,
    Motor INTEGER,
    Cambio VARCHAR(50),
    Combustivel VARCHAR(50),
    NivelTanque DECIMAL(10,2),
    KmAtual DECIMAL,
    Disponibilidade INTEGER,
    FornecedorID INTEGER NOT NULL,
    GrupoID INTEGER NOT NULL,
    Observacao VARCHAR(100),
    Situacao INTEGER NOT NULL,
    FOREIGN KEY (FornecedorID) REFERENCES Fornecedores(FornecedorID),
    FOREIGN KEY (GrupoID) REFERENCES Grupos(GrupoID)
);
-- -----------------------------------------------------
-- Tabela ItensCheckin
-- -----------------------------------------------------
CREATE TABLE ItensCheckin (
    ItemCheckinID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Situacao INTEGER NOT NULL
);
-- -----------------------------------------------------
-- Tabela TiposAdicionais
-- -----------------------------------------------------
CREATE TABLE TiposAdicionais (
    TipoAdicionalID SERIAL PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Descricao VARCHAR(255),
    Valor MONEY NOT NULL,
    Situacao INTEGER NOT NULL
);

