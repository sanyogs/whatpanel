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
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string|null $accountSid
 * @property int|null $avgTaskAcceptanceTime
 * @property \DateTime|null $startTime
 * @property \DateTime|null $endTime
 * @property int|null $reservationsCreated
 * @property int|null $reservationsAccepted
 * @property int|null $reservationsRejected
 * @property int|null $reservationsTimedOut
 * @property int|null $reservationsCanceled
 * @property int|null $reservationsRescinded
 * @property array|null $splitByWaitTime
 * @property string|null $taskQueueSid
 * @property array|null $waitDurationUntilAccepted
 * @property array|null $waitDurationUntilCanceled
 * @property array|null $waitDurationInQueueUntilAccepted
 * @property int|null $tasksCanceled
 * @property int|null $tasksCompleted
 * @property int|null $tasksDeleted
 * @property int|null $tasksEntered
 * @property int|null $tasksMoved
 * @property string|null $workspaceSid
 * @property string|null $url
 */
class TaskQueueCumulativeStatisticsInstance extends InstanceResource
{
    /**
     * Initialize the TaskQueueCumulativeStatisticsInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The SID of the Workspace with the TaskQueue to fetch.
     * @param string $taskQueueSid The SID of the TaskQueue for which to fetch statistics.
     */
    public function __construct(Version $version, array $payload, string $workspaceSid, string $taskQueueSid)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'avgTaskAcceptanceTime' => Values::array_get($payload, 'avg_task_acceptance_time'),
            'startTime' => Deserialize::dateTime(Values::array_get($payload, 'start_time')),
            'endTime' => Deserialize::dateTime(Values::array_get($payload, 'end_time')),
            'reservationsCreated' => Values::array_get($payload, 'reservations_created'),
            'reservationsAccepted' => Values::array_get($payload, 'reservations_accepted'),
            'reservationsRejected' => Values::array_get($payload, 'reservations_rejected'),
            'reservationsTimedOut' => Values::array_get($payload, 'reservations_timed_out'),
            'reservationsCanceled' => Values::array_get($payload, 'reservations_canceled'),
            'reservationsRescinded' => Values::array_get($payload, 'reservations_rescinded'),
            'splitByWaitTime' => Values::array_get($payload, 'split_by_wait_time'),
            'taskQueueSid' => Values::array_get($payload, 'task_queue_sid'),
            'waitDurationUntilAccepted' => Values::array_get($payload, 'wait_duration_until_accepted'),
            'waitDurationUntilCanceled' => Values::array_get($payload, 'wait_duration_until_canceled'),
            'waitDurationInQueueUntilAccepted' => Values::array_get($payload, 'wait_duration_in_queue_until_accepted'),
            'tasksCanceled' => Values::array_get($payload, 'tasks_canceled'),
            'tasksCompleted' => Values::array_get($payload, 'tasks_completed'),
            'tasksDeleted' => Values::array_get($payload, 'tasks_deleted'),
            'tasksEntered' => Values::array_get($payload, 'tasks_entered'),
            'tasksMoved' => Values::array_get($payload, 'tasks_moved'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['workspaceSid' => $workspaceSid, 'taskQueueSid' => $taskQueueSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return TaskQueueCumulativeStatisticsContext Context for this TaskQueueCumulativeStatisticsInstance
     */
    protected function proxy(): TaskQueueCumulativeStatisticsContext
    {
        if (!$this->context) {
            $this->context = new TaskQueueCumulativeStatisticsContext(
                $this->version,
                $this->solution['workspaceSid'],
                $this->solution['taskQueueSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the TaskQueueCumulativeStatisticsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TaskQueueCumulativeStatisticsInstance Fetched TaskQueueCumulativeStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): TaskQueueCumulativeStatisticsInstance
    {

        return $this->proxy()->fetch($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Taskrouter.V1.TaskQueueCumulativeStatisticsInstance ' . \implode(' ', $context) . ']';
    }
}

