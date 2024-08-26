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
 * Twilio - Numbers
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Numbers\V2\AuthorizationDocument;

use Twilio\Options;
use Twilio\Values;

abstract class DependentHostedNumberOrderOptions
{
    /**
     * @param string $status Status of an instance resource. It can hold one of the values: 1. opened 2. signing, 3. signed LOA, 4. canceled, 5. failed. See the section entitled [Status Values](https://www.twilio.com/docs/phone-numbers/hosted-numbers/hosted-numbers-api/authorization-document-resource#status-values) for more information on each of these statuses.
     * @param string $phoneNumber An E164 formatted phone number hosted by this HostedNumberOrder.
     * @param string $incomingPhoneNumberSid A 34 character string that uniquely identifies the IncomingPhoneNumber resource created by this HostedNumberOrder.
     * @param string $friendlyName A human readable description of this resource, up to 128 characters.
     * @return ReadDependentHostedNumberOrderOptions Options builder
     */
    public static function read(
        
        string $status = Values::NONE,
        string $phoneNumber = Values::NONE,
        string $incomingPhoneNumberSid = Values::NONE,
        string $friendlyName = Values::NONE

    ): ReadDependentHostedNumberOrderOptions
    {
        return new ReadDependentHostedNumberOrderOptions(
            $status,
            $phoneNumber,
            $incomingPhoneNumberSid,
            $friendlyName
        );
    }

}

class ReadDependentHostedNumberOrderOptions extends Options
    {
    /**
     * @param string $status Status of an instance resource. It can hold one of the values: 1. opened 2. signing, 3. signed LOA, 4. canceled, 5. failed. See the section entitled [Status Values](https://www.twilio.com/docs/phone-numbers/hosted-numbers/hosted-numbers-api/authorization-document-resource#status-values) for more information on each of these statuses.
     * @param string $phoneNumber An E164 formatted phone number hosted by this HostedNumberOrder.
     * @param string $incomingPhoneNumberSid A 34 character string that uniquely identifies the IncomingPhoneNumber resource created by this HostedNumberOrder.
     * @param string $friendlyName A human readable description of this resource, up to 128 characters.
     */
    public function __construct(
        
        string $status = Values::NONE,
        string $phoneNumber = Values::NONE,
        string $incomingPhoneNumberSid = Values::NONE,
        string $friendlyName = Values::NONE

    ) {
        $this->options['status'] = $status;
        $this->options['phoneNumber'] = $phoneNumber;
        $this->options['incomingPhoneNumberSid'] = $incomingPhoneNumberSid;
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * Status of an instance resource. It can hold one of the values: 1. opened 2. signing, 3. signed LOA, 4. canceled, 5. failed. See the section entitled [Status Values](https://www.twilio.com/docs/phone-numbers/hosted-numbers/hosted-numbers-api/authorization-document-resource#status-values) for more information on each of these statuses.
     *
     * @param string $status Status of an instance resource. It can hold one of the values: 1. opened 2. signing, 3. signed LOA, 4. canceled, 5. failed. See the section entitled [Status Values](https://www.twilio.com/docs/phone-numbers/hosted-numbers/hosted-numbers-api/authorization-document-resource#status-values) for more information on each of these statuses.
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self
    {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * An E164 formatted phone number hosted by this HostedNumberOrder.
     *
     * @param string $phoneNumber An E164 formatted phone number hosted by this HostedNumberOrder.
     * @return $this Fluent Builder
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->options['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * A 34 character string that uniquely identifies the IncomingPhoneNumber resource created by this HostedNumberOrder.
     *
     * @param string $incomingPhoneNumberSid A 34 character string that uniquely identifies the IncomingPhoneNumber resource created by this HostedNumberOrder.
     * @return $this Fluent Builder
     */
    public function setIncomingPhoneNumberSid(string $incomingPhoneNumberSid): self
    {
        $this->options['incomingPhoneNumberSid'] = $incomingPhoneNumberSid;
        return $this;
    }

    /**
     * A human readable description of this resource, up to 128 characters.
     *
     * @param string $friendlyName A human readable description of this resource, up to 128 characters.
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
        return '[Twilio.Numbers.V2.ReadDependentHostedNumberOrderOptions ' . $options . ']';
    }
}

