<?php

declare(strict_types=1);

namespace J7\MyPlugin;

require_once __DIR__ . '/admin/index.php';

class Bootstrap
{

	// 只在後台這些 screen id 載入 tailwindcss
	private $tailwind_screen_ids = ['users', 'post_type'];

	public function __construct()
	{
		$this->init();
		\add_action('admin_enqueue_scripts', [$this, 'add_static_assets']);
		\add_action('admin_head', [$this, 'add_tailwind_config'], 1000);
		\add_action('init', array($this, 'remove_notices'), 20);
	}

	private function init()
	{
		// 套件的 class 都在這裡初始化
		new Admin\UI();
	}

	public function add_static_assets($hook)
	{
		if (!is_admin()) {
			return;
		}

		$screen = \get_current_screen();
		if (in_array($screen->id, $this->tailwind_screen_ids)) {
			\wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), '3.4.0');
		}
	}

	public function add_tailwind_config()
	{
		$screen = \get_current_screen();
		if (in_array($screen->id, $this->tailwind_screen_ids)) :
?>
			<script>
				tailwind.config = {
					prefix: 'tw-',
				}
			</script>
<?php
		endif;
	}

	public function remove_notices(): void
	{
		\remove_action('admin_notices', array(\TGM_Plugin_Activation::$instance, 'notices'));
	}
}
