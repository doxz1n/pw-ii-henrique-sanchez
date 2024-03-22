<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section>
    <div class="container">
        <form action="dadoscliente.php" method="post">
            <h1>Formulário de Cadastro</h1>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="estado_civil" class="form-label">Estado Civil</label>
                <select name="estado_civil" id="estado_civil" class="form-select" required>
                    <option value="">Selecione</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Viuvo">Viúvo(a)</option>
                    <option value="Separado">Separado(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Uniao Estável">União Estável</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Gênero</label>

                <div class="form-check">
                    <input type="radio" name="genero" id="masculino" value="Masculino" class="form-check-input"
                           required>
                    <label for="masculino" class="form-check-label">Masculino</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="genero" id="feminino" value="Feminino" class="form-check-input" required>
                    <label for="feminino" class="form-check-label">Feminino</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="genero" id="outros" value="Outros" class="form-check-input" required>
                    <label for="outros" class="form-check-label">Outros</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select name="estado" id="estado" class="form-select" required>
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcBA8rxdbK2QJEG91pXvWvR/k49LJy3itf9DZTdaYR+3S7gN5q9BBu" crossorigin="anonymous"></script>
</body>
</html>