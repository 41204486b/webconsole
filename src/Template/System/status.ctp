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

<table class="table-responsive">
	<tbody  >
		<tr>
			<th width="100px">Ram Usage</th>
			<!-- <td><canvas id="ramChart" width="400px" height="30px" style="border:1px solid #000000;"></canvas></td> --> 
			<td id="data1">&nbsp;<?= $status->ramUsage ?></td><td>%</td>
		</tr>
	</tbody>
</table>
<br>
<table>
		<tr>
			<th width="100px">CPU Usage</th>
			<!-- <td><canvas id="cpuChart" width="400px" height="30px" style="border:1px solid #000000;"></canvas></td> -->
			<td id='data2'>&nbsp;<?= $status->cpuUsage ?></td><td>%</td>
		</tr>
		</table>
		<br>
<table>
		<tr>
			<th width="100px">Free Space</th>
			<td id='data3'><?= $status->freeSpace ?></td><td>GB</td>
		</tr>
	
</table>
</div>

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
                dataType:'json',              
                url: requestUrl1,
                success : function(data) {
                		// if(response.status){
                		// 	var result = response.status;
                		// 	$('#data1').html(result.ramUsage);
                		// }
                		        	
                   		$('#data1').html(data.ramUsage);
                  		$('#data2').html(data.cpuUsage);
                		$('#data3').html(data.freeSpace);
                
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