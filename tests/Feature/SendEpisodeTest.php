<?php

namespace Estimtrack\Orplannersdkphp\Tests\Feature;

use Carbon\Carbon;
use Estimtrack\Orplannersdkphp\EpisodeEntity;
use Estimtrack\Orplannersdkphp\ORPlannerAPIClient;
use Tests\TestCase;

class SendEpisodeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {


        $episodeEntity = new EpisodeEntity();
        $episodeEntity->setHospitalUniqueRef(123123)
            ->setNhc(123124)
            ->setName('Paco marlago')
            ->setTelephone('62349243')
            ->setAge(56)
            ->setMaxWaitingListDays(365)
            ->setForecastedMin(100)
            ->setService('URO')
            ->setProcedure('12.30')
            ->setProcedure('Prostata')
            ->setWaitingListEntryDay(Carbon::now()->format('Y-m-d'));


        $oRPlannerAPIClient = new ORPlannerAPIClient();
        $response = $oRPlannerAPIClient->sendEpisode($episodeEntity);


        $this->assertTrue(json_decode($response,true)['status_code'] == 200);
    }
}
