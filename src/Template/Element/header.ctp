<header id="header" class="inner-grid">
	<img class="col" id="img" src="<?= $this->request->webroot; ?>img/logo_copy.png"></div>
	<h1 id="logo" class="col">TRAFFIC MONITOR SYSTEM</h1>
	
	<ul id="logout" class="col">
		<li><i class="fa fa-user fa-fw fa-lg" aria-hidden='true'></i><?= $this->request->session()->read('Auth.User.username') ?></li>
		<li><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i><?= $this->Html->link('Logout',['controller'=>'users','action'=>'login'],['class'=>'logout']) ?></li>
	</ul>
</header>