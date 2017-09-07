<nav class="row">
	<ul>
		<li class="col-md-1 text-center"><h3>CENTIC</h3></li>
		<li class="col-md-10 text-center"><h1>TRAFFIC MONITOR SYSTEM</h1></li>
		<li class="col-md-1 text-center"><?= $this->Html->link('Logout',['controller'=>'users','action'=>'login']) ?></li>
		<li><i class="fa fa-sign-out" aria-hidden="true"></i></li>
	</ul>
</nav>

<style type="text/css">
	
	.row ul li {display: inline-block;}
	.row ul li h3{
		line-height: 50px;
	}
	.row ul li h1{
		line-height: 50px;
	}
	.row .text-center{text-align: center;}
</style>

