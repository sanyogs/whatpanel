<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Application Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */

namespace Twilio\Rest;

use Twilio\Rest\FrontlineApi\V1;

class FrontlineApi extends FrontlineApiBase {

    /**
     * @deprecated Use v1->users instead.
     */
    protected function getUsers(): \Twilio\Rest\FrontlineApi\V1\UserList {
        echo "users is deprecated. Use v1->users instead.";
        return $this->v1->users;
    }

    /**
     * @deprecated Use v1->users(\$sid) instead.
     * @param string $sid The SID of the User resource to fetch
     */
    protected function contextUsers(string $sid): \Twilio\Rest\FrontlineApi\V1\UserContext {
        echo "users(\$sid) is deprecated. Use v1->users(\$sid) instead.";
        return $this->v1->users($sid);
    }
}