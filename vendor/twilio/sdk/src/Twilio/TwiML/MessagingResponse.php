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

namespace Twilio\TwiML;

class MessagingResponse extends TwiML {
    /**
     * MessagingResponse constructor.
     */
    public function __construct() {
        parent::__construct('Response', null);
    }

    /**
     * Add Message child.
     *
     * @param string $body Message Body
     * @param array $attributes Optional attributes
     * @return Messaging\Message Child element.
     */
    public function message($body, $attributes = []): Messaging\Message {
        return $this->nest(new Messaging\Message($body, $attributes));
    }

    /**
     * Add Redirect child.
     *
     * @param string $url Redirect URL
     * @param array $attributes Optional attributes
     * @return Messaging\Redirect Child element.
     */
    public function redirect($url, $attributes = []): Messaging\Redirect {
        return $this->nest(new Messaging\Redirect($url, $attributes));
    }
}