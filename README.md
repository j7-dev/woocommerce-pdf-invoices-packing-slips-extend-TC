# My Plugin | 我的 WordPress 外掛
一句話講完 My Plugin :

> 這是一個 WordPress 外掛的範本，可以用來開發新的外掛。

<br><br><br>

## ⚡ 主要功能

#### 1. 整合 TGM Plugin

功能: 方便你依賴其他外掛，詳情可以參考[說明](http://tgmpluginactivation.com/configuration/)

<br><br><br>

#### 2. 整合 plugin-update-checker

功能: 當你在 github release 時，可以自動通知使用者更新，詳情可以參考[說明](https://github.com/YahnisElsts/plugin-update-checker)

<br><br><br>

## 用法

#### 請先執行 composer install 安裝依賴

<br><br><br>

#### 如果你依賴多個 plugins ，需要在 `check_required_plugins` 判斷是否都已經啟用

```php
public function check_required_plugins()
{
	self::$is_all_plugins_activated = \class_exists(self::WOOCOMMERCE_CLASS);

	if (self::$is_all_plugins_activated) {
		new Bootstrap();
	}
}
```

<br><br><br>

#### 在 Utils 定義常數

```php
const APP_NAME            = 'My Plugin';
const KEBAB               = 'my-plugin';
const SNAKE               = 'my_plugin';
const GITHUB_REPO         = 'https://github.com/j7-dev/wp-plugin';
```

<br><br><br>
