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
 * Twilio - Chat
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Chat\V1\Service\Channel;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;


class MessageList extends ListResource
    {
    /**
     * Construct the MessageList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/api/chat/rest/services) to create the resource under.
     * @param string $channelSid The unique ID of the [Channel](https://www.twilio.com/docs/api/chat/rest/channels) the new resource belongs to. Can be the Channel resource's `sid` or `unique_name`.
     */
    public function __construct(
        Version $version,
        string $serviceSid,
        string $channelSid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        
        'channelSid' =>
            $channelSid,
        
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/Channels/' . \rawurlencode($channelSid)
        .'/Messages';
    }

    /**
     * Create the MessageInstance
     *
     * @param string $body The message to send to the channel. Can also be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * @param array|Options $options Optional Arguments
     * @return MessageInstance Created MessageInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $body, array $options = []): MessageInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'Body' =>
                $body,
            'From' =>
                $options['from'],
            'Attributes' =>
                $options['attributes'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new MessageInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['channelSid']
        );
    }


    /**
     * Reads MessageInstance records from the API as a list.
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
     * @return MessageInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Streams MessageInstance records from the API as a generator stream.
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
     * Retrieve a single page of MessageInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return MessagePage Page of MessageInstance
     */
    public function page(
        array $options = [],
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): MessagePage
    {
        $options = new Values($options);

        $params = Values::of([
            'Order' =>
                $options['order'],
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new MessagePage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of MessageInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return MessagePage Page of MessageInstance
     */
    public function getPage(string $targetUrl): MessagePage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new MessagePage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a MessageContext
     *
     * @param string $sid The Twilio-provided string that uniquely identifies the Message resource to delete.
     */
    public function getContext(
        string $sid
        
    ): MessageContext
    {
        return new MessageContext(
            $this->version,
            $this->solution['serviceSid'],
            $this->solution['channelSid'],
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
        return '[Twilio.Chat.V1.MessageList]';
    }
}
