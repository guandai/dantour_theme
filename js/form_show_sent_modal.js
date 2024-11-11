document.addEventListener('DOMContentLoaded', function () {
	const submitBtn = document.querySelector('input.has-spinner[type="submit"]');
	submitBtn.addEventListener('click', function () {
			
			let form = document.querySelector('form[method="post"]');
			const modal = document.getElementById('successModal');

			// Use a MutationObserver to detect changes to the data-status attribute
			const observer = new MutationObserver((mutationsList) => {
					mutationsList.forEach((mutation) => {
							if (mutation.type === 'attributes' && mutation.attributeName === 'data-status') {
									const newStatus = form.getAttribute('data-status');
									
									// Check if the data-status has changed to 'sent'
									if (newStatus === 'sent') {
										console.log(`sent `);
											modal.style.display = 'block';
											window.scrollTo({
													top: 0,
													behavior: 'smooth'
											});

											setTimeout(function () {
													modal.style.display = 'none';
											}, 5000);

											// Disconnect the observer after 'sent' status is detected
											observer.disconnect();
									}
							}
					});
			});

			// Start observing the form element for attribute changes
			observer.observe(form, { attributes: true });

			// Optionally, add form submit handler if needed (without setTimeout)
			form.addEventListener('submit', function (event) {
					event.preventDefault();
					// Additional submit-related logic if required
			});
	});
});
