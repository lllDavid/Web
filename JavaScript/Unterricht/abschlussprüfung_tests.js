// aufgabe.js
document.addEventListener('DOMContentLoaded', function() {
    // Bestehende Funktionalität: Text ändern
    let aenderButton = document.getElementById('aenderButton');
    aenderButton.addEventListener('click', function() {
        let textElement = document.getElementById('text');
        textElement.textContent = 'Der Text wurde geändert!';
    });

    let neuerButton = document.getElementById('neuerButton');
    neuerButton.addEventListener("click", function(){
        let neuerText = document.createElement("p")
        neuerText.textContent = "Neuer Text"
        document.body.append(neuerText)
    })
});
