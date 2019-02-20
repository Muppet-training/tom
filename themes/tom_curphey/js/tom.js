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
			if (stage2 !== null) {
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
			}
			var stage3 = document.getElementById('slideshow3');
			if (stage3 !== null) {
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
		}
	},
	false
);
function display_menu(side) {
	var main_body = document.querySelector('#content');
	console.log(main_body);
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

function getParent(event) {
	var main_body = this.parentNode.parentNode.parentNode.parentNode
		.parentNode;
	main_body.display_menu('right');
	// main_body.classList.add("show_right_menu");
	console.log(main_body);
}

function video_overlay() {
	const overlay = document.getElementById('video_overlay');
	if (overlay.classList.contains('display')) {
		overlay.classList.remove('display');
	} else {
		overlay.classList.add('display');
	}
}

function contact_overlay() {
	const overlay = document.getElementById('contact_overlay');
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

window.smoothAboutScroll = function(target) {
	var elem = document.querySelector('#my-story');
	elem.style.display = 'block';

	var scrollContainer = target;
	do {
		//find scroll container
		scrollContainer = scrollContainer.parentNode;
		if (!scrollContainer) return;
		scrollContainer.scrollTop += 1;
	} while (scrollContainer.scrollTop == 0);

	var targetY = 0;
	do {
		//find the top of target relatively to the container
		if (target == scrollContainer) break;
		targetY += target.offsetTop;
	} while ((target = target.offsetParent));

	scroll = function(c, a, b, i) {
		i++;
		if (i > 30) return;
		c.scrollTop = a + (b - a) / 30 * i;
		setTimeout(function() {
			scroll(c, a, b, i);
		}, 20);
	};
	// start scrolling
	scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
};

window.smoothContactScroll = function(target) {
	const overlay = document.getElementById('contact_overlay');
	if (overlay.classList.contains('display')) {
		overlay.classList.remove('display');
	} else {
		overlay.classList.add('display');
	}

	var elem = document.getElementById('footer-title');
	elem.innerHTML = 'Chat with Tom today!';

	var scrollContainer = target;
	do {
		//find scroll container
		scrollContainer = scrollContainer.parentNode;
		if (!scrollContainer) return;
		scrollContainer.scrollTop += 1;
	} while (scrollContainer.scrollTop == 0);

	var targetY = 0;
	do {
		//find the top of target relatively to the container
		if (target == scrollContainer) break;
		targetY += target.offsetTop;
	} while ((target = target.offsetParent));

	scroll = function(c, a, b, i) {
		i++;
		if (i > 30) return;
		c.scrollTop = a + (b - a) / 30 * i;
		setTimeout(function() {
			scroll(c, a, b, i);
		}, 20);
	};
	// start scrolling
	scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);

	style_vote('speak');
};

window.smoothMeetingScroll = function(target) {
	var elem = document.getElementById('footer-title');
	elem.innerHTML = 'Organise a meeting today!';

	var scrollContainer = target;
	do {
		//find scroll container
		scrollContainer = scrollContainer.parentNode;
		if (!scrollContainer) return;
		scrollContainer.scrollTop += 1;
	} while (scrollContainer.scrollTop == 0);

	var targetY = 0;
	do {
		//find the top of target relatively to the container
		if (target == scrollContainer) break;
		targetY += target.offsetTop;
	} while ((target = target.offsetParent));

	scroll = function(c, a, b, i) {
		i++;
		if (i > 30) return;
		c.scrollTop = a + (b - a) / 30 * i;
		setTimeout(function() {
			scroll(c, a, b, i);
		}, 20);
	};
	// start scrolling
	scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
};

window.smoothServiceScroll = function(target, type) {
	// alert(type);
	// document.getElementById('form_dev').setAttribute('checked', '');
	switch (type) {
		case 'dev':
			document.getElementById('footer-title').innerHTML =
				'<i class="fas fa-check"></i> First step to getting your website built';
			document.getElementById('form_dev').checked = true;
			break;
		case 'funnel':
			document.getElementById('footer-title').innerHTML =
				'Improve your Sales funnel today! <i class="fas fa-filter"></i>';
			document.getElementById('form_funnel').checked = true;
			break;
		case 'brand':
			document.getElementById('footer-title').innerHTML =
				"Let's form your brand identity together";
			document.getElementById('form_brand').checked = true;
			break;
		case 'project':
			document.getElementById('footer-title').innerHTML =
				'Communications is key in Project Management,<br/>so let\'s get talking <i class="far fa-comments"></i>';
			document.getElementById('form_project').checked = true;
			break;
		case 'content':
			document.getElementById('footer-title').innerHTML =
				'The more specific you are the better<br/>content I can produce for you <i class="far fa-smile"></i>';
			document.getElementById('form_content').checked = true;
			break;
		case 'ads':
			document.getElementById('footer-title').innerHTML =
				'Ads are fantastic when they are displayed contextually';
			document.getElementById('form_ads').checked = true;
			break;
		case 'model':
			document.getElementById('footer-title').innerHTML =
				'I love business models & look forward to help you create yours';
			document.getElementById('form_model').checked = true;
			break;
		case 'print':
			document.getElementById('footer-title').innerHTML =
				'Need your print designs completed quickly?<br/>Call me after you email this form <i class="far fa-thumbs-up"></i>';
			document.getElementById('form_print').checked = true;
			break;
	}

	var scrollContainer = target;
	do {
		//find scroll container
		scrollContainer = scrollContainer.parentNode;
		if (!scrollContainer) return;
		scrollContainer.scrollTop += 1;
	} while (scrollContainer.scrollTop == 0);

	var targetY = 0;
	do {
		//find the top of target relatively to the container
		if (target == scrollContainer) break;
		targetY += target.offsetTop;
	} while ((target = target.offsetParent));

	scroll = function(c, a, b, i) {
		i++;
		if (i > 30) return;
		c.scrollTop = a + (b - a) / 30 * i;
		setTimeout(function() {
			scroll(c, a, b, i);
		}, 20);
	};
	// start scrolling
	scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
};

// function checkURL() {
// 	//
// }

document.addEventListener(
	'DOMContentLoaded',
	function() {
		if (window.location.href.indexOf('my-story') > -1) {
			var elem = document.querySelector('#my-story');
			elem.style.display = 'block';
		}
	},
	false
);

function style_vote(vote) {
	var speak_votes = parseFloat(
		document.getElementById('speak_votes').innerHTML
	);
	var video_votes = parseFloat(
		document.getElementById('video_votes').innerHTML
	);
	var read_votes = parseFloat(
		document.getElementById('read_votes').innerHTML
	);
	var meet_votes = parseFloat(
		document.getElementById('meet_votes').innerHTML
	);
	var resume_votes = parseFloat(
		document.getElementById('resume_votes').innerHTML
	);
	var overview_votes = parseFloat(
		document.getElementById('overview_votes').innerHTML
	);

	console.log('Speak_votes: ', speak_votes);

	switch (vote) {
		case 'speak':
			speak_votes = speak_votes + 1;
		case 'video':
			video_votes = video_votes + 1;
		case 'read':
			read_votes = read_votes + 1;
		case 'meet':
			meet_votes = meet_votes + 1;
		case 'resume':
			meet_votes = meet_votes + 1;
		case 'overview':
			overview_votes = overview_votes + 1;
	}
	console.log('overview_votes: ', overview_votes);

	var current = 0;
	var total_votes =
		speak_votes +
		video_votes +
		read_votes +
		meet_votes +
		resume_votes +
		overview_votes;

	var s = speak_votes * 100 / total_votes;
	var v = video_votes * 100 / total_votes;
	var r = read_votes * 100 / total_votes;
	var m = meet_votes * 100 / total_votes;
	var c = resume_votes * 100 / total_votes;
	var o = overview_votes * 100 / total_votes;

	// document.getElementById('speak').innerHTML = s.toFixed(2);
	// document.getElementById('video').innerHTML = v.toFixed(2);
	// document.getElementById('read').innerHTML = r.toFixed(2);
	// document.getElementById('meet').innerHTML = m.toFixed(2);
	// document.getElementById('resume').innerHTML = c.toFixed(2);
	// document.getElementById('overview').innerHTML = o.toFixed(2);

	var ourRequest = new XMLHttpRequest();

	ourRequest.open(
		'POST',
		'http://localhost:8888/tom/wp-json/wp/v2/posts'
		// 'http://localhost:8888/tom/wp-json/votes/v1/all'
		// 'http://localhost:8888/tom/wp-json/votes/v1/update/6'
	);
	ourRequest.onload = function() {
		if (ourRequest.status >= 200 && ourRequest.status < 400) {
			console.log(ourRequest.responseText);
			var data = JSON.parse(ourRequest.responseText);
			console.log('Data: ', data);
		} else {
			console.log(
				'We Connected to the server, but there was an error'
			);
		}
	};
	ourRequest.setRequestHeader(
		'Content-type',
		'application/json',
		'charset=UTF-8'
	);

	ourRequest.onerror = function() {
		console.log('Connection Error');
	};

	ourRequest.send();
}

// document.addEventListener('DOMContentLoaded', function() {
// 	// document.addEventListener('click', function() {
// 	// 	document.getElementById('quick-add-data').innerHTML =
// 	// 		'Hello World!';
// 	// });
// 	var quickAddButton = document.querySelector('#quick-add');
// 	if (quickAddButton) {
// 		quickAddButton.addEventListener('click', function() {
// 			// alert('True');
// 			var ourPostData = {
// 				title: document.querySelector('#quick-add-data')
// 					.innerHTML,
// 				content: document.querySelector('#quick-add-data')
// 					.innerHTML,
// 				status: 'draft'
// 			};
// 			var voteData = {
// 				vote_type: 'speak',
// 				vote_count: 5
// 			};
// 			var createPost = new XMLHttpRequest();
// 			createPost.open(
// 				'DELETE',
// 				// voteData.siteURL + '/wp-json/wp/v2/posts'
// 				'/tom/wp-json/votes/v1/delete/1'
// 			);
// 			createPost.setRequestHeader('X-WP-Nonce', voteData.nonce);
// 			createPost.setRequestHeader(
// 				'Content-Type',
// 				'application/json;charset=UFT-8'
// 			);
// 			createPost.send(JSON.stringify(voteData));
// 		});
// 	}
// });

function createHTML(postsData) {
	var ourHTMLString = '';
	for (i = 0; i < postsData.length; i++) {
		ourHTMLString +=
			'<h2>' + postsData[i].title.rendered + '</h2>';
	}

	document.getElementById('new_text').innerHTML = ourHTMLString;
}
