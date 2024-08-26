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

namespace Twilio\Rest\Conversations\V1\Service;

use Twilio\Options;
use Twilio\Values;

abstract class BindingOptions
{


    /**
     * @param string $bindingType The push technology used by the Binding resources to read.  Can be: `apn`, `gcm`, or `fcm`.  See [push notification configuration](https://www.twilio.com/docs/chat/push-notification-configuration) for more info.
     * @param string[] $identity The identity of a [Conversation User](https://www.twilio.com/docs/conversations/api/user-resource) this binding belongs to. See [access tokens](https://www.twilio.com/docs/conversations/create-tokens) for more details.
     * @return ReadBindingOptions Options builder
     */
    public static function read(
        
        array $bindingType = Values::ARRAY_NONE,
        array $identity = Values::ARRAY_NONE

    ): ReadBindingOptions
    {
        return new ReadBindingOptions(
            $bindingType,
            $identity
        );
    }

}



class ReadBindingOptions extends Options
    {
    /**
     * @param string $bindingType The push technology used by the Binding resources to read.  Can be: `apn`, `gcm`, or `fcm`.  See [push notification configuration](https://www.twilio.com/docs/chat/push-notification-configuration) for more info.
     * @param string[] $identity The identity of a [Conversation User](https://www.twilio.com/docs/conversations/api/user-resource) this binding belongs to. See [access tokens](https://www.twilio.com/docs/conversations/create-tokens) for more details.
     */
    public function __construct(
        
        array $bindingType = Values::ARRAY_NONE,
        array $identity = Values::ARRAY_NONE

    ) {
        $this->options['bindingType'] = $bindingType;
        $this->options['identity'] = $identity;
    }

    /**
     * The push technology used by the Binding resources to read.  Can be: `apn`, `gcm`, or `fcm`.  See [push notification configuration](https://www.twilio.com/docs/chat/push-notification-configuration) for more info.
     *
     * @param string $bindingType The push technology used by the Binding resources to read.  Can be: `apn`, `gcm`, or `fcm`.  See [push notification configuration](https://www.twilio.com/docs/chat/push-notification-configuration) for more info.
     * @return $this Fluent Builder
     */
    public function setBindingType(array $bindingType): self
    {
        $this->options['bindingType'] = $bindingType;
        return $this;
    }

    /**
     * The identity of a [Conversation User](https://www.twilio.com/docs/conversations/api/user-resource) this binding belongs to. See [access tokens](https://www.twilio.com/docs/conversations/create-tokens) for more details.
     *
     * @param string[] $identity The identity of a [Conversation User](https://www.twilio.com/docs/conversations/api/user-resource) this binding belongs to. See [access tokens](https://www.twilio.com/docs/conversations/create-tokens) for more details.
     * @return $this Fluent Builder
     */
    public function setIdentity(array $identity): self
    {
        $this->options['identity'] = $identity;
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
        return '[Twilio.Conversations.V1.ReadBindingOptions ' . $options . ']';
    }
}

