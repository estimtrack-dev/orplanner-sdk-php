<?php

namespace Estimtrack\Orplannersdkphp;

class EpisodeEntity
{

    private $hospital_unique_ref;
    private $service_ref;
    private $service_name;

    public function computeHash(){



    }

    /**
     * @return mixed
     */
    public function getHospitalUniqueRef()
    {
        return $this->hospital_unique_ref;
    }

    /**
     * @param mixed $hospital_unique_ref
     */
    public function setHospitalUniqueRef($hospital_unique_ref): void
    {
        $this->hospital_unique_ref = $hospital_unique_ref;
    }

    /**
     * @return mixed
     */
    public function getServiceRef()
    {
        return $this->service_ref;
    }

    /**
     * @param mixed $service_ref
     */
    public function setServiceRef($service_ref): void
    {
        $this->service_ref = $service_ref;
    }

    /**
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * @param mixed $service_name
     */
    public function setServiceName($service_name): void
    {
        $this->service_name = $service_name;
    }


}
