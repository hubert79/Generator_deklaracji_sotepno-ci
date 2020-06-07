

const selectMobileApp = document.getElementById('mobApp');
const addInputsMobileApp = document.getElementById('addMobileAppInput');

	selectMobileApp.addEventListener('change', e => {
		e.target.value == 'Tak' ?
		addInputsMobileApp.classList.remove('mobileApp-is-hidden')	:
		addInputsMobileApp.classList.add('mobileApp-is-hidden')
	});