<?php 
     //require_once '../../Models/EmpresaModel.php'
    require dirname(__FILE__).'/../home/header.php';

    $Empresa = new EmpresaModel();    
    $Empresas = $Empresa->ObtenerEmpresa($key);
    $servicio = $Empresa->ObtenerServicios();
?> 


    <script>
        function crearInput() {
            
            var DatosSelect = document.getElementById('DatosSelect').value;
        
            var contenedor = document.getElementById('contenedor');
            var charizard = document.getElementById('charizard');
            var partes = DatosSelect.split('-');
            
            var x = document.createElement('input');
            x.setAttribute("class", "form-control mt-3");
            x.setAttribute("id" , "selecsito");
            x.setAttribute("name" , "codigos[]");
            x.setAttribute("value", partes[0]);
            contenedor.appendChild(x);

            var a = document.createElement('input');
            a.setAttribute("class", "form-control mt-3 charizard");
            a.setAttribute("id" , "selec1");
            a.setAttribute("value", partes[1]);
            charizard.appendChild(a);
        }

        function EliminarInput (id,od) {
        
            var x = document.getElementById(id);
            var y = document.getElementById(od);
            if (!x){
                alert("elemento no definido");
            }else{
                x.parentNode.removeChild(x);
                y.parentNode.removeChild(y);
            }
        }

    </script>

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Clasificaciones de Bienes, Obras y Servicios </h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <?php foreach ($Empresas['empresas'] as $data) { ?>
                        <h5 class="card-title"><strong><?php echo $data['nombre_empresa'] ?></strong></h5>
                    <?php } ?>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo ABS_PATH."mostrarCodigos/agregar"?>"
                            
                              method="POST" class="form-horizontal">
                            <div class="row mt-3">
                            <input type="hidden" name="nit" value="<?php  echo $key; ?>">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="select2 form-control custom-select mt-2" style="width: 100%; height:36px;" id="DatosSelect">
                                        <?php  foreach($servicio['servicios'] as $data) { ?>
                                            <option value="<?php echo $data['codigo']."-".$data['nombre_servicio'];  ?>"><?php echo $data['codigo']." - ".$data['nombre_servicio'];?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <button type="button" id="crearInput" onclick="crearInput()" class="btn btn-primary">Agregar Codigo</button>
                                    <button type="button" onclick="EliminarInput ('selec1','selecsito')" class="btn btn-primary">Eliminar Codigo</button>
                                    <button type="button" id="obtener" class="btn btn-primary">Obtener</button>
                                </div>
                            </div>
                            <div id="joker">
                                <div class="row">
                                    <div id="contenedor" class="form-group col-sm-6">
                                        <!-- input1 -->
                                    </div>
                                    <div id="charizard" class="form-group col-sm-6">
                                        <!-- input2 -->
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Codigos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var crearInput = document.getElementById('crearInput');
    var obtener = document.getElementById('obtener');
    var contador = 0;
        
    crearInput.onclick = () => {
        contador++;
        console.log("ok");
        console.log(contador);
    }
</script>
<?php require dirname(__FILE__).'/../home/footer.php'?>