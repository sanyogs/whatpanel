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

namespace Twilio\Rest\Preview\HostedNumbers;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;


class AuthorizationDocumentList extends ListResource
    {
    /**
     * Construct the AuthorizationDocumentList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(
        Version $version
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        ];

        $this->uri = '/AuthorizationDocuments';
    }

    /**
     * Create the AuthorizationDocumentInstance
     *
     * @param string[] $hostedNumberOrderSids A list of HostedNumberOrder sids that this AuthorizationDocument will authorize for hosting phone number capabilities on Twilio's platform.
     * @param string $addressSid A 34 character string that uniquely identifies the Address resource that is associated with this AuthorizationDocument.
     * @param string $email Email that this AuthorizationDocument will be sent to for signing.
     * @param string $contactTitle The title of the person authorized to sign the Authorization Document for this phone number.
     * @param string $contactPhoneNumber The contact phone number of the person authorized to sign the Authorization Document.
     * @param array|Options $options Optional Arguments
     * @return AuthorizationDocumentInstance Created AuthorizationDocumentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $hostedNumberOrderSids, string $addressSid, string $email, string $contactTitle, string $contactPhoneNumber, array $options = []): AuthorizationDocumentInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'HostedNumberOrderSids' =>
                Serialize::map($hostedNumberOrderSids,function ($e) { return $e; }),
            'AddressSid' =>
                $addressSid,
            'Email' =>
                $email,
            'ContactTitle' =>
                $contactTitle,
            'ContactPhoneNumber' =>
                $contactPhoneNumber,
            'CcEmails' =>
                Serialize::map($options['ccEmails'], function ($e) { return $e; }),
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new AuthorizationDocumentInstance(
            $this->version,
            $payload
        );
    }


    /**
     * Reads AuthorizationDocumentInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return AuthorizationDocumentInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Streams AuthorizationDocumentInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param array|Options $options Optional Arguments
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
    public function stream(array $options = [], int $limit = null, $pageSize = null): Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($options, $limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Retrieve a single page of AuthorizationDocumentInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return AuthorizationDocumentPage Page of AuthorizationDocumentInstance
     */
    public function page(
        array $options = [],
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): AuthorizationDocumentPage
    {
        $options = new Values($options);

        $params = Values::of([
            'Email' =>
                $options['email'],
            'Status' =>
                $options['status'],
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new AuthorizationDocumentPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of AuthorizationDocumentInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return AuthorizationDocumentPage Page of AuthorizationDocumentInstance
     */
    public function getPage(string $targetUrl): AuthorizationDocumentPage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new AuthorizationDocumentPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a AuthorizationDocumentContext
     *
     * @param string $sid A 34 character string that uniquely identifies this AuthorizationDocument.
     */
    public function getContext(
        string $sid
        
    ): AuthorizationDocumentContext
    {
        return new AuthorizationDocumentContext(
            $this->version,
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
        return '[Twilio.Preview.HostedNumbers.AuthorizationDocumentList]';
    }
}
