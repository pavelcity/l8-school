'use strict';

document.addEventListener('DOMContentLoaded', () => {

	let zapisatsa = document.querySelectorAll('.zapisatsa');

	
	zapisatsa.forEach(bt => {
		bt.addEventListener('click', (e)=>{
			e.preventDefault();
			alert('Записаться');
		});
	});



});

