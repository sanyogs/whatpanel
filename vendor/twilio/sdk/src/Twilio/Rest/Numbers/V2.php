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

namespace Twilio\Rest\Numbers;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Numbers\V2\AuthorizationDocumentList;
use Twilio\Rest\Numbers\V2\BulkHostedNumberOrderList;
use Twilio\Rest\Numbers\V2\HostedNumberOrderList;
use Twilio\Rest\Numbers\V2\RegulatoryComplianceList;
use Twilio\Version;

/**
 * @property AuthorizationDocumentList $authorizationDocuments
 * @property BulkHostedNumberOrderList $bulkHostedNumberOrders
 * @property HostedNumberOrderList $hostedNumberOrders
 * @property RegulatoryComplianceList $regulatoryCompliance
 * @method \Twilio\Rest\Numbers\V2\AuthorizationDocumentContext authorizationDocuments(string $sid)
 * @method \Twilio\Rest\Numbers\V2\BulkHostedNumberOrderContext bulkHostedNumberOrders(string $bulkHostingSid)
 * @method \Twilio\Rest\Numbers\V2\HostedNumberOrderContext hostedNumberOrders(string $sid)
 */
class V2 extends Version
{
    protected $_authorizationDocuments;
    protected $_bulkHostedNumberOrders;
    protected $_hostedNumberOrders;
    protected $_regulatoryCompliance;

    /**
     * Construct the V2 version of Numbers
     *
     * @param Domain $domain Domain that contains the version
     */
    public function __construct(Domain $domain)
    {
        parent::__construct($domain);
        $this->version = 'v2';
    }

    protected function getAuthorizationDocuments(): AuthorizationDocumentList
    {
        if (!$this->_authorizationDocuments) {
            $this->_authorizationDocuments = new AuthorizationDocumentList($this);
        }
        return $this->_authorizationDocuments;
    }

    protected function getBulkHostedNumberOrders(): BulkHostedNumberOrderList
    {
        if (!$this->_bulkHostedNumberOrders) {
            $this->_bulkHostedNumberOrders = new BulkHostedNumberOrderList($this);
        }
        return $this->_bulkHostedNumberOrders;
    }

    protected function getHostedNumberOrders(): HostedNumberOrderList
    {
        if (!$this->_hostedNumberOrders) {
            $this->_hostedNumberOrders = new HostedNumberOrderList($this);
        }
        return $this->_hostedNumberOrders;
    }

    protected function getRegulatoryCompliance(): RegulatoryComplianceList
    {
        if (!$this->_regulatoryCompliance) {
            $this->_regulatoryCompliance = new RegulatoryComplianceList($this);
        }
        return $this->_regulatoryCompliance;
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     * @return \Twilio\ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get(string $name)
    {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
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
        return '[Twilio.Numbers.V2]';
    }
}
