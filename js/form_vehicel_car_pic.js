document.addEventListener('DOMContentLoaded', function () {
	setTimeout(() => {
		const car_type = document.querySelector('#car_type');
		if (!car_type) {
			return false;
		}

		const car_map = {
			"VIP轿车": "https://dantourbooking.com/wp-content/uploads/2024/10/BMW-5series.png",
			"商务9座": "https://dantourbooking.com/wp-content/uploads/2024/11/New-Project.png",
		  "小型巴士": "https://dantourbooking.com/wp-content/uploads/2024/09/sprinter-2016.png",
		  "大型巴士": "https://dantourbooking.com/wp-content/uploads/2024/09/duesseldorf-vip-bus-freigestellt-1536x792-1.png",
		};
		car_type.childNodes.forEach((node) => {
			node.classList.add('car-type-box');
			const type = node.querySelector('input[name=car_type]');
			const img_src = car_map[type.value];
			const img = document.createElement('img');
			img.src = img_src;
			img.className = 'car-type-img';
			node.insertBefore(img, node.firstChild);
		});
	}, 1000);	
});
