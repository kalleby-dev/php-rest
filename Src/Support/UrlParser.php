<?php
namespace Src\Support;

/**
 * Splits an url to an array
 */
trait UrlParser
{

  /**
   * Parse Url Function
   */
  public function parseUrl()
  {
    return explode('/', rtrim($_GET['url']), FILTER_SANITIZE_URL);
  }
}
