<?php

namespace Estimtrack\Orplannersdkphp;


use GuzzleHttp\Client;

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

    public function sendEpisode(EpisodeEntity $entity, $guzzleConfig = [])
    {

        $params = [
            'hospital_unique_ref' => $entity->getHospitalUniqueRef(),
            'max_waiting_days' => $entity->getMaxWaitingListDays(),
            'entered_waiting_list' => $entity->getWaitingListEntryDay(),
            'procedure_ref' => $entity->getProcedure(),
            'description_procedure_type' => $entity->getProcedureDescription(),
            'service_name' => $entity->getService(),
            'forecasted_duration_min' => $entity->getForecastedMin(),
            'is_urgent' => $entity->getIsUrgent(),
            'patient_name' => $entity->getName(),
            'patient_age' => $entity->getAge(),
            'patient_telephone' => $entity->getTelephone(),
            'patient_nhc' => $entity->getNhc(),
            'hash' => $entity->computeHash()

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

     */
    public function getHashesOfEpisodeRefs(array $arrayOfRefs, $guzzleConfig = [])
    {
        $getHashesUrl = 'public/get_hashes';
        $client = new Client($guzzleConfig);
        $response = $client->request('GET', $this->url . $getHashesUrl);

        return $response->getBody();
    }

    public function cancelEpisode()
    {

    }
}
