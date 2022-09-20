<?php

namespace Estimtrack\Orplannersdkphp\Tests\Feature;

use Carbon\Carbon;
use Estimtrack\Orplannersdkphp\EpisodeEntity;
use Estimtrack\Orplannersdkphp\ORPlannerAPIClient;
use GuzzleHttp\Exception\GuzzleException;
use Tests\TestCase;

class SendEpisodeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @throws GuzzleException
     */
    public function testCreate()
    {

        list($episodeEntity, $oRPlannerAPIClient, $response) = $this->sendEpisodeEntityAndAssertResponseSuccess();

    }


    /**
     * @throws GuzzleException
     */
    public function testUpdate()
    {
        list($episodeEntity, $oRPlannerAPIClient, $response) = $this->sendEpisodeEntityAndAssertResponseSuccess();


        $episodeEntity->setAge(57);
        $episodeEntity->setMaxWaitinglistdays(366);

        $oRPlannerAPIClient = new ORPlannerAPIClient();
        $response = $oRPlannerAPIClient->sendEpisode($episodeEntity);
        $this->assertTrue(json_decode($response,true)['status_code'] == 200);



    }

    /**
     * @return array
     * @throws GuzzleException
     */
    public function sendEpisodeEntityAndAssertResponseSuccess(): array
    {
        $episodeEntity = new EpisodeEntity();
        $episodeEntity->setHospitalUniqueRef(rand(1000, 999999))
            ->setPatientNhc(rand(1000, 999999))
            ->setPatientName('Paco')
            ->setPatientLastname1('Perez')
            ->setPatientLastname2('Perez')
            ->setPatientTelephone('62349243')
            ->setAge(56)
            ->setMaxWaitingListDays(365)
            ->setForecastedDurationMin(100)
            ->setServiceName('URO')
            ->setProcedure('12.30')
            ->setProcedure('Prostata')
            ->setEnteredWaitingList(Carbon::now()->format('Y-m-d'));


        $oRPlannerAPIClient = new ORPlannerAPIClient();
        $response = $oRPlannerAPIClient->sendEpisode($episodeEntity);
        $this->assertTrue(json_decode($response, true)['status_code'] == 200);
        return array($episodeEntity, $oRPlannerAPIClient, $response);
    }
}
