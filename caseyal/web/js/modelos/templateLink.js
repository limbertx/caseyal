function templateLink(make){

var template =
make(go.Link,  // todo el panel del enlace
    {
    selectionAdorned: true,
    layerName: "Foreground",
    reshapable: true,
    routing: go.Link.AvoidsNodes,
    corner: 5,
    curve: go.Link.JumpOver
    },
    make(go.Shape,  // la forma del enlace
    { stroke: "#303B45", strokeWidth: 2.5 }),
    make(go.TextBlock,  // el label del "FROM"
    {
        textAlign: "center",
        font: "bold 14px sans-serif",
        stroke: "#1967B3",
        segmentIndex: 0,
        segmentOffset: new go.Point(NaN, NaN),
        segmentOrientation: go.Link.OrientUpright
    },
    new go.Binding("text", "text")),
    make(go.TextBlock,  // el label del "TO"
    {
        textAlign: "center",
        font: "bold 14px sans-serif",
        stroke: "#1967B3",
        segmentIndex: -1,
        segmentOffset: new go.Point(NaN, NaN),
        segmentOrientation: go.Link.OrientUpright
    },
    new go.Binding("text", "toText"))
);

return template;
}