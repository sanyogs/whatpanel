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

namespace Twilio\Rest\Conversations\V1\Configuration;

use Twilio\Options;
use Twilio\Values;

abstract class WebhookOptions
{

    /**
     * @param string $method The HTTP method to be used when sending a webhook request.
     * @param string[] $filters The list of webhook event triggers that are enabled for this Service: `onMessageAdded`, `onMessageUpdated`, `onMessageRemoved`, `onConversationUpdated`, `onConversationRemoved`, `onParticipantAdded`, `onParticipantUpdated`, `onParticipantRemoved`
     * @param string $preWebhookUrl The absolute url the pre-event webhook request should be sent to.
     * @param string $postWebhookUrl The absolute url the post-event webhook request should be sent to.
     * @param string $target
     * @return UpdateWebhookOptions Options builder
     */
    public static function update(
        
        string $method = Values::NONE,
        array $filters = Values::ARRAY_NONE,
        string $preWebhookUrl = Values::NONE,
        string $postWebhookUrl = Values::NONE,
        string $target = Values::NONE

    ): UpdateWebhookOptions
    {
        return new UpdateWebhookOptions(
            $method,
            $filters,
            $preWebhookUrl,
            $postWebhookUrl,
            $target
        );
    }

}


class UpdateWebhookOptions extends Options
    {
    /**
     * @param string $method The HTTP method to be used when sending a webhook request.
     * @param string[] $filters The list of webhook event triggers that are enabled for this Service: `onMessageAdded`, `onMessageUpdated`, `onMessageRemoved`, `onConversationUpdated`, `onConversationRemoved`, `onParticipantAdded`, `onParticipantUpdated`, `onParticipantRemoved`
     * @param string $preWebhookUrl The absolute url the pre-event webhook request should be sent to.
     * @param string $postWebhookUrl The absolute url the post-event webhook request should be sent to.
     * @param string $target
     */
    public function __construct(
        
        string $method = Values::NONE,
        array $filters = Values::ARRAY_NONE,
        string $preWebhookUrl = Values::NONE,
        string $postWebhookUrl = Values::NONE,
        string $target = Values::NONE

    ) {
        $this->options['method'] = $method;
        $this->options['filters'] = $filters;
        $this->options['preWebhookUrl'] = $preWebhookUrl;
        $this->options['postWebhookUrl'] = $postWebhookUrl;
        $this->options['target'] = $target;
    }

    /**
     * The HTTP method to be used when sending a webhook request.
     *
     * @param string $method The HTTP method to be used when sending a webhook request.
     * @return $this Fluent Builder
     */
    public function setMethod(string $method): self
    {
        $this->options['method'] = $method;
        return $this;
    }

    /**
     * The list of webhook event triggers that are enabled for this Service: `onMessageAdded`, `onMessageUpdated`, `onMessageRemoved`, `onConversationUpdated`, `onConversationRemoved`, `onParticipantAdded`, `onParticipantUpdated`, `onParticipantRemoved`
     *
     * @param string[] $filters The list of webhook event triggers that are enabled for this Service: `onMessageAdded`, `onMessageUpdated`, `onMessageRemoved`, `onConversationUpdated`, `onConversationRemoved`, `onParticipantAdded`, `onParticipantUpdated`, `onParticipantRemoved`
     * @return $this Fluent Builder
     */
    public function setFilters(array $filters): self
    {
        $this->options['filters'] = $filters;
        return $this;
    }

    /**
     * The absolute url the pre-event webhook request should be sent to.
     *
     * @param string $preWebhookUrl The absolute url the pre-event webhook request should be sent to.
     * @return $this Fluent Builder
     */
    public function setPreWebhookUrl(string $preWebhookUrl): self
    {
        $this->options['preWebhookUrl'] = $preWebhookUrl;
        return $this;
    }

    /**
     * The absolute url the post-event webhook request should be sent to.
     *
     * @param string $postWebhookUrl The absolute url the post-event webhook request should be sent to.
     * @return $this Fluent Builder
     */
    public function setPostWebhookUrl(string $postWebhookUrl): self
    {
        $this->options['postWebhookUrl'] = $postWebhookUrl;
        return $this;
    }

    /**
     * @param string $target
     * @return $this Fluent Builder
     */
    public function setTarget(string $target): self
    {
        $this->options['target'] = $target;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.UpdateWebhookOptions ' . $options . ']';
    }
}

