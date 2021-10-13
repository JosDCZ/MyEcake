<?php
include "../Config/Conexion.php";

extract($_POST);


$paso = isset($_POST['paso']);


if ($paso == "Agregar") {
    if (isset($_POST['IdSend']) && isset($_POST['NombreSend']) && isset($_POST['ApellidoSend']) && isset($_POST['CorreoSend']) && isset($_POST['ContraseñaSend']) && isset($_POST['AdminSend'])) {
        $contra = base64_encode($ContraseñaSend);

        $sql = "INSERT INTO empleado(idempleado,nombre,apellido,correo,contraseña,estado,administrador,idempresa) VALUES($IdSend,'$NombreSend','$ApellidoSend','$CorreoSend','$contra',1,$AdminSend,1)";
        $result = mysqli_query($con, $sql);

        if ($result === false) {
            echo json_encode(0);
        } else {
            echo json_encode(1);
        }
    }
}

if ($paso == "Actualizar") {
    if (isset($_POST['idActualizar'])) {
        $id_valor = $_POST['idActualizar'];

        $sql = "SELECT * FROM empleado WHERE idempleado = $id_valor";

        $result = mysqli_query($con, $sql);
        $respuesta = array();

        while ($fila = mysqli_fetch_assoc($result)) {
            $respuesta = $fila;
          }

        if ($result === false) {
            echo json_encode(0);
        } else {
            echo json_encode($respuesta);
        }
    } else {
        $respuesta['status'] = 200;
        $respuesta['message'] = "Invalido o error de información.";
    }

    // actualizar en base de datos

    if (isset($_POST['idoculto'])) {
        $id_oculto = $_POST['idoculto'];
        $idempleado = $_POST['modIdAdd'];
        $nombre = $_POST['modNombreAdd'];
        $apellido = $_POST['modApellidoAdd'];
        $correo = $_POST['modCorreoAdd'];
        $contraseña = $_POST['modContraseñaAdd'];

        $sql = "UPDATE empleado set nombre = '$nombre', apellido ='$apellido', correo = '$correo', contraseña = '" . base64_encode($contraseña) . "' WHERE idempleado = $id_oculto";

        $result = mysqli_query($con, $sql);

        if ($result === false) {
            echo json_encode(0);
        } else {
            echo json_encode(1);;
        }
    }
}

if ($paso == "obtener") {
    if (isset($_POST['idObteSend'])) {
        $id_valor = $_POST['idObteSend'];

        $sql = "SELECT * FROM empleado WHERE idempleado = $id_valor";

        $result = mysqli_query($con, $sql);
        $respuesta = array();

        while ($fila = mysqli_fetch_assoc($result)) {
            $respuesta = $fila;
        }

        if ($result === false) {
            echo json_encode(0);
        } else {
            echo json_encode($respuesta);
        }
    } else {
        $respuesta['status'] = 200;
        $respuesta['message'] = "Invalido o error de información.";
    }
}

if ($paso == "cambioEstadoAdmin") {
    if (isset($_POST['IdcambioSend'])) {
        $unico = $_POST['IdcambioSend'];
        $estadoAdmin = $_POST['estadoSend'];

        $sql = "UPDATE empleado SET administrador = $estadoAdmin  WHERE idempleado = $unico";

        $result = mysqli_query($con, $sql);

        if ($result === false) {
            echo json_encode(0);
        } else {
            echo json_encode(1);;
        }
    }
}

if ($paso == "cambioEstadoActivo") {
    if (isset($_POST['IdcambioASend'])) {
        $unico = $_POST['IdcambioASend'];

        $sql = "SELECT * FROM empleado WHERE idempleado = $unico";

        $result = mysqli_query($con, $sql);

        $estado = -1;

        while ($fila = mysqli_fetch_assoc($result)) {
            $estado = $fila['estado'];
        }

        if ($estado == 1) {
            $sql = "UPDATE empleado SET estado = 0  WHERE idempleado = $unico";
        } else {
            $sql = "UPDATE empleado SET estado = 1  WHERE idempleado = $unico";
        }
        
        $result = mysqli_query($con, $sql);

        if ($result === false) {
            echo json_encode(0);
        } else {
            echo json_encode(1);;
        }
    }
}

if ($paso == "Borrar") {
    if (isset($_POST['eliminarSend'])) {
        $unico = $_POST['eliminarSend'];

        $sql = "DELETE FROM empleado WHERE idempleado = $unico";

        $result = mysqli_query($con, $sql);
    }
}


if (isset($_POST['MostrarSend'])) {
    $tabla = '<table class="table table-striped" id="table1">
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Estado</th>
                <th>Administrador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>';

    $sql = "SELECT * FROM empleado ORDER BY idempleado";

    $result = mysqli_query($con, $sql);
    $contador = 0;
    while ($fila = mysqli_fetch_assoc($result)) {

        $idempleado = $fila['idempleado'];
        $nombre = $fila['nombre'];
        $apellido = $fila['apellido'];
        $correo = $fila['correo'];
        $contraseña = $fila['contraseña'];
        $estado = $fila['estado'];
        $administrador = $fila['administrador'];
        $idempresa = $fila['idempresa'];

        $tabla .= '<tr>
            <td>' . $apellido . '</td>
            <td>' . $nombre . '</td>
            <td>' . $correo . '</td>
            <td>' . $contraseña . '</td>';
        if ($estado == 1) {
            $tabla .= '<td>
            <button type="button" class="btn btn-sm btn-success" onclick="estadoActivo(' . $idempleado . ')">
                <span class="d-none d-sm-block">Activo</span>
            </button>
            </td>';
        } else {
            $tabla .= '<td>
            <button type="button" class="btn btn-sm btn-danger" onclick="estadoActivo(' . $idempleado . ')">
                <span class="d-none d-sm-block">Inactivo</span>
            </button>
            </td>';
        }

        if ($administrador == 1) {
            $tabla .= '<td>
            <label class="switch">
              <input type="checkbox" id="admin' . $contador . '" onclick="estadoAdmin(' . $idempleado . ')"  checked="checked">
              <span class="slider round"></span>
            </label></td>';
        } else {
            $tabla .= '<td>
            <label class="switch">
              <input type="checkbox" id="admin' . $contador . '" onclick="estadoAdmin(' . $idempleado . ')">
              <span class="slider round"></span>
            </label></td>';
        }
        $tabla .= '<td>
            <button class="btn btn-secondary" onclick="MostrarEditar(' . $idempleado . ')"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-danger" onclick="confirEliminarEmpleado(' . $idempleado . ')"><i class="bi bi-trash"></i></button></td>
            </tr>';
        $contador++;
    }
    $tabla .= '</tbody>
                </table>';

    echo $tabla;
}
