<?php defined('SYSPATH') OR die('No direct script access.');

class Request extends Kohana_Request {
    /**
     * Kohana Redirect Method
     * @param string $url
     */
    public function redirect($url) {
        HTTP::redirect($url);
    }
}
