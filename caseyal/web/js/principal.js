//creamos el emmiter al servidor chat
var socket = io.connect("http://localhost:3000", {'forceNew' : true});

/**
 * Escuchador de mensajes para el chat
 */
socket.on(TipoTrama_NEW_MESSAGE, (data)=>{    
    chat_newMessage(data);
});
