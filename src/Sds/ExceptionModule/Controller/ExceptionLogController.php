<?php
/**
 * @package    Sds
 * @license    MIT
 */
namespace Sds\ExceptionModule\Controller;

use Sds\Common\Serializer\SerializerInterface;
use Sds\JsonController\AbstractJsonpController;

/**
 * Controller to handle exceptions send from client over jsonp
 *
 * @since   1.0
 * @version $Revision$
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class ExceptionLogController extends AbstractJsonpController
{

    /**
     *
     * @var string
     */
    protected $serializer;

    /**
     *
     * @return \Sds\Common\Serializer\SerializerInterface
     */
    public function getSerializer() {
        return $this->serializer;
    }

    /**
     *
     * @param \Sds\Common\Serializer\SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer) {
        $this->serializer = $serializer;
    }

    public function log($exceptionArray)
    {
        return array(
            'logged' => true
        );
    }
}
