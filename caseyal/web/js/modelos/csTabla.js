class csTabla{
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
    get Pto(){
        return this.pto;
    }
    set Pto(value){
        this.pto = value;
    }
    get PkTabla(){
        return this.pkTabla;
    }
    set PkTabla(value){
        this.pkTabla = value;
    }    
    get NombreTabla(){
        return this.nombreTabla;
    }
    set NombreTabla(value){
        this.nombreTabla = value;
    }    
    get FkUserCreate(){
        return this.fkUserCreate;
    }
    set FkUserCreate(value){
        this.fkUserCreate = value;
    }    
    get FechaCreate(){
        return this.fechaCreate;
    }
    set FechaCreate(value){
        this.fechaCreate = value;
    }    
    get FkDiagrama(){
        return this.fkDiagrama;
    }
    set FkDiagrama(value){
        this.fkDiagrama = value;
    }    
}