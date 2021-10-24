<?php

namespace Hillpy\HikSDK\InfovisionIoT\Interfaces;

interface VehicleInterface
{
    public function getVehicleByImageModel();
    public function getVehicleByAttrWithPage();
    public function getTracksByVehicleWithPage();
    public function submitVehicleFeaturesJobTask();
    public function getVehicleCompareResultGroupByTaskIdWithPage();
    public function getVehicleCompareResultByTaskIdWithPage();
    public function getVehicleByDimension();
    public function getAccompanyVehiclesWithPage();
    public function getVehiclesByTrackWithPage();
    public function getVehiclesByTimeTrackWithPage();
    public function getVehiclesByFrequenceWithPage();
    public function getHideVehiclesWithPage();
    public function getVehiclesPlateFakedWithPage();
    public function getVehiclesFirstInCityWithPage();
    public function getNightVehiclesWithPage();
    public function getVehicleStatisticsByGroupWithPage();
    public function getVehicleStatisticsByGroupWithPageV1();
    public function addVehicleControl();
    public function updateVehicleControl();
    public function getVehicleDeployResultWithPage();
    public function getVehicleAlarmRecordsWithPage();
    public function addVehicleNameListControl();
    public function modifyVehicleNameListControl();
    public function getVehicleNameListDeployResultWithPage();
    public function getVehicleNameListAlarmRecordsWithPage();
    public function addVehicleModelControl();
    public function modifyVehicleModelControl();
    public function getVehicleModelDeployResultWithPage();
    public function getVehicleModelAlarmRecordsWithPage();
    public function getVehicleLib();
    public function getVehicleLibV3();
    public function addVehicleLib();
    public function addVehicleLibV3();
    public function modifyVehicleLib();
    public function modifyVehicleLibV3();
    public function deleteVehicleLib();
    public function deleteVehicleLibV3();
    public function getVehicle();
    public function addVehicle();
    public function addVehicleV3();
    public function modifyVehicle();
    public function modifyVehicleV3();
    public function deleteVehicle();
    public function deleteVehicleV3();
}
