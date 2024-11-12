document.addEventListener('DOMContentLoaded', function () {
	function setActive(inputs) {
		inputs.forEach(b => {
			b.addEventListener('click', () => {
				inputs.forEach(x => {
					x.parentElement.classList.remove('active');
					x.classList.remove('active');
				});
				b.parentElement.classList.add('active');
				b.classList.add('active');
			});
		});
	}
	
	setTimeout(() => {
		// const bigTypeInputs = document.querySelectorAll('#book-big-type label input');
		// setActive(bigTypeInputs);
	
		const bookInputs = document.querySelectorAll('#book-type label input');
		setActive(bookInputs);
	}, 1000);	
});
