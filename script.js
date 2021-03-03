let divOff = document.querySelector('#bien_off');
let popup = document.querySelector('.popup');
let triangle = document.querySelector('#triangle-code');
console.log(triangle);
divOff.onclick = test;


function test(){
	popup.style.display = 'block';
	triangle.style.display = 'inline-block';

}
