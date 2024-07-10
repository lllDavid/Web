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
        let newP = document.createElement("p")
        newP.textContent = "Neuer Text in neuem P Tag"
        document.body.append(newP)
    })
});
