class Tabla{
    constructor(pkTabla, nombreTabla, 
                fkUserCreate, fechaCreate, 
                fkDiagrama, pto){
        this.pkTabla = pkTabla;
        this.nombreTabla = nombreTabla;
        this.fkUserCreate = fkUserCreate;
        this.fechaCreate = fechaCreate;
        this.fkDiagrama = fkDiagrama;
        this.pto = pto;
    }
}