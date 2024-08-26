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
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Preview\Sync\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;
use Twilio\Rest\Preview\Sync\Service\Document\DocumentPermissionList;


/**
 * @property DocumentPermissionList $documentPermissions
 * @method \Twilio\Rest\Preview\Sync\Service\Document\DocumentPermissionContext documentPermissions(string $identity)
 */
class DocumentContext extends InstanceContext
    {
    protected $_documentPermissions;

    /**
     * Initialize the DocumentContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid 
     * @param string $sid 
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
        .'/Documents/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the DocumentInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the DocumentInstance
     *
     * @return DocumentInstance Fetched DocumentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): DocumentInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new DocumentInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }


    /**
     * Update the DocumentInstance
     *
     * @param array $data 
     * @param array|Options $options Optional Arguments
     * @return DocumentInstance Updated DocumentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $data, array $options = []): DocumentInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'Data' =>
                Serialize::jsonObject($data),
        ]);

        $headers = Values::of(['If-Match' => $options['ifMatch']]);

        $payload = $this->version->update('POST', $this->uri, [], $data, $headers);

        return new DocumentInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }


    /**
     * Access the documentPermissions
     */
    protected function getDocumentPermissions(): DocumentPermissionList
    {
        if (!$this->_documentPermissions) {
            $this->_documentPermissions = new DocumentPermissionList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->_documentPermissions;
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
        return '[Twilio.Preview.Sync.DocumentContext ' . \implode(' ', $context) . ']';
    }
}
