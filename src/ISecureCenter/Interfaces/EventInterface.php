<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface EventInterface
{
    public function subscribeEventByEventType();
    public function getSubscribeEvent();
    public function getUnsubscribeEvent();
    public function searchEvent();
}
