<!-- <div class="list-group">
  <a class="list-group-item" href="#"><i class="fa fa-info-circle  fa-fw" aria-hidden="true"></i>&nbsp; Description</a>
  <a class="list-group-item" href="#"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>&nbsp; System</a>
  <a class="list-group-item" href="#"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>&nbsp; Mode and Storage</a>
  <a class="list-group-item" href="#"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>&nbsp; Maintenance</a>
  <a class="list-group-item" href="#"><i class="fa fa-globe  fa-fw" aria-hidden="true"></i>&nbsp; Network</a>
  <a class="list-group-item" href="#"><i class="fa fa-camera fa-fw" aria-hidden="true"></i>&nbsp; Camera</a>
</div> -->
<?= $this->request->webroot.'camera' ?>
<div id="aside_sidebar">
	<ul>
	<li><a class="list-inline-item" href=""><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Description</a></li>

	<li><a class="list-inline-item has-sub"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>&nbsp;System</a>
		<ul>
			<li><a href="">Mode and Storage</a></li>
			<li><a href="">Maintenance</a></li>
			<li><a href="">User Management</a></li>
		</ul>
	</li>

	<li><a class="list-inline-item" href='http://localhost/~vietbq/web/network'><i class="fa fa-globe fa-fw" aria-hidden="true"></i>&nbsp;Network</a></li>

	<li><a class="list-inline-item" href=""><i class="fa fa-camera fa-fw" aria-hidden="true"></i>&nbsp;<?= $this->Html->link('Camera',['controller'=>'camera','action'=>'index']) ?></a></li>

	<li><?= $this->Html->link('abc',['controller'=>'camera','action'=>'index']) ?></li>
	</ul>
</div>

<style type="text/css">
	*{margin: 0;padding: 0;}

	#aside_sidebar{

		background: #eeeeee;
		font-size: 16px;
		padding: 0;
		margin: 0;
		width: 250px;
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

	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$(function(){
			var menu=$('#aside_sidebar ul');
			menu.find('.has-sub ul').hide();
		})
	})
</script>