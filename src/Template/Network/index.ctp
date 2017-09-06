<h1><?= $this->fetch('title') ?></h1>
<h1>TCP/IP</h1>
<?= $this->Form->create() ?>
<div>
	<?= $this->Form->input('ipv4',['label'=>'IPv4 Address']) ?>
</div>

<div>
	<?= $this->Form->input('subnetmask',['label'=>'IPv4 Subnetmask']) ?>
</div>

<div>
	<?= $this->Form->input('gateway',['label'=>'IPv4 Default Gateway']) ?>
</div>

<div>
	<?= $this->Form->input('mtu',['label'=>'MTU']) ?>
</div>
<h1>DNS</h1>
<div>
	<?= $this->Form->input('dnsserver',['label'=>'Preferred DNS Server']) ?>
</div>

<div>
	<?= $this->Form->input('alternate',['label'=>'IPv4 Address']) ?>
</div>

<div>
	<?= $this->Form->button('Save') ?>
</div>
<div class="shopping-cart">
    <h3>Your Cart</h3>
    <?= $this->fetch('cart', 'Your cart is empty') ?>
</div>