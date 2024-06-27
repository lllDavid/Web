document.getElementById("actionButton").addEventListener("click", function () {
    showTable();
});

function showTable() {
    let liste = []
    var table = document.getElementById("dataTable");
    let output = document.getElementById("output")
    for (var i = 0, row; row = table.rows[i]; i++) {
        for (var j = 0, col; col = row.cells[j]; j++) {
            liste.push(col.innerHTML + "<br>")
             }
    }
    output.innerHTML = liste
}
