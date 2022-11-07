<?php

    if($_POST)
    {
        require_once("conexion.php");

        if($_POST['action'] == 'searchContact')
        {
            if(!empty($_POST['id']))
            {
                $arrContact = array();//en esta linea de codigo estoy declarando un array para no tener prblemas con las versiones de php
                $intId = intval($_POST['id']);
                $query_select = mysqli_query($conection, "SELECT * FROM empleado WHERE id = $intId ");
                $num_rows = mysqli_num_rows($query_select);
                if($num_rows > 0)
                {
                    $arrContact = mysqli_fetch_assoc($query_select);
                    echo json_encode($arrContact,JSON_UNESCAPED_UNICODE);//encode me encodea en estilo json la array.
                }else{
                    echo "notData";
                }
                exit();
            }
        }

        //buscar por imput.
        if($_POST['action'] == 'searchContactKey')
        {
            $searchData = $_POST['dataSearch'];
            //tabla cliente para errro boolen.
            $query_select = mysqli_query($conection, "SELECT * FROM empleado WHERE
                                                    id LIKE '%$searchData%' OR
                                                    rut LIKE '%$searchData%' OR
                                                    nombre LIKE '%$searchData%' OR
                                                    cargo LIKE '%$searchData%' OR
                                                    pais_nacimiento LIKE '%$searchData%' OR
                                                    hrs_inasistencia LIKE '%$searchData%' OR
                                                    sueldo_base LIKE '%$searchData%' OR
                                                    tipo_cuenta_banco LIKE '%$searchData%' OR
                                                    num_depos_cuenta LIKE '%$searchData%' OR
                                                    nom_banco LIKE '%$searchData%' OR
                                                    valor_afp LIKE '%$searchData%' OR
                                                    valor_fonasa LIKE '%$searchData%' OR
                                                    calle_avenida LIKE '%$searchData%' OR
                                                    num_casa_dep LIKE '%$searchData%' OR
                                                    comuna LIKE '%$searchData%'
                                                ");
            $num_rows = mysqli_num_rows($query_select);
            if($num_rows > 0)
            {
                $htmlTable = '';
                while ($row = mysqli_fetch_assoc($query_select)) {
                    $htmlTable .='<tr>
                                    <th scope="row">'.$row['id'].'</th>
                                    <td>'.$row['rut'].'</td>
                                    <td>'.$row['nombre'].'</td>
                                    <td>'.$row['cargo'].'</td>
                                    <td>'.$row['pais_nacimiento'].'</td>
                                    <td>'.$row['hrs_inasistencia'].'</td>
                                    <td>'.$row['sueldo_base'].'</td>
                                    <td>'.$row['tipo_cuenta_banco'].'</td>
                                    <td>'.$row['num_depos_cuenta'].'</td>
                                    <td>'.$row['nom_banco'].'</td>
                                    <td>'.$row['valor_afp'].'</td>
                                    <td>'.$row['valor_fonasa'].'</td>
                                    <td>'.$row['calle_avenida'].'</td>
                                    <td>'.$row['num_casa_dep'].'</td>
                                    <td>'.$row['comuna'].'</td>
                                </tr>';
                }
                //echo $htmlTable;
                echo json_encode($htmlTable,JSON_UNESCAPED_UNICODE);
            }else{
                echo "notData";
            }
            exit();
        }


        //mostrar todo
        if($_POST['action'] == 'listContact')
        {
            $query_select = mysqli_query($conection, "SELECT * FROM empleado ");
            $num_rows = mysqli_num_rows($query_select);
            if($num_rows > 0)
            {
                $htmlTable = '';
                while ($row = mysqli_fetch_assoc($query_select)) {
                    $htmlTable.='<tr>
                                    <th scope="row">'.$row['id'].'</th>
                                    <td>'.$row['rut'].'</td>
                                    <td>'.$row['nombre'].'</td>
                                    <td>'.$row['cargo'].'</td>
                                    <td>'.$row['pais_nacimiento'].'</td>
                                    <td>'.$row['hrs_inasistencia'].'</td>
                                    <td>'.$row['sueldo_base'].'</td>
                                    <td>'.$row['tipo_cuenta_banco'].'</td>
                                    <td>'.$row['num_depos_cuenta'].'</td>
                                    <td>'.$row['nom_banco'].'</td>
                                    <td>'.$row['valor_afp'].'</td>
                                    <td>'.$row['valor_fonasa'].'</td>
                                    <td>'.$row['calle_avenida'].'</td>
                                    <td>'.$row['num_casa_dep'].'</td>
                                    <td>'.$row['comuna'].'</td>
                                </tr>';
                }
                echo json_encode($htmlTable,JSON_UNESCAPED_UNICODE);
            }else{
                echo "notData";
            }
            exit();
        }

    }

?>