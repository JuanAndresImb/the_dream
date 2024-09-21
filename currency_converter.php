<?php


$exchange_rates = [
    'USD' => 0.85, 
    'Bitcoin' => 66000, 
    'EUR' => 1 
];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['currency']) && isset($_POST['amount'])) {
        $currency = $_POST['currency'];
        $amount = $_POST['amount'];

        if (is_numeric($amount) && $amount > 0) {
            $rate = $exchange_rates[$currency];
           
            $converted_amount = $amount * $rate;
            echo "Le montant converti en Euros est : " . $converted_amount;
        } else {
            echo "Veuillez entrer un montant valide.";
        }
    } else {
        echo "Formulaire incomplet, veuillez remplir tous les champs.";
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}
?>
