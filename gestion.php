<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>

        <title>
            YourHealth
        </title>
        <link href="img/YourHealthIco.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="css/gestion.css" rel="stylesheet" type="text/css"/>
       <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <?php include('comun/cabecera.php');?>
        <section>
            <div class="gestion-citas">
                <div>
                    <h2>
                        GESTION DE CITAS
                    </h2>
                </div>
                <!-- Buscador de pacientes, para mostrar sus citas pendientes.-->
                <div class="search-medico">
                    <div>
                        <form>
                            <label>
                                ID:
                            </label>
                            <input class="search" name="dni" placeholder="Nombre/Especialidad" required="" type="text"/>
                            <button class="button button-cita">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Tabla de medicos  y las posibles acciones a realizar (ver agenda,etc)-->
                <div class="doc-table" title="Se muestra un mensaje si no hay citas pendientes.">
                    <div class="table">
                        <!--table head-->
                        <div class="table-row">
                            <div class="table-head">
                                <span>
                                    Especialidad
                                </span>
                            </div>
                            <div class="table-head">
                                <span>
                                    Médico
                                </span>
                            </div>
                            <div class="table-head">
                                <span>
                                    Consulta
                                </span>
                            </div>
                            <div class="table-head">
                                <span>
                                    Horario
                                </span>
                            </div>
                            <div class="table-head">
                                <span>
                                    Acciones
                                </span>
                            </div>
                        </div>
                        <!--row1-->
                        <div class="table-row doc-row">
                            <div class="table-cell">
                                <span>
                                    Traumatología
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    Doctor John Smith
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    Planta 1, Sala A
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    08:00-16:00
                                </span>
                            </div>
                            <div class="table-cell">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <button class="button button-cita modify" title="Modificar Cita">
                                            <i class="fa fa-eye mod-icon">
                                                Agenda
                                            </i>
                                        </button>
                                    </div>
                                    <div class="table-cell">
                                        <button class="button button-cita delete" title="Nueva Cita">
                                            <i class="fa fa-medkit add-icon">
                                                Pedir Cita
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row 2-->
                        <div class="table-row doc-row">
                            <div class="table-cell">
                                <span>
                                    Dermatológía
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    Doctor Héctor Gómez
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    Planta 1, Sala R
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    08:00-16:00
                                </span>
                            </div>
                            <div class="table-cell">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <button class="button button-cita modify" title="Modificar Cita">
                                            <i class="fa fa-eye mod-icon">
                                                Agenda
                                            </i>
                                        </button>
                                    </div>
                                    <div class="table-cell">
                                        <button class="button button-cita delete" title="Nueva Cita">
                                            <i class="fa fa-medkit add-icon">
                                                Pedir Cita
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row 3-->
                        <div class="table-row doc-row">
                            <div class="table-cell">
                                <span>
                                    Otorrinolaringología
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    Doctora Alicia Sánchez
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    Planta 1, Sala X
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    08:00-16:00
                                </span>
                            </div>
                            <div class="table-cell">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <button class="button button-cita modify" title="Modificar Cita">
                                            <i class="fa fa-eye mod-icon">
                                                Agenda
                                            </i>
                                        </button>
                                    </div>
                                    <div class="table-cell">
                                        <button class="button button-cita delete" title="Nueva Cita">
                                            <i class="fa fa-medkit add-icon">
                                                Pedir Cita
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin tabla medicos-->
                <!-- medico seleccionado-->
                <div class="modify-date" id="modify-date" title="Aqui se cargara la cita que se quiere modificar.">
                    <div>
                        <h2>
                            Agenda
                        </h2>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">
                            <label>
                                Name:
                                <span>
                                    John Smith
                                </span>
                            </label>
                        </div>
                        <div class="table-cell">
                            <label>
                                DNI:
                                <span>
                                    12345678X
                                </span>
                            </label>
                        </div>
                        <div class="table-cell">
                            <label>
                                Teléfono:
                                <span>
                                    777553322
                                </span>
                            </label>
                        </div>
                        <div class="table-cell">
                            <label>
                                Consulta/Despacho:
                                <span>
                                    Planta 1, Sala A
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="fecha">
                        <input required="" type="date"/>
                    </div>
                    <div class="table">
                        <div class="table-row">
                            <div class="table-head">
                                <span>
                                    Hora
                                </span>
                            </div>
                            <div class="table-head">
                                <span>
                                    Paciente
                                </span>
                            </div>
                            <div class="table-head">
                                <span>
                                    Historia Clínica
                                </span>
                            </div>
                            <div class="table-head">
                                <span>
                                </span>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <span>
                                    14:45
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    María Pérez González
                                </span>
                            </div>
                            <div class="table-cell">
                                <a href="">
                                    03456
                                </a>
                            </div>
                            <div class="table-cell">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <button class="button button-cita modify" title="Modificar Cita">
                                            <i class="fa fa-edit mod-icon">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="table-cell">
                                        <button class="button button-cita delete" title="Eliminar Cita">
                                            <i class="fa fa-eraser del-icon">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <span>
                                    15:00
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    Elvira Camacho Ruíz
                                </span>
                            </div>
                            <div class="table-cell">
                                <a href="">
                                    04256
                                </a>
                            </div>
                            <div class="table-cell">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <button class="button button-cita modify" title="Modificar Cita">
                                            <i class="fa fa-edit mod-icon">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="table-cell">
                                        <button class="button button-cita delete" title="Eliminar Cita">
                                            <i class="fa fa-eraser del-icon">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <span>
                                    15:15
                                </span>
                            </div>
                            <div class="table-cell">
                                <span>
                                    Pedro Flores Serrano
                                </span>
                            </div>
                            <div class="table-cell">
                                <a href="">
                                    03681
                                </a>
                            </div>
                            <div class="table-cell">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <button class="button button-cita modify" title="Modificar Cita">
                                            <i class="fa fa-edit mod-icon">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="table-cell">
                                        <button class="button button-cita delete" title="Eliminar Cita">
                                            <i class="fa fa-eraser del-icon">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="button button-cita back" id="back">
                            Cancelar
                        </button>
                    </div>
                </div>
                <div class="delete-date" id="delete-date" title="Aquí se cargara la cita que se quiere eliminar.">
                    <div>
                        <h2>
                            Anular Cita
                        </h2>
                    </div>
                    <div>
                        <h1>
                            Cita Anulada
                        </h1>
                    </div>
                    <div>
                        <div>
                            <button class="button button-cita back">
                                Cancelar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('comun/pie.php'); ?>
    </body>
</html>
