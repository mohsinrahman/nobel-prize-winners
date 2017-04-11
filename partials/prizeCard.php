
<div class="col-md-4">
	<div class="card">
	  <div class="card-block">
	    <h3 class="card-title text-center bigCase"><span class="cat"><?= $key['category']; ?></span></h3>
	    <h4 class="card-title"><?= $key['year']; ?></h4>
  			<p><?= $key['laureates'][0]['motivation'] ?></p>
	    
	     <?php foreach($key['laureates'] as $innerKey ) : ?>
  				<h6 class="badge badge-warning"><?= $innerKey['id']; ?></h6>
  				<h3 class="shado"><?= $innerKey['firstname']. " " .$innerKey['surname']  ?></h3>
  		<?php endforeach; ?>
	  
	  </div>
	</div>
</div>

















