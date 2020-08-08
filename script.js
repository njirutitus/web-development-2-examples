let topics = document.getElementById('topics');
let addb = document.getElementById('addtopic');
let removeb = document.getElementById("removetopic")

addb.onclick = addTopics;
removeb.onclick = removeTopics;

function addTopics(){
	let item = document.createElement('li');
	item.innerHTML = prompt("Enter a topic");
	
	topics.appendChild(item);
}

function removeTopics(){
	let item = topics.lastChild;
	topics.removeChild(item);
}