<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Vive Grupo Constructor</title>
	
	<link type="image/x-icon" href="../img/logo_alone.png" rel="icon" /> 
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/animate.css">
	<script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
	
	<script>
		$(function() {
    		var pull = $('#pull');
    		menu = $('nav ul');
    		menuHeight = menu.height();
 
    		$(pull).on('click', function(e) {
        		e.preventDefault();
        		menu.slideToggle();
    		});
		});
 
		$(window).resize(function(){
    		var w = $(window).width();
    		if(w > 320 && menu.is(':hidden')) {
        		menu.removeAttr('style');
    		}
		});
	</script>
	
</head>
<body>
	<?php 
		include ("nav.php");
		include ("slider.html");
	 ?>
	<div id="logo">
		<img src="../img/logo.jpg" alt="">
	</div>
	<div>
		<h1 class="des_title">
			Nosotros <br>
			<hr>
		</h1>
		<h1 class="des_title">
			Servicios <br>
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
	<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {

								slitslider.next();
								return false;

							} );

							$navArrows.children( ':first' ).on( 'click', function() {
								
								slitslider.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
</body>
</html>