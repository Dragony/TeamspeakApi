<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientListRequest implements TeamspeakRequestInterface
{
    public $uid;
	public $away;
	public $voice;
	public $times;
	public $groups;
	public $info;
	public $country;
	public $ip;
	public $badges;

    public function __construct(bool $uid = null, bool $away = null, bool $voice = null, bool $times = null, bool $groups = null, bool $info = null, bool $country = null, bool $ip = null, bool $badges = null)
    {
        $this->uid = $uid;
		$this->away = $away;
		$this->voice = $voice;
		$this->times = $times;
		$this->groups = $groups;
		$this->info = $info;
		$this->country = $country;
		$this->ip = $ip;
		$this->badges = $badges;
    }

    public function getCommandUrl(): string
    {
        return '/clientlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}