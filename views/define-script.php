<?php

define('SCRIPT_JQUERY3','
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>');

define('SCRIPT_BOOTSTRAP','
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>');

define('SCRIPT_JQUERY_UI','
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>');

define('SCRIPT_SLIMSCROLL','
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>');

define('SCRIPT_FASTCLICK','
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>');

define('SCRIPT_ADMINLTE','
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>');

define('SCRIPT_FULLCALENDAR','
<!-- fullCalendar -->
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!--langue-->
<script src="dist/js/fr.js"></script>
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn\'t need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element\'s text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data(\'eventObject\', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($(\'#external-events div.external-event\'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $(\'#calendar\').fullCalendar({
      defaultView: \'listWeek\',
      businessHours: true,
      header    : {
        left  : \'prev,next today\',
        center: \'title\',
        right : \'listDay,listWeek,listMonth\'
      },
      lang: \'fr\',
      buttonText: {
        today: \'aujourd hui\',
        month: \'mois\',
        week : \'semaine\',
        day  : \'jour\'
      },
      //Random default events
      events    : [
        {
          title          : \'Tâches de la journée\',
          start          : new Date(y, m, 1),
          backgroundColor: \'#f56954\', //red
          borderColor    : \'#f56954\' //red
        },
        {
          title          : \'Tâche longue\',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: \'#f39c12\', //yellow
          borderColor    : \'#f39c12\' //yellow
        },
        {
          title          : \'Réunion\',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: \'#0073b7\', //Blue
          borderColor    : \'#0073b7\' //Blue
        },
        {
          title          : \'Déjeuner\',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: \'#00c0ef\', //Info (aqua)
          borderColor    : \'#00c0ef\' //Info (aqua)
        },
        {
          title          : \'Anniversaire\',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: \'#00a65a\', //Success (green)
          borderColor    : \'#00a65a\' //Success (green)
        },
        {
          title          : \'Google\',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : \'http://google.com/\',
          backgroundColor: \'#3c8dbc\', //Primary (light-blue)
          borderColor    : \'#3c8dbc\' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element\'s stored Event Object
        var originalEventObject = $(this).data(\'eventObject\')

        // we need to copy it, so that multiple events don\'t have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css(\'background-color\')
        copiedEventObject.borderColor     = $(this).css(\'border-color\')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $(\'#calendar\').fullCalendar(\'renderEvent\', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($(\'#drop-remove\').is(\':checked\')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = \'#3c8dbc\' //Red by default
    //Color chooser button
    var colorChooser = $(\'#color-chooser-btn\')
    $(\'#color-chooser > li > a\').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css(\'color\')
      //Add color effect to button
      $(\'#add-new-event\').css({ \'background-color\': currColor, \'border-color\': currColor })
    })
    $(\'#add-new-event\').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $(\'#new-event\').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $(\'<div />\')
      event.css({
        \'background-color\': currColor,
        \'border-color\'    : currColor,
        \'color\'           : \'#fff\'
      }).addClass(\'external-event\')
      event.html(val)
      $(\'#external-events\').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $(\'#new-event\').val(\'\')
    })
  })
</script>');

define('SCRIPT_CALENDRIER','
<script>
  //new calendar
  var table = document.getElementById("tableID");
   if (table != null) {
       for (var i = 0; i < table.rows.length; i++) {
           for (var j = 0; j < table.rows[i].cells.length; j++)
           table.rows[i].cells[j].onclick = function () {
               tableText(this);
           };
       }
   }

   function tableText(tableCell) {
       alert(tableCell.getAttribute("id"));
   }
</script>');

define('SCRIPT_CK_EDITOR','
<!-- CK Editor -->
<script src="../bower_components/ckeditor/ckeditor.js"></script>
<script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace(\'editor1\')
          //bootstrap WYSIHTML5 - text editor
          $(\'.textarea\').wysihtml5()
        })
      </script>');

define('SCRIPT_ICHECK','
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $(\'input\').iCheck({
      checkboxClass: \'icheckbox_square-blue\',
      radioClass: \'iradio_square-blue\',
      increaseArea: \'20%\' /* optional */
    });
  });
</script>');

define('SCRIPT_SELECT2','
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>');

define('SCRIPT_INPUTMASK','
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>');

define('SCRIPT_DATE_RANGE_PICKER','
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>');

define('SCRIPT_DATE_COLOR_PICKER','
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $(\'.select2\').select2()

      //Datemask dd/mm/yyyy
      $(\'#datemask\').inputmask(\'dd/mm/yyyy\', { \'placeholder\': \'dd/mm/yyyy\' })
      //Datemask2 mm/dd/yyyy
      $(\'#datemask2\').inputmask(\'mm/dd/yyyy\', { \'placeholder\': \'mm/dd/yyyy\' })
      //Money Euro
      $(\'[data-mask]\').inputmask()

      //Date range picker
      $(\'#reservation\').daterangepicker()
      //Date range picker with time picker
      $(\'#reservationtime\').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: \'MM/DD/YYYY h:mm A\' })
      //Date range as a button
      $(\'#daterange-btn\').daterangepicker(
        {
          ranges   : {
            \'Today\'       : [moment(), moment()],
            \'Yesterday\'   : [moment().subtract(1, \'days\'), moment().subtract(1, \'days\')],
            \'Last 7 Days\' : [moment().subtract(6, \'days\'), moment()],
            \'Last 30 Days\': [moment().subtract(29, \'days\'), moment()],
            \'This Month\'  : [moment().startOf(\'month\'), moment().endOf(\'month\')],
            \'Last Month\'  : [moment().subtract(1, \'month\').startOf(\'month\'), moment().subtract(1, \'month\').endOf(\'month\')]
          },
          startDate: moment().subtract(29, \'days\'),
          endDate  : moment()
        },
        function (start, end) {
          $(\'#daterange-btn span\').html(start.format(\'MMMM D, YYYY\') + \' - \' + end.format(\'MMMM D, YYYY\'))
        }
      )

      //Date picker
      $(\'#datepicker,#date-picker\').datepicker({
        autoclose: true
      })

      //iCheck for checkbox and radio inputs
      $(\'input[type="checkbox"].minimal, input[type="radio"].minimal\').iCheck({
        checkboxClass: \'icheckbox_minimal-blue\',
        radioClass   : \'iradio_minimal-blue\'
      })
      //Red color scheme for iCheck
      $(\'input[type="checkbox"].minimal-red, input[type="radio"].minimal-red\').iCheck({
        checkboxClass: \'icheckbox_minimal-red\',
        radioClass   : \'iradio_minimal-red\'
      })
      //Flat red color scheme for iCheck
      $(\'input[type="checkbox"].flat-red, input[type="radio"].flat-red\').iCheck({
        checkboxClass: \'icheckbox_flat-green\',
        radioClass   : \'iradio_flat-green\'
      })

      //Colorpicker
      $(\'.my-colorpicker1\').colorpicker()
      //color picker with addon
      $(\'.my-colorpicker2\').colorpicker()

      //Timepicker
      $(\'.timepicker\').timepicker({
        showInputs: false
      })
    })
  </script>');



$aConfigTousLesScript = [
  'jquery3'         => SCRIPT_JQUERY3,
  'bootstrap'       => SCRIPT_BOOTSTRAP,
  'jqueryui'        => SCRIPT_JQUERY_UI,
  'slimscroll'      => SCRIPT_SLIMSCROLL,
  'fastclick'       => SCRIPT_FASTCLICK,
  'adminlte'        => SCRIPT_ADMINLTE,
  'fullcalendar'    => SCRIPT_FULLCALENDAR,
  'calendrier'      => SCRIPT_CALENDRIER,
  'ckeditor'        => SCRIPT_CK_EDITOR,
  'icheck'           => SCRIPT_ICHECK,
  'select2'         => SCRIPT_SELECT2,
  'inputmask'       => SCRIPT_INPUTMASK,
  'daterangepicker' => SCRIPT_DATE_RANGE_PICKER,
  'datecolorpicker' => SCRIPT_DATE_COLOR_PICKER

];
