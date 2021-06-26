const confirmar = e => {
	if (confirm('¿Estás seguro que quieres eliminar este usuario?')) {
		return true;
	} else {
		e.preventDefault();
	}
};
var links = document.querySelectorAll('.eliminar-producto');
links.forEach(link => {
	link.addEventListener('click', confirmar);
});
