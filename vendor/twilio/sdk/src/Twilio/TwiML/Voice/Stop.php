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

class Stop extends TwiML {
    /**
     * Stop constructor.
     */
    public function __construct() {
        parent::__construct('Stop', null);
    }

    /**
     * Add Stream child.
     *
     * @param array $attributes Optional attributes
     * @return Stream Child element.
     */
    public function stream($attributes = []): Stream {
        return $this->nest(new Stream($attributes));
    }

    /**
     * Add Siprec child.
     *
     * @param array $attributes Optional attributes
     * @return Siprec Child element.
     */
    public function siprec($attributes = []): Siprec {
        return $this->nest(new Siprec($attributes));
    }
}