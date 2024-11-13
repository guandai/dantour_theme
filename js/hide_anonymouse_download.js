document.addEventListener('DOMContentLoaded', function() {
	setTimeout(() => {
		// detect wpUserData exist or not,   if  exist remove  #downloads  element
		let downloads = document.getElementById('downloads');
		if ( window.wpUserData === undefined ) {
			downloads.childNodes.forEach(x => x.remove())
		} else {	
			// add a button  at center for login to /login page
			let loginBtn = document.createElement('button');
			loginBtn.innerText = "登录";
			loginBtn.style.position = "absolute";
			loginBtn.class="btn btn-center-login";

			loginBtn.addEventListener('click', () => {
				location.href = "/login";
			});

			downloads.appendChild(loginBtn);
		}
	}, 1000);
});

