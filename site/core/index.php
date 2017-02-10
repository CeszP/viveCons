<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include("head.html");
	 ?>
</head>
<body>
	<?php 
		include ("nav.html");
		include ("slider.html");
	 ?>
	
	<div class="logo">
		<img src="../img/logo.jpg" alt="">
	</div>
	<div>
		<h1 class="des_title">
			<font color="#FF4700">[</font> Nosotros <font color="#FF4700">]</font> <br>
			<hr>
		</h1>
		<h1 class="des_title">
			<font color="#FF4700">[</font> Servicios <font color="#FF4700">]</font> <br> <br>
			<hr>
		</h1>
		<div class="col">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quis, vel. Quo incidunt enim a officiis vel, voluptate ea laudantium, voluptates veniam facere ipsa, assumenda temporibus, illo ducimus cum aspernatur!
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam laboriosam sit dolore amet maxime nihil ducimus velit dignissimos eaque, est impedit cupiditate numquam aperiam eos, quis! Repudiandae, beatae aperiam pariatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error fugit tempora facere nulla, ab? 
			<img src="../img/logo.jpg" alt="" class="des_img">
			Excepturi illum tempora at totam eos praesentium laudantium, error quos ullam recusandae, quibusdam laboriosam est corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore perferendis, quod magnam quisquam beatae harum voluptate vero autem voluptatum? Officia doloribus placeat aliquid, magni itaque reiciendis error inventore voluptas ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, asperiores, culpa. Repellendus voluptates suscipit dolor ea tenetur molestiae nam ex dignissimos similique, delectus assumenda voluptatum expedita magni est fugit dolores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores eveniet est amet inventore dolorum quasi laboriosam neque nemo consequuntur exercitationem optio quaerat temporibus itaque, numquam culpa ipsam adipisci suscipit.
			<img src="../img/tarjeta.jpg" alt="" class="des_img">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores aut harum, atque, impedit aliquam natus consequuntur autem cum adipisci totam, itaque ipsum ad eos vel magnam non perspiciatis modi earum.
		</div>
		
		<div class="col">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit neque quaerat sit nulla dolores, dicta fugiat tempora molestiae modi at illum, cumque quae eum quidem vero! Provident asperiores quas, libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore assumenda voluptates modi molestiae similique pariatur excepturi in. Explicabo mollitia harum, nulla aspernatur? Nemo in, nulla maxime, dolorum similique voluptate libero!
			<img class="des_img sm_des_img" src="../img/logo_alone.png" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quaerat placeat quos harum et nisi consequatur laudantium odit, magnam. Dolorum quibusdam ratione quidem ullam expedita aliquam maiores, distinctio esse repudiandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nam a, libero suscipit enim architecto nobis? Eaque laboriosam fugit rem ducimus hic autem voluptatum officia molestiae tenetur facilis, nobis beatae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, quibusdam! Placeat molestiae dolores dicta perspiciatis aliquid. Expedita quae, distinctio laborum, illo voluptatibus, iusto minus est assumenda iure aperiam aspernatur sint.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nihil quae consequuntur beatae, reiciendis vel corrupti odit, sequi accusamus, fuga excepturi id architecto quod recusandae perspiciatis debitis nesciunt eos sint!
		</div>
	</div>
	<script src="../js/wallop.js" type="text/javascript"></script>
	<script>
  		var wallopEl = document.querySelector('.Wallop');
  		var slider = new Wallop(wallopEl);

  		autoplay(5000);

	function autoplay(interval) {
  		var lastTime = 0;  
  
  		function frame(timestamp) {
    		var update = timestamp - lastTime >= interval;
  
    		if (update) {
      			slider.next();
      			lastTime = timestamp;
    		}
  
    		requestAnimationFrame(frame);
  		}
		requestAnimationFrame(frame);
	};

</script>
<?php 
	include('footer.html');
 ?>
</body>
</html>