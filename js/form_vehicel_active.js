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

				document.querySelectorAll('.book-type-tabs').forEach(x => {
					x.classList.remove('show');
					if (b.value === x.dataset.type) {
						x.classList.add('show');
					}
				})
			});
		});
	}
	
	setTimeout(() => {
		// const bigTypeInputs = document.querySelectorAll('#book-big-type label input');
		// setActive(bigTypeInputs);
	
		const bookInputs = document.querySelectorAll('#book-type label input');
		setActive(bookInputs);
		// set fitst input active
		bookInputs[0].click();
	}, 1000);	
});
