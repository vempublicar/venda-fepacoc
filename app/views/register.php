<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro no Asaas</title>
</head>
<body>
    <h1>Registro no Asaas</h1>
    <form action="app/models/save_lead.php" method="POST">
        <label>Nome Completo:</label>
        <input type="text" name="name" required>
        
        <label>E-mail:</label>
        <input type="email" name="email" required>
        
        <label>Telefone:</label>
        <input type="text" name="phone">

        <label>CEP:</label>
        <input type="text" name="cep" id="cep" required onblur="buscarCEP()">
        
        <label>Cidade:</label>
        <input type="text" name="cidade" id="cidade" readonly>
        
        <label>Estado:</label>
        <input type="text" name="estado" id="estado" readonly>
        
        <!-- Campos adicionais -->
        <label>Empresa:</label>
        <input type="text" name="empresa">

        <label>Faturamento:</label>
        <input type="number" name="faturamento" step="0.01">

        <label>Necessidade:</label>
        <textarea name="necessidade"></textarea>

        <label>Tipo:</label>
        <select name="tipo">
            <option value="Tipo1">Tipo 1</option>
            <option value="Tipo2">Tipo 2</option>
            <option value="Tipo3">Tipo 3</option>
        </select>

        <label>Senha:</label>
        <input type="text" name="senha">

        <button type="submit">Registrar</button>
    </form>

    <script>
        function buscarCEP() {
            const cep = document.getElementById('cep').value.replace(/\D/g, '');
            if (cep.length === 8) {
                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(response => response.json())
                    .then(data => {
                        if (!data.erro) {
                            document.getElementById('cidade').value = data.localidade;
                            document.getElementById('estado').value = data.uf;
                        } else {
                            alert("CEP não encontrado.");
                        }
                    })
                    .catch(error => {
                        console.error('Erro ao consultar o CEP:', error);
                        alert("Erro ao consultar o CEP.");
                    });
            } else {
                alert("CEP inválido.");
            }
        }
    </script>
</body>
</html>
