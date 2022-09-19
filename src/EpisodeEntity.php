<?php

namespace Estimtrack\Orplannersdkphp;

class EpisodeEntity
{

    private $is_urgent;
    private $nhc;
    private $name;
    private $age;
    private $telephone;
    private $hospital_unique_ref;
    private $max_waiting_list_days;
    private $waiting_list_entry_day;
    private $forecasted_min;
    private $service;
    private $procedure;
    private $procedure_description;
    private $preanesthesia_notes;
    private $doctor;

    /**
     * EpisodeEntity constructor.
     */
    public function __construct()
    {
        $this->is_urgent = false;
        $this->nhc = null;
        $this->name = null;
        $this->age = null;
        $this->telephone = null;
        $this->hospital_unique_ref = null;
        $this->max_waiting_list_days = null;
        $this->waiting_list_entry_day = null;
        $this->forecasted_min = null;
        $this->service = null;
        $this->procedure = null;
        $this->procedure_description = null;
        $this->preanesthesia_notes = null;
        $this->doctor = null;
    }

    public function computeHash()
    {
        $textToHash = '';
        $textToHash .= $this->is_urgent;
        $textToHash .= $this->nhc;
        $textToHash .= $this->name;
        $textToHash .= $this->age;
        $textToHash .= $this->telephone;
        $textToHash .= $this->hospital_unique_ref;
        $textToHash .= $this->max_waiting_list_days;
        $textToHash .= $this->waiting_list_entry_day;
        $textToHash .= $this->forecasted_min;
        $textToHash .= $this->service;
        $textToHash .= $this->procedure;
        $textToHash .= $this->procedure_description;
        $textToHash .= $this->preanesthesia_notes;
        $textToHash .= $this->doctor;
        return md5($textToHash);
    }

    /**
     * @return null
     */
    public function getIsUrgent()
    {
        return $this->is_urgent;
    }

    /**
     * @param null $is_urgent
     * @return EpisodeEntity
     */
    public function setIsUrgent($is_urgent)
    {
        $this->is_urgent = $is_urgent;
        return $this;
    }

    /**
     * @return null
     */
    public function getNhc()
    {
        return $this->nhc;
    }

    /**
     * @param null $nhc
     * @return EpisodeEntity
     */
    public function setNhc($nhc)
    {
        $this->nhc = $nhc;
        return $this;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     * @return EpisodeEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param null $age
     * @return EpisodeEntity
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param null $telephone
     * @return EpisodeEntity
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return null
     */
    public function getHospitalUniqueRef()
    {
        return $this->hospital_unique_ref;
    }

    /**
     * @param null $hospital_unique_ref
     * @return EpisodeEntity
     */
    public function setHospitalUniqueRef($hospital_unique_ref)
    {
        $this->hospital_unique_ref = $hospital_unique_ref;
        return $this;
    }

    /**
     * @return null
     */
    public function getMaxWaitingListDays()
    {
        return $this->max_waiting_list_days;
    }

    /**
     * @param null $max_waiting_list_days
     * @return EpisodeEntity
     */
    public function setMaxWaitingListDays($max_waiting_list_days)
    {
        $this->max_waiting_list_days = $max_waiting_list_days;
        return $this;
    }

    /**
     * @return null
     */
    public function getWaitingListEntryDay()
    {
        return $this->waiting_list_entry_day;
    }

    /**
     * @param null $waiting_list_entry_day
     * @return EpisodeEntity
     */
    public function setWaitingListEntryDay($waiting_list_entry_day)
    {
        $this->waiting_list_entry_day = $waiting_list_entry_day;
        return $this;
    }

    /**
     * @return null
     */
    public function getForecastedMin()
    {
        return $this->forecasted_min;
    }

    /**
     * @param null $forecasted_min
     * @return EpisodeEntity
     */
    public function setForecastedMin($forecasted_min)
    {
        $this->forecasted_min = $forecasted_min;
        return $this;
    }

    /**
     * @return null
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param null $service
     * @return EpisodeEntity
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return null
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * @param null $procedure
     * @return EpisodeEntity
     */
    public function setProcedure($procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * @return null
     */
    public function getProcedureDescription()
    {
        return $this->procedure_description;
    }

    /**
     * @param null $procedure_description
     * @return EpisodeEntity
     */
    public function setProcedureDescription($procedure_description)
    {
        $this->procedure_description = $procedure_description;
        return $this;
    }

    /**
     * @return null
     */
    public function getPreanesthesiaNotes()
    {
        return $this->preanesthesia_notes;
    }

    /**
     * @param null $preanesthesia_notes
     * @return EpisodeEntity
     */
    public function setPreanesthesiaNotes($preanesthesia_notes)
    {
        $this->preanesthesia_notes = $preanesthesia_notes;
        return $this;
    }

    /**
     * @return null
     */
    public function getDoctor()
    {
        return $this->doctor;
    }

    /**
     * @param null $doctor
     * @return EpisodeEntity
     */
    public function setDoctor($doctor)
    {
        $this->doctor = $doctor;
        return $this;
    }


}
