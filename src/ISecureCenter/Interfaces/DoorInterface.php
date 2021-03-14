<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface DoorInterface
{
    public function getDoorStates();
    public function doControlDoor();
    public function getDoorEvents();
    public function getEventPictures();
    public function searchDoor();
    public function searchAcsDevice();
    public function getDoorByRangeTime();
    public function getAcsDeviceByRangeTime();
    public function getReaderByRangeTime();
    public function searchReader();
    public function getAcsDeviceOnlineStatus();
    public function getReaderOnlineStatus();
    public function downloadPartnerFile();
    public function registerPartner();
    public function keepPartnerHeartbeat();
    public function getPartnerCipher();
    public function subscriberPartner();
}
