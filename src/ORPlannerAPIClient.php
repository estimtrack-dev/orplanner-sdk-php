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

    public function sendEpisode(EpisodeEntity $entity)
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
        $client = new Client();
        $response = $client->request('POST', $this->url.$sendEpisodeUrl, [
            'form_params' => $params
        ]);

        return $response;
    }


    public function getHashesOfEpisodeRefs($arrayOfHashes): RefsAndHashes
    {

    }

    public function cancelEpisode()
    {

    }
}
