<?php
/**
 * Sitemap
 */
namespace Minds\Controllers;

use Minds\Core;
use Minds\Entities;
use Minds\Interfaces;

class sitemap extends core\page implements Interfaces\page
{
    /**
     * Get requests
     */
    public function get($pages)
    {
        header('Content-type: application/xml');
        echo <<< XML
  <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
      <url>
          <loc>https://www.planetconcourse.world/</loc>
          <lastmod>2018-02-09T02:32:45+00:00</lastmod>
      </url>
      <url>
          <loc>https://www.planetconcourse.world/newsfeed</loc>
          <lastmod>2018-02-09T02:32:45+00:00</lastmod>
      </url>
      <url>
          <loc>https://www.planetconcourse.world/minds</loc>
          <lastmod>2018-02-09T02:32:45+00:00</lastmod>
      </url>
      <url>
          <loc>https://www.planetconcourse.world/plus</loc>
          <lastmod>2018-02-09T02:32:45+00:00</lastmod>
      </url>
      <url>
          <loc>https://www.planetconcourse.world/discovery/trending/channels</loc>
          <lastmod>2018-02-09T02:32:45+00:00</lastmod>
      </url>
      <url>
          <loc>https://www.planetconcourse.world/discovery/trending/channels</loc>
          <lastmod>2018-02-09T02:32:45+00:00</lastmod>
      </url>
      <url>
          <loc>https://www.planetconcourse.world/blog/trending</loc>
          <lastmod>2018-02-09T02:32:45+00:00</lastmod>
      </url>
      <url>
          <loc>https://www.planetconcourse.world/wire</loc>
          <lastmod>2018-02-09T02:32:45+00:00</lastmod>
      </url>
  </urlset>        

XML;
    }

    public function post($pages)
    {
    }

    public function put($pages)
    {
    }

    public function delete($pages)
    {
    }
}
