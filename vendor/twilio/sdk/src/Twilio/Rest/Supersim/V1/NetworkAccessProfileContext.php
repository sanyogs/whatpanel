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
 * Twilio - Supersim
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Supersim\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Supersim\V1\NetworkAccessProfile\NetworkAccessProfileNetworkList;


/**
 * @property NetworkAccessProfileNetworkList $networks
 * @method \Twilio\Rest\Supersim\V1\NetworkAccessProfile\NetworkAccessProfileNetworkContext networks(string $sid)
 */
class NetworkAccessProfileContext extends InstanceContext
    {
    protected $_networks;

    /**
     * Initialize the NetworkAccessProfileContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID of the Network Access Profile resource to fetch.
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

        $this->uri = '/NetworkAccessProfiles/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Fetch the NetworkAccessProfileInstance
     *
     * @return NetworkAccessProfileInstance Fetched NetworkAccessProfileInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): NetworkAccessProfileInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new NetworkAccessProfileInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }


    /**
     * Update the NetworkAccessProfileInstance
     *
     * @param array|Options $options Optional Arguments
     * @return NetworkAccessProfileInstance Updated NetworkAccessProfileInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): NetworkAccessProfileInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'UniqueName' =>
                $options['uniqueName'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new NetworkAccessProfileInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }


    /**
     * Access the networks
     */
    protected function getNetworks(): NetworkAccessProfileNetworkList
    {
        if (!$this->_networks) {
            $this->_networks = new NetworkAccessProfileNetworkList(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->_networks;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext
    {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
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
        return '[Twilio.Supersim.V1.NetworkAccessProfileContext ' . \implode(' ', $context) . ']';
    }
}
