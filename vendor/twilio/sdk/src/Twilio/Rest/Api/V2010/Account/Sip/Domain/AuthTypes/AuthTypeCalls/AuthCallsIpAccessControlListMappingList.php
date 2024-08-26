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
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCalls;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;


class AuthCallsIpAccessControlListMappingList extends ListResource
    {
    /**
     * Construct the AuthCallsIpAccessControlListMappingList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     * @param string $domainSid The SID of the SIP domain that will contain the new resource.
     */
    public function __construct(
        Version $version,
        string $accountSid,
        string $domainSid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'accountSid' =>
            $accountSid,
        
        'domainSid' =>
            $domainSid,
        
        ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid)
        .'/SIP/Domains/' . \rawurlencode($domainSid)
        .'/Auth/Calls/IpAccessControlListMappings.json';
    }

    /**
     * Create the AuthCallsIpAccessControlListMappingInstance
     *
     * @param string $ipAccessControlListSid The SID of the IpAccessControlList resource to map to the SIP domain.
     * @return AuthCallsIpAccessControlListMappingInstance Created AuthCallsIpAccessControlListMappingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $ipAccessControlListSid): AuthCallsIpAccessControlListMappingInstance
    {

        $data = Values::of([
            'IpAccessControlListSid' =>
                $ipAccessControlListSid,
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new AuthCallsIpAccessControlListMappingInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['domainSid']
        );
    }


    /**
     * Reads AuthCallsIpAccessControlListMappingInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return AuthCallsIpAccessControlListMappingInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Streams AuthCallsIpAccessControlListMappingInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(int $limit = null, $pageSize = null): Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Retrieve a single page of AuthCallsIpAccessControlListMappingInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return AuthCallsIpAccessControlListMappingPage Page of AuthCallsIpAccessControlListMappingInstance
     */
    public function page(
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): AuthCallsIpAccessControlListMappingPage
    {

        $params = Values::of([
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new AuthCallsIpAccessControlListMappingPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of AuthCallsIpAccessControlListMappingInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return AuthCallsIpAccessControlListMappingPage Page of AuthCallsIpAccessControlListMappingInstance
     */
    public function getPage(string $targetUrl): AuthCallsIpAccessControlListMappingPage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new AuthCallsIpAccessControlListMappingPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a AuthCallsIpAccessControlListMappingContext
     *
     * @param string $sid The Twilio-provided string that uniquely identifies the IpAccessControlListMapping resource to delete.
     */
    public function getContext(
        string $sid
        
    ): AuthCallsIpAccessControlListMappingContext
    {
        return new AuthCallsIpAccessControlListMappingContext(
            $this->version,
            $this->solution['accountSid'],
            $this->solution['domainSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Api.V2010.AuthCallsIpAccessControlListMappingList]';
    }
}
