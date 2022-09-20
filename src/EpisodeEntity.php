<?php

namespace Estimtrack\Orplannersdkphp;


class EpisodeEntity
{


    /** standard formats for hours and dates respectively  */

    const FORMAT_ESTIMTRACK_HOUR = 'H:i:s';
    const FORMAT_ESTIMTRACK_DATE = 'Y-m-d';


    //mandatory fields

    /** @var string   mandatory field , patient identifier
     */
    public string $patient_nhc;

    /** @var string   mandatory field , patient name
     */
    public string $patient_name = '';

    /** @var string  mandatory field, episode unique identifier
     */
    public string $hospital_unique_ref;


    //patient info

    /** @var ?string  optional field,  patient first surname
     */
    public ?string $patient_last_name_1 = null;

    /** @var ?string  optional field,  patient last surname
     */
    public ?string $patient_last_name_2 = null;

    /** @var ?int  optional field , patient age
     */
    public ?int $age = null;

    /** @var ?string  optional field , patient gender => m = male, f = female
     */
    public ?string $gender = null;

    /** @var string  optional field, patient telephone
     */
    public string $patient_telephone = '';

    // dates, hours and times

    /** @var ?int  optional field, maximum amount of days the patient can spent in waiting list
     */
    public ?int $max_waiting_days = null;

    /** @var ?string  optional field, day patient got in the waiting list, format Y-m-d
     */
    public ?string $entered_waiting_list =null;

    /** @var ?int  optional field, amount of time in minutes the intervention is expected to be
     */
    public ?int $forecasted_duration_min = null;

    /** @var ?string  optional field, which hour did the intervention start, format H:i:s
     */
    public ?string $real_start_hour = null;

    /** @var ?string  optional field, which hour did the intervention finish, format H:i:s
     */
    public ?string $real_finish_hour = null;

    /** @var ?string  optional field, which is the intervention supposed to start, format H:i:s
     */
    public ?string $start_hour = null;

    /** @var ?string  optional field, which is the intervention supposed to finish, format H:i:s
     */
    public ?string $finish_hour = null;

    /** @var ?string  optional field, which day is the intervention supposed to take place, format Y-m-d
     */
    public ?string $scheduled_date = null;


    //location
    /** @var ?string  optional field, name of the service the episode is associated with
     */
    public ?string $service_name = null;

    /** @var ?string  optional field, name of the quirofan the episode is associated with
     */
    public ?string $quirofan_name = null;


    //equipment
    /** @var ?string  optional field, name of the procedure that the patient will be subject to
     */
    public ?string $procedure = null;

    /** @var ?string  optional field,  procedure description  the patient will be subject to
     */
    public ?string $procedure_description = null;


    //conditions

    /** @var bool  optional field , true   -> episode is urgent  / false  -> is not urgent
     */
    public bool $is_urgent = false;

    /** @var bool  optional field , true   -> episode/intervention has complexity   / false  -> is has not
     */
    public bool $is_complicated =  false;

    /** @var bool  optional field , true   -> isolated  / false  -> it is not
     */
    public bool $is_isolated = false;

    /** @var bool  optional field , true   -> needs sintrom   / false  -> it does not
     */
    public bool $sintrom = false;

    /** @var bool  optional field , true   -> has equipment laparo  / false  -> it has not
     */
    public bool $laparoscopia = false;


    /** @var bool  optional field , true   -> has patient checks for anesthesia have been made  / false  -> not been made
     */
    public bool $anesthesia_appreciation = false;


    //doctors, name , info  and other fields

    /** @var ?string  optional field,  notes taken during pre anesthesia
     */
    public ?string $preanesthesia_notes = null;


    /** @var ?string  optional field, anesthesiologist name
     */
    public ?string $anesthesiologist_name = null;

    /** @var ?string  optional field, anesthesiologist ref
     */
    public ?string $anesthesiologist_ref = null;

    /** @var ?string  optional field,  notes taken by the doctor, but can by used as a general field for comments .
     */
    public ?string $doctor_notes = null;

    /** @var ?string  optional field,  name of the doctor in charge of the patient
     */
    public ?string $doctor_name = null;

    /** @var ?string  optional field,  ref of the doctor in charge of the patient
     */
    public ?string $doctor_ref = null;

    /** @var ?string  optional field, ref  of the surgeon in charge of performing the intervention .
     */
    public ?string $surgeon_ref = null;

    /** @var ?string  optional field, name of the surgeon in charge of performing the intervention .
     */
    public ?string $surgeon_name = null;

    /** @var ?string  optional field, ref of the doctor that ordered the intervention .
     */
    public ?string $ordered_by_doctor_ref = null;


    /** @var ?string  optional field, name of the doctor that ordered the intervention .
     */
    public ?string $ordered_by_doctor_name = null;

    //others

    /** @var ?string   optional field , text specifying priority
     */
    public ?string  $priority =null;

    /** @var ?string   optional field , text specifying  type of patient admission
     */
    public ?string $entry_type = null;


    public function getIsUrgent(): bool
    {
        return $this->is_urgent;
    }

    public function setIsUrgent($is_urgent): self
    {
        $this->is_urgent = $is_urgent;
        return $this;
    }

    public function getPatientNhc(): string
    {
        return $this->patient_nhc;
    }


    public function setPatientNhc($patient_nhc): self
    {
        $this->patient_nhc = $patient_nhc;
        return $this;
    }


    public function getPatientName(): string
    {
        return $this->patient_name;
    }


    public function setPatientName($patientName): self
    {
        $this->patient_name = $patientName;
        return $this;
    }


    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge($age): self
    {
        $this->age = $age;
        return $this;
    }


    public function getPatientTelephone(): ?int
    {
        return $this->patient_telephone;
    }

    public function setPatientTelephone($patient_telephone): self
    {
        $this->patient_telephone = $patient_telephone;
        return $this;
    }


    public function getHospitalUniqueRef(): string
    {
        return $this->hospital_unique_ref;
    }

    public function setHospitalUniqueRef($hospitalUniqueRef): self
    {
        $this->hospital_unique_ref = $hospitalUniqueRef;
        return $this;
    }


    public function getMaxWaitingDays(): ?int
    {
        return $this->max_waiting_days;
    }

    public function setMaxWaitingDays($max_waiting_days): self
    {
        $this->max_waiting_days = $max_waiting_days;
        return $this;
    }


    public function getEnteredWaitingList(): ?string
    {
        return $this->entered_waiting_list;
    }


    public function setEnteredWaitingList($entered_waiting_list): self
    {
        $this->entered_waiting_list = $entered_waiting_list;
        return $this;
    }


    public function getForecastedDurationMin(): ?int
    {
        return $this->forecasted_duration_min;
    }


    public function setForecastedDurationMin($forecasted_duration_min): self
    {
        $this->forecasted_duration_min = $forecasted_duration_min;
        return $this;
    }


    public function getServiceName(): ?string
    {
        return $this->service_name;
    }

    public function setServiceName($service_name): self
    {
        $this->service_name = $service_name;
        return $this;
    }


    public function getProcedure(): ?string
    {
        return $this->procedure;
    }


    public function setProcedure($procedure): self
    {
        $this->procedure = $procedure;
        return $this;
    }


    public function getProcedureDescription(): ?string
    {
        return $this->procedure_description;
    }


    public function setProcedureDescription($procedure_description): self
    {
        $this->procedure_description = $procedure_description;
        return $this;
    }


    public function getPreanesthesiaNotes(): ?string
    {
        return $this->preanesthesia_notes;
    }


    public function setPreanesthesiaNotes($preanesthesia_notes): self
    {
        $this->preanesthesia_notes = $preanesthesia_notes;
        return $this;
    }


    public function getDoctorName(): ?string
    {
        return $this->doctor_name;
    }

    public function setDoctorName($doctor): self
    {
        $this->doctor_name = $doctor;
        return $this;
    }

    public function getPatientLastname1(): ?string
    {
        return $this->patient_last_name_1;
    }

    public function setPatientLastname1(?string $patient_last_name_1): EpisodeEntity
    {
        $this->patient_last_name_1 = $patient_last_name_1;
        return $this;
    }

    public function getPatientLastname2(): ?string
    {
        return $this->patient_last_name_2;
    }

    public function setPatientLastname2(?string $patient_last_name_2): EpisodeEntity
    {
        $this->patient_last_name_2 = $patient_last_name_2;
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
    public function getRealStarthour(): ?string
    {
        return $this->real_start_hour;
    }

    /**
     * @param string|null $real_start_hour
     */
    public function setRealStarthour(?string $real_start_hour): void
    {
        $this->real_start_hour = $real_start_hour;
    }


    /**
     * @return string|null
     */
    public function getRealFinishhour(): ?string
    {
        return $this->real_finish_hour;
    }

    /**
     * @param string|null $real_finish_hour
     * @return EpisodeEntity
     */
    public function setRealFinishhour(?string $real_finish_hour): EpisodeEntity
    {
        $this->real_finish_hour = $real_finish_hour;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartHour(): ?string
    {
        return $this->start_hour;
    }

    /**
     * @param string|null $start_hour
     * @return EpisodeEntity
     */
    public function setStartHour(?string $start_hour): EpisodeEntity
    {
        $this->start_hour = $start_hour;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFinishHour(): ?string
    {
        return $this->finish_hour;
    }

    /**
     * @param string|null $finish_hour
     * @return EpisodeEntity
     */
    public function setFinishHour(?string $finish_hour): EpisodeEntity
    {
        $this->finish_hour = $finish_hour;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScheduledDate(): ?string
    {
        return $this->scheduled_date;
    }

    /**
     * @param string|null $scheduled_date
     * @return EpisodeEntity
     */
    public function setScheduledDate(?string $scheduled_date): EpisodeEntity
    {
        $this->scheduled_date = $scheduled_date;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuirofanName(): ?string
    {
        return $this->quirofan_name;
    }

    /**
     * @param string|null $quirofan_name
     * @return EpisodeEntity
     */
    public function setQuirofanName(?string $quirofan_name): EpisodeEntity
    {
        $this->quirofan_name = $quirofan_name;
        return $this;
    }

    /**
     * @return bool
     */
    public function is_complicated(): bool
    {
        return $this->is_complicated;
    }

    /**
     * @param bool $is_complicated
     * @return EpisodeEntity
     */
    public function setIsComplicated(bool $is_complicated): EpisodeEntity
    {
        $this->is_complicated = $is_complicated;
        return $this;
    }

    /**
     * @return bool
     */
    public function is_isolated(): bool
    {
        return $this->is_isolated;
    }

    /**
     * @param bool $is_isolated
     * @return EpisodeEntity
     */
    public function setIsIsolated(bool $is_isolated): EpisodeEntity
    {
        $this->is_isolated = $is_isolated;
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
    public function isLaparoscopia(): bool
    {
        return $this->laparoscopia;
    }

    /**
     * @param bool $laparoscopia
     * @return EpisodeEntity
     */
    public function setLaparoscopia(bool $laparoscopia): EpisodeEntity
    {
        $this->laparoscopia = $laparoscopia;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAnesthesiaAppreciation(): bool
    {
        return $this->anesthesia_appreciation;
    }

    /**
     * @param bool $anesthesia_appreciation
     * @return EpisodeEntity
     */
    public function setAnesthesiaAppreciation(bool $anesthesia_appreciation): EpisodeEntity
    {
        $this->anesthesia_appreciation = $anesthesia_appreciation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnesthesiologistName(): ?string
    {
        return $this->anesthesiologist_name;
    }

    /**
     * @param string|null $anesthesiologist_name
     * @return EpisodeEntity
     */
    public function setAnesthesiologistName(?string $anesthesiologist_name): EpisodeEntity
    {
        $this->anesthesiologist_name = $anesthesiologist_name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnesthesiologistRef(): ?string
    {
        return $this->anesthesiologist_ref;
    }

    /**
     * @param string|null $anesthesiologist_ref
     * @return EpisodeEntity
     */
    public function setAnesthesiologistRef(?string $anesthesiologist_ref): EpisodeEntity
    {
        $this->anesthesiologist_ref = $anesthesiologist_ref;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoctorNotes(): ?string
    {
        return $this->doctor_notes;
    }

    /**
     * @param string|null $doctor_notes
     * @return EpisodeEntity
     */
    public function setDoctorNotes(?string $doctor_notes): EpisodeEntity
    {
        $this->doctor_notes = $doctor_notes;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoctorRef(): ?string
    {
        return $this->doctor_ref;
    }

    /**
     * @param string|null $doctor_ref
     * @return EpisodeEntity
     */
    public function setDoctorRef(?string $doctor_ref): EpisodeEntity
    {
        $this->doctor_ref = $doctor_ref;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSurgeonRef(): ?string
    {
        return $this->surgeon_ref;
    }

    /**
     * @param string|null $surgeon_ref
     * @return EpisodeEntity
     */
    public function setSurgeonRef(?string $surgeon_ref): EpisodeEntity
    {
        $this->surgeon_ref = $surgeon_ref;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSurgeonName(): ?string
    {
        return $this->surgeon_name;
    }

    /**
     * @param string|null $surgeon_name
     * @return EpisodeEntity
     */
    public function setSurgeonName(?string $surgeon_name): EpisodeEntity
    {
        $this->surgeon_name = $surgeon_name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderedBydoctorref(): ?string
    {
        return $this->ordered_by_doctor_ref;
    }

    /**
     * @param string|null $ordered_by_doctor_ref
     * @return EpisodeEntity
     */
    public function setOrderedByDoctorRef(?string $ordered_by_doctor_ref): EpisodeEntity
    {
        $this->ordered_by_doctor_ref = $ordered_by_doctor_ref;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderedByDoctorName(): ?string
    {
        return $this->ordered_by_doctor_name;
    }

    /**
     * @param string|null $ordered_by_doctor_name
     * @return EpisodeEntity
     */
    public function setOrderedByDoctorName(?string $ordered_by_doctor_name): EpisodeEntity
    {
        $this->ordered_by_doctor_name = $ordered_by_doctor_name;
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

    /**
     * @return string|null
     */
    public function getEntryType(): ?string
    {
        return $this->entry_type;
    }

    /**
     * @param string|null $entry_type
     */
    public function setEntryType(?string $entry_type): void
    {
        $this->entry_type = $entry_type;
    }

    public function computeHash(): string
    {


        $textToHash =
            $this->getPatientNhc() .
            $this->getPatientName().
            $this->getHospitalUniqueRef().
            $this->getPatientLastname1().
            $this->getPatientLastname2().
            $this->getAge().
            $this->getGender().
            $this->getPatientTelephone().
            $this->getMaxWaitingDays().
            $this->getEnteredWaitingList().
            $this->getForecastedDurationMin().
            $this->getRealStarthour().
            $this->getRealFinishhour().
            $this->getStartHour().
            $this->getFinishHour().
            $this->getScheduledDate().
            $this->getServiceName().
            $this->getQuirofanName().
            $this->getProcedure().
            $this->getProcedureDescription().
            $this->getIsUrgent().
            $this->is_complicated().
            $this->is_isolated().
            $this->isSintrom().
            $this->isLaparoscopia().
            $this->isAnesthesiaAppreciation().
            $this->getPreanesthesiaNotes().
            $this->getAnesthesiologistName().
            $this->getAnesthesiologistRef().
            $this->getDoctorNotes().
            $this->getDoctorName().
            $this->getDoctorRef().
            $this->getSurgeonRef().
            $this->getSurgeonName().
            $this->getOrderedBydoctorref().
            $this->getOrderedByDoctorName().
            $this->getPriority().
            $this->getEntryType();

        return md5($textToHash);

        //$textToHash = '';
        //$textToHash = $this->isUrgent;
        //$textToHash .= $this->nhc;
        //$textToHash .= $this->patientName;
        //$textToHash .= $this->age;
        //$textToHash .= $this->telephone;
        //$textToHash .= $this->hospitalUniqueRef;
        //$textToHash .= $this->maxWaitingListDays;
        //$textToHash .= $this->waitingListEntryDay;
        //$textToHash .= $this->forecastedDurationMin;
        //$textToHash .= $this->serviceName;
        //$textToHash .= $this->procedure;
        //$textToHash .= $this->procedureDescription;
        //$textToHash .= $this->preanesthesiaNotes;
        //$textToHash .= $this->doctorName;

    }



}
