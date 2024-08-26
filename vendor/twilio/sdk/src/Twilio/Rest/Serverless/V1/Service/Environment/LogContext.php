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
 * Twilio - Serverless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Serverless\V1\Service\Environment;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class LogContext extends InstanceContext
    {
    /**
     * Initialize the LogContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service to fetch the Log resource from.
     * @param string $environmentSid The SID of the environment with the Log resource to fetch.
     * @param string $sid The SID of the Log resource to fetch.
     */
    public function __construct(
        Version $version,
        $serviceSid,
        $environmentSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        'environmentSid' =>
            $environmentSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/Environments/' . \rawurlencode($environmentSid)
        .'/Logs/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Fetch the LogInstance
     *
     * @return LogInstance Fetched LogInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): LogInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new LogInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['environmentSid'],
            $this->solution['sid']
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
        return '[Twilio.Serverless.V1.LogContext ' . \implode(' ', $context) . ']';
    }
}
