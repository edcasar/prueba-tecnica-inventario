const confirmar = e => {
	if (confirm('Se eliminará el producto ¿Estás seguro?')) {
		return true;
	} else {
		e.preventDefault();
	}
};
var links = document.querySelectorAll('.eliminar-producto');
links.forEach(link => {
	link.addEventListener('click', confirmar);
});
