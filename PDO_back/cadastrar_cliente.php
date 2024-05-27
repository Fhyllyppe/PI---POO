<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $razao_social = $_POST['razao_social'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $rua = $_POST['rua'];
    $cep = $_POST['cep'];
    $cidade_id = $_POST['cidade_id'];
    $numero_cnh = $_POST['numero_cnh'];
    $numero_registro_cnh = $_POST['numero_registro_cnh'];
    $validade_cnh = $_POST['validade_cnh'];
    $categoria_cnh = $_POST['categoria_cnh'];
    $observacao = $_POST['observacao'];
    $situacao = $_POST['situacao'];
    $cnpj = $_POST['cnpj'];
    $inscricao_municipal = $_POST['inscricao_municipal'];
    $inscricao_estadual = $_POST['inscricao_estadual'];
    $tipo_pessoa = $_POST['tipo_pessoa'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO Clientes (Nome, RazaoSocial, CPF, RG, DataNascimento, Sexo, Email, Telefone, Celular, Rua, CEP, CidadeID, NumeroCNH, NumeroRegistroCNH, ValidadeCNH, CategoriaCNH, Observacao, Situacao, CNPJ, InscricaoMunicipal, InscricaoEstadual, TipoPessoa, Senha) 
            VALUES ('$nome', '$razao_social', '$cpf', '$rg', '$data_nascimento', '$sexo', '$email', '$telefone', '$celular', '$rua', '$cep', '$cidade_id', '$numero_cnh', '$numero_registro_cnh', '$validade_cnh', '$categoria_cnh', '$observacao', '$situacao', '$cnpj', '$inscricao_municipal', '$inscricao_estadual', '$tipo_pessoa', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo cliente cadastrado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
