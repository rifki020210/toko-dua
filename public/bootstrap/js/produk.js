// JavaScript
document.getElementById("selectAll").addEventListener("change", function() {
    var checkboxes = document.querySelectorAll('.deleteCheckbox');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = document.getElementById("selectAll").checked;
    });
});