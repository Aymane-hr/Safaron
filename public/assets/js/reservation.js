(function () {
    const prixInput = document.getElementById('prix');
    if (!prixInput) {
        return;
    }

    const Frais = document.getElementById('Frais');
    const Travel_Type = document.getElementById('Travel_Type');
    const Amount = document.getElementById('Amount');
    const N_Seat = document.getElementById('N_Seat');
    const N_Seat1 = document.getElementById('N_Seat1');

    const basePrice = parseFloat(prixInput.value) || 0;

    if (N_Seat1 && N_Seat) {
        N_Seat1.onchange = () => {
            N_Seat.innerHTML = N_Seat1.value;
        };
    }

    if (Travel_Type) {
        Travel_Type.onchange = () => {
            let fraisValue = 0;

            if (Travel_Type.value == "1") {
                fraisValue = 50;
                document.getElementById('Type_v').innerHTML = 'Comfort';
            }
            else if (Travel_Type.value == "2") {
                fraisValue = 100;
                document.getElementById('Type_v').innerHTML = 'Premium';
            }

            Frais.innerHTML = fraisValue + 'Dh';

            const totalAmount = basePrice + fraisValue;

            Amount.innerHTML = totalAmount + 'Dh';
            prixInput.value = totalAmount;
        };
    }

    const date_depart = document.getElementById('date_depart');
    const date_arrivee = document.getElementById('date_arrivee');
    const heure_depart = document.getElementById('heure_depart');
    const heure_arrivee = document.getElementById('heure_arrivee');
    const date_depart1 = document.getElementById('date_depart1');
    const date_arrivee1 = document.getElementById('date_arrivee1');

    if (date_depart && date_arrivee && heure_depart && heure_arrivee && date_depart1 && date_arrivee1) {
        date_depart1.innerHTML =
            new Date(date_depart.value).toDateString() + ' At ' + heure_depart.value;

        date_arrivee1.innerHTML =
            new Date(date_arrivee.value).toDateString() + ' At ' + heure_arrivee.value;
    }
})();
