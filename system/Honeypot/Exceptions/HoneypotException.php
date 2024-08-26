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

namespace CodeIgniter\Honeypot\Exceptions;

use CodeIgniter\Exceptions\ConfigException;
use CodeIgniter\Exceptions\ExceptionInterface;

class HoneypotException extends ConfigException implements ExceptionInterface
{
    /**
     * Thrown when the template value of config is empty.
     *
     * @return static
     */
    public static function forNoTemplate()
    {
        return new static(lang('hd_lang.Honeypot.noTemplate'));
    }

    /**
     * Thrown when the name value of config is empty.
     *
     * @return static
     */
    public static function forNoNameField()
    {
        return new static(lang('hd_lang.Honeypot.noNameField'));
    }

    /**
     * Thrown when the hidden value of config is false.
     *
     * @return static
     */
    public static function forNoHiddenValue()
    {
        return new static(lang('hd_lang.Honeypot.noHiddenValue'));
    }

    /**
     * Thrown when there are no data in the request of honeypot field.
     *
     * @return static
     */
    public static function isBot()
    {
        return new static(lang('hd_lang.Honeypot.theClientIsABot'));
    }
}
