function toggleSubmenu(menuId) {
    const submenu = document.getElementById(menuId);
    submenu.style.display = submenu.style.display === 'none' || submenu.style.display === '' ? 'block' : 'none';
}

function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'block';
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target.className === 'modal') {
        event.target.style.display = 'none';
    }
};
