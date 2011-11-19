<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.weeklycloseouts.com/page/en/home.aspx", new Weeklycloseouts());

class Weeklycloseouts extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@id='weeklydeals_m_v3_wd_today_m_HL_Title']");
        	$deal->price = $this->_xpath("//span[@id='weeklydeals_m_v3_wd_today_m_Lbl_PRICE']");
        	$deal->desc_long = $this->_xpath("//a[@id='weeklydeals_m_v3_wd_today_m_HL_DESC']");
        	$deal->pictures = $this->_xpath("//div[@class='v3_today_product_img']/a/img/@src");
        	$deal->shipping = $this->_xpath("//a[@id='weeklydeals_m_v3_wd_today_m_HL_shipping']");
    }
}

?>

