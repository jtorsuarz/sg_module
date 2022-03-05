<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Calendario de Trabajo
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- FullCalendar -->
<link rel="stylesheet" href="<?php echo base_url() . '/assets/'?>vendor/fullcalendar/dist/fullcalendar.min.css">

<div class="page">
    <header class="ribbon">
        <h2>
            Calendar
        </h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Calendar</li>
        </ol>
    </header>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2>Draggable Events</h2>
                        </div>
                        <div class="panel-body">
                            <div class="demo-section">
                                <div class="demo-details">
                                    Drag and Drop these events to the Calendar
                                </div>
                                <div class="demo-elements external-events">
                                    <div class='fc-event'>Allison's Wedding</div>
                                    <div class='fc-event'>Meeting with CFO</div>
                                    <div class='fc-event'>Company Day</div>
                                    <div class='fc-event'>Holiday</div>
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
                    title: 'Allison\'s Birthday',
                    start: '2017-09-12',
                    color: '#1E88E5',
                },
                {
                    title: 'Team Meeting',
                    start: '2017-09-13',
                    color: '#1E88E5',

                }
                // etc...
            ],
        })
    })

</script>
<?= $this->endSection() ?>
