<?php

class CommonAction extends Action {
	protected function render($data) {
		$this->assign('data', $data); //控制器传参到模板

		if (array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX']) {
			$this->display(); //浏览器支持Pjax功能，直接渲染输出页面
		} else {
			layout(true); //开启模板
			$this->display(); //浏览器不支持Pjax功能，使用默认的链接响应机制（加载模板）
		}
	}
}