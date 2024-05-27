document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
var formData = new FormData(this);
fetch('cadastrar_cliente.php', {
    method: 'POST',
    body: formData
}).then(response => response.text())
  .then(data => console.log(data));
});