
<button id="button" data-rel="<?php echo $this->Url->build(['_ext' => 'json']); ?>">Click me</button>
<?php 
use Cake\I18n\Time;
$now = Time::now();
echo $now ?>
<h3>Result</h3>
<div id="result">
<i>n/a</i>
</div>
<script type="text/javascript">
$(function() {
	$('#button').click(function() {
		var targeturl = $(this).data('rel');
		$.ajax({
			type: 'get',
			url: targeturl,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			},
			success: function(response) {
				if (response.result) {
					var result = response.result;
					$('#result').html(result.now);
				}
			},
			error: function(e) {
				alert("An error occurred: " + e.responseText.message);
				console.log(e);
			}
		});
	});

});
</script>