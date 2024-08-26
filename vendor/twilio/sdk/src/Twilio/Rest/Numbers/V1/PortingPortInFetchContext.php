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
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Numbers
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Numbers\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class PortingPortInFetchContext extends InstanceContext
    {
    /**
     * Initialize the PortingPortInFetchContext
     *
     * @param Version $version Version that contains the resource
     * @param string $portInRequestSid The SID of the Port In request. This is a unique identifier of the port in request.
     */
    public function __construct(
        Version $version,
        $portInRequestSid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'portInRequestSid' =>
            $portInRequestSid,
        ];

        $this->uri = '/Porting/PortIn/' . \rawurlencode($portInRequestSid)
        .'';
    }

    /**
     * Fetch the PortingPortInFetchInstance
     *
     * @return PortingPortInFetchInstance Fetched PortingPortInFetchInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): PortingPortInFetchInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new PortingPortInFetchInstance(
            $this->version,
            $payload,
            $this->solution['portInRequestSid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Numbers.V1.PortingPortInFetchContext ' . \implode(' ', $context) . ']';
    }
}
