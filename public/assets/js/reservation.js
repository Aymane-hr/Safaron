let Frais = document.getElementById('Frais')
let Travel_Type = document.getElementById('Travel_Type')
let Amount = document.getElementById('Amount')
let prixInput = document.getElementById('prix')

let N_Seat = document.getElementById('N_Seat');
let N_Seat1 = document.getElementById('N_Seat1');

let basePrice = parseFloat(prixInput.value) || 0

N_Seat1.onchange = () => {
    N_Seat.innerHTML = N_Seat1.value;
};

Travel_Type.onchange = () => {
    let fraisValue = 0;

    if (Travel_Type.value == "1") {
        fraisValue = 50;
        document.getElementById('Type_v').innerHTML = 'Comfort';
    } 
    else if (Travel_Type.value == "2") {
        fraisValue = 100
        document.getElementById('Type_v').innerHTML = 'Premium';
    }

    Frais.innerHTML = fraisValue + 'Dh';

    let totalAmount = basePrice + fraisValue

    Amount.innerHTML = totalAmount + 'Dh'
    prixInput.value = totalAmount
};

let date_depart = document.getElementById('date_depart')
let date_arrivee = document.getElementById('date_arrivee')
let heure_depart = document.getElementById('heure_depart')
let heure_arrivee = document.getElementById('heure_arrivee')

document.getElementById('date_depart1').innerHTML =
    new Date(date_depart.value).toDateString() + ' At ' + heure_depart.value;

document.getElementById('date_arrivee1').innerHTML =
    new Date(date_arrivee.value).toDateString() + ' At ' + heure_arrivee.value;
