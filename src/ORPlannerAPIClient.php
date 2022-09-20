<?php

namespace Estimtrack\Orplannersdkphp;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ORPlannerAPIClient
{
    /**
     * @var mixed|string
     */
    private $url;

    public function __construct($core_api_url = 'http://localhost:8000/api/')
    {
        $this->url = $core_api_url;
    }

    /**
     * @throws GuzzleException
     */
    public function sendEpisode(EpisodeEntity $entity, $guzzleConfig = []): string
    {

        $params = [
            'hospital_unique_ref' => $entity->getHospitalUniqueRef(),
            'max_waiting_days' => $entity->getMaxWaitingListDays(),
            'entered_waiting_list' => $entity->getWaitingListEntryDay(),
            'procedure_ref' => $entity->getProcedure(),
            'description_procedure_type' => $entity->getProcedureDescription(),
            'service_name' => $entity->getServiceName(),
            'forecasted_duration_min' => $entity->getForecastedDurationMin(),
            'is_urgent' => $entity->getIsUrgent(),
            'patient_name' => $entity->getPatientName(),
            'patient_age' => $entity->getAge(),
            'patient_telephone' => $entity->getTelephone(),
            'patient_nhc' => $entity->getNhc(),
            'hash' => $entity->computeHash(),

        ];


        $sendEpisodeUrl = 'public/episodes';
        $client = new Client($guzzleConfig);
        $response = $client->request('POST', $this->url . $sendEpisodeUrl, [
            'form_params' => $params
        ]);

        return $response->getBody()->getContents();
    }


    /**
     * @param array $arrayOfRefs = ['123923','1233249','123483','2345828']
     * @throws GuzzleException
     */
    public function getHashesOfEpisodeRefs(array $arrayOfRefs, $guzzleConfig = [])
    {
        $body  =[
            'refs' => $arrayOfRefs
        ];
        $getHashesUrl = 'public/get_hashes';
        $client = new Client($guzzleConfig);
        $response = $client->request('PUT', $this->url . $getHashesUrl,
            [
                'form_params' => $body
            ]
        );

        return json_decode($response->getBody()->getContents(),true)['data'];
    }

    public function cancelEpisode()
    {

    }
}
