<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface ParkInterface
{
    public function getCarInRecords();
    public function getParkingRecord();
    public function getCrossRecords();
    public function getCrossImage();
    public function controlPmsDevice();
    public function controlBatchPmsDevice();
    public function getRemainParkingSpaceNum();
    public function getParkingSpaceInfo();
    public function bindParkingSpaceToCar();
    public function unbindParkingSpaceToCar();
    public function getParkList();
    public function searchPark();
    public function getParkDetail();
    public function getEntranceList();
    public function getRoadwayList();
    public function getParkListByTimeRange();
    public function addCarAlarmWhite();
    public function addCarAlarmBlack();
    public function deleteCarAlarmWhite();
    public function deleteCarAlarmBlack();
    public function updateCarAlarmWhite();
    public function updateCarAlarmBlack();
    public function searchCarAlarmWhite();
    public function searchCarAlarmBlack();
}
