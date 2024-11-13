document.addEventListener('DOMContentLoaded', function() {
	setTimeout(() => {
		let downloads = document.getElementById('downloads');
		if ( window.wpUserData === undefined ) {
			// add a button  at center for login to /login page
			let loginBtn = document.createElement('button');
			let loginDiv = document.createElement('div');
			loginDiv.className = "btn-center-login login-div";
			loginBtn.innerText = "登录";
			loginBtn.style.position = "absolute";

			loginBtn.addEventListener('click', () => {
				location.href = "/login";
			});
			loginDiv.appendChild(loginBtn);
			const sliderTab = document.querySelector('#slider-tab');
			sliderTab.insertAdjacentElement('afterend', loginDiv);
			downloads.remove();
		}
	}, 1000);
});
