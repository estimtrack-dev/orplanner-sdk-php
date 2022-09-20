<?php

namespace Estimtrack\Orplannersdkphp;

class EpisodeEntity
{

    const FORMAT_ESTIMTRACK_HOUR = 'H:i:s';
    const FORMAT_ESTIMTRACK_DATE = 'Y-m-d';


    //mandatory fields

    /** @var string   mandatory field , patient identifier
     */
    private string $nhc;

    /** @var string   mandatory field , patient name
     */
    private string $patientName = '';

    /** @var string  mandatory field, episode unique identifier
     */
    private string $hospital_unique_ref;


    //patient info

    /** @var ?string  optional field,  patient first surname
     */
    private ?string $patientLastName1 = null;

    /** @var ?string  optional field,  patient last surname
     */
    private ?string $patientLastName2 = null;

    /** @var ?int  optional field , patient age
     */
    private ?int $age = null;

    /** @var ?string  optional field , patient gender => m = male, f = female
     */
    private ?string $gender = null;

    /** @var ?int  optional field, patient telephone
     */
    private ?int $telephone = null;


    // dates, hours and times

    /** @var ?int  optional field, maximum amount of days the patient can spent in waiting list
     */
    private ?int $maxWaitingListDays = null;

    /** @var ?string  optional field, day patient got in the waiting list, format Y-m-d
     */
    private ?string $waitingListEntryDay;

    /** @var ?int  optional field, amount of time in minutes the intervention is expected to be
     */
    private ?int $forecastedDurationMin = null;

    /** @var ?string  optional field, which hour did the intervention start, format H:i:s
     */
    private ?string $realStartHour = null;

    /** @var ?string  optional field, which hour did the intervention finish, format H:i:s
     */
    private ?string $realFinishHour = null;

    /** @var ?string  optional field, which is the intervention supposed to start, format H:i:s
     */
    private ?string $startHour = null;

    /** @var ?string  optional field, which is the intervention supposed to finish, format H:i:s
     */
    private ?string $finishHour = null;

    /** @var ?string  optional field, which day is the intervention supposed to take place, format Y-m-d
     */
    private ?string $scheduledDate = null;


    //location


    /** @var ?string  optional field, name of the service the episode is associated with
     */
    private ?string $serviceName = null;

    /** @var ?string  optional field, name of the quirofan the episode is associated with
     */
    private ?string $quirofanName = null;


    //equipment


    /** @var ?string  optional field, name of the procedure that the patient will be subject to
     */
    private ?string $procedure = null;

    /** @var ?string  optional field,  procedure description  the patient will be subject to
     */
    private ?string $procedure_description = null;


    //conditions

    /** @var bool  optional field , true   -> episode is urgent  / false  -> is not urgent
     */
    private bool $isUrgent = false;

    /** @var bool  optional field , true   -> episode/intervention has complexity   / false  -> is has not
     */
    private bool $isComplicated =  false;

    /** @var bool  optional field , true   -> isolated  / false  -> it is not
     */
    private bool $isIsolated = false;

    /** @var bool  optional field , true   -> needs sintrom   / false  -> it does not
     */
    private bool $sintrom = false;

    /** @var bool  optional field , true   -> has equipment laparo  / false  -> it has not
     */
    private bool $equipmentLaparo = false;


    /** @var bool  optional field , true   -> has patient checks for anesthesia have been made  / false  -> not been made
     */
    private bool $anesthesiaAppreciation = false;

    //doctors, name , info  and other fields

    /** @var ?string  optional field,  notes taken during pre anesthesia
     */
    private ?string $preanesthesiaNotes = null;


    /** @var ?string  optional field, anesthesiologist name
     */
    private ?string $anesthesiologistName = null;

    /** @var ?string  optional field, anesthesiologist ref
     */
    private ?string $anesthesiologistRef = null;

    /** @var ?string  optional field,  notes taken by the doctor, but can by used as a general field for comments .
     */
    private ?string $doctorNotes = null;

    /** @var ?string  optional field,  name of the doctor in charge of the patient
     */
    private ?string $doctorName;

    /** @var ?string  optional field,  ref of the doctor in charge of the patient
     */
    private ?string $doctorRef;

    /** @var ?string  optional field, ref  of the surgeon in charge of performing the intervention .
     */
    private ?string $surgeonRef;

    /** @var ?string  optional field, name of the surgeon in charge of performing the intervention .
     */
    private ?string $surgeonName;

    /** @var ?string  optional field, ref of the doctor that ordered the intervention .
     */
    private ?string $orderedByDoctorRef;


    /** @var ?string  optional field, name of the doctor that ordered the intervention .
     */
    private ?string $orderedByDoctorName;


    //others

    /** @var ?string   optional field , text specifying priority
     */
    private ?string  $priority =null;


    public function computeHash(): string
    {
        $textToHash = '';
        $textToHash .= $this->isUrgent;
        $textToHash .= $this->nhc;
        $textToHash .= $this->patientName;
        $textToHash .= $this->age;
        $textToHash .= $this->telephone;
        $textToHash .= $this->hospital_unique_ref;
        $textToHash .= $this->maxWaitingListDays;
        $textToHash .= $this->waitingListEntryDay;
        $textToHash .= $this->forecastedDurationMin;
        $textToHash .= $this->serviceName;
        $textToHash .= $this->procedure;
        $textToHash .= $this->procedure_description;
        $textToHash .= $this->preanesthesiaNotes;
        $textToHash .= $this->doctorName;
        return md5($textToHash);
    }

    public function getIsUrgent(): bool
    {
        return $this->isUrgent;
    }

    public function setIsUrgent($isUrgent): static
    {
        $this->isUrgent = $isUrgent;
        return $this;
    }

    public function getNhc(): string
    {
        return $this->nhc;
    }


    public function setNhc($nhc): static
    {
        $this->nhc = $nhc;
        return $this;
    }


    public function getPatientName(): string
    {
        return $this->patientName;
    }


    public function setPatientName($patientName): static
    {
        $this->patientName = $patientName;
        return $this;
    }


    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge($age): static
    {
        $this->age = $age;
        return $this;
    }


    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone($telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }


    public function getHospitalUniqueRef(): string
    {
        return $this->hospital_unique_ref;
    }

    public function setHospitalUniqueRef($hospital_unique_ref): static
    {
        $this->hospital_unique_ref = $hospital_unique_ref;
        return $this;
    }


    public function getMaxWaitingListDays(): ?int
    {
        return $this->maxWaitingListDays;
    }

    public function setMaxWaitingListDays($maxWaitingListDays): static
    {
        $this->maxWaitingListDays = $maxWaitingListDays;
        return $this;
    }


    public function getWaitingListEntryDay(): ?string
    {
        return $this->waitingListEntryDay;
    }


    public function setWaitingListEntryDay($waitingListEntryDay): static
    {
        $this->waitingListEntryDay = $waitingListEntryDay;
        return $this;
    }


    public function getForecastedDurationMin(): ?int
    {
        return $this->forecastedDurationMin;
    }


    public function setForecastedDurationMin($forecastedDurationMin): static
    {
        $this->forecastedDurationMin = $forecastedDurationMin;
        return $this;
    }


    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName($serviceName): static
    {
        $this->serviceName = $serviceName;
        return $this;
    }


    public function getProcedure(): ?string
    {
        return $this->procedure;
    }


    public function setProcedure($procedure): static
    {
        $this->procedure = $procedure;
        return $this;
    }


    public function getProcedureDescription(): ?string
    {
        return $this->procedure_description;
    }


    public function setProcedureDescription($procedure_description): static
    {
        $this->procedure_description = $procedure_description;
        return $this;
    }


    public function getPreanesthesiaNotes(): ?string
    {
        return $this->preanesthesiaNotes;
    }


    public function setPreanesthesiaNotes($preanesthesiaNotes): static
    {
        $this->preanesthesiaNotes = $preanesthesiaNotes;
        return $this;
    }


    public function getDoctorName(): ?string
    {
        return $this->doctorName;
    }

    public function setDoctorName($doctor): static
    {
        $this->doctorName = $doctor;
        return $this;
    }

    public function getPatientLastName1(): ?string
    {
        return $this->patientLastName1;
    }

    public function setPatientLastName1(?string $patientLastName1): EpisodeEntity
    {
        $this->patientLastName1 = $patientLastName1;
        return $this;
    }

    public function getPatientLastName2(): ?string
    {
        return $this->patientLastName2;
    }

    public function setPatientLastName2(?string $patientLastName2): EpisodeEntity
    {
        $this->patientLastName2 = $patientLastName2;
        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): EpisodeEntity
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRealStartHour(): ?string
    {
        return $this->realStartHour;
    }

    /**
     * @param string|null $realStartHour
     */
    public function setRealStartHour(?string $realStartHour): void
    {
        $this->realStartHour = $realStartHour;
    }


    /**
     * @return string|null
     */
    public function getRealFinishHour(): ?string
    {
        return $this->realFinishHour;
    }

    /**
     * @param string|null $realFinishHour
     * @return EpisodeEntity
     */
    public function setRealFinishHour(?string $realFinishHour): EpisodeEntity
    {
        $this->realFinishHour = $realFinishHour;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartHour(): ?string
    {
        return $this->startHour;
    }

    /**
     * @param string|null $startHour
     * @return EpisodeEntity
     */
    public function setStartHour(?string $startHour): EpisodeEntity
    {
        $this->startHour = $startHour;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFinishHour(): ?string
    {
        return $this->finishHour;
    }

    /**
     * @param string|null $finishHour
     * @return EpisodeEntity
     */
    public function setFinishHour(?string $finishHour): EpisodeEntity
    {
        $this->finishHour = $finishHour;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScheduledDate(): ?string
    {
        return $this->scheduledDate;
    }

    /**
     * @param string|null $scheduledDate
     * @return EpisodeEntity
     */
    public function setScheduledDate(?string $scheduledDate): EpisodeEntity
    {
        $this->scheduledDate = $scheduledDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuirofanName(): ?string
    {
        return $this->quirofanName;
    }

    /**
     * @param string|null $quirofanName
     * @return EpisodeEntity
     */
    public function setQuirofanName(?string $quirofanName): EpisodeEntity
    {
        $this->quirofanName = $quirofanName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isComplicated(): bool
    {
        return $this->isComplicated;
    }

    /**
     * @param bool $isComplicated
     * @return EpisodeEntity
     */
    public function setIsComplicated(bool $isComplicated): EpisodeEntity
    {
        $this->isComplicated = $isComplicated;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsolated(): bool
    {
        return $this->isIsolated;
    }

    /**
     * @param bool $isIsolated
     * @return EpisodeEntity
     */
    public function setIsIsolated(bool $isIsolated): EpisodeEntity
    {
        $this->isIsolated = $isIsolated;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSintrom(): bool
    {
        return $this->sintrom;
    }

    /**
     * @param bool $sintrom
     * @return EpisodeEntity
     */
    public function setSintrom(bool $sintrom): EpisodeEntity
    {
        $this->sintrom = $sintrom;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEquipmentLaparo(): bool
    {
        return $this->equipmentLaparo;
    }

    /**
     * @param bool $equipmentLaparo
     * @return EpisodeEntity
     */
    public function setEquipmentLaparo(bool $equipmentLaparo): EpisodeEntity
    {
        $this->equipmentLaparo = $equipmentLaparo;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAnesthesiaAppreciation(): bool
    {
        return $this->anesthesiaAppreciation;
    }

    /**
     * @param bool $anesthesiaAppreciation
     * @return EpisodeEntity
     */
    public function setAnesthesiaAppreciation(bool $anesthesiaAppreciation): EpisodeEntity
    {
        $this->anesthesiaAppreciation = $anesthesiaAppreciation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnesthesiologistName(): ?string
    {
        return $this->anesthesiologistName;
    }

    /**
     * @param string|null $anesthesiologistName
     * @return EpisodeEntity
     */
    public function setAnesthesiologistName(?string $anesthesiologistName): EpisodeEntity
    {
        $this->anesthesiologistName = $anesthesiologistName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnesthesiologistRef(): ?string
    {
        return $this->anesthesiologistRef;
    }

    /**
     * @param string|null $anesthesiologistRef
     * @return EpisodeEntity
     */
    public function setAnesthesiologistRef(?string $anesthesiologistRef): EpisodeEntity
    {
        $this->anesthesiologistRef = $anesthesiologistRef;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoctorNotes(): ?string
    {
        return $this->doctorNotes;
    }

    /**
     * @param string|null $doctorNotes
     * @return EpisodeEntity
     */
    public function setDoctorNotes(?string $doctorNotes): EpisodeEntity
    {
        $this->doctorNotes = $doctorNotes;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoctorRef(): ?string
    {
        return $this->doctorRef;
    }

    /**
     * @param string|null $doctorRef
     * @return EpisodeEntity
     */
    public function setDoctorRef(?string $doctorRef): EpisodeEntity
    {
        $this->doctorRef = $doctorRef;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSurgeonRef(): ?string
    {
        return $this->surgeonRef;
    }

    /**
     * @param string|null $surgeonRef
     * @return EpisodeEntity
     */
    public function setSurgeonRef(?string $surgeonRef): EpisodeEntity
    {
        $this->surgeonRef = $surgeonRef;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSurgeonName(): ?string
    {
        return $this->surgeonName;
    }

    /**
     * @param string|null $surgeonName
     * @return EpisodeEntity
     */
    public function setSurgeonName(?string $surgeonName): EpisodeEntity
    {
        $this->surgeonName = $surgeonName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderedByDoctorRef(): ?string
    {
        return $this->orderedByDoctorRef;
    }

    /**
     * @param string|null $orderedByDoctorRef
     * @return EpisodeEntity
     */
    public function setOrderedByDoctorRef(?string $orderedByDoctorRef): EpisodeEntity
    {
        $this->orderedByDoctorRef = $orderedByDoctorRef;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderedByDoctorName(): ?string
    {
        return $this->orderedByDoctorName;
    }

    /**
     * @param string|null $orderedByDoctorName
     * @return EpisodeEntity
     */
    public function setOrderedByDoctorName(?string $orderedByDoctorName): EpisodeEntity
    {
        $this->orderedByDoctorName = $orderedByDoctorName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPriority(): ?string
    {
        return $this->priority;
    }

    /**
     * @param string|null $priority
     * @return EpisodeEntity
     */
    public function setPriority(?string $priority): EpisodeEntity
    {
        $this->priority = $priority;
        return $this;
    }


}
