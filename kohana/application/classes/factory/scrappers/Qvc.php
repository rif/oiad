<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.qvc.com/qic/qvcapp.aspx/app.detail/params.item.tsv!.tpl.tsv.CM_SCID.TSV", new Qvc());

class Qvc extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "QVC";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
