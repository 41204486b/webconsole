<?php
$options= ['Yes'=>'Automatic Time Sync','No'=>'Manual Time Sync']
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATE & TIME</title>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<link rel="stylesheet"
  href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css">
<script src="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
function updateTime(){
 var now = new Date();
  var year = now.getFullYear();
  var month = now.getMonth() <9 ? "0"+(now.getMonth()+1):(now.getMonth()+1);
  var date = now.getDate();
  var hour = now.getHours()<10 ? "0"+now.getHours():now.getHours();
  
  var minute = now.getMinutes()<10 ? "0"+now.getMinutes():now.getMinutes();
  
  var second = now.getSeconds() <10 ? "0"+ now.getSeconds(): now.getSeconds();
  
  document.getElementById("currentTime").value = year+'-'+month+'-'+date +"  "+hour + ":"+ minute+":"+second;

  // $('#currentTime').html(date+'/'+month+'/'+year +"&nbsp; - &nbsp;"+hour + ":"+ minute+":"+second);
}
setInterval(updateTime,100);


</script>
<script type="text/javascript">
  $(document).ready(function(){  
    $('#datetimepicker1').datetimepicker({
    defaultDate: new Date(),
    format: 'YYYY-MM-DD  HH:mm:ss',
    sideBySide: true
  })
  })
</script>
<script type="text/javascript">
   $(document).ready(function(){
    if($('#autosync-yes').is(':checked')){
       $('#settime').prop('disabled',true);
    }
   $('#autosync-yes').click(function(){
    $('#settime').prop('disabled',$(this).is(':checked'));
   })
   $('#autosync-no').click(function(){
    $('#settime').prop('disabled',!$(this).is(':checked'));
   })
    })
</script>
</head>
<body>
  <?= $this->Form->create($system) ?>
	<div class="container">
		<p class="title">Date & Time</p>

 <?= $this->Form->input('autoSync', [
    'templates' => [
        'radioWrapper' => '<div class="container">{{label}}</div><br>'
    ],
    'type' => 'radio',
    'options' => $options,
    'required' => 'required',
    'label' => false
]); ?>
 
    <p> Device Time</p>
    
    <div class='container' style="width: 300px; float: left;">
<input type='text' class="form-control" id='currentTime' disabled width="300px" />
<br>

</div>
  </div>

 <div class="container">

   <p>Set Time</p>
    <div class="row">
        <div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" id="settime" name="setTime"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="container">
  <?= $this->Form->button($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-floppy-o fa-fw fa-lg')).'&nbsp;Save',['class'=>'btn btn primary']) ?>
  </div>
</body>

<style type="text/css">
p.title{
		background: #234990;
		font-size: 16px;
		border: 1px solid black;
		border-radius: 10px;
		color: white;
		padding-left: 20px;
		margin-top: 30px;
		line-height: 25px;
	}

	th,td{text-align: center;}

</style>

</html>