const TipoTrama_TABLA = "TABLA";
const TipoTrama_COLUMNA = "COLUMNA";

const TipoTrama_MESSAGE = "MESSAGE";
const TipoTrama_NEW_MESSAGE = "NEW-MESSAGE";
const TipoTrama_JOIN = "JOIN";

// MENSAJES DEL DIAGRAMA
const TipoTrama_Coordenada = "COORDENADA";

/**
 * Genera una llave primaria
 */
function generateUID(){
    let uniqueId = Math.random().toString(36).substring(2) + (new Date()).getTime().toString(36);
    return uniqueId;
}
