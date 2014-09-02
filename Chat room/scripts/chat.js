function sendMessage(keyPress){
	var message=document.getElementById("chatInputtext").value;
	if(keyPress.keyCode == 13 && message != "undefined" && message != ""){
		document.getElementById("chatInputtext").value=""
		addMessagetoBox(message);
		return true;
	}
	return true;
}
function addMessagetoBox(message){
	var MessageBox=document.getElementById("chatMessagebox");
	var chatMessage=document.createElement("div");
	chatMessage.innerHTML=message;
	MessageBox.insertBefore(chatMessage,MessageBox.firstChild);
}