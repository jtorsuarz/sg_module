<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Calendario de Trabajo
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- FullCalendar -->
<link rel="stylesheet" href="<?php echo base_url() . '/assets/' ?>vendor/fullcalendar/dist/fullcalendar.min.css">
<style>
    .event {
        background-color: red;
    }
    .redEvent{

        background-color: red;
    }
</style>

<div class="page">
    <header class="ribbon">
        <h2>
            Calendario
        </h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Calendario</li>
        </ol>
    </header>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2>Nuevo Evento</h2>
                        </div>
                        <div class="panel-body">
                            <div class="demo-section">
                                <div class="demo-details">
                                    Arrastre un evento al día asignado
                                </div>
                                <div class="demo-elements external-events">
                                    <div class='fc-event'>Dia Libre</div>
                                    <div class='fc-event'>No laboral</div>
                                    <div class='fc-event'>Turno de trabajo</div>
                                    <div class='fc-event'>Vacaciones</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="panel" style="width:100%; overflow-x:auto">

                        <div id="calendar" style="min-width:600px"></div>


                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.page-content -->
</div>


<?= $this->endSection() ?>

<?= $this->section('linksNeed') ?>

<!-- FullCalendar -->
<script src="<?php echo base_url() . '/assets/' ?>vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url() . '/assets/' ?>vendor/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() . '/assets/' ?>vendor/fullcalendar/dist/fullcalendar.min.js"></script>
<script>
    // POR EL POST PASAR LOS VALORES DE FECHA DE INICIO DE VACACIONES, CUMPLEAÑOS Y FIN DE VACAS  CAMBIAR VARIABLES ABAJO
    var FechaInicioVacaciones = '2022-03-13';
    var FechaFinVacaciones = '2022-03-23';
    var FechaCumple = '2022-03-13';
    $(function () {


        $('.external-events .fc-event').each(function () {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        $('#calendar').fullCalendar({
            header: {

                left: 'title',
                right: 'today prev,next month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            events: [
                {
                    title: 'Día Festivo',
                    start: '2022-03-06',
                    color: '#787878',

                }, {
                    title: 'Día Festivo',
                    start: '2022-03-13',
                    color: '#787878',

                },
                {
                    title: 'Día Festivo',
                    start: '2022-03-20',
                    color: '#787878',

                },
                {
                    title: 'Día Festivo',
                    start: '2022-03-27',
                    color: '#787878',

                },
                {
                    title: 'Inicio de vacaciones',
                    start: FechaInicioVacaciones,
                    color: '#e67a7a',
                },
                {
                    title: 'Fin de Vacaciones',
                    start: FechaFinVacaciones,
                    color: '#e67a7a',

                },
                {
                    title: '¡Feliz Cumpleaños!',
                    start: FechaCumple,
                    color: '#EE82EE',
                }
            ],

        })
    })

</script>
<?= $this->endSection() ?>
