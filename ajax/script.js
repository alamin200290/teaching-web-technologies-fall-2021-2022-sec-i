"use strict"

let a = 10;
let student = [12, 'alamin', 3.5];


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


function ajax(){
	let name = document.getElementById('name').value;
	//alert(name);
	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('h1').innerHTML = this.responseText;
		}
	}
}


function search(){
	let name = document.getElementById('name').value;
	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'search.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('div1').innerHTML = this.responseText;
		}
	}
}