// JavaScript Document
var name= "Titus Njiru";
var number = 300;
var n = null;
var output = document.getElementById("output");
var output2 = document.getElementById("output2");
var firstNameInClass;
/*alert("Hello "+name);
  confirm("Are you sure the number is "+typeof(n)+"?"); */
function myFunction(){
	//alert("Use lowerCamelCase");
	//window.location.href = "https://www.google.com/";
	output.innerHTML = "A button has \n been clicked";
	output2.value = "Type something here";
}
function swapText(){
	var temp = output2.value;
	output2.value = output.innerHTML;
	output.innerHTML = temp;
}
function tenItems(){
	document.write("First 10 Natural numbers");
	for(var i=0;i<=10;i++){
		
		document.write(i);
		document.write("\n");
		
	}
	document.write(Math.PI); 
	document.write("5.0" == 5 );
}
function grading(){
	var grade; 
	if(output2 >= 70){
		grade = "A";
		
	}
	else if(output>=60){
		grade = "B";
	}
	else{
		grade = "C";
	}
	output.innerHTML = "Your grade is " + grade;
}
function arrayDemo(){
	var marks = [];
	var mark;
	var sum = 0;
	var avg
	//capture array elements
	mark = prompt("Enter 5 marks separated by a single space");
	marks = mark.split(" ");
	//output array elements
	document.write("You have entered: \n");
	for(var i=0;i<=4;i++){
		document.write(marks[i]+" ");
		sum += parseFloat(marks[i]);
	}
	avg = sum/10;
	document.write("The average is: "+avg);
}