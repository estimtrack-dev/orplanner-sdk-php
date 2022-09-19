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
        $this->is_urgent = null;
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
     * @return mixed
     */
    public function getIsUrgent()
    {
        return $this->is_urgent;
    }

    /**
     * @param mixed $is_urgent
     */
    public function setIsUrgent($is_urgent): void
    {
        $this->is_urgent = $is_urgent;
    }

    /**
     * @return mixed
     */
    public function getNhc()
    {
        return $this->nhc;
    }

    /**
     * @param mixed $nhc
     */
    public function setNhc($nhc): void
    {
        $this->nhc = $nhc;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
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
    public function getMaxWaitingListDays()
    {
        return $this->max_waiting_list_days;
    }

    /**
     * @param mixed $max_waiting_list_days
     */
    public function setMaxWaitingListDays($max_waiting_list_days): void
    {
        $this->max_waiting_list_days = $max_waiting_list_days;
    }

    /**
     * @return mixed
     */
    public function getWaitingListEntryDay()
    {
        return $this->waiting_list_entry_day;
    }

    /**
     * @param mixed $waiting_list_entry_day
     */
    public function setWaitingListEntryDay($waiting_list_entry_day): void
    {
        $this->waiting_list_entry_day = $waiting_list_entry_day;
    }

    /**
     * @return mixed
     */
    public function getForecastedMin()
    {
        return $this->forecasted_min;
    }

    /**
     * @param mixed $forecasted_min
     */
    public function setForecastedMin($forecasted_min): void
    {
        $this->forecasted_min = $forecasted_min;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service): void
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * @param mixed $procedure
     */
    public function setProcedure($procedure): void
    {
        $this->procedure = $procedure;
    }

    /**
     * @return mixed
     */
    public function getProcedureDescription()
    {
        return $this->procedure_description;
    }

    /**
     * @param mixed $procedure_description
     */
    public function setProcedureDescription($procedure_description): void
    {
        $this->procedure_description = $procedure_description;
    }

    /**
     * @return mixed
     */
    public function getPreanesthesiaNotes()
    {
        return $this->preanesthesia_notes;
    }

    /**
     * @param mixed $preanesthesia_notes
     */
    public function setPreanesthesiaNotes($preanesthesia_notes): void
    {
        $this->preanesthesia_notes = $preanesthesia_notes;
    }

    /**
     * @return mixed
     */
    public function getDoctor()
    {
        return $this->doctor;
    }

    /**
     * @param mixed $doctor
     */
    public function setDoctor($doctor): void
    {
        $this->doctor = $doctor;
    }

}
