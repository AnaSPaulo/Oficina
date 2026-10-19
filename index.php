
<?php
require_once 'Cliente.php';
require_once 'Carro.php';
require_once 'Produto.php';
require_once 'Servico.php';

$cliente = new Cliente(
    "Lucas Henrique",
    "123.456.789-00",
    "12.345.678-9",
    "15/05/2000",
    "(11) 99999-8888",
    "lucas@email.com",
    "Rua das Flores",
    "125",
    "São Paulo",
    "SP",
    "01000-000"
);

$carro = new Carro(
    "Toyota",
    "Corolla",
    2020,
    "Prata",
    "ABC-1234",
    "Flex"
);

$produtos = [
    new Produto("Óleo de motor", "P001", "Mobil", "Lubrificante", "Óleo sintético 5W30", 45.00, 4, "Auto Peças Silva", "6 meses", 10),
    new Produto("Filtro de óleo", "P002", "Bosch", "Filtro", "Filtro para motor", 35.00, 1, "Auto Peças Silva", "3 meses", 5),
    new Produto("Pastilha de freio", "P003", "Cobreq", "Freios", "Jogo de pastilhas dianteiras", 120.00, 1, "Distribuidora Central", "6 meses", 3)
];

$servicos = [
    new Servico("Troca de óleo", "S001", "Substituição do óleo do motor", "Manutenção", 80.00, "30 minutos"),
    new Servico("Revisão dos freios", "S002", "Verificação e manutenção dos freios", "Revisão", 100.00, "1 hora"),
    new Servico("Revisão geral", "S003", "Verificação dos principais componentes", "Manutenção", 150.00, "2 horas")
];

$total = calcularTotal($produtos, $servicos);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Auto Center</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Oficina Auto Center</h1>
        <p>Relatório de atendimento e manutenção</p>
    </header>

    <main>
        <section class="card">
            <h2>Dados do Cliente</h2>
            <p><strong>Nome:</strong> <?= $cliente->nome ?></p>
            <p><strong>CPF:</strong> <?= $cliente->cpf ?></p>
            <p><strong>RG:</strong> <?= $cliente->rg ?></p>
            <p><strong>Data de nascimento:</strong> <?= $cliente->dataNascimento ?></p>
            <p><strong>Telefone:</strong> <?= $cliente->telefone ?></p>
            <p><strong>E-mail:</strong> <?= $cliente->email ?></p>
            <p><strong>Endereço:</strong> <?= $cliente->endereco . ", " . $cliente->numero ?></p>
            <p><strong>Cidade:</strong> <?= $cliente->cidade . " - " . $cliente->estado ?></p>
            <p><strong>CEP:</strong> <?= $cliente->cep ?></p>
        </section>

        <section class="card">
            <h2>Dados do Veículo</h2>
            <p><strong>Marca:</strong> <?= $carro->marca ?></p>
            <p><strong>Modelo:</strong> <?= $carro->modelo ?></p>
            <p><strong>Ano:</strong> <?= $carro->ano ?></p>
            <p><strong>Cor:</strong> <?= $carro->cor ?></p>
            <p><strong>Placa:</strong> <?= $carro->placa ?></p>
            <p><strong>Combustível:</strong> <?= $carro->combustivel ?></p>
        </section>

        <section class="card">
            <h2>Peças Utilizadas</h2>
            <table>
                <thead>
                    <tr>
                        <th>Peça</th>
                        <th>Marca</th>
                        <th>Quantidade</th>
                        <th>Preço unitário</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto->nome ?></td>
                        <td><?= $produto->marca ?></td>
                        <td><?= $produto->quantidade ?></td>
                        <td>R$ <?= number_format($produto->preco, 2, ',', '.') ?></td>
                        <td>R$ <?= number_format($produto->preco * $produto->quantidade, 2, ',', '.') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="card">
            <h2>Serviços Realizados</h2>
            <table>
                <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Duração</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicos as $servico): ?>
                    <tr>
                        <td><?= $servico->nome ?></td>
                        <td><?= $servico->descricao ?></td>
                        <td><?= $servico->categoria ?></td>
                        <td><?= $servico->duracao ?></td>
                        <td>R$ <?= number_format($servico->valor, 2, ',', '.') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="total">
            <h2>Valor Total</h2>
            <p>Peças e serviços</p>
            <h1>R$ <?= number_format($total, 2, ',', '.') ?></h1>
        </section>
    </main>

    <footer>
        <p>Oficina Auto Center - Cuidando do seu veículo!</p>
    </footer>

</body>
</html>
