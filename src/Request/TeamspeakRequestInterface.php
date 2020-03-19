<?php


namespace Dragony\TeamspeakApi\Request;


interface TeamspeakRequestInterface
{
    public function getCommandUrl(): string;

    public function getResponseClass(): string;
}