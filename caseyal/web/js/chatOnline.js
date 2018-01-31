function chat_sendMessage(){
    // aqui emito al servidor
	let username = $("#diagram-edit-username").val();
	let proyecto = $("#diagram-edit-project").val();
	let message = $("#message").val();

	let t = new trama(TipoTrama_MESSAGE, message, proyecto, username);

    socket.emit(TipoTrama_MESSAGE, JSON.stringify(t));
}

/**
 * Metodo que adiciona un mensaje al textarea cuando llega desde el servidor
 *
 */
function chat_newMessage(message){
	let trama = JSON.parse(message);
    
    let text = $("#chat").val();

    if(text.length <= 0){
        $("#chat").val(trama.message);
    }else{
        $("#chat").val(text + "\n" + trama.message);
    }
}

/**
 * 
 * Metodo para unirse a la sala del proyecto
 * 
 */
function chat_joinToProjecto(){
	
	let username = $("#diagram-edit-username").val();
	let proyecto = $("#diagram-edit-project").val();

	let t = new trama(TipoTrama_JOIN, "", proyecto, username);

	if(socket == null){
		alert("No se pudo encontrar conexion, intentelo mas tarde");
	}else{
		socket.emit(TipoTrama_JOIN, JSON.stringify(t));
	}
}