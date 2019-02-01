function display_menu(side) {
	const main_body = document.getElementById('content');
	if (side === 'left') {
		if (main_body.classList.contains('show_left_menu')) {
			// alert('yes');
			main_body.classList.remove('show_left_menu');
		} else {
			// alert('no');
			main_body.classList.add('show_left_menu');
		}

		if (main_body.classList.contains('show_right_menu')) {
			main_body.classList.remove('show_right_menu');
		}
	}
	if (side === 'right') {
		if (main_body.classList.contains('show_right_menu')) {
			// alert('yes');
			main_body.classList.remove('show_right_menu');
		} else {
			// alert('no');
			main_body.classList.add('show_right_menu');
		}
		if (main_body.classList.contains('show_left_menu')) {
			main_body.classList.remove('show_left_menu');
		}
	}
}

function video_overlay() {
	const overlay = document.getElementById('video_overlay');
	if (overlay.classList.contains('display')) {
		overlay.classList.remove('display');
	} else {
		overlay.classList.add('display');
	}
}

// function menuCheck() {
// 	var eventNav = document.getElementById('main_body');
// 	if (eventNav.classList.contains('show_left_menu')) {
// 		eventNav.classList.remove('show_left_menu');
// 	}
// 	if (eventNav.classList.contains('show_right_menu')) {
// 		eventNav.classList.remove('show_right_menu');
// 	}
// }

function menuCheck() {
	var eventNav = document.getElementById('content');
	if (eventNav.classList.contains('show_left_menu')) {
		eventNav.classList.remove('show_left_menu');
	}
	if (eventNav.classList.contains('show_right_menu')) {
		eventNav.classList.remove('show_right_menu');
	}
}

window.addEventListener(
	'DOMContentLoaded',
	function(e) {
		var stage1 = document.getElementById('slideshow1');
		if (stage1 !== null) {
			var fadeComplete = function(e) {
				stage1.appendChild(arr1[0]);
			};
			var arr1 = stage1.getElementsByTagName('li');
			for (var i = 0; i < arr1.length; i++) {
				arr1[i].addEventListener(
					'animationend',
					fadeComplete,
					false
				);
			}
			var stage2 = document.getElementById('slideshow2');
			var fadeComplete = function(e) {
				stage2.appendChild(arr2[0]);
			};
			var arr2 = stage2.getElementsByTagName('li');
			for (var i = 0; i < arr2.length; i++) {
				arr2[i].addEventListener(
					'animationend',
					fadeComplete,
					false
				);
			}
			var stage3 = document.getElementById('slideshow3');
			var fadeComplete = function(e) {
				stage3.appendChild(arr3[0]);
			};
			var arr3 = stage3.getElementsByTagName('li');
			for (var i = 0; i < arr3.length; i++) {
				arr3[i].addEventListener(
					'animationend',
					fadeComplete,
					false
				);
			}
		}
	},
	false
);

function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function isURL(str) {
	var pattern = new RegExp(
		'^(https?:\\/\\/)?' + // protocol
		'((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|' + // domain name
		'((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
		'(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
		'(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
			'(\\#[-a-z\\d_]*)?$',
		'i'
	); // fragment locator
	return pattern.test(str);
}

/* Adds Element AFTER NeighborElement */
(Element.prototype.appendAfter = function(element) {
	element.parentNode.insertBefore(this, element.nextSibling);
}),
	false;

function resetErrorMessage(name) {
	var element = document.getElementById(name + '-error');
	if (element) {
		element.parentNode.removeChild(element);
	}
}

function displayErrorMessage(NewError, name) {
	NewError.className = 'error-message';
	NewError.id = name + '-error';
	NewError.appendAfter(document.getElementById(name));
}

function checkInput(e) {
	const { name, value } = e;
	switch (name) {
		case 'name':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					'Sorry "Your Name" field cannot be left blank';
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'company':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					'Sorry the "Company" field cannot be left blank';
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'email':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					'We need your email to contact you.. <br> Sorry the "Email" field cannot be blank';
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
				if (!validateEmail(value)) {
					console.log(value);
					console.log('Email isn"t valid');

					var NewError = document.createElement('div');
					NewError.innerHTML =
						"Please double check your email.. <br> it doesn't seem to be a valid email address";
					displayErrorMessage(NewError, name);
				} else {
					resetErrorMessage(name);
				}
				break;
			}
		case 'phone':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					'We need your number to contact you.. <br> Sorry the "Phone Number" field cannot be blank';
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'desire':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					"We are only valuable to you if we solve the problem you define here.. <br>Even if it's just a quick sentence.. The description is required.. <br> ";
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'objective':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					"We are only valuable to you if we both know how you define success.. <br> This description is required.. <br> Even if it's just a sentence";
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'url':
			resetErrorMessage(name);
			if (!isURL(value)) {
				console.log(value);
				console.log('Email isn"t valid');

				var NewError = document.createElement('div');
				NewError.innerHTML =
					"Please double check your URL.. <br> it doesn't seem to be incorrect";
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
	}

	// if (value.length < 1) {
	// 	console.log('error');
	// 	var NewError = document.createElement('div');
	// 	NewError.innerHTML = 'The ' + name + ' field is required';
	// 	NewError.id = 'error-message';

	// 	NewError.appendAfter(document.getElementById(name));
	// }

	/* Typical Creation and Setup A New Orphaned Element Object */
}
