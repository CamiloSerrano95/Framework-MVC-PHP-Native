<?php require dirname(__FILE__).'/../home/header.php'; ?>

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">INFORMACION DE LA EMPRESA</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mt-5">DATOS REQUERIDOS</h5>
                        <div class="table-responsive text-center mt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>INDICE DE LIQUIDEZ</td>
                                            <td>INDICE DE ENDEUDAMIENTO</td>
                                            <td>RAZON COBERTURA DE INTERES</td>
                                            <td>RENTABILIDAD SOBRE EL PATRIMONIO</td>
                                            <td>RENTABILIDAD DEL ACTIVO</td>
                                        </tr>
                                        <tr>                                            
                                            <td><?php echo $key['requridos']['ind_liquidez'];?></td>
                                            <td><?php echo $key['requridos']['endeudamiento'];?></td>
                                            <td><?php echo $key['requridos']['raz_cobertura_int'];?></td>
                                            <td><?php echo $key['requridos']['rent_patrimonio'];?></td>
                                            <td><?php echo $key['requridos']['rent_activos'];?></td>
                                        </tr>
                                    </thead>
                                </table>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                        <!-- <h5 class="card-title"></h5> -->
                        <div>
                            <div class="table-responsive text-center">
                                <table id="zero_config" class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>                                            
                                            <th>NOMBRE EMPRESA</th>
                                            <th>INDICE DE LIQUIDEZ</th>
                                            <th>INDICE DE ENDEUDAMIENTO</th>
                                            <th>RAZON DE COBERTURA</th>
                                            <th>RENTABILIDAD DEL PATRIMONIO</th>
                                            <th>RENTABILIDAD DEL ACTIVO</th>
                                            <th>ALIANZAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            for ($i=0; $i < sizeof($key['datos']); $i++) { 
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo $key['datos'][$i][0];
                                                    echo"</td>";
                                                    echo "<td>";
                                                        echo $key['datos'][$i][1];
                                                    echo"</td>";
                                                    echo "<td>";
                                                        echo $key['datos'][$i][2];
                                                    echo"</td>";
                                                    echo "<td>";
                                                        echo $key['datos'][$i][3];
                                                    echo"</td>";
                                                    echo "<td>";
                                                        echo $key['datos'][$i][4];
                                                    echo"</td>";
                                                    echo "<td>";
                                                        echo $key['datos'][$i][5];
                                                    echo"</td>";
                                                    echo "<td>";?>
                                                        <a href="../Alianzas/AlianzaUnspsc.php" class="btn btn-link"><span style="font-size: 3em; color: green;"><i class="fas fa-hands-helping"></i></span></a>
                                                    <?php echo"</td>";
                                                echo "</tr>";
                                            }

                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require dirname(__FILE__).'/../home/footer.php'?>