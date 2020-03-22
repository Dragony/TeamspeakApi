<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class PrivilegeKeyAddRequest implements TeamspeakRequestInterface
{
    public $tokentype; /* 1|0 */
	public $tokenid1; /* groupID */
	public $tokenid2; /* channelID */
	public $tokendescription; /* description */
	public $tokencustomset; /* customFieldSet */

    public function __construct($tokentype, $tokenid1, $tokenid2, $tokendescription = null, $tokencustomset = null)
    {
        $this->tokentype = $tokentype;
		$this->tokenid1 = $tokenid1;
		$this->tokenid2 = $tokenid2;
		$this->tokendescription = $tokendescription;
		$this->tokencustomset = $tokencustomset;
    }

    public function getCommandUrl(): string
    {
        return '/privilegekeyadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}