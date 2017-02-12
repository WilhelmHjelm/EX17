<?php
/**
 * Template Name: Examensklassen
 *
 * @package EX17
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<div class="container">
  <div class="content">
			<div class="grid">

        <?php
        // Custom post type "grauates" list

            $args = array(
              'post_type' => 'examensklassen',
              'orderby' => 'title',
	            'order'   => 'ASC',

            );
            $examensklassen = new WP_Query( $args );
            if( $examensklassen->have_posts() ) {
              $i = 1;
              while( $examensklassen->have_posts() ) {
                $examensklassen->the_post();
                if($i == 1) {$graduateColor = "forelasare-color1";}
                if($i == 2) {$graduateColor = "forelasare-color2";}
                if($i == 3) {$graduateColor = "forelasare-color3";}
                if($i == 4) {$graduateColor = "forelasare-color4"; $i = 0;}
                $i++;
                ?>

				<div class="grid__item" data-size="<?php the_field('size'); ?>">
					<a href="" class="img-wrap"><img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" />
						<div class="description description--grid">
							<h3><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
							<div class="details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</a>
				</div>

        <?php
      }
    }
    else { ?>

          <p>nooooo</p>

    <?php }
  ?>

        <div class="preview">
    				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
    				<div class="description description--preview"></div>
    			</div>
    </div>
  </div>
</div>

  <script src="<?php echo get_template_directory_uri();?>/js/graduates/modernizr-custom.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/graduates/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/graduates/masonry.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/graduates/classie.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/graduates/main.js"></script>

<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : -0.5,
					y : 1
				},
				onOpenItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 50);
							el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
							el.style.transform = 'scale3d(0.1,0.1,1)';
							el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
							el.style.transition = 'opacity .4s, transform .4s';
							el.style.WebkitTransform = 'scale3d(1,1,1)';
							el.style.transform = 'scale3d(1,1,1)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';
							});
						}
					});
				}
			});
		})();
	</script>
