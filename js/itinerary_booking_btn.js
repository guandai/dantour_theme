document.addEventListener('DOMContentLoaded', function () {
	setTimeout(async () => {
			// const btn = document.querySelectorAll('#wp-travel-one-page-checkout-enables button');
			_wp_travel.dashboard_url = 'https://dantourbooking.com/login/';

			const login_in_link = document.querySelector('.ReactModalPortal .ReactModal__Overlay .ReactModal__Content.booknow-btn-modal a');
			if (window.login_in_link== undefined
			) {
				return
			}
			login_in_link.href =  `${_wp_travel.dashboard_url}?redirect_to=${window.location.href}`;
	}, 0);
});
