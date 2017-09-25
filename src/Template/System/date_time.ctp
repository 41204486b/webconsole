<!DOCTYPE html>
<html>
<head>
	<title>DATE & TIME</title>
  <?= $this->Html->script('wickedpicker') ?>
  <?= $this->Html->css('wickedpicker') ?>
<script>

function updateTime(){
  var now = new Date();
  var year = now.getFullYear();
  var month = now.getMonth() <9 ? "0"+(now.getMonth()+1):(now.getMonth()+1);
  var date = now.getDate();
  var hour = now.getHours()<10 ? "0"+now.getHours():now.getHours();
  
  var minute = now.getMinutes()<10 ? "0"+now.getMinutes():now.getMinutes();
  
  // var second = now.getSeconds() <10 ? "0"+ now.getSeconds(): now.getSeconds();
  
  document.getElementById('currentTime').innerHTML = date+'/'+month+'/'+year +"&nbsp; - &nbsp;"+hour + ":"+ minute;
}

setInterval(updateTime,1000);

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#dialog").dialog({
      autoOpen:false,
      show:{
        effect:"blind",
        duration:10
      },
      hide:{
        effect:"blind",
        duration:10
      },
      modal:true,
      height:390,width:790,
    })
    $('#currentTime').on("click",function(){
      $("#dialog").dialog("open");
    })
    $('#datepicker').datepicker(
    );
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
	</div>
	<div class="container">
    <p>Date & Time</p>
    <div id='currentTime'></div>
    <div id="editTime"></div>
    <div id="dialog" title="Date & Time" class="container">
      <p>Date: <input type="text" id="datepicker"></p>
      <?= $this->Form->hour('') ?>
      <?= $this->Form->minute(['interval'=>1]) ?>  
    </div>
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