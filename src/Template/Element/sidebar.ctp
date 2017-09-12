<nav id="sidebar">
	<h2 style="color: white; font-size: 20px; margin-left: 10px;line-height: 14px; font-weight: 400;">Configuration</h2>
	<ul>
	<li><a class="list-inline-item"><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-info-circle fa-fw fa-lg')).'&nbsp;Description', ['controller' => 'local', 'action' => 'index'], ['escape' => false]) ?></a></li>
	
	<li class="has-sub"><a ><i class="fa fa-pencil-square-o fa-fw fa-lg" aria-hidden="true"></i>&nbsp;System</a>
		<ul>
			<li><a href="">&nbsp;&nbsp;&nbsp;Mode and Storage</a></li>
			<li><a href="">&nbsp;&nbsp;&nbsp;Maintenance</a></li>
			<li><a href="">&nbsp;&nbsp;&nbsp;User Management</a></li>
		</ul>
	</li>	
	<li ><a class="list-inline-item"><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-globe fa-fw fa-lg')).'&nbsp;Network', ['controller' => 'network', 'action' => 'index'], ['escape' => false]) ?></a></li>

	<li><a ><?= $this->Html->link($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-camera fa-fw fa-lg')).'&nbsp;Camera', ['controller' => 'camera', 'action' => 'index'], ['escape' => false]) ?></a></li>
	</ul>
</nav>
