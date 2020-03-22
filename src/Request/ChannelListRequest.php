<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\ChannelListResponse;

class ChannelListRequest implements TeamspeakRequestInterface
{
    public $topic;
	public $flags;
	public $voice;
	public $limits;
	public $icon;
	public $secondsempty;
	public $banners;

    public function __construct(bool $topic = null, bool $flags = null, bool $voice = null, bool $limits = null, bool $icon = null, bool $secondsempty = null, bool $banners = null)
    {
        $this->topic = $topic;
		$this->flags = $flags;
		$this->voice = $voice;
		$this->limits = $limits;
		$this->icon = $icon;
		$this->secondsempty = $secondsempty;
		$this->banners = $banners;
    }

    public function getCommandUrl(): string
    {
        return '/channellist';
    }

    public function getResponseClass(): string
    {
        return ChannelListResponse::class;
    }
}