<?php
$risultato = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = (float) $_POST["primo_numero"];
    $num2 = (float) $_POST["secondo_numero"];
    $operazione = $_POST["operazione"];

    if ($operazione == "somma") {
        include "funzioni/somma.php";
        $risultato = somma($num1, $num2);
    } elseif ($operazione == "sottrazione") {
        include "funzioni/sottrazione.php";
        $risultato = sottrazione($num1, $num2);
    } elseif ($operazione == "divisione") {
        include "funzioni/divisione.php";
        $risultato = divisione($num1, $num2);
    } elseif ($operazione == "moltiplicazione") {
        include "funzioni/moltiplicazione.php";
        $risultato = moltiplicazione($num1, $num2);
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calcolatrice PHP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>Calcolatrice PHP</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="primo_numero" class="form-label">Numero 1:</label>
                                <input type="number" class="form-control" id="primo_numero" name="primo_numero" step="any" required>
                            </div>
                            <div class="mb-3">
                                <label for="operazione" class="form-label">Operazione:</label>
                                <select class="form-select" id="operazione" name="operazione">
                                    <option value="somma">Somma (+)</option>
                                    <option value="sottrazione">Sottrazione (−)</option>
                                    <option value="moltiplicazione">Moltiplicazione (×)</option>
                                    <option value="divisione">Divisione (÷)</option>
                                    <div class="mb-3">
                                        <label for="secondo_numero" class="form-label">Numero 2:</label>
                                        <input type="number" class="form-control" id="secondo_numero" name="secondo_numero" step="any" required>
                                    </div>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Calcola</button>
                            </div>
                        </form>
                        <?php if ($risultato !== ""): ?>
                            <div class="alert alert-success mt-4 text-center" role="alert">
                                <h4 class="mb-0">Risultato: <?= $risultato ?></h4>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
