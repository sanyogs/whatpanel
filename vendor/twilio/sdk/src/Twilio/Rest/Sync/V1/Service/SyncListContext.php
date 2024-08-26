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
 * Twilio - Sync
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Sync\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Sync\V1\Service\SyncList\SyncListPermissionList;
use Twilio\Rest\Sync\V1\Service\SyncList\SyncListItemList;


/**
 * @property SyncListPermissionList $syncListPermissions
 * @property SyncListItemList $syncListItems
 * @method \Twilio\Rest\Sync\V1\Service\SyncList\SyncListPermissionContext syncListPermissions(string $identity)
 * @method \Twilio\Rest\Sync\V1\Service\SyncList\SyncListItemContext syncListItems(string $index)
 */
class SyncListContext extends InstanceContext
    {
    protected $_syncListPermissions;
    protected $_syncListItems;

    /**
     * Initialize the SyncListContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the [Sync Service](https://www.twilio.com/docs/sync/api/service) to create the new Sync List in.
     * @param string $sid The SID of the Sync List resource to delete. Can be the Sync List resource's `sid` or its `unique_name`.
     */
    public function __construct(
        Version $version,
        $serviceSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/Lists/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the SyncListInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the SyncListInstance
     *
     * @return SyncListInstance Fetched SyncListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SyncListInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new SyncListInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }


    /**
     * Update the SyncListInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SyncListInstance Updated SyncListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): SyncListInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'Ttl' =>
                $options['ttl'],
            'CollectionTtl' =>
                $options['collectionTtl'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SyncListInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }


    /**
     * Access the syncListPermissions
     */
    protected function getSyncListPermissions(): SyncListPermissionList
    {
        if (!$this->_syncListPermissions) {
            $this->_syncListPermissions = new SyncListPermissionList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->_syncListPermissions;
    }

    /**
     * Access the syncListItems
     */
    protected function getSyncListItems(): SyncListItemList
    {
        if (!$this->_syncListItems) {
            $this->_syncListItems = new SyncListItemList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->_syncListItems;
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
        return '[Twilio.Sync.V1.SyncListContext ' . \implode(' ', $context) . ']';
    }
}
