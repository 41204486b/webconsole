<h1>Description</h1>
 <?= $this->Form->create() ?>
 <div>
     <?= $this->Form->input('location',['label'=>'Location']) ?>
 </div>

 <div>
     <?= $this->Form->select('function',['None'=>'None','Record'=>'Record','Monitor'=>'Monitor'],['label'=>'Function']) ?>
 </div>
 <div>
     <?= $this->Form->input('version',['label'=>'Version']) ?>
 </div>
 <div>
     <?= $this->Form->button('Save') ?>
 </div>