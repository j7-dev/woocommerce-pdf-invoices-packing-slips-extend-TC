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

		$font_url = Plugin::$url . '/assets/fonts/NotoSansTC-Regular.ttf';

		?>
/* Load font */
@font-face {
	font-family: "Noto Sans TC";
	font-style: normal;
	font-weight: normal;
	src: local("Noto Sans TC"), local("Noto Sans TC"),
	url("<?php echo $font_url;// phpcs:ignore ?>")
		format("truetype");
}

body{
	font-family: "Noto Sans TC", "Open Sans", sans-serif !important;
	letter-spacing: 0.5px !important;
}
		<?php
	}
}
