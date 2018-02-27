function templateTable(make){

var lightgrad = 
    make(go.Brush, "Linear", { 1: "#E6E6FA", 0: "#FFFAF0" });

// la plantilla para columna de la tabla
var itemTempl =
make(go.Panel, "Horizontal",
  make(go.Shape,
    { desiredSize: new go.Size(10, 10) },
    new go.Binding("figure", "figure"),
    new go.Binding("fill", "color")),
  make(go.TextBlock,
    { stroke: "#333333",
      font: "bold 14px sans-serif" },
    new go.Binding("text", "name"))
);

//#####################################################################
// El template del nodo
var template =
make(go.Node, "Auto",  // todo el panel de nodo
  { selectionAdorned: true,
    resizable: true,
    layoutConditions: go.Part.LayoutStandard & ~go.Part.LayoutNodeSized,
    fromSpot: go.Spot.AllSides,
    toSpot: go.Spot.AllSides,
    isShadowed: true,
    shadowColor: "#C5C1AA"
    //locationSpot: go.Spot.Center
  },
  new go.Binding("location", "location").makeTwoWay(),
  // cada vez que PanelExpanderButton cambia la propiedad visible del panel "LISTA",
  // despejar cualquier desiredSize establecido por el ResizingTool.
  new go.Binding("desiredSize", "visible", function(v) { return new go.Size(NaN, NaN); }).ofObject("LIST"),
  // defina los node's forma externa, que rodeará la tabla
  make(go.Shape, "Rectangle",
    { fill: lightgrad, stroke: "#756875", strokeWidth: 3 }),
  make(go.Panel, "Table",
    { margin: 8, stretch: go.GraphObject.Fill },
    make(go.RowColumnDefinition, { row: 0, sizing: go.RowColumnDefinition.None }),
    // El encabezado de la tabla
    make(go.TextBlock,
      {
        row: 0, alignment: go.Spot.Center,
        margin: new go.Margin(0, 14, 0, 2),  // deja espacio para el Button
        font: "bold 16px sans-serif"
      },
    new go.Binding("text", "key")),
    // expandimo/ocultamos el boton
    make("PanelExpanderButton", "LIST",  // el nombre del elemento cuya visibilidad este boton alterna
      { row: 0, alignment: go.Spot.TopRight }),
    // la lista de paneles, cada uno mostrando un atributo
    make(go.Panel, "Vertical",
      {
        name: "LIST",
        row: 1,
        padding: 3,
        alignment: go.Spot.TopLeft,
        defaultAlignment: go.Spot.Left,
        stretch: go.GraphObject.Horizontal,
        itemTemplate: itemTempl
      },
      new go.Binding("itemArray", "items"))
  )  // fin de la panel de latabla 
);  // fin del nodo
//####################################################################

return template;

}
/**
 * Metodo que devuelve el color de la llave primaria
 */
function getColorPrimaryKey(make){
    return make(go.Brush, "Linear", { 0: "rgb(254, 221, 50)", 1: "rgb(254, 182, 50)" });
}

/**
 * funcion que devuelve el color de la llave foranea
 */
function getColorForeingKey(make){
    return make(go.Brush, "Linear", { 0: "rgb(158, 209, 159)", 1: "rgb(67, 101, 56)" });
}
/**
 * Funcion que devuelve el color de las columnas normales
 */
function getColorColumn(make){
    return make(go.Brush, "Linear", { 0: "rgb(206, 106, 100)", 1: "rgb(180, 56, 50)" });
}


function crearDatos(){
//los modelos del diagrama
  var nodeDataArray = [
    { 
      key: "Table1",
      location: new go.Point(50, 50),
      items:  [ 
                { name: "idprimary", iskey: true, figure: "Ellipse", color: getColorPrimaryKey(gj)},
              ]
    }
  ]
}