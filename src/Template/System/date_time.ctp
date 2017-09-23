<!DOCTYPE html>
<html>
<head>
	<title>DATE & TIME</title>
	

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
		<div class="well">
  <div id="datetimepicker4" class="input-append">
    <input data-format="yyyy-MM-dd" type="text"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div>
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
<script type="text/javascript">
	<script type="text/javascript">
  $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
  });
</script>
</script>
</html>