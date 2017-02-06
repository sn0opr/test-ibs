<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VXmlCdr
 *
 * @ORM\Table(name="v_xml_cdr")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\VXmlCdrRepository")
 */
class VXmlCdr
{
    /**
     * @var guid
     *
     * @ORM\Id()
     * @ORM\Column(name="uuid", type="guid", nullable=false)
     */
    private $uuid;

    /**
     * @var guid
     *
     * @ORM\Column(name="domain_uuid", type="guid", nullable=true)
     */
    private $domainUuid;

    /**
     * @var guid
     *
     * @ORM\Column(name="extension_uuid", type="guid", nullable=true)
     */
    private $extensionUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="domain_name", type="text", nullable=true)
     */
    private $domainName;

    /**
     * @var string
     *
     * @ORM\Column(name="accountcode", type="text", nullable=true)
     */
    private $accountcode;

    /**
     * @var string
     *
     * @ORM\Column(name="default_language", type="text", nullable=true)
     */
    private $defaultLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="text", nullable=true)
     */
    private $context;

    /**
     * @var jsonb
     *
     * @ORM\Column(name="json", type="jsonb", nullable=true)
     */
    private $json;

    /**
     * @var string
     *
     * @ORM\Column(name="caller_id_name", type="text", nullable=true)
     */
    private $callerIdName;

    /**
     * @var string
     *
     * @ORM\Column(name="caller_id_number", type="text", nullable=true)
     */
    private $callerIdNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="source_number", type="text", nullable=true)
     */
    private $sourceNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="destination_number", type="text", nullable=true)
     */
    private $destinationNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="start_epoch", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $startEpoch;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_stamp", type="datetime", nullable=true)
     */
    private $startStamp;

    /**
     * @var string
     *
     * @ORM\Column(name="end_epoch", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $endEpoch;

    /**
     * @var string
     *
     * @ORM\Column(name="end_stamp", type="text", nullable=true)
     */
    private $endStamp;

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="mduration", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $mduration;

    /**
     * @var string
     *
     * @ORM\Column(name="billsec", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $billsec;

    /**
     * @var string
     *
     * @ORM\Column(name="billmsec", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $billmsec;

    /**
     * @var string
     *
     * @ORM\Column(name="read_codec", type="text", nullable=true)
     */
    private $readCodec;

    /**
     * @var string
     *
     * @ORM\Column(name="read_rate", type="text", nullable=true)
     */
    private $readRate;

    /**
     * @var string
     *
     * @ORM\Column(name="write_codec", type="text", nullable=true)
     */
    private $writeCodec;

    /**
     * @var string
     *
     * @ORM\Column(name="write_rate", type="text", nullable=true)
     */
    private $writeRate;

    /**
     * @var string
     *
     * @ORM\Column(name="remote_media_ip", type="text", nullable=true)
     */
    private $remoteMediaIp;

    /**
     * @var string
     *
     * @ORM\Column(name="network_addr", type="text", nullable=true)
     */
    private $networkAddr;

    /**
     * @var string
     *
     * @ORM\Column(name="recording_file", type="text", nullable=true)
     */
    private $recordingFile;

    /**
     * @var string
     *
     * @ORM\Column(name="leg", type="string", length=1, nullable=true)
     */
    private $leg;

    /**
     * @var string
     *
     * @ORM\Column(name="pdd_ms", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $pddMs;

    /**
     * @var string
     *
     * @ORM\Column(name="rtp_audio_in_mos", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $rtpAudioInMos;

    /**
     * @var string
     *
     * @ORM\Column(name="last_app", type="text", nullable=true)
     */
    private $lastApp;

    /**
     * @var string
     *
     * @ORM\Column(name="last_arg", type="text", nullable=true)
     */
    private $lastArg;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_side", type="text", nullable=true)
     */
    private $ccSide;

    /**
     * @var guid
     *
     * @ORM\Column(name="cc_member_uuid", type="guid", nullable=true)
     */
    private $ccMemberUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_queue_joined_epoch", type="text", nullable=true)
     */
    private $ccQueueJoinedEpoch;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_queue", type="text", nullable=true)
     */
    private $ccQueue;

    /**
     * @var guid
     *
     * @ORM\Column(name="cc_member_session_uuid", type="guid", nullable=true)
     */
    private $ccMemberSessionUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_agent", type="text", nullable=true)
     */
    private $ccAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_agent_type", type="text", nullable=true)
     */
    private $ccAgentType;

    /**
     * @var string
     *
     * @ORM\Column(name="waitsec", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $waitsec;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_name", type="text", nullable=true)
     */
    private $conferenceName;

    /**
     * @var guid
     *
     * @ORM\Column(name="conference_uuid", type="guid", nullable=true)
     */
    private $conferenceUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_member_id", type="text", nullable=true)
     */
    private $conferenceMemberId;

    /**
     * @var string
     *
     * @ORM\Column(name="digits_dialed", type="text", nullable=true)
     */
    private $digitsDialed;

    /**
     * @var string
     *
     * @ORM\Column(name="pin_number", type="text", nullable=true)
     */
    private $pinNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="hangup_cause", type="text", nullable=true)
     */
    private $hangupCause;

    /**
     * @var string
     *
     * @ORM\Column(name="hangup_cause_q850", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $hangupCauseQ850;

    /**
     * @var string
     *
     * @ORM\Column(name="sip_hangup_disposition", type="text", nullable=true)
     */
    private $sipHangupDisposition;


}

