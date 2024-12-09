<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Área de Membros</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="vendor/css/styles.css" rel="stylesheet" />
</head>

<body>
<header class="header-section">
        <div class="container">
            <div class="header-content">
                <a href="." class="mt-2">
                    <img src="vendor/images/elementos/logotipo_fepacoc.png" alt="Logotipo" class="logo">
                </a>
                <nav class="header-nav">
                    <a href="login" class="button access-button">
                        <span class="access-text">Área de Membros</span>
                        <span class="access-icon">Membros
                        </span>
                    </a>
                </nav>
            </div>
        </div>
    </header>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">

                <!-- Coluna da imagem -->
                <div class="column is-4">
                    <figure class="image is-square">
                        <img src="vendor/images/elementos/3411092.jpg" alt="Imagem de exemplo">
                    </figure>
                </div>

                <!-- Coluna do formulário -->
                <div class="column is-8">
                    <div class="box">
                        <h5 class="is-size-4 has-text-centered">Registro Área de Membros</h5><hr>
                        <form action="app/models/save_lead.php" method="POST">

                            <!-- Nome Completo e E-mail na mesma linha -->
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Nome Completo</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="text" name="name" required placeholder="Digite seu nome completo">
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Empresa</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="text" name="empresa" placeholder="Nome da Empresa">
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-building"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Telefone e CEP na mesma linha -->
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">E-mail</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="email" name="email" required placeholder="Digite seu e-mail">
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">WhatsApp</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="text" name="phone" id="phone" placeholder="Digite seu telefone">
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cidade e Estado na mesma linha -->
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">CEP</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="text" name="cep" id="cep" required placeholder="Digite seu CEP" onblur="buscarCEP()">
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-map-marker"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Cidade</label>
                                        <div class="control">
                                            <input class="input" type="text" name="cidade" id="cidade" readonly placeholder="Cidade">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Estado</label>
                                        <div class="control">
                                            <input class="input" type="text" name="estado" id="estado" readonly placeholder="Estado">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Empresa e Faturamento na mesma linha -->
                            <div class="columns">

                                <div class="column">
                                    <div class="field">
                                        <label class="label">Faturamento</label>
                                        <div class="control">
                                            <input class="input" type="text" name="faturamento" id="faturamento" placeholder="Faturamento atual">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Prioridade</label>
                                        <div class="control">
                                            <div class="select is-fullwidth">
                                                <select name="tipo">
                                                    <option value="Tipo1">Aumentar Faturamento</option>
                                                    <option value="Tipo2">Melhorar a Margem de Lucro</option>
                                                    <option value="Tipo3">Organizar Processos</option>
                                                    <option value="Tipo3">Outras</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Necessidade -->
                            <div class="field">
                                <label class="label">Necessidades</label>
                                <small>Quais soluções do Fepacoc despertam mais interesse em você neste momento?</small>
                                <div class="columns">
                                    <div class="column">
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Consultoria de Gestão"> Consultoria de Gestão
                                            </label>
                                        </div>
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Treinamento e Aulas"> Treinamento e Aulas
                                            </label>
                                        </div>
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Financeiro e Ativos"> Financeiro e Ativos
                                            </label>
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Estrutura e Funcionários"> Estrutura e Funcionários
                                            </label>
                                        </div>
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Produtos e Precificação"> Produtos e Precificação
                                            </label>
                                        </div>
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Anúncios e Marketing"> Anúncios e Marketing
                                            </label>
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Clientes e Atendimento"> Clientes e Atendimento
                                            </label>
                                        </div>
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Operacional e Terceirização"> Operacional e Terceirização
                                            </label>
                                        </div>
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" name="necessidade[]" value="Revenda do Fepacoc"> Revenda do Fepacoc
                                            </label>
                                        </div>
                                    </div>

                                </div>



                            </div>

                            <!-- Tipo e Senha na mesma linha -->
                            <div class="columns">
                                <div class="column is-3">

                                </div>

                                <div class="column is-6">
                                    <div class="field">
                                        <label class="label">Senha de Acesso</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="password" name="senha" placeholder="Digite sua senha">
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-3">

                                </div>
                            </div><hr>
                            <div class="columns">
                                
                                <div class="column is-7">

                                </div>
                                <div class="column is-5">
                                    <div class="field">
                                        <div class="control">
                                            <button type="submit" class="button is-primary is-fullwidth is-rounded">
                                                <i class="fa fa-check mr-2"></i>Registrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botão de Registro -->


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

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
        // Função para aplicar máscara de CEP
        document.getElementById('cep').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/\D/g, '').replace(/(\d{5})(\d)/, '$1-$2').slice(0, 9);
        });

        // Função para aplicar máscara de WhatsApp (Celular)
        document.getElementById('phone').addEventListener('input', function(e) {
            e.target.value = e.target.value
                .replace(/\D/g, '')
                .replace(/(\d{2})(\d)/, '($1) $2')
                .replace(/(\d{5})(\d)/, '$1-$2')
                .slice(0, 15);
        });

        // Função para aplicar máscara monetária (Faturamento)
        document.getElementById('faturamento').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            value = (parseFloat(value) / 100).toFixed(2).toString();
            e.target.value = 'R$ ' + value.replace(/\B(?=(\d{3})+(?!\d))/g, '.').replace('.', ',');
        });
    </script>
</body>

</html>