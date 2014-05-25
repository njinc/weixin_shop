<?php
class geoAction extends frontendAction {

	public function index() {

		$address_mod = M("address");
		$address_list = $address_mod->select();

		$this->assign("shop_address_list", $address_list);

		$this->_config_seo();
		$this->display();
	}
}
