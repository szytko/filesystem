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

namespace Vegas\Filesystem\Adapter\Exception\Ftp;

use Vegas\Filesystem\Exception as FilesystemException;

/**
 * Class InvalidHostException
 * @package Vegas\Filesystem\Adapter\Exception
 */
class InvalidHostException extends FilesystemException
{
    protected $message = 'FTP host is invalid';
}
 