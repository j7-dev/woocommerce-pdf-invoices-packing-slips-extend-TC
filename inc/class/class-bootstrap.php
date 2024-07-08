<?php
/**
 * Bootstrap
 */

declare (strict_types = 1);

namespace J7\Woocommerce_Pdf_Invoices_Packing_Slips_Extend_TC;

/**
 * Class Bootstrap
 */
final class Bootstrap {
	use \J7\WpUtils\Traits\SingletonTrait;


	/**
	 * Constructor
	 */
	public function __construct() {
		\add_action( 'wpo_wcpdf_custom_styles', array( $this, 'add_chinese_font_support_to_css' ), 20, 2 );
	}

	/**
	 * Add Chinese font support to css
	 *
	 * @param string                                 $type type
	 * @param \WPO\WC\PDF_Invoices\Documents\Invoice $invoice Invoice Object
	 *
	 * @return void
	 */
	public function add_chinese_font_support_to_css( $type, $invoice ): void {

		?>
/* Load fonts */
@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 100;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-Thin.ttf") format("truetype");
}

@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 200;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-ExtraLight.ttf") format("truetype");
}

@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 300;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-Light.ttf") format("truetype");
}

@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 400;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-Regular.ttf") format("truetype");
}

@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 500;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-Medium.ttf") format("truetype");
}

@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 600;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-SemiBold.ttf") format("truetype");
}

@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 700;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-Bold.ttf") format("truetype");
}

@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 800;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-ExtraBold.ttf") format("truetype");
}

@font-face {
  font-family: "Noto Sans TC";
  font-style: normal;
  font-weight: 900;
  src: url("<?php echo Plugin::$url; ?>/assets/fonts/NotoSansTC-Black.ttf") format("truetype");
}


body{
	font-family: "Noto Sans TC", "Open Sans", sans-serif !important;
	letter-spacing: 0.5px !important;
}
		<?php
	}
}
