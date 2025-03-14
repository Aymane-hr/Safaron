<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Billet de Voyage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background: #f5f5f5;
        }
        .ticket-container {
            width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 2px solid #da0000;
        }
        .header h2 {
            color: #da0000;
            margin: 0;
        }
        .ticket-info {
            margin-top: 20px;
        }
        .info-item {
            margin: 8px 0;
            font-size: 16px;
        }
        .info-item strong {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="ticket-container">
        <div class="header">
            <h2>Billet de Voyage</h2>
        </div>

        <div class="ticket-info">
            <p class="info-item"><strong>Nom :</strong> {{ auth()->user()->name }}</p>
            <p class="info-item"><strong>ID du billet :</strong> {{ $reservation->id }}</p>
            <p class="info-item"><strong>Départ :</strong> {{ $reservation->villeDepart->ville }}</p>
            <p class="info-item"><strong>Arrivée :</strong> {{ $reservation->villeArrivee->ville }}</p>
            <p class="info-item"><strong>Date et heure :</strong> {{ $reservation->date_depart }} à {{ $reservation->heure_depart }}</p>
            <p class="info-item"><strong>Siège :</strong> {{ $reservation->num_siege }}</p>
            <p class="info-item"><strong>Prix :</strong> {{ $reservation->prix }} DH</p>
            <p class="info-item"><strong>Mode de paiement :</strong> {{ $reservation->modeReglement->mode_reglement }}</p>
        </div>

        <div class="footer">
            Merci d'avoir réservé avec nous. Bon voyage !
        </div>
    </div>

</body>
</html>
