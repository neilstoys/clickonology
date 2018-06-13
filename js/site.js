/*JSON.js*/

//Button myMessage - id btnMessage
function myMessage() {
	var x;
	if (confirm("Press a button!") == true) {
			x = "You pressed OK!";
	} else {
			x = "You pressed Cancel!";
	}
	document.getElementById("btnMessage").innerHTML = x;
}

//Button myJSON - data jar myJSONObj - local jarJSON - id btnJSON
function myJSON() {
	var myObj, myJSON, text, obj;
	//Storing data - KEY:VALUE
	myJSONObj = { "name":"John", "age":31, "city":"New York" };
	myJSON = JSON.stringify(myJSONObj);
	localStorage.setItem("jarJSON", myJSON);
	//Retrieving data:
	text = localStorage.getItem("jarJSON");
	obj = JSON.parse(text);
	document.getElementById("btnJSON").innerHTML = obj.name+obj.age;
}

//Button myArray - data jar myArrayObj - id btnArray
function myArray() {
	var myArrayObj = { "name":"John", "age":30, "car":null };
	for (x in myArrayObj) {
			document.getElementById("btnArray").innerHTML += myArrayObj[x] + "<br>";
	}
}

//Access arrays
//Button myCar - data jar myCarObj - id btnCar
function myCar() {
	var myCarObj = {
		"name":"John",
		"age":30,
		"cars": {
			"car1":"Ford",
			"car2":"BMW",
			"car3":"Fiat"
		}
	}
	document.getElementById("btnCar").innerHTML += myObj.cars.car2 + "<br>";
	//or:
	document.getElementById("btnCar").innerHTML += myObj.cars["car1"];	
}

//How to modify values in a JSON object
//Button myMod - data jar myModObj - id btnModify
function myMod() {
	var myModObj, i, x = "";
	myModObj = {
		"name":"John",
		"age":30,
		"cars": {
			"car1":"Ford",
			"car2":"BMW",
			"car3":"Fiat"
		}
	}
	myModObj.cars.car2 = "BMW in array changed to Mercedes";
	
	for (i in myModObj.cars) {
			x += myModObj.cars[i] + "<br>";
	}
	
	document.getElementById("btnModify").innerHTML = x;	
}

//How to delete values in a JSON object
//Button myDel - data jar myDelObj - id btnDelete
function myDelete() {
	var myDelObj, i, x = "";
	myDelObj = {
		"name":"John",
		"age":30,
		"cars": {
			"car1":"Ford",
			"car2":"BMW",
			"car3":"Fiat"
		}
	}
	delete myDelObj.cars.car2;
	
	for (i in myDelObj.cars) {
			x += myDelObj.cars[i] + "<br>";
	}
	
	document.getElementById("btnDelete").innerHTML = x + "BMW deleted";
}

//Looping through arrays inside arrays
//Button myDel - data jar myDelObj - id btnDelete
function myArrayInArray() {
	var myAinAObj, i, j, x = "";
	myAinAObj = {
			"name":"John",
			"age":30,
			"cars": [
					{ "name":"Ford", "models":[ "Fiesta", "Focus", "Mustang" ] },
					{ "name":"BMW", "models":[ "320", "X3", "X5" ] },
					{ "name":"Fiat", "models":[ "500", "Panda" ] },
					{ "name":"Dodge", "models":[ "1500 RAM", "Avenger", "Caravan" ] }					
			]
	}
	//For 0 to Number of car makes
	for (i in myAinAObj.cars) {		//For 0 to end of myAinAObj array	  
			x += "<h1>" + myAinAObj.cars[i].name + "</h1>";  //Car 0 name incremented is Ford
			for (j in myAinAObj.cars[i].models) {	   //For 0 to end of myAinAObj.cars array
					x += myAinAObj.cars[i].models[j] + "<br>";  //Car 0 model incremented is Fiesta
			}
	}
	
	document.getElementById("btnCarArray").innerHTML = x;
}