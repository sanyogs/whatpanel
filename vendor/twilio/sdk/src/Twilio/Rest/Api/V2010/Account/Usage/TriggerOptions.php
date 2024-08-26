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

namespace Twilio\Rest\Api\V2010\Account\Usage;

use Twilio\Options;
use Twilio\Values;

abstract class TriggerOptions
{
    /**
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @param string $recurring
     * @param string $triggerBy
     * @return CreateTriggerOptions Options builder
     */
    public static function create(
        
        string $callbackMethod = Values::NONE,
        string $friendlyName = Values::NONE,
        string $recurring = Values::NONE,
        string $triggerBy = Values::NONE

    ): CreateTriggerOptions
    {
        return new CreateTriggerOptions(
            $callbackMethod,
            $friendlyName,
            $recurring,
            $triggerBy
        );
    }



    /**
     * @param string $recurring The frequency of recurring UsageTriggers to read. Can be: `daily`, `monthly`, or `yearly` to read recurring UsageTriggers. An empty value or a value of `alltime` reads non-recurring UsageTriggers.
     * @param string $triggerBy The trigger field of the UsageTriggers to read.  Can be: `count`, `usage`, or `price` as described in the [UsageRecords documentation](https://www.twilio.com/docs/usage/api/usage-record#usage-count-price).
     * @param string $usageCategory The usage category of the UsageTriggers to read. Must be a supported [usage categories](https://www.twilio.com/docs/usage/api/usage-record#usage-categories).
     * @return ReadTriggerOptions Options builder
     */
    public static function read(
        
        string $recurring = Values::NONE,
        string $triggerBy = Values::NONE,
        string $usageCategory = Values::NONE

    ): ReadTriggerOptions
    {
        return new ReadTriggerOptions(
            $recurring,
            $triggerBy,
            $usageCategory
        );
    }

    /**
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     * @param string $callbackUrl The URL we should call using `callback_method` when the trigger fires.
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @return UpdateTriggerOptions Options builder
     */
    public static function update(
        
        string $callbackMethod = Values::NONE,
        string $callbackUrl = Values::NONE,
        string $friendlyName = Values::NONE

    ): UpdateTriggerOptions
    {
        return new UpdateTriggerOptions(
            $callbackMethod,
            $callbackUrl,
            $friendlyName
        );
    }

}

class CreateTriggerOptions extends Options
    {
    /**
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @param string $recurring
     * @param string $triggerBy
     */
    public function __construct(
        
        string $callbackMethod = Values::NONE,
        string $friendlyName = Values::NONE,
        string $recurring = Values::NONE,
        string $triggerBy = Values::NONE

    ) {
        $this->options['callbackMethod'] = $callbackMethod;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['recurring'] = $recurring;
        $this->options['triggerBy'] = $triggerBy;
    }

    /**
     * The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     *
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     * @return $this Fluent Builder
     */
    public function setCallbackMethod(string $callbackMethod): self
    {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }

    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * @param string $recurring
     * @return $this Fluent Builder
     */
    public function setRecurring(string $recurring): self
    {
        $this->options['recurring'] = $recurring;
        return $this;
    }

    /**
     * @param string $triggerBy
     * @return $this Fluent Builder
     */
    public function setTriggerBy(string $triggerBy): self
    {
        $this->options['triggerBy'] = $triggerBy;
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
        return '[Twilio.Api.V2010.CreateTriggerOptions ' . $options . ']';
    }
}



class ReadTriggerOptions extends Options
    {
    /**
     * @param string $recurring The frequency of recurring UsageTriggers to read. Can be: `daily`, `monthly`, or `yearly` to read recurring UsageTriggers. An empty value or a value of `alltime` reads non-recurring UsageTriggers.
     * @param string $triggerBy The trigger field of the UsageTriggers to read.  Can be: `count`, `usage`, or `price` as described in the [UsageRecords documentation](https://www.twilio.com/docs/usage/api/usage-record#usage-count-price).
     * @param string $usageCategory The usage category of the UsageTriggers to read. Must be a supported [usage categories](https://www.twilio.com/docs/usage/api/usage-record#usage-categories).
     */
    public function __construct(
        
        string $recurring = Values::NONE,
        string $triggerBy = Values::NONE,
        string $usageCategory = Values::NONE

    ) {
        $this->options['recurring'] = $recurring;
        $this->options['triggerBy'] = $triggerBy;
        $this->options['usageCategory'] = $usageCategory;
    }

    /**
     * The frequency of recurring UsageTriggers to read. Can be: `daily`, `monthly`, or `yearly` to read recurring UsageTriggers. An empty value or a value of `alltime` reads non-recurring UsageTriggers.
     *
     * @param string $recurring The frequency of recurring UsageTriggers to read. Can be: `daily`, `monthly`, or `yearly` to read recurring UsageTriggers. An empty value or a value of `alltime` reads non-recurring UsageTriggers.
     * @return $this Fluent Builder
     */
    public function setRecurring(string $recurring): self
    {
        $this->options['recurring'] = $recurring;
        return $this;
    }

    /**
     * The trigger field of the UsageTriggers to read.  Can be: `count`, `usage`, or `price` as described in the [UsageRecords documentation](https://www.twilio.com/docs/usage/api/usage-record#usage-count-price).
     *
     * @param string $triggerBy The trigger field of the UsageTriggers to read.  Can be: `count`, `usage`, or `price` as described in the [UsageRecords documentation](https://www.twilio.com/docs/usage/api/usage-record#usage-count-price).
     * @return $this Fluent Builder
     */
    public function setTriggerBy(string $triggerBy): self
    {
        $this->options['triggerBy'] = $triggerBy;
        return $this;
    }

    /**
     * The usage category of the UsageTriggers to read. Must be a supported [usage categories](https://www.twilio.com/docs/usage/api/usage-record#usage-categories).
     *
     * @param string $usageCategory The usage category of the UsageTriggers to read. Must be a supported [usage categories](https://www.twilio.com/docs/usage/api/usage-record#usage-categories).
     * @return $this Fluent Builder
     */
    public function setUsageCategory(string $usageCategory): self
    {
        $this->options['usageCategory'] = $usageCategory;
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
        return '[Twilio.Api.V2010.ReadTriggerOptions ' . $options . ']';
    }
}

class UpdateTriggerOptions extends Options
    {
    /**
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     * @param string $callbackUrl The URL we should call using `callback_method` when the trigger fires.
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     */
    public function __construct(
        
        string $callbackMethod = Values::NONE,
        string $callbackUrl = Values::NONE,
        string $friendlyName = Values::NONE

    ) {
        $this->options['callbackMethod'] = $callbackMethod;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     *
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     * @return $this Fluent Builder
     */
    public function setCallbackMethod(string $callbackMethod): self
    {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }

    /**
     * The URL we should call using `callback_method` when the trigger fires.
     *
     * @param string $callbackUrl The URL we should call using `callback_method` when the trigger fires.
     * @return $this Fluent Builder
     */
    public function setCallbackUrl(string $callbackUrl): self
    {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
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
        return '[Twilio.Api.V2010.UpdateTriggerOptions ' . $options . ']';
    }
}

