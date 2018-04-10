<?php
/**
 * ogCrawler plugin for Craft CMS 3.x
 *
 * Fetches some basic OpenGraph data from a URL.
 *
 * @link      http://bleed.com/
 * @copyright Copyright (c) 2018 Kristoffer Lundberg
 */

namespace kristoffer1lundberg\ogcrawler\variables;

use kristoffer1lundberg\ogcrawler\OgCrawler;
use Craft;
use OpenGraph;
require_once(__DIR__.'/../OpenGraph.php');

/**
 * ogCrawler Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.ogCrawler }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Kristoffer Lundberg
 * @package   OgCrawler
 * @since     0.0.1
 */
class OgCrawlerVariable
{
    // Public Methods
    // =========================================================================

   /**
    * {{ craft.ogCrawler.getUrl(url) }}
    * @param null $optional
    * @return string
    */
   public function getUrl($url = null) {
      $graph = OpenGraph::fetch($url);
      return $graph;
   }
}
