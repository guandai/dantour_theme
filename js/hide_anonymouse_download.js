document.addEventListener('DOMContentLoaded', function() {
	setTimeout(() => {
		// detect wpUserData exist or not,   if  exist remove  #downloads  element
		if (typeof wpUserData !== 'undefined') {
			let downloads = document.getElementById('downloads');
			if (downloads) {
				downloads.remove();
			}
		}
	}, 1000);
});

