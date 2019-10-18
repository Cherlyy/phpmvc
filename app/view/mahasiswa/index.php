<div class="container mt-5">

	<div class="row">
		<div class="col-6">
			<h3>Register Student</h3>
			<?php foreach( $data['mhs'] as $mhs ) :  ?>
				<ul>
					<li><?= $mhs['Name']; ?></li>
					<li><?= $mhs['Matric no']; ?></li>
					<li><?= $mhs['Email']; ?></li>
					<li><?= $mhs['Course']; ?></li>
				</ul>
			<?php endforeach; ?>		
		</div>	
	</div>	

</div>