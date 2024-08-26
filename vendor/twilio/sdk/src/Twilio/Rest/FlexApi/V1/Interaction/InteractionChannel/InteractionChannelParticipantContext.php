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
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\FlexApi\V1\Interaction\InteractionChannel;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class InteractionChannelParticipantContext extends InstanceContext
    {
    /**
     * Initialize the InteractionChannelParticipantContext
     *
     * @param Version $version Version that contains the resource
     * @param string $interactionSid The Interaction Sid for the new Channel Participant.
     * @param string $channelSid The Channel Sid for the new Channel Participant.
     * @param string $sid The unique string created by Twilio to identify an Interaction Channel resource.
     */
    public function __construct(
        Version $version,
        $interactionSid,
        $channelSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'interactionSid' =>
            $interactionSid,
        'channelSid' =>
            $channelSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Interactions/' . \rawurlencode($interactionSid)
        .'/Channels/' . \rawurlencode($channelSid)
        .'/Participants/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Update the InteractionChannelParticipantInstance
     *
     * @param string $status
     * @return InteractionChannelParticipantInstance Updated InteractionChannelParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $status): InteractionChannelParticipantInstance
    {

        $data = Values::of([
            'Status' =>
                $status,
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new InteractionChannelParticipantInstance(
            $this->version,
            $payload,
            $this->solution['interactionSid'],
            $this->solution['channelSid'],
            $this->solution['sid']
        );
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
        return '[Twilio.FlexApi.V1.InteractionChannelParticipantContext ' . \implode(' ', $context) . ']';
    }
}
