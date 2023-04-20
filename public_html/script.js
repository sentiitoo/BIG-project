'use strict';

// element toggle function
const elementToggleFunc = function (elem) {
	elem.classList.toggle('active');
};

// sidebar variables
const sidebar = document.querySelector('[data-sidebar]');
const sidebarBtn = document.querySelector('[data-sidebar-btn]');

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener('click', function () {
	elementToggleFunc(sidebar);
});

// custom select variables npps
const select = document.querySelector('[data-select]');

// contact form variables
const form = document.querySelector('[data-form]');
const formInputs = document.querySelectorAll('[data-form-input]');
const formBtn = document.querySelector('[data-form-btn]');

// add event to all form input field
for (let i = 0; i < formInputs.length; i++) {
	formInputs[i].addEventListener('input', function () {
		// check form validation
		if (form.checkValidity()) {
			formBtn.removeAttribute('disabled');
		} else {
			formBtn.setAttribute('disabled', '');
		}
	});
}

// page navigation variables
const navigationLinks = document.querySelectorAll('[data-nav-link]');
const pages = document.querySelectorAll('[data-page]');

// add event to all nav link
for (let i = 0; i < navigationLinks.length; i++) {
	navigationLinks[i].addEventListener('click', function () {
		for (let i = 0; i < pages.length; i++) {
			if (this.innerHTML.toLowerCase() === pages[i].dataset.page) {
				pages[i].classList.add('active');
				navigationLinks[i].classList.add('active');
			} else {
				pages[i].classList.remove('active');
				navigationLinks[i].classList.remove('active');
			}
		}
	});
}
const monArticle = document.querySelector('#visible');
monArticle.style.display = 'block';

const container = document.querySelector("[tabindex='-1']");

// redirection termynal:

function redirect() {
	var userInput = document.getElementById('user-input').value;
	if (userInput.toLowerCase() == 'snake') {
		window.location.href = 'game/snake.html';
	} else if (userInput.toLowerCase() == 'memory') {
		window.location.href = 'game/memory.php';
	}
}
document.getElementById('user-input').addEventListener('keyup', redirect);
