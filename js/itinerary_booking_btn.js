document.addEventListener('DOMContentLoaded', function () {
	setTimeout(async () => {
			// const btn = document.querySelectorAll('#wp-travel-one-page-checkout-enables button');
			_wp_travel.dashboard_url = 'https://dantourbooking.com/account/';

			const login_in_link = document.querySelectorAll('.ReactModalPortal .ReactModal__Overlay .ReactModal__Content.booknow-btn-modal a');
			login_in_link.href = _wp_travel.dashboard_url;
	}, 0);
});
