<section class="pt80">
	<div class="text-center">
		<h1 class="section-title">Contáctanos</h1>
	</div>
	<div class="container-fluid pt40">
		<div class="row flex-md">
			<div class="col-md-6 py40">
				
				<div class="contact-widget">
				<form class="row px30 contact-form" id="template-contactform" name="template-contactform" 
				action="<?php bloginfo('template_url'); ?>/inc/contact.php" method="post">

						<div class="form-process"></div>
										

						<div class="col-xs-12 mb20">
							<label for="template-contactform-name">Nombre <small>*</small></label>
							<input id="template-contactform-name" type="text" name="name" value="" class="sm-form-control required" />
						</div>

						<div class="col-sm-6 mb20">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input id="template-contactform-email" type="mail" name="email" value="" class="required email sm-form-control" required/>
						</div>

						<div class="col-sm-6 mb20">
							<label for="template-contactform-phone">Teléfono</label>
							<input id="template-contactform-phone" type="text" name="phone" value="" class="sm-form-control" />
						</div>

						<div class="clear"></div>

						<div class="clear"></div>

						<div class="col-xs-12 mb20">
							<label for="template-contactform-message">Mensaje <small>*</small></label>
							<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30" required></textarea>
						</div>

						<div id="sms" class="col_full col-xs-12 contact-form-result">
							<div class="style-msg">
								<div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You successfully read this important alert message.</div>
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							</div>
						</div>

						<div class="col-xs-12">
							<button class=" btn button button-rounded button-xlarge" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar</button>
						</div>

					</form>
					</div>
			</div>
			<div class="col-md-6 bg-cover mantenimiento-img img-arrow-right"></div>
		</div>
	</div>
</section>

<section id="map">
</section>