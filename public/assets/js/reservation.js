console.log('reservation');

let Frais = document.getElementById('Frais');
let Frais1 = document.getElementById('Frais1');
let Travel_Type = document.getElementById('Travel_Type')
let Amount = document.getElementById('Amount')

let N_Seat = document.getElementById('N_Seat')
let N_Seat1 = document.getElementById('N_Seat1')

N_Seat1.onchange = () => {
    N_Seat.innerHTML = N_Seat1.value
}


Travel_Type.onchange = () => {

    if (Travel_Type.value == 1) {
        Frais.innerHTML = 0 + 'Dh'
        // Amount.innerHTML = parseInt(Frais.innerHTML) + Number(document.getElementById('prix').value) + 'Dh'
        document.getElementById('Type_v').innerHTML = 'comfort'
    }
    else if (Travel_Type.value == 2) {
        Frais.innerHTML = 50 + 'Dh'
        Frais1.value = parseInt(Frais.innerHTML)
        // Amount.innerHTML = parseFloat(Frais.innerHTML) + Number(document.getElementById('prix').value) + 'Dh'
        // console.log(Travel_Type.value)
        document.getElementById('prix').value = parseFloat(Amount.innerHTML);
        document.getElementById('Type_v').innerHTML = 'premium'
    }
    Amount.innerHTML = parseFloat(Frais.innerHTML) + Number(document.getElementById('prix').value) + 'Dh'

}

let date_depart = document.getElementById('date_depart').value;
let date_arrivee = document.getElementById('date_arrivee').value;
let heure_depart = document.getElementById('heure_depart').value;
let heure_arrivee = document.getElementById('heure_arrivee').value;


document.getElementById('date_depart1').innerHTML = new Date(date_depart).toDateString() + ' At ' + heure_depart
document.getElementById('date_arrivee1').innerHTML = new Date(date_arrivee).toDateString() + ' At ' + heure_arrivee

console.log(heure_depart)