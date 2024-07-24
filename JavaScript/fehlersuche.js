document.getElementById('neuer-fisch-formular').addEventListener('submit', function (event) {
    event.preventDefault();

    const fischName = document.getElementById('fisch-name').value;
    const gewaesser = document.getElementById('gewaesser').value;
    const fangzeit = document.getElementById('fangzeit').value;

    const tabelle = document.getElementById('fisch').getElementsByTagName('tbody')[0];
    const neueReihe = tabelle.insertRow();

    const zellen = [fischName, gewaesser, fangzeit].map(text => {
        const zelle = neueReihe.insertCell();
        zelle.textContent = text;
        return zelle;
    });

    const aktionsZelle = neueReihe.insertCell();
    const loeschButton = document.createElement('button');
    loeschButton.classList.add('loesch-button');
    loeschButton.innerHTML = '&#x2716;';
    loeschButton.setAttribute('onclick', 'reiheEntfernen(this)');
    aktionsZelle.appendChild(loeschButton);

    document.getElementById('neuer-fisch-formular').reset();
});

function reiheEntfernen(button) {
    const reihe = button.parentNode.parentNode;
    reihe.parentNode.removeChild(reihe);
}
