<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Initlinks extends Controller
{
    public function action_index()
    {
$rss_links = array(
    "http://www.hataday.com/rss/index.php",
    "http://www.heartlandamerica.com/browse/rss.asp",
    "http://hipgreendeals.com/rss-feed.aspx",
    "http://blog.hollywoodtoysandcostumes.com/feed/",
    "http://www.housewaresdeals.com/on/demandware.store/Sites-HousewaresDeals-Site/default/Home-RSS",
    "http://rss.hsn.com/Todays-Special?cm_mmc=rss*TS*4",
    "http://feeds.feedburner.com/IndieJewels",
    "http://feeds.feedburner.com/InvictaShark-DailyDeal?format=xml",
    "http://www.joecigar.com/jcRss.asp",
    "http://www.joesnewbalanceoutlet.com/rss/daily_deals_rss.xml",
    "http://www.jomadeals.com/handbag/feed.aspx",
    "http://www.jomadeals.com/luxury/feed.aspx",
    "http://www.jomadeals.com/feed.aspx",
    "http://www.joolwe.com/rss/",
    "http://hub.shoppesimple.com/for/josbank/",
    "http://www.joylot.com/Feeds/Daily-Deals/Daily-Deals.xml",
    "http://judaicabargains.com/rss.php",
    "http://www.justdeals.com/index.php?format=feed&type=rss",
    "http://www.kidsteals.com/feed/atom.xml",
    "http://kids.woot.com/Blog/Feed.ashx",
    "http://feeds.feedburner.com/blogspot/vCPx?format=xml",
    "http://lastchanceroad.com/sales/feed.xml",
    "http://www.leatheraday.com/rss/",
    "http://feeds2.feedburner.com/macupdate/promo",
    "http://www.mamabargains.com/rss/",
    "http://www3.meijer.com/bigsteals.xml",
    "http://feeds2.feedburner.com/MicroCenterDealOfTheDay",
    "http://www.midnightbox.com/cgi-bin/rss.pl",
    "http://www.midnightbox.com/cgi-bin/rss.pl",
    "http://www.midnightbox.com/cgi-bin/rss.pl",
    "http://feeds.feedburner.com/midnightsteal/FcPh?format=xml",
    "http://now.montred.com/feed/",
    "http://www.moonlightspecial.com/rssfeed.cfm",
    "http://feeds.feedburner.com/MoreBeerDealFeed",
    "http://www.mountaingear.com/deals.xml",
    "http://www.mrwatch.com/rss_text.xml",
    "http://feeds.feedburner.com/muscleandstrengthstore?format=xml",
    "http://feeds.feedburner.com/Musicians-Friend-Stupid-Deal?format=xml",
    "http://www.myjewelrybox.com/media/rss/MyJewelryBoxcomBargainofTheDay.xml",
    "http://www.mysafetyshield.com/todaydeal_rss.asp",
    "http://nerdyshirts.disqus.com/admiral_ackbars_its_a_trap_funny_t_shirt/latest.rss",
    "http://www.newegg.com/Product/RSS.aspx?Submit=ShellShocker",
    "http://www.newegg.com/Product/RSS.aspx?Submit=RSSDailyDeals",
    "http://www.noondaydeal.com/rss/",
    "http://www.ohloot.com/data/deals.xml",
    "http://www.ohloot.com/data/deals.xml",
    "http://feeds.feedburner.com/OnYourEyes",
    "http://feeds.feedburner.com/OneADayDeal",
    "http://static.zoovy.com/rss/orangeonions/RSSDOD.xml",
    "http://www.outdoordaily.com/rss.php",
    "http://www.pacificgeek.com/rss/nooner-rss.asp",
    "http://feeds.pacsun.com/PacsunDailyDeals?format=xml",
    "http://feeds.pacsun.com/PacsunDailyDeals?format=xml",
    "http://www.paws4deals.com/index.php?main_page=rss_feed&feed=products&products_id=271&zenid=fa4ff92666ab22351fd99a229a0bdd5f",
    "http://peachycheap.com/index.php?main_page=rss_feed&feed=specials",
    "http://www.pennywise.biz/rss.php?PHPSESSID=scgps0n25p08rgrg5lghf6ts35",
    "http://www.perfumeaday.org/rss/",
    "http://feeds.feedburner.com/PricePlungeDailyDeals",
    "http://feeds.prohealth.com/Prohealth_DealOfTheDay?format=xml",
    "http://www.projectorpeople.com/deal/xmlfeed.asp",
    "http://service.qvc.com/qrss/feed.aspx?type=tsv&rewrite=no&cm_ven=RSS",
    "http://redtagcrazy.com/sales/feed.xml",
    "http://www.redtagsports.com/rss.xml",
    "http://www.rei.com/outlet/rei-outlet-rss2.xml",
    "http://feeds2.feedburner.com/riptapparel",
    "http://feeds.feedburner.com/RoastOfTheDayRssFeed",
    "http://feeds.feedburner.com/scoobydeal",
    "http://www.scopeaday.com/rss/",
    "http://www.scrapbooksteals.com/feed/atom.xml",
    "http://sellout.woot.com/Blog/Feed.ashx",
    "http://feeds.feedburner.com/selloutz",
    "http://feeds.feedburner.com/Shadeshark-DailyDealRssFeed?format=xml",
    "http://shirt.woot.com/Blog/Feed.ashx",
    "http://www.shirtaday.com/rss/",
    "http://www.shnoop.com/rss.php?PHPSESSID=e0totb8g8je4k2mmllo257h2l5",
    "http://www.sierratradingpost.com/BarnBurners/rss.ashx",
    "http://www.skyauction.com/deal-of-the-day-feed.rss",
    "http://www.sneakadeal.com/rss.php",
    "http://feeds.sparklecartel.com/thedeal.xml",
    "http://rss.steepandcheap.com/docs/steepcheap/rss.xml",
    "http://www.tanga.com/feeds/current_deal.xml",
    "http://www.tanga.com/feeds/current_deal.xml",
    "http://www.tanga.com/feeds/current_deal.xml",
    "http://www.tanga.com/feeds/current_deal.xml",
    "http://www.tanga.com/feeds/current_deal.xml",
    "http://www.tanga.com/feeds/current_deal.xml",
    "http://www.techforless.com/rss/firesale.rss",
    "http://feeds.feedburner.com/TeefuryDailyTee?format=xml",
    "http://feeds.feedburner.com/thewinespies?format=xml",
    "http://feed.thingfling.com/ThingflingRssFeed",
    "http://feed.thingfling.com/HouseFlingRssFeed",
    "http://feed.thingfling.com/WatchesFlingRssFeed",
    "http://www.tfaw.com/rss/deal_of_the_day_rss.php",
    "http://feeds.feedburner.com/ThongADayRssFeed?format=xml",
    "http://tigzoo.com/feed/",
    "http://feeds.feedburner.com/tooliday",
    "http://rss.icerocket.com/xmlfeed?id=420641",
    "http://www.uneetee.com/pages/RSS-Syndication.html",
    "http://www.watchdiscounters.com/cust/RSSDDS.ASP",
    "http://www.weeklycloseouts.com/page/en/rss_feed.aspx",
    "http://www.wengerwatchdod.com/getFeed.ashx?src=dod",
    "http://www.whey2buy.com/rss",
    "http://feeds.feedburner.com/bodybuilding/wheycheap?format=xml",
    "http://rss.whiskeymilitia.com/docs/wm/rss.xml",
    "http://wine.woot.com/Blog/Feed.ashx",
    "http://www.woot.com/Blog/Feed.ashx",
    "http://www.wozofoto.com/www/index.php?x=rss",
    "http://wuslu.com/rssFeed.xml",
    "http://feeds2.feedburner.com/watchesyugstercom?format=xml",
    "http://feeds.feedburner.com/Yugstercom?format=xml",
    "http://www.zipzoomfly.com/RSS/product/ZipZoomfly_Weekly_Deals.rss",
    "http://www.zooblu.com/dailydeal.xml"
);
	
		$saved = 0;
		$links = ORM::factory('link');
		foreach($rss_links as $i=>$l)
		{
			
			
			$this_address = $links->where('address', '=', $l)->find_all();
			
			if(count ($this_address) == 0)
			{
				echo "$i. saving $l ...<br />";
				$link = ORM::factory('link');
				$link->address = $l;
				$link->save();
				$saved++;
			}
			
	  }
		if($saved == 0)
			{
				echo "Nothing new!";
			}
    }
}

