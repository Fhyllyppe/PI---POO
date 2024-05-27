let selectedItemID = null;

        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('click', () => {
                selectedItemID = row.getAttribute('data-id');
                // Adiciona uma classe para destacar a linha selecionada
                document.querySelectorAll('tr').forEach(r => r.classList.remove('selected'));
                row.classList.add('selected');
            });
        });

        function confirmDelete() {
            if (selectedItemID) {
                var modal = document.getElementById("deleteModal");
                modal.style.display = "block";
            } else {
                alert("Selecione um item para excluir.");
            }
        }

        function closeModal() {
            var modal = document.getElementById("deleteModal");
            modal.style.display = "none";
        }

        async function deleteItem() {
            if (!selectedItemID) {
                alert("Nenhum item selecionado para excluir.");
                closeModal();
                return;
            }

            try {
                const response = await fetch(`https://seuservidor/api/deleteItem`, {
                    method: 'POST', // ou 'DELETE', dependendo do seu backend
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ id: selectedItemID })
                });

                if (response.ok) {
                    alert("Item excluído com sucesso!");
                    // Remover a linha da tabela
                    document.querySelector(`tr[data-id='${selectedItemID}']`).remove();
                } else {
                    alert("Erro ao excluir o item.");
                }
            } catch (error) {
                console.error('Erro:', error);
                alert("Erro ao excluir o item.");
            }

            closeModal();
        }

        window.onclick = function(event) {
            var modal = document.getElementById("deleteModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }