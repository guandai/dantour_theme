document.addEventListener('DOMContentLoaded', function() {
	setTimeout(() => {
		// detect wpUserData exist or not,   if  exist remove  #downloads  element
		let downloads = document.getElementById('downloads');
		let travelMap = document.querySelector('.wp-travel-map');

		if ( window.wpUserData === undefined ) {
			downloads.remove();
		} else {	
			// add a button  at center for login to /login page
			let loginBtn = document.createElement('button');
			loginBtn.innerText = "登录";
			loginBtn.style.position = "absolute";
			loginBtn.class="btn btn-center-login";

			loginBtn.addEventListener('click', () => {
				location.href = "/login";
			});
			
			travelMap.parentNode.insertBefore(loginBtn, travelMap);
		}
	}, 1000);
});

