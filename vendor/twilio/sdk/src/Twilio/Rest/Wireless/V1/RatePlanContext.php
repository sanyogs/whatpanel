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
 * Twilio - Wireless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Wireless\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class RatePlanContext extends InstanceContext
    {
    /**
     * Initialize the RatePlanContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID of the RatePlan resource to delete.
     */
    public function __construct(
        Version $version,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'sid' =>
            $sid,
        ];

        $this->uri = '/RatePlans/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the RatePlanInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the RatePlanInstance
     *
     * @return RatePlanInstance Fetched RatePlanInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): RatePlanInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new RatePlanInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }


    /**
     * Update the RatePlanInstance
     *
     * @param array|Options $options Optional Arguments
     * @return RatePlanInstance Updated RatePlanInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): RatePlanInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'UniqueName' =>
                $options['uniqueName'],
            'FriendlyName' =>
                $options['friendlyName'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new RatePlanInstance(
            $this->version,
            $payload,
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
        return '[Twilio.Wireless.V1.RatePlanContext ' . \implode(' ', $context) . ']';
    }
}
