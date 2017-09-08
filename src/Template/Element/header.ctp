<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<nav class="row">	
	<div class="col-md-2"><img src="<?= $this->request->webroot; ?>img/logo_copy.png"></div>
	<h1 class="col-md-8">TRAFFIC MONITOR SYSTEM</h1>
	<div class="col-md-2">
	<ul >
		<li><i class="fa fa-user fa-fw fa-lg" aria-hidden='true'></i></li>
		<li><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i><?= $this->Html->link('Logout',['controller'=>'users','action'=>'login'],['class'=>'logout']) ?></li>
	</ul>
	</div>	
</nav>

<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Nunito);
	/*row{		
		background-color: #F9FAFB;
		border-bottom: 3px solid #295681;
	}
	.row ul{display: inline-block; }
	.row ul li {display: inline-block;}
	h1{
		line-height: 25px;
		font-family: Nunito, arial, verdana;
	}
	.row .text-center{text-align: center;}
	.row div ul{margin-top: 30px;}
*/
	.row{border-bottom:5px solid #254FA9;}
	.row img{float: left;width: 110px;height: 40px;
		margin: 15px 0 0 25px;
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
</style>

