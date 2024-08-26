<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Access Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Test\Mock;

use CodeIgniter\HTTP\CURLRequest;

/**
 * Class MockCURLRequest
 *
 * Simply allows us to not actually call cURL during the
 * test runs. Instead, we can set the desired output
 * and get back the set options.
 */
class MockCURLRequest extends CURLRequest
{
    public $curl_options;
    protected $output = '';

    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }

    protected function sendRequest(array $curlOptions = []): string
    {
        $this->response = clone $this->responseOrig;

        // Save so we can access later.
        $this->curl_options = $curlOptions;

        return $this->output;
    }

    // for testing purposes only
    public function getBaseURI()
    {
        return $this->baseURI;
    }

    // for testing purposes only
    public function getDelay()
    {
        return $this->delay;
    }
}
