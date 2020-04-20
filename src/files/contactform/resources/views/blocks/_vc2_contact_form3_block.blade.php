<?php
// Create id attribute allowing for custom "anchor" value.
		$id = 'contact2-block-' . $block['id'];
		if( !empty($block['anchor']) ) {
		    $id = $block['anchor'];
		}

		// Create class attribute allowing for custom "className" and "align" values.
		$className = 'contact2-block';
		if( !empty($block['className']) ) {
		    $className .= ' ' . $block['className'];
		}
		if( !empty($block['align']) ) {
		    $className .= ' align' . $block['align'];
		}
		if( $is_preview ) {
		    $className .= ' is-admin';
		}

		$contact_image = get_field('contact_image');
		$color = get_field('color');
		$contact_form = get_field('contact_form');
		$padding_top = get_field('padding_top');
		$padding_bottom = get_field('padding_bottom');

		?>
		<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="padding-top: {{ $padding_top }}; padding-bottom: {{ $padding_bottom }}">
			<div class="container">
				<div class="nf-row row item-center">
					<div class="nf-col col-lg-6 col-md-12">
						<div class="contact-image">
							<img src="{{ $contact_image }}" alt="image">
						</div>
					</div>
					<div class="nf-col col-lg-6 col-md-12">
						<div class="form-contact">
							{!! do_shortcode($contact_form) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
<?php     