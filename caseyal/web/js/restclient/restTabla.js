
/**
 * Metodo que obtiene las tablas
 */
/**function getTablas(){
    $.ajax({
        type: 'GET',
        contentType: "application/json",
        crossDomain: true,
        url: "http://localhost:3000/api/tablas"
    }).then(function(data) {
       console.log(data);
       //$('#idResultado').append(data);
    });
}*/
/**
 * Metodo que guarda una tabla
 */
/*
function setTabla(){
    let p = new csTabla(2, "yii2", 2, new Date(), 34, "99 998");

    let json = JSON.stringify(p);
    console.log(json);
    
    $.ajax({
        type: 'POST',
        contentType: "application/json",
        crossDomain: true,
        data: json,
        url: "http://localhost:3000/api/tablas"
    }).then(function(data) {
       console.log(data);
       //$('#idResultado').append(data);
    });
}

function actualizarUsuario(){        
    $.ajax({
        type: 'GET',
        contentType: "application/json",
        crossDomain: true,
        url: "http://localhost:3000/api/users"
    }).then(function(data) {
       console.log(data);
       //$('#idResultado').append(data);
    });
}
*/