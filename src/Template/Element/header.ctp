<header id="header" class="inner-grid">
	
	<img class="col" id="img" src="<?= $this->request->webroot; ?>img/logo_copy.png"></div>
	<h1 id="logo" class="col">TRAFFIC MONITOR SYSTEM</h1>
	
	<ul id="logout" class="col">
		<li><i class="fa fa-user fa-fw fa-lg" aria-hidden='true'></i><?= $this->request->session()->read('Auth.User.name') ?></li>
		<li><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i><?= $this->Html->link('Logout',['controller'=>'users','action'=>'login'],['class'=>'logout']) ?></li>
	</ul>
</header>

<!-- <style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Nunito);
	

	body{		
		display: inline-grid;
		grid-template-areas: 
		"img logo logout";
		grid-template-rows: 15% 1fr 10%;
		height: 80px;		
	}

	#img{grid-area: img;}
	#logo{grid-area: logo;}
	#logout{grid-area: logout;}


	.row{border-bottom:5px solid #254FA9;}
	.row img{float: left;width: 110px;height: 40px;
	}

	.row h1{
  		text-align: center;
  		margin-left: auto;
  		margin-right: auto; 		
	}
	
	.row div ul{	
		list-style-type: none;
		float: right;
	}
	.row div ul li{
		padding-top: 25px;
		float: left;
		position: relative;
		text-decoration: none;
		display: inline-block;
	}

	.row ul li:hover{
		text-decoration: none;
	}

	.logout{
		color: #1A2F4B;
	}

	.logout:hover{
		text-decoration: none;
		cursor: pointer;
	}
</style> --> 

