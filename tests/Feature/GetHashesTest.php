<?php

namespace Estimtrack\Orplannersdkphp\Tests\Feature;

use Carbon\Carbon;
use Estimtrack\Orplannersdkphp\EpisodeEntity;
use Estimtrack\Orplannersdkphp\ORPlannerAPIClient;
use Tests\TestCase;

class GetHashesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_hashes()
    {

        $refs = ['123',123123,1231231,21341243];

        $oRPlannerAPIClient = new ORPlannerAPIClient();
        $response = $oRPlannerAPIClient->getHashesOfEpisodeRefs($refs);


        $this->assertIsArray($response);
    }
}
