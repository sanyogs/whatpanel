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
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Verify\V2\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Verify\V2\Service\RateLimit\BucketList;


/**
 * @property string|null $sid
 * @property string|null $serviceSid
 * @property string|null $accountSid
 * @property string|null $uniqueName
 * @property string|null $description
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $url
 * @property array|null $links
 */
class RateLimitInstance extends InstanceResource
{
    protected $_buckets;

    /**
     * Initialize the RateLimitInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/verify/api/service) the resource is associated with.
     * @param string $sid The Twilio-provided string that uniquely identifies the Rate Limit resource to fetch.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'description' => Values::array_get($payload, 'description'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return RateLimitContext Context for this RateLimitInstance
     */
    protected function proxy(): RateLimitContext
    {
        if (!$this->context) {
            $this->context = new RateLimitContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the RateLimitInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the RateLimitInstance
     *
     * @return RateLimitInstance Fetched RateLimitInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): RateLimitInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the RateLimitInstance
     *
     * @param array|Options $options Optional Arguments
     * @return RateLimitInstance Updated RateLimitInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): RateLimitInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the buckets
     */
    protected function getBuckets(): BucketList
    {
        return $this->proxy()->buckets;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Verify.V2.RateLimitInstance ' . \implode(' ', $context) . ']';
    }
}

