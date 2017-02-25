<?php
namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as REST;
use Symfony\Component\HttpFoundation\Request;

class PingController extends FOSRestController
{
    /**
     * @REST\Get("/ping")
     */
    public function pingAction(Request $request)
    {
        // $host = 'fc-elk';
        // $port = 12201;
        // $waitTimeoutInSeconds = 1;
        // if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){
        //    echo '1';
        // } else {
        //    echo '2';
        // }
        // fclose($fp);

        // die;


        $logger = $this->container->get('logger');
        $logger->info('yeah!!!');
        echo microtime();
        die;
    }
}
