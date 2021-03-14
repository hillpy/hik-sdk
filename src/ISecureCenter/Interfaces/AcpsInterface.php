<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface AcpsInterface
{
    public function addAuthDownloadTask();
    public function addAuthDownloadData();
    public function addAuthDownloadTaskSimple();
    public function addAuthConfig();
    public function getAuthConfig();
    public function deleteAuthConfig();
    public function getAuthConfigRate();
    public function addDownloadTaskByConfig();
    public function addDownloadDataByConfig();
    public function addShortcutAuthDownloadByConfig();
    public function startAuthDownloadTask();
    public function getAuthDownloadTaskProgress();
    public function getAuthDownloadTaskList();
    public function deleteAuthDownloadTask();
    public function stopAuthDownloadTask();
    public function getAuthDownloadTask();
    public function getChannelDownloadRecordList();
    public function getChannelDownloadRecordTotal();
    public function getDownloadRecordPersonDetail();
    public function getDownloadRecordPersonTotal();
    public function getAuthItemTotal();
    public function getAuthItemList();
    public function getAuthItemSingle();
}
