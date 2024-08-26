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
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Messaging\V1;

use Twilio\Options;
use Twilio\Values;

abstract class DomainConfigOptions
{

    /**
     * @param string $fallbackUrl Any requests we receive to this domain that do not match an existing shortened message will be redirected to the fallback url. These will likely be either expired messages, random misdirected traffic, or intentional scraping.
     * @param string $callbackUrl URL to receive click events to your webhook whenever the recipients click on the shortened links
     * @param bool $continueOnFailure Boolean field to set customer delivery preference when there is a failure in linkShortening service
     * @param bool $disableHttps Customer's choice to send links with/without \\\"https://\\\" attached to shortened url. If true, messages will not be sent with https:// at the beginning of the url. If false, messages will be sent with https:// at the beginning of the url. False is the default behavior if it is not specified.
     * @return UpdateDomainConfigOptions Options builder
     */
    public static function update(
        
        string $fallbackUrl = Values::NONE,
        string $callbackUrl = Values::NONE,
        bool $continueOnFailure = Values::BOOL_NONE,
        bool $disableHttps = Values::BOOL_NONE

    ): UpdateDomainConfigOptions
    {
        return new UpdateDomainConfigOptions(
            $fallbackUrl,
            $callbackUrl,
            $continueOnFailure,
            $disableHttps
        );
    }

}


class UpdateDomainConfigOptions extends Options
    {
    /**
     * @param string $fallbackUrl Any requests we receive to this domain that do not match an existing shortened message will be redirected to the fallback url. These will likely be either expired messages, random misdirected traffic, or intentional scraping.
     * @param string $callbackUrl URL to receive click events to your webhook whenever the recipients click on the shortened links
     * @param bool $continueOnFailure Boolean field to set customer delivery preference when there is a failure in linkShortening service
     * @param bool $disableHttps Customer's choice to send links with/without \\\"https://\\\" attached to shortened url. If true, messages will not be sent with https:// at the beginning of the url. If false, messages will be sent with https:// at the beginning of the url. False is the default behavior if it is not specified.
     */
    public function __construct(
        
        string $fallbackUrl = Values::NONE,
        string $callbackUrl = Values::NONE,
        bool $continueOnFailure = Values::BOOL_NONE,
        bool $disableHttps = Values::BOOL_NONE

    ) {
        $this->options['fallbackUrl'] = $fallbackUrl;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['continueOnFailure'] = $continueOnFailure;
        $this->options['disableHttps'] = $disableHttps;
    }

    /**
     * Any requests we receive to this domain that do not match an existing shortened message will be redirected to the fallback url. These will likely be either expired messages, random misdirected traffic, or intentional scraping.
     *
     * @param string $fallbackUrl Any requests we receive to this domain that do not match an existing shortened message will be redirected to the fallback url. These will likely be either expired messages, random misdirected traffic, or intentional scraping.
     * @return $this Fluent Builder
     */
    public function setFallbackUrl(string $fallbackUrl): self
    {
        $this->options['fallbackUrl'] = $fallbackUrl;
        return $this;
    }

    /**
     * URL to receive click events to your webhook whenever the recipients click on the shortened links
     *
     * @param string $callbackUrl URL to receive click events to your webhook whenever the recipients click on the shortened links
     * @return $this Fluent Builder
     */
    public function setCallbackUrl(string $callbackUrl): self
    {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
     * Boolean field to set customer delivery preference when there is a failure in linkShortening service
     *
     * @param bool $continueOnFailure Boolean field to set customer delivery preference when there is a failure in linkShortening service
     * @return $this Fluent Builder
     */
    public function setContinueOnFailure(bool $continueOnFailure): self
    {
        $this->options['continueOnFailure'] = $continueOnFailure;
        return $this;
    }

    /**
     * Customer's choice to send links with/without \\\"https://\\\" attached to shortened url. If true, messages will not be sent with https:// at the beginning of the url. If false, messages will be sent with https:// at the beginning of the url. False is the default behavior if it is not specified.
     *
     * @param bool $disableHttps Customer's choice to send links with/without \\\"https://\\\" attached to shortened url. If true, messages will not be sent with https:// at the beginning of the url. If false, messages will be sent with https:// at the beginning of the url. False is the default behavior if it is not specified.
     * @return $this Fluent Builder
     */
    public function setDisableHttps(bool $disableHttps): self
    {
        $this->options['disableHttps'] = $disableHttps;
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
        return '[Twilio.Messaging.V1.UpdateDomainConfigOptions ' . $options . ']';
    }
}

