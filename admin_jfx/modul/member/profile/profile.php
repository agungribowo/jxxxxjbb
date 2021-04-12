
<style type="text/css">
th {
  color: #000;
}
td {
  color: #000;
}


</style>

<!-- amchart -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


<script type="text/javascript" src="../assets/js/amcharts/newAmcharts.js"></script>





<script src="../assets/js/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA PROFILE MEMBER JFX
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">DATA PROFILE MEMBER JFX</li>
    </ol>

  </section>



  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- /.col (LEFT) -->
      <div class="col-md-3">
        <!-- LINE CHART -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">FOTO</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart" style="height: 300px">

              <div style=" margin: 0 auto">
                <center>
                  <img src="../../images/user/<?php echo $myData['img_user']; ?>" style="width: 200px" class="img-circle" alt="User Image">
                </center>

              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col (RIGHT) -->

      <div class="col-md-9">
        <!-- LINE CHART -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">DETAIL</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart" style="height: 300px">
              <table id="example" class="table table-striped table-bordered table-sm " cellspacing="0"
              width="100%">
              <tr>
                <th>NAMA</th>
                <th>NIK</th>
                <th>KANTOR</th>
              </tr>
              <tr>
                <td><?php echo $myData['nama']; ?></td>
                <td><?php echo $myData['nik']; ?></td>
                <td><?php echo $myData['office']; ?></td>
              </tr>
            </table>
            <br>
            <table id="example" class="table table-striped table-bordered table-sm " cellspacing="0"
            width="100%">
            <tr>
              <th>EXPIRED LOGIN</th>
              <th>REGISTER</th>
              <th>STATUS</th>
            </tr>
            <tr>
              <td><?php echo $myData['expired_date']; ?></td>
              <td><?php echo $myData['register_date']; ?></td>
              <td><?php echo $myData['status_user']; ?></td>
            </tr>
          </table>


          <div >


          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col (RIGHT) -->
</div>

<!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-md-3">
         <div class="box box-solid">
           <div class="box-header with-border">
             <h4 class="box-title">Draggable Events</h4>
           </div>
           <div class="box-body">
             <!-- the events -->
             <div id="external-events">
               <div class="external-event bg-green">Lunch</div>
               <div class="external-event bg-yellow">Go home</div>
               <div class="external-event bg-aqua">Do homework</div>
               <div class="external-event bg-light-blue">Work on UI design</div>
               <div class="external-event bg-red">Sleep tight</div>
               <div class="checkbox">
                 <label for="drop-remove">
                   <input type="checkbox" id="drop-remove">
                   remove after drop
                 </label>
               </div>
             </div>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /. box -->
         <div class="box box-solid">
           <div class="box-header with-border">
             <h3 class="box-title">Create Event</h3>
           </div>
           <div class="box-body">
             <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
               <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
               <ul class="fc-color-picker" id="color-chooser">
                 <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                 <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
               </ul>
             </div>
             <!-- /btn-group -->
             <div class="input-group">
               <input id="new-event" type="text" class="form-control" placeholder="Event Title">

               <div class="input-group-btn">
                 <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
               </div>
               <!-- /btn-group -->
             </div>
             <!-- /input-group -->
           </div>
         </div>
       </div>
       <!-- /.col -->
       <div class="col-md-9">
         <div class="box box-primary">
           <div class="box-body no-padding">
             <!-- THE CALENDAR -->
             <div id="calendar"></div>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /. box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>
   <!-- /.content -->

</div>

</section>
<!-- /.content -->
</div>

<!--
<script src="js/ina.js"></script> -->





<!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Data </h4>
      </div>
      <!-- memulai untuk konten dinamis -->
      <!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
      <div class="modal-body" id="data_siswa">
      </div>
      <!-- selesai konten dinamis -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel1">Data </h4>
      </div>
      <!-- memulai untuk konten dinamis -->
      <!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
      <div class="modal-body" id="data_siswa1">
      </div>
      <!-- selesai konten dinamis -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
// ini menyiapkan dokumen agar siap grak :)
$(document).ready(function(){
  // yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
  $('.view_data').click(function(){
    // membuat variabel id, nilainya dari attribut id pada button
    // id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
    var id = $(this).attr("id");

    // memulai ajax
    $.ajax({
      url: 'modul_peserta/view.php',  // set url -> ini file yang menyimpan query tampil detail data siswa
      method: 'post',   // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
      data: {id:id},    // nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
      success:function(data){   // kode dibawah ini jalan kalau sukses
        $('#data_siswa').html(data);  // mengisi konten dari -> <div class="modal-body" id="data_siswa">
        $('#myModal').modal("show");  // menampilkan dialog modal nya
      }
    });
  });
});
</script>

<script>
// ini menyiapkan dokumen agar siap grak :)
$(document).ready(function(){
  // yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
  $('.view_data1').click(function(){
    // membuat variabel id, nilainya dari attribut id pada button
    // id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
    var id = $(this).attr("id");

    // memulai ajax
    $.ajax({
      url: 'modul_peserta/view_modul.php',  // set url -> ini file yang menyimpan query tampil detail data siswa
      method: 'post',   // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
      data: {id:id},    // nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
      success:function(data){   // kode dibawah ini jalan kalau sukses
        $('#data_siswa1').html(data);  // mengisi konten dari -> <div class="modal-body" id="data_siswa">
        $('#myModal1').modal("show");  // menampilkan dialog modal nya
      }
    });
  });
});
</script>

<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
