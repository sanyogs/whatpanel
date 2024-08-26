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
 * Twilio - Proxy
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Proxy\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;


class PhoneNumberList extends ListResource
    {
    /**
     * Construct the PhoneNumberList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID parent [Service](https://www.twilio.com/docs/proxy/api/service) resource of the new PhoneNumber resource.
     */
    public function __construct(
        Version $version,
        string $serviceSid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/PhoneNumbers';
    }

    /**
     * Create the PhoneNumberInstance
     *
     * @param array|Options $options Optional Arguments
     * @return PhoneNumberInstance Created PhoneNumberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $options = []): PhoneNumberInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'Sid' =>
                $options['sid'],
            'PhoneNumber' =>
                $options['phoneNumber'],
            'IsReserved' =>
                Serialize::booleanToString($options['isReserved']),
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new PhoneNumberInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid']
        );
    }


    /**
     * Reads PhoneNumberInstance records from the API as a list.
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
     * @return PhoneNumberInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Streams PhoneNumberInstance records from the API as a generator stream.
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
     * Retrieve a single page of PhoneNumberInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return PhoneNumberPage Page of PhoneNumberInstance
     */
    public function page(
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): PhoneNumberPage
    {

        $params = Values::of([
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new PhoneNumberPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of PhoneNumberInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return PhoneNumberPage Page of PhoneNumberInstance
     */
    public function getPage(string $targetUrl): PhoneNumberPage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new PhoneNumberPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a PhoneNumberContext
     *
     * @param string $sid The Twilio-provided string that uniquely identifies the PhoneNumber resource to delete.
     */
    public function getContext(
        string $sid
        
    ): PhoneNumberContext
    {
        return new PhoneNumberContext(
            $this->version,
            $this->solution['serviceSid'],
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
        return '[Twilio.Proxy.V1.PhoneNumberList]';
    }
}
