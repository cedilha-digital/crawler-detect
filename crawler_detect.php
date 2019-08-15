<?php

function crawler_detect($USER_AGENT) {

	if (!$USER_AGENT) {
		return false;
	} else {

		//Array com os crawlers conhecidos
		$crawlers = array(
			'Abacho' => 'AbachoBOT',
			'accoona' => 'Accoona',
			'AcoiRobot' => 'AcoiRobot',
			'AhrefsBot' => 'AhrefsBot',
			'Altavista' => 'Scooter',
			'AltaVista2' => 'Altavista',
			'Apache' => 'Apache',
			'Arachnys/Nutch' => 'arachnys',
			'ASPSeek' => 'ASPSeek',
			'Baidu' => 'Baiduspider',
			'BDCbot' => 'BDCbot',
			'Bing' => 'bingbot',
			'Bing2' => 'BingPreview',
			'CCBot' => 'CCBot',
			'Clickagy' => 'Clickagy',
			'Cliqzbot' => 'Cliqzbot',
			'CrocCrawler' => 'CrocCrawler',
			'datagnion' => 'datagnionbot',
			'Dataprovider' => 'Dataprovider',
			'BDCbot' => 'BDCbot',
			'DigExt' => 'DigExt',
			'DigExt2' => 'DTS Agent',
			'DotBot' => 'DotBot',
			'DuckDuck' => 'DuckDuckBot',
			'Dumbot' => 'Dumbot',
			'eStyle' => 'eStyle',
			'Exabot' => 'Exabot',
			'ExtLinksBot' => 'ExtLinksBot',
			'Facebook' => 'facebook',
			'FAST-WebCrawler' => 'FAST-WebCrawler',
			'Findxbot' => 'Findxbot',
			'Flamingo' => 'Flamingo_SearchEngine',
			'GeonaBot' => 'GeonaBot',
			'GetIntent' => 'GetIntent',
			'Gigabot' => 'Gigabot',
			'Go-http-client' => 'Go-http-client',
			'Google' => 'Google',
			'GrapeshotCrawler' => 'GrapeshotCrawler',
			'GuzzleHttp' => 'GuzzleHttp',
			'ia_archiver' => 'ia_archiver',
			'ID-Search' => 'IDBot',
			'ips' => 'ips-agent',
			'Java' => 'Java/',
			'LinkAnalyser' => 'LinkAnalyser',
			'linkdex' => 'linkdexbot',
			'LinkedIn' => 'LinkedInBot',
			'linkfluence' => 'linkfluence',
			'Livelap' => 'LivelapBot',
			'ltx71' => 'ltx71',
			'Lycos' => 'Lycos',
			'Mechanize' => 'Mechanize',
			'Mediatoolkitbot' => 'Mediatoolkitbot',
			'MegaIndex.ru' => 'MegaIndex',
			'MetaURI' => 'MetaURI',
			'Microsoft' => 'Microsoft URL Control',
			'Microsoft Office' => 'Microsoft Office',
			'Mixrank' => 'MixrankBot',
			'MJ12bot' => 'MJ12bot',
			'MSN' => 'msnbot',
			'MSRBOT' => 'MSRBOT',
			'Netcraft' => 'NetcraftSurveyAgent',
			'Nuzzel' => 'Nuzzel',
			'omgili' => 'omgili',
			'OpenLinkProfiler' => 'OpenLinkProfiler',
			'OpenLinkProfiler2' => 'spbot',
			'PaperLi' => 'PaperLiBot',
			'Pinterest' => 'Pinterestbot',
			'python-requests' => 'python-requests',
			'proximic' => 'proximic',
			'radian6' => 'radian6',
			'Rambler' => 'Rambler',
			'rogerbot' => 'rogerbot',
			'RukiCrawler' => 'RukiCrawler',
			'scalaj' => 'scalaj',
			'Scrubby' => 'Scrubby',
			'SafeDNS' => 'SafeDNSBot',
			'Semrush' => 'SemrushBot',
			'SiteExplorer' => 'SiteExplorer',
			'SMTBot' => 'similartech',
			'SocialRank' => 'SocialRankIOBot',
			'Skype' => 'SkypeUriPreview',
			'Sogou' => 'sogou',
			'The Lemur' => 'crawler_12',
			'ToutiaoSpider' => 'ToutiaoSpider',
			'trendiction' => 'trendiction',
			'tweetedtimes.com' => 'tweetedtimes',
			'Twitter' => 'Twitterbot',
			'ubermetrics' => 'ubermetrics',
			'WhatsApp' => 'WhatsApp',
			'WhatsApp2' => 'WhatsApp/',
			'WordPress' => 'WordPress',
			'wotbox' => 'wotbox',
			'Yahoo' => 'Yahoo',
			'YandexBot' => 'YandexBot',
			'YisouSpider' => 'YisouSpider',
		);

		//Percorre array procurando correspondência
		$correspondencia = 0;
		foreach($crawlers as $crawler => $bot) {
			if (stripos($USER_AGENT, $bot) !== false) {
				$correspondencia++;
			}
		}

		if ($correspondencia > 0) {
			return true;
		} else {
			return false;
		}//correspondencia

	}//useragent

}//crawler_detect

?>