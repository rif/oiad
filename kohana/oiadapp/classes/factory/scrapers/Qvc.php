<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.qvc.com/qic/qvcapp.aspx/app.detail/params.item.tsv!.tpl.tsv.CM_SCID.TSV", new Qvc());

class Qvc extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='proddetailsinfo']/div[1]/h1");
        	$deal->price = $this->_xpath("//li[@class='introprice']");
        	$deal->desc_long = $this->_xpath("//div[@class='LongDesc']");
        	$deal->pictures = $this->_xpath("//img[@name='DynObject32Image']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='pricingcolumn']/ul/li[6]");
    }
}

?>

