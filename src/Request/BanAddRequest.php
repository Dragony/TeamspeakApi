<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class BanAddRequest implements TeamspeakRequestInterface
{
    public $ip; /* regexp */
	public $name; /* regexp */
	public $uid; /* clientUID */
	public $mytsid; /* mytsid */
	public $time; /* timeInSeconds */
	public $banreason; /* text */
	public $lastnickname; /* nickname */

    public function __construct($ip = null, $name = null, $uid = null, $mytsid = null, $time = null, $banreason = null, $lastnickname = null)
    {
        $this->ip = $ip;
		$this->name = $name;
		$this->uid = $uid;
		$this->mytsid = $mytsid;
		$this->time = $time;
		$this->banreason = $banreason;
		$this->lastnickname = $lastnickname;
    }

    public function getCommandUrl(): string
    {
        return '/banadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}