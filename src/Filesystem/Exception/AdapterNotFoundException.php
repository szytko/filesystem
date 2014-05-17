<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawomir.zytko@gmail.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://github.com/vegas-cmf
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */ 

namespace Vegas\Filesystem\Exception;

use Vegas\Filesystem\Exception as FilesystemException;

/**
 * Class AdapterNotFoundException
 * @package Vegas\Filesystem\Exception
 */
class AdapterNotFoundException extends FilesystemException
{
    public function __construct($adapterName)
    {
        $this->message = sprintf($this->message, $adapterName);
    }

    protected $message = 'Adapter `%s` was not found';
}
 