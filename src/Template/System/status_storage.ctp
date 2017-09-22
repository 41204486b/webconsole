<div class="container">
<p class="title">Maintenance</p>

<table class="table-responsive">
	<tbody>
		<tr>
			<td width="150px;"><button style="width: 100px;">Reboot</button></td>
			<td>Reboot the local</td>
		</tr>
	</tbody>
</table><br/>
<table>
	<tbody>
		<tr>
			<td width="150px;"><button style="width: 100px;">Reset Factory</button></td>
			<td>Reset Factory</td>
		</tr>
	</tbody>
</table>

<p class="title">Status</p>

<table id="data" class="table-responsive">
	<tbody  >
		<tr>
			<th width="100px">Ram Usage</th>
			<td><canvas id="ramChart" width="400px" height="30px" style="border:1px solid #000000;"></canvas></td> 
			<td id="data1">&nbsp;<?= $status->ramUsage ?>%</td>
		</tr>
		<br>
		<tr>
			<th width="100px">CPU Usage</th>
			<td><canvas id="cpuChart" width="400px" height="30px" style="border:1px solid #000000;"></td>
			<td id='data2'>&nbsp;<?= $status->cpuUsage ?>%</td>
		</tr>
		<br>
		<tr>
			<th width="150px">Free Space</th>
			<td id='data3'><?= $status->freeSpace ?>GB</td>
		</tr>
	</tbody>
</table><br/>
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
</style>

<script type="text/javascript">
	
    $(function() {
        function check() {             
           var requestUrl  = '<?= $this->Url->build(['_ext' => 'json']) ?>';
           var requestUrl1 = '<?= $this->Url->build(['controller'=>'system','action'=>'ajax'])?>'
           $.ajax({
                type:"POST",               
                url: requestUrl,
                success : function(response) {
                		        	
                   		$('#data1').html(data.ramUsage);
                  		// $('#data2').html(data.cpuUsage);
                		// $('#data3').html(data.freeSpace);
                
                },
                error : function() {
                	alert("An error occurred: ")
                   die();
                }
            });
        }
        setInterval(check, 5000);
    });
</script>