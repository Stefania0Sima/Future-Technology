const menu = document.querySelector('#mobile_menu'); //returnsthe element that matches the specified selector
const menuLinks = document.querySelector('.navbar_menu');
menu.addEventListener('click', function(){ //click function to activate and deactivate the drop down menu
	menu.classList.toggle('is-active');
	menuLinks.classList.toggle('active');
})
