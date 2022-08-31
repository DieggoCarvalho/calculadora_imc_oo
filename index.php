<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-5">
    <div class="container border border-2 rounded-4 p-4 bg-white mb-5" style="max-width: 600px;">
        <form method="get">
            <h1 class="mb-4 text-center">Calculadora IMC</h1>
            <div class="row">
                <div class="mb-3">
                    <label for="nome" class="form-label fw-bold">Informe seu nome</label>
                    <input type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
                </div>

                <div class="mb-3 col-sm-6">
                    <label for="sexo" class="form-label fw-bold">Sexo</label>
                    <select name="sexo" id="sexo" class="form-select form-select-lg bg-light" required>
                        <option value="">--</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>

                <div class="mb-3 col-sm-6">
                    <label for="idade" class="form-label fw-bold">Idade</label>
                    <input type="text" name="idade" class="form-control form-control-lg bg-light" value="" required>
                </div>

                <div class="mb-3 col-sm-6">
                    <label for="peso" class="form-label fw-bold">Informe seu peso (kg)</label>
                    <input type="text" name="peso" class="form-control form-control-lg bg-light" value="" required>
                </div>

                <div class="mb-3 col-sm-6">
                    <label for="altura" class="form-label fw-bold">Informe sua altura (metro e cm)</label>
                    <input type="text" name="altura" class="form-control form-control-lg bg-light" value="" required>
                </div>
            </div>
            <div class="d-grid mb-4">
                <input type="submit" value="Calcular" class="btn btn-primary btn-lg">
            </div>

            <div class="alert text-center fs-4" role="alert">
                <span class="d-block fw-bold">IMC: ???</span>
                <span>Mensagem</span>
            </div>
        </form>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>