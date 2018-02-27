// esto todo estaba para el  diagramador
var gj;
var myDiagram;


 
function iniciarDiagrama(){  
  gj = go.GraphObject.make;
  myDiagram = gj(go.Diagram, 'myDiagrama',{
                      // centra todos los diagrmas
                      //initialContentAlignment: go.Spot.Center,
                      "undoManager.isEnabled": false, // deshabilitado el ctrl-z
                      allowDelete: false,
                      allowCopy: false,
                      // forza para que no haya cruce de nodos y relaciones
                      layout: gj(go.ForceDirectedLayout),
                      mouseOver: function(e) {
                        console.log(e.viewPoint.toString())
                      }
    });

  myDiagram.nodeTemplate = templateTable(gj);
  myDiagram.linkTemplate = templateLink(gj);

  myDiagram.model = new go.GraphLinksModel(crearDatos());
                  
  myDiagram.addChangedListener((e)=>{
      
      if (e.propertyName !== "position" || e.object instanceof go.Adornment) 
        return;

      let node = e.object;
      if(node.key != undefined){
        // es un nodo
        $("#idResultado").text("xx: " + node.location);
        sendCoordenadas(node.location, node.key);
      }else{
        // puede ser una relacion
        // no hacer nada
      }
  });

}


function crearDatos(){
//los modelos del diagrama
  var nodeDataArray = [
    { key: "Products",
      location: new go.Point(50, 50) ,
      items:  [ 
                { name: "ProductID", iskey: true, figure: "Ellipse", color: getColorPrimaryKey(gj)},
                { name: "SupplierID", iskey: false, figure: "Ellipse", color: getColorForeingKey(gj)},
                { name: "CategoryID", iskey: false, figure: "Decision", color: getColorColumn(gj)}
              ]
    }
    
  /*,  
    { key: "Suppliers",  //   x    y
      location: new go.Point(200, 200),
      items: [ 
              { name: "SupplierID", iskey: true, figure: "Ellipse", color: getColorPrimaryKey(gj) },
              { name: "CompanyName", iskey: false, figure: "Decision", color: getColorColumn(gj) },
              { name: "ContactName", iskey: false, figure: "Decision", color: getColorColumn(gj) },
              { name: "Address", iskey: false, figure: "Decision", color: getColorColumn(gj) } 
            ]
    }
  */    

    ];

    return nodeDataArray
}
/*************************************************/

/*************************************************/
function createRelaciones(){
  //Creamos las relaciones
  var linkDataArray = [
    { from: "Products", to: "Suppliers", text: "0..N", toText: "1" }
  ];
  return linkDataArray;  
}

function iniciarAvanze(){
  myDiagram.startTransaction("mover_nodo");
    var data = myDiagram.model.nodeDataArray[0];  // obtenemos el primer nodo data
    var node = myDiagram.findNodeForData(data);   // buscamos su correspondiente nodo
    var p = node.location.copy();  // hacemos una copia de su localizacion
    console.log("pto anterior : " + data.location.toString());
    p.x += 10;    
    // cambiando el nodo.location tambien cambiamos el data.loc propiedade de TwoWay binding
    node.location = p;
    // mostramos la actualizacion
    console.log("punto : " + data.location.toString());
  myDiagram.commitTransaction("mover_nodo");  
}

function posicionar(){
  myDiagram.startTransaction("pos_fix");
    var data = myDiagram.model.nodeDataArray[0];  // obtenemos el primer nodo data
    var node = myDiagram.findNodeForData(data);   // buscamos su correspondiente nodo
    var p = node.location.copy();  // hacemos una copia de su localizacion
    console.log("pto anterior : " + data.location.toString());
    p.x = 100;
    p.y = 100;
    // cambiando el nodo.location tambien cambiamos el data.loc propiedade de TwoWay binding
    node.location = p;
    // mostramos la actualizacion
    console.log("punto : " + data.location.toString());
  myDiagram.commitTransaction("pos_fix");
}
function getPoint(){
  myDiagram.startTransaction("pos_fix");
    var data = myDiagram.model.nodeDataArray[0];  // obtenemos el primer nodo data
    var node = myDiagram.findNodeForData(data);   // buscamos su correspondiente nodo
    var p = node.location.copy();  // hacemos una copia de su localizacion
    document.getElementById("mostrar").value = data.location.toString();
myDiagram.commitTransaction("pos_fix");
}

function prueba(){
  console.log("entre a prueba");
  const tabla = new csTabla(10, "nombreTabla", 1, new Date().toJSON().slice(0,10), 1);
  
  console.log("nname : " + tabla.nombreTabla);
  tabla.nombreTabla = "new names";
  console.log("nname edit : " + tabla.nombreTabla);
}
