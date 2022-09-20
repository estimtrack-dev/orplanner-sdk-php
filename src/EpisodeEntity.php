<?php

namespace Estimtrack\Orplannersdkphp;

class EpisodeEntity
{

    /** @var string   mandatory field , patient identifier
     */
    private $nhc;

    /** @var string   mandatory field , patient name
     */
    private string $patientName = '';

    /** @var string  mandatory field, episode unique identifier
     */
    private string $hospital_unique_ref;

    /** @var ?int  optional field , patient age
     */
    private ?int $age = null;

    /** @var bool  optional field , true   -> episode is urgent  / false  -> is not urgent
     */
    private bool $is_urgent = false;

    /** @var ?int  optional field, patient telephone
     */
    private  ?int $telephone = null;

    /** @var ?int  optional field, maximum amount of days the patient can spent in waiting list
     */
    private ?int $max_waiting_list_days = null;

    /** @var ?string  optional field, day patient got in the waiting list, format Y-m-d!
     */
    private ?string $waiting_list_entry_day;  //Y-m-d;

    /** @var ?int  optional field, amount of time in minutes the intervention is expected to be
     */
    private ?int $forecasted_min  =null;

    /** @var ?string  optional field, name of the service the episode is associated with
     */
    private ?string  $serviceName = null;

    /** @var ?string  optional field, name of the procedure that the patient will be subject to
     */
    private ?string $procedure = null;

    /** @var ?string  optional field,  procedure description  the patient will be subject to
     */
    private ?string $procedure_description = null;

    /** @var ?string  optional field,  notes taken during pre anesthesia
     */
    private ?string $preanesthesia_notes = null;

    /** @var ?string  optional field,  name of the doctor in charge of the patient
     */
    private ?string $doctor;


    public function computeHash(): string
    {
        $textToHash = '';
        $textToHash .= $this->is_urgent;
        $textToHash .= $this->nhc;
        $textToHash .= $this->patientName;
        $textToHash .= $this->age;
        $textToHash .= $this->telephone;
        $textToHash .= $this->hospital_unique_ref;
        $textToHash .= $this->max_waiting_list_days;
        $textToHash .= $this->waiting_list_entry_day;
        $textToHash .= $this->forecasted_min;
        $textToHash .= $this->serviceName;
        $textToHash .= $this->procedure;
        $textToHash .= $this->procedure_description;
        $textToHash .= $this->preanesthesia_notes;
        $textToHash .= $this->doctor;
        return md5($textToHash);
    }

    public function getIsUrgent(): bool
    {
        return $this->is_urgent;
    }

    public function setIsUrgent($is_urgent): static
    {
        $this->is_urgent = $is_urgent;
        return $this;
    }

    public function getNhc()
    {
        return $this->nhc;
    }


    public function setNhc($nhc): static
    {
        $this->nhc = $nhc;
        return $this;
    }


    public function getPatientName()
    {
        return $this->patientName;
    }


    public function setPatientName($patientName): static
    {
        $this->patientName = $patientName;
        return $this;
    }


    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): static
    {
        $this->age = $age;
        return $this;
    }


    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }


    public function getHospitalUniqueRef()
    {
        return $this->hospital_unique_ref;
    }

    public function setHospitalUniqueRef($hospital_unique_ref): static
    {
        $this->hospital_unique_ref = $hospital_unique_ref;
        return $this;
    }


    public function getMaxWaitingListDays()
    {
        return $this->max_waiting_list_days;
    }

    public function setMaxWaitingListDays($max_waiting_list_days): static
    {
        $this->max_waiting_list_days = $max_waiting_list_days;
        return $this;
    }


    public function getWaitingListEntryDay()
    {
        return $this->waiting_list_entry_day;
    }


    public function setWaitingListEntryDay($waiting_list_entry_day): static
    {
        $this->waiting_list_entry_day = $waiting_list_entry_day;
        return $this;
    }


    public function getForecastedMin()
    {
        return $this->forecasted_min;
    }


    public function setForecastedMin($forecasted_min): static
    {
        $this->forecasted_min = $forecasted_min;
        return $this;
    }


    public function getServiceName()
    {
        return $this->serviceName;
    }

    public function setServiceName($serviceName): static
    {
        $this->serviceName = $serviceName;
        return $this;
    }


    public function getProcedure()
    {
        return $this->procedure;
    }


    public function setProcedure($procedure): static
    {
        $this->procedure = $procedure;
        return $this;
    }


    public function getProcedureDescription()
    {
        return $this->procedure_description;
    }

    /**
     * @param null $procedure_description
     * @return EpisodeEntity
     */
    public function setProcedureDescription($procedure_description): static
    {
        $this->procedure_description = $procedure_description;
        return $this;
    }


    public function getPreanesthesiaNotes()
    {
        return $this->preanesthesia_notes;
    }


    public function setPreanesthesiaNotes($preanesthesia_notes): static
    {
        $this->preanesthesia_notes = $preanesthesia_notes;
        return $this;
    }


    public function getDoctor()
    {
        return $this->doctor;
    }

    public function setDoctorName($doctor): static
    {
        $this->doctor = $doctor;
        return $this;
    }


}
