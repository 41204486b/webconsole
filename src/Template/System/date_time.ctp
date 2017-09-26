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
  
  document.getElementById("currentTime").value() = date+'/'+month+'/'+year +"&nbsp; - &nbsp;"+hour + ":"+ minute+":"+second;

  // $('#currentTime').html(date+'/'+month+'/'+year +"&nbsp; - &nbsp;"+hour + ":"+ minute+":"+second);
}

setInterval(updateTime,10);

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datetimepicker1').datetimepicker({
    defaultDate: new Date(),
    format: 'DD/MM/YYYY hh:mm:ss A',
    sideBySide: true
});
  })
</script>
</head>
<body>
	<div class="container">
		<p class="title">Date & Time</p>
		<p>Automatic Date & Time</p>
		<label class="switch">
		  <input type="checkbox" checked>
  		<span class="slider round"></span>
		</label>

    <p>Manual Time Sync</p>
    <p> Device Time</p>

    <div class="container">
    <div class="row">
        <div class='col-sm-4'>
            <div class="form-group">
                <div class='input-group date' id='currentTime'>
                    <input type='text' class="form-control" id='currentTime'/>
                </div>
            </div>
        </div>
    </div>
  </div>
    <p>Set Time</p>
    <div id="editTime"></div>
 <div class="container">
    <div class="row">
        <div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control"/>
                    <!-- <?= $this->Form->input('setTime',['label'=>false,'type'=>'text']) ?> -->
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
  </div>


  <?= $this->Form->button('Save',['class'=>'btn btn primary']) ?>
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
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 24px;
}
/* Hide default HTML checkbox */
.switch input {display:none;}
/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 2px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider {
  background-color: #2196F3;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

</style>

</html>