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


namespace Twilio\Rest\Preview\Sync\Service\SyncMap;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class SyncMapPermissionContext extends InstanceContext
    {
    /**
     * Initialize the SyncMapPermissionContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid 
     * @param string $mapSid Identifier of the Sync Map. Either a SID or a unique name.
     * @param string $identity Arbitrary string identifier representing a user associated with an FPA token, assigned by the developer.
     */
    public function __construct(
        Version $version,
        $serviceSid,
        $mapSid,
        $identity
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        'mapSid' =>
            $mapSid,
        'identity' =>
            $identity,
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/Maps/' . \rawurlencode($mapSid)
        .'/Permissions/' . \rawurlencode($identity)
        .'';
    }

    /**
     * Delete the SyncMapPermissionInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the SyncMapPermissionInstance
     *
     * @return SyncMapPermissionInstance Fetched SyncMapPermissionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SyncMapPermissionInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new SyncMapPermissionInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['mapSid'],
            $this->solution['identity']
        );
    }


    /**
     * Update the SyncMapPermissionInstance
     *
     * @param bool $read Boolean flag specifying whether the identity can read the Sync Map.
     * @param bool $write Boolean flag specifying whether the identity can create, update and delete Items of the Sync Map.
     * @param bool $manage Boolean flag specifying whether the identity can delete the Sync Map.
     * @return SyncMapPermissionInstance Updated SyncMapPermissionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(bool $read, bool $write, bool $manage): SyncMapPermissionInstance
    {

        $data = Values::of([
            'Read' =>
                Serialize::booleanToString($read),
            'Write' =>
                Serialize::booleanToString($write),
            'Manage' =>
                Serialize::booleanToString($manage),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SyncMapPermissionInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['mapSid'],
            $this->solution['identity']
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
        return '[Twilio.Preview.Sync.SyncMapPermissionContext ' . \implode(' ', $context) . ']';
    }
}
