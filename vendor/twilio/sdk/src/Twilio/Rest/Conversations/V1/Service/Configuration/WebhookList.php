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
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Conversations\V1\Service\Configuration;

use Twilio\ListResource;
use Twilio\Version;


class WebhookList extends ListResource
    {
    /**
     * Construct the WebhookList
     *
     * @param Version $version Version that contains the resource
     * @param string $chatServiceSid The unique ID of the [Conversation Service](https://www.twilio.com/docs/conversations/api/service-resource) this conversation belongs to.
     */
    public function __construct(
        Version $version,
        string $chatServiceSid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'chatServiceSid' =>
            $chatServiceSid,
        
        ];
    }

    /**
     * Constructs a WebhookContext
     */
    public function getContext(
        
    ): WebhookContext
    {
        return new WebhookContext(
            $this->version,
            $this->solution['chatServiceSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Conversations.V1.WebhookList]';
    }
}
