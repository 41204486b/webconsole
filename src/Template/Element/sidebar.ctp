<nav id="sidebar">
	<h2 style="color: white; font-size: 20px; margin-left: 10px;line-height: 14px; font-weight: 400;">Configuration</h2>
	<ul>
	<li><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-cog fa-fw fa-lg')).'&nbsp;Detail', ['controller' => 'local', 'action' => 'index'], ['escape' => false]) ?></li>
	
	<li class=" has-sub"><a id="menuSystem"><i class="fa fa-pencil-square-o fa-fw fa-lg" aria-hidden="true"></i>&nbsp;System</a>
		<ul>
			<li><?= $this->Html->link('Maintenance and Status',['controller'=>'system','action'=>'statusStorage']) ?></li>
			<li><?= $this->Html->link('User Management',['controller'=>'users','action'=>'index']) ?></li>
			<li><?= $this->Html->link('Date and Time',['controller'=>'system','action'=>'dateTime'])?></li>
		</ul>
	</li>	
	<li><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-globe fa-fw fa-lg')).'&nbsp;Network', ['controller' => 'network', 'action' => 'index'], ['escape' => false]) ?></li>

	<li><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-camera fa-fw fa-lg')).'&nbsp;Camera', ['controller' => 'camera', 'action' => 'index'], ['escape' => false])?></li>
	</ul>
</nav>



<script type="text/javascript">
	
$(document).ready(function(){
 	var url = window.location;
 	if($('ul >li> a[href="'+url+'"]').parent().is('ul')){
 		$(this).addClass('active');
 	}

 	$('ul >li> a[href="'+url+'"]').parent().addClass('active');
 	$('ul >li> a').filter(function(){
 		return this.href == url;
 	}).parent().addClass('active');
 	if($('#sidebar>ul>li.has-sub>ul>li').hasClass('active')){
 		$('#sidebar>ul>li.has-sub>ul').css('display','block');
 		// $('#sidebar>ul>li.has-sub>ul').slideDown();
 	}
 	// $('ul ul a[href="'+url+'"]').parent('li').next('ul').slideDown();
	$('#sidebar>ul>li>a').click(function(){
		var checkElement = $(this).next();
		if(checkElement.is('ul')){
			checkElement.slideToggle();
	 	}
	})
})

</script>