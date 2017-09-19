<nav id="sidebar">
	<h2 style="color: white; font-size: 20px; margin-left: 10px;line-height: 14px; font-weight: 400;">Configuration</h2>
	<ul class="a">
	<li><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-info-circle fa-fw fa-lg')).'&nbsp;Description', ['controller' => 'local', 'action' => 'index'], ['escape' => false]) ?></li>
	
	<li class=" has-sub"><a><i class="fa fa-pencil-square-o fa-fw fa-lg" aria-hidden="true"></i>&nbsp;System</a>
		<ul>
			<li><?= $this->Html->link('Mode and Storage',['controller'=>'system','action'=>'modeStorage']) ?></li>
			<li><a>Maintenance</a></li>
			<li><?= $this->Html->link('User Management',['controller'=>'users','action'=>'index']) ?></li>
		</ul>
	</li>	
	<li><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-globe fa-fw fa-lg')).'&nbsp;Network', ['controller' => 'network', 'action' => 'index'], ['escape' => false]) ?></li>

	<li><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-camera fa-fw fa-lg')).'&nbsp;Camera', ['controller' => 'camera', 'action' => 'index'], ['escape' => false])?></li>
	</ul>
</nav>



<script type="text/javascript">
	// var clientStates = [];
	// ( function( $ ) {
	// $(document).ready(function(){
	// 	$('#sidebar>ul>li>a').click(function(){
	// 		$('#sidebar li').removeClass('active');
	// 		//$(this).closest('li').addClass('active');
	// 		var checkElement = $(this).next();
	// 		// if((checkElement.is('ul'))&& (!checkElement.is(':visible'))){
	// 		// 	checkElement.slideDown();
	// 		// }else if((checkElement.is('ul'))&&(checkElement.is(':visible'))){
	// 		// 	checkElement.slideUp();
	// 		// }_
	// 		if(checkElement.is('ul')){
	// 			checkElement.slideToggle();
	// 		}
	// 	});
	// });
	// } )( jQuery );
	
 $(function(){
 	var url = window.location;
 	$('ul.a a[href="'+url+'"]').parent().addClass('active');
 	$('ul.a a').filter(function(){
 		return this.href == url;
 	}).parent().addClass('active');
	$('#sidebar>ul>li>a').click(function(){
		var checkElement = $(this).next();
		if(checkElement.is('ul')){
			checkElement.slideToggle();
	 	}
	})

 })
</script>