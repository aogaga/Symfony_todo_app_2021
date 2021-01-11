<?php


namespace App\Controller;


use http\Client\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route("lucky/number")
     */
    public function numbers(): Response{
        $number = random_int(0, 1000);
        return  new Response(
         '<html><body>Lucky Number:'.$number.'</body></html>'
        );
    }

}