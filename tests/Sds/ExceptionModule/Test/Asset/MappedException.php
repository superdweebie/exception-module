<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */

namespace Sds\ExceptionModule\Test\Asset;

/**
 *
 * @since   1.0
 * @version $Revision$
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class MappedException extends \Exception
{
    protected $publicInfo;

    protected $restrictedInfo;

    public function getPublicInfo() {
        return $this->publicInfo;
    }

    public function setPublicInfo($publicInfo) {
        $this->publicInfo = $publicInfo;
    }

    public function getRestrictedInfo() {
        return $this->restrictedInfo;
    }

    public function setRestrictedInfo($restrictedInfo) {
        $this->restrictedInfo = $restrictedInfo;
    }
}
