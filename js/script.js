"use strict"

let a = 10;
let student = [12, 'alamin', 3.5];
//console.log(student[1]);
//alert(student[1]);
//document.write(student[1]);

function changeData(){
	let element = document.getElementsByTagName('h1')[0];
	element.innerHTML = "MY NAME";	
}

function mydata(){
	let element = document.getElementById('name');
	document.getElementsByTagName('h1')[0].innerHTML = element.value;
	element.value = "";

	document.getElementById('d1').innerHTML = "<div style='width:50px; height:30px;background:blue'></div>";
}

function validate(){
	let name = document.getElementById('name').value;

	if(name == ""){
		//alert('null data...');
		document.getElementById('d1').innerHTML = "<p style='color: red'>null data</p>"
	}else{
		document.getElementsByTagName('h1')[0].innerHTML = name;
		document.getElementById('d1').innerHTML = "";
	}
}

function f1(){
	document.getElementById('h1').innerHTML = document.getElementById('name').value

}

function moveLeft(){
	let left = document.getElementById('d1').style.left;
	let update = left.replace('px', '');
	update = parseInt(update)+10;
	document.getElementById('d1').style.left = update+'px';
}

function moveRight(){
	let left = document.getElementById('d1').style.left;
	let update = left.replace('px', '');
	update = parseInt(update)-10;
	document.getElementById('d1').style.left = update+'px';
}