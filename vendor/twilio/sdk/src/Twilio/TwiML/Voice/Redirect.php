<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Application Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Redirect extends TwiML {
    /**
     * Redirect constructor.
     *
     * @param string $url Redirect URL
     * @param array $attributes Optional attributes
     */
    public function __construct($url, $attributes = []) {
        parent::__construct('Redirect', $url, $attributes);
    }

    /**
     * Add Method attribute.
     *
     * @param string $method Redirect URL method
     */
    public function setMethod($method): self {
        return $this->setAttribute('method', $method);
    }
}