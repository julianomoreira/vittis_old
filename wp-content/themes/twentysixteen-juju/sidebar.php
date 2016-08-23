<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<section class="bio widget">
			<?php if  ( file_exists( TEMPLATEPATH . '/images/laise-picture-1.jpg' ) ) { ?>
				<p><img src="<?php bloginfo('template_url'); ?>/images/laise-picture-1.jpg" alt="Laise Moreira" /></p>
				<?php } else { ?>
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<? } ?>
		<p>Eu sou Laise Sousa Moreira, agronôma e mestre em horticultura irrigada pela Universidade do Estado da Bahia. <br /><a href="http://www.vittis.com.br/sobre-laise-moreira/">Leia um pouco mais sobre minha história</a></p>
		</section>

		<!-- Begin MailChimp Signup Form -->
		<!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css"> -->
		<style type="text/css">
			#mc_embed_signup{
				background:#efefef;
				clear:left;
				font:14px Helvetica,Arial,sans-serif;
				padding: 1em;
				margin-bottom: 2em;
			}
			.mc-field-group {
				padding: .5em 0;
			}
			.mc-field-group label {
				margin-bottom: .5em;
				display: inline-block;
			}
			#mce-responses {
				padding: .5em 0;
			}
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
		<div id="mc_embed_signup">
		<form action="//julianomoreira.us1.list-manage.com/subscribe/post?u=ef9a24d01362c4c74d938c860&amp;id=6c00829c54" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
		<h3>Cadastre-se e receba gratuitamente tudo sobre uva!</h3>
		<div class="mc-field-group">
			<label for="mce-FNAME">Nome </label>
			<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
		</div>
		<div class="mc-field-group">
			<label for="mce-EMAIL">Seu endereço de e-mail <span class="asterisk">*</span>
		</label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ef9a24d01362c4c74d938c860_6c00829c54" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="Cadastrar" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		    </div>
		</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text'; /**
		 * Translated default messages for the $ validation plugin.
		 * Locale: PT_PT
		 */
		$.extend($.validator.messages, {
			required: "Campo de preenchimento obrigat&oacute;rio.",
			remote: "Por favor, corrija este campo.",
			email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
			url: "Por favor, introduza um URL v&aacute;lido.",
			date: "Por favor, introduza uma data v&aacute;lida.",
			dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
			number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
			digits: "Por favor, introduza apenas d&iacute;gitos.",
			creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
			equalTo: "Por favor, introduza de novo o mesmo valor.",
			accept: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
			maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
			minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
			rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
			range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
			max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
			min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}.")
		});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		<!--End mc_embed_signup-->

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
