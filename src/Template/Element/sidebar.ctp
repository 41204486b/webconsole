<nav id="sidebar">
	<h2 style="color: white; font-size: 16px; margin-left: 10px;line-height: 14px; font-weight: 400;">Configuration</h2>
	<ul>
	<li class="active"><a class="list-inline-item"><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-info-circle fa-fw fa-lg')).'&nbsp;Description', ['controller' => 'local', 'action' => 'index'], ['escape' => false]) ?></a></li>
	
	<li class="has-sub"><a ><i class="fa fa-pencil-square-o fa-fw fa-lg" aria-hidden="true"></i>&nbsp;System</a>
		<ul>
			<li><a href="">&nbsp;&nbsp;&nbsp;Mode and Storage</a></li>
			<li><a href="">&nbsp;&nbsp;&nbsp;Maintenance</a></li>
			<li><a href="">&nbsp;&nbsp;&nbsp;User Management</a></li>
		</ul>
	</li>	
	<li class="active"><a class="list-inline-item"><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-globe fa-fw fa-lg')).'&nbsp;Network', ['controller' => 'network', 'action' => 'index'], ['escape' => false]) ?></a></li>

	<li class="last"><a ><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-camera fa-fw fa-lg')).'&nbsp;Camera', ['controller' => 'camera', 'action' => 'index'], ['escape' => false]) ?></a></li>
	</ul>
</nav>

<!-- <style type="text/css">
	*{margin: 0;padding: 0;}

	#aside_sidebar{

		background: #eeeeee;
		font-size: 16px;
		padding: 0;
		margin: 0;
		left: 0;
		bottom: 0;
		height: 100%;
	}

	#aside_sidebar li{
		list-style-type: none;
	}

	#aside_sidebar ul li a{
		display: block;
		line-height: 50px;
		cursor: pointer;
		color: #555555;
		text-decoration: none;
		border: 1px;
	}

	#aside_sidebar ul li a:hover{
		text-decoration: none;
		color: #666666;
		background: #ffffff;
		border: 1px solid black;		
	}

	#aside_sidebar ul ul {
		display:block;
	}

	#aside_sidebar ul ul li a{
		text-decoration: none;
		font-size: 16px;
		line-height: 50px;
		display: block;
		transition: all 0.05s;
		padding-left: 25px;
	}

	#aside_sidebar ul ul li a:hover{
		text-decoration: none;
		border: 1px solid black;

	}
</style> -->

<script type="text/javascript">
	$(document).ready(function(){
		$(function(){
			var menu=$('#aside_sidebar ul');
			menu.find('.has-sub ul').hide();
		})
	})
</script>