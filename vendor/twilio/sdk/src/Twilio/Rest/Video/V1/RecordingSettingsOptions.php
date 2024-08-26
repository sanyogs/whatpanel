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
 * Twilio - Video
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

abstract class RecordingSettingsOptions
{
    /**
     * @param string $awsCredentialsSid The SID of the stored Credential resource.
     * @param string $encryptionKeySid The SID of the Public Key resource to use for encryption.
     * @param string $awsS3Url The URL of the AWS S3 bucket where the recordings should be stored. We only support DNS-compliant URLs like `https://documentation-example-twilio-bucket/recordings`, where `recordings` is the path in which you want the recordings to be stored. This URL accepts only URI-valid characters, as described in the [RFC 3986](https://tools.ietf.org/html/rfc3986#section-2).
     * @param bool $awsStorageEnabled Whether all recordings should be written to the `aws_s3_url`. When `false`, all recordings are stored in our cloud.
     * @param bool $encryptionEnabled Whether all recordings should be stored in an encrypted form. The default is `false`.
     * @return CreateRecordingSettingsOptions Options builder
     */
    public static function create(
        
        string $awsCredentialsSid = Values::NONE,
        string $encryptionKeySid = Values::NONE,
        string $awsS3Url = Values::NONE,
        bool $awsStorageEnabled = Values::BOOL_NONE,
        bool $encryptionEnabled = Values::BOOL_NONE

    ): CreateRecordingSettingsOptions
    {
        return new CreateRecordingSettingsOptions(
            $awsCredentialsSid,
            $encryptionKeySid,
            $awsS3Url,
            $awsStorageEnabled,
            $encryptionEnabled
        );
    }


}

class CreateRecordingSettingsOptions extends Options
    {
    /**
     * @param string $awsCredentialsSid The SID of the stored Credential resource.
     * @param string $encryptionKeySid The SID of the Public Key resource to use for encryption.
     * @param string $awsS3Url The URL of the AWS S3 bucket where the recordings should be stored. We only support DNS-compliant URLs like `https://documentation-example-twilio-bucket/recordings`, where `recordings` is the path in which you want the recordings to be stored. This URL accepts only URI-valid characters, as described in the [RFC 3986](https://tools.ietf.org/html/rfc3986#section-2).
     * @param bool $awsStorageEnabled Whether all recordings should be written to the `aws_s3_url`. When `false`, all recordings are stored in our cloud.
     * @param bool $encryptionEnabled Whether all recordings should be stored in an encrypted form. The default is `false`.
     */
    public function __construct(
        
        string $awsCredentialsSid = Values::NONE,
        string $encryptionKeySid = Values::NONE,
        string $awsS3Url = Values::NONE,
        bool $awsStorageEnabled = Values::BOOL_NONE,
        bool $encryptionEnabled = Values::BOOL_NONE

    ) {
        $this->options['awsCredentialsSid'] = $awsCredentialsSid;
        $this->options['encryptionKeySid'] = $encryptionKeySid;
        $this->options['awsS3Url'] = $awsS3Url;
        $this->options['awsStorageEnabled'] = $awsStorageEnabled;
        $this->options['encryptionEnabled'] = $encryptionEnabled;
    }

    /**
     * The SID of the stored Credential resource.
     *
     * @param string $awsCredentialsSid The SID of the stored Credential resource.
     * @return $this Fluent Builder
     */
    public function setAwsCredentialsSid(string $awsCredentialsSid): self
    {
        $this->options['awsCredentialsSid'] = $awsCredentialsSid;
        return $this;
    }

    /**
     * The SID of the Public Key resource to use for encryption.
     *
     * @param string $encryptionKeySid The SID of the Public Key resource to use for encryption.
     * @return $this Fluent Builder
     */
    public function setEncryptionKeySid(string $encryptionKeySid): self
    {
        $this->options['encryptionKeySid'] = $encryptionKeySid;
        return $this;
    }

    /**
     * The URL of the AWS S3 bucket where the recordings should be stored. We only support DNS-compliant URLs like `https://documentation-example-twilio-bucket/recordings`, where `recordings` is the path in which you want the recordings to be stored. This URL accepts only URI-valid characters, as described in the [RFC 3986](https://tools.ietf.org/html/rfc3986#section-2).
     *
     * @param string $awsS3Url The URL of the AWS S3 bucket where the recordings should be stored. We only support DNS-compliant URLs like `https://documentation-example-twilio-bucket/recordings`, where `recordings` is the path in which you want the recordings to be stored. This URL accepts only URI-valid characters, as described in the [RFC 3986](https://tools.ietf.org/html/rfc3986#section-2).
     * @return $this Fluent Builder
     */
    public function setAwsS3Url(string $awsS3Url): self
    {
        $this->options['awsS3Url'] = $awsS3Url;
        return $this;
    }

    /**
     * Whether all recordings should be written to the `aws_s3_url`. When `false`, all recordings are stored in our cloud.
     *
     * @param bool $awsStorageEnabled Whether all recordings should be written to the `aws_s3_url`. When `false`, all recordings are stored in our cloud.
     * @return $this Fluent Builder
     */
    public function setAwsStorageEnabled(bool $awsStorageEnabled): self
    {
        $this->options['awsStorageEnabled'] = $awsStorageEnabled;
        return $this;
    }

    /**
     * Whether all recordings should be stored in an encrypted form. The default is `false`.
     *
     * @param bool $encryptionEnabled Whether all recordings should be stored in an encrypted form. The default is `false`.
     * @return $this Fluent Builder
     */
    public function setEncryptionEnabled(bool $encryptionEnabled): self
    {
        $this->options['encryptionEnabled'] = $encryptionEnabled;
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
        return '[Twilio.Video.V1.CreateRecordingSettingsOptions ' . $options . ']';
    }
}


