<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class AcpsConstant extends BaseConstant
{
    const ADD_AUTH_DOWNLOAD_TASK_PATH = '/api/acps/v1/authDownload/task/addition';
    const ADD_AUTH_DOWNLOAD_DATA_PATH = '/api/acps/v1/authDownload/data/addition';
    const ADD_AUTH_DOWNLOAD_TASK_SIMPLE_PATH = '/api/acps/v1/authDownload/task/simpleDownload';
    const ADD_AUTH_CONFIG_PATH = '/api/acps/v1/auth_config/add';
    const GET_AUTH_CONFIG_PATH = '/api/acps/v1/auth_config/search';
    const DELETE_AUTH_CONFIG_PATH = '/api/acps/v1/auth_config/delete';
    const GET_AUTH_CONFIG_RATE_PATH = '/api/acps/v1/auth_config/rate/search';
    const ADD_DOWNLOAD_TASK_BY_CONFIG_PATH = '/api/acps/v1/download/configuration/task/add';
    const ADD_DOWNLOAD_DATA_BY_CONFIG_PATH = '/api/acps/v1/download/configuration/data/add';
    const ADD_SHORTCUT_AUTH_DOWNLOAD_BY_CONFIG_PATH = '/api/acps/v1/authDownload/configuration/shortcut';
    const START_AUTH_DOWNLOAD_TASK_PATH = '/api/acps/v1/authDownload/task/start';
    const GET_AUTH_DOWNLOAD_TASK_PROGRESS_PATH = '/api/acps/v1/authDownload/task/progress';
    const GET_AUTH_DOWNLOAD_TASK_LIST_PATH = '/api/acps/v1/authDownload/task/list';
    const DELETE_AUTH_DOWNLOAD_TASK_PATH = '/api/acps/v1/authDownload/task/deletion';
    const STOP_AUTH_DOWNLOAD_TASK_PATH = '/api/acps/v1/authDownload/task/stop';
    const GEt_AUTH_DOWNLOAD_TASK_PATH = '/api/acps/v1/authDownload/task/search';
    const GET_CHANNEL_DOWNLOAD_RECORD_LIST_PATH = '/api/acps/v1/download_record/channel/list/search';
    const GET_CHANNEL_DOWNLOAD_RECORD_TOTAL_PATH = '/api/acps/v1/download_record/channel/total/search';
    const GET_DOWNLOAD_RECORD_PERSON_DETAIL_PATH = '/api/acps/v2/download_record/person/detail/search';
    const GET_DOWNLOAD_RECORD_PERSON_TOTAL_PATH = '/api/acps/v2/download_record/person/total/search';
    const GET_AUTH_ITEM_TOTAL_PATH  = '/api/acps/v1/auth_item/total/search';
    const GET_AUTH_ITEM_LIST_PATH = '/api/acps/v1/auth_item/list/search';
    const GET_AUTH_ITEM_SINGLE_PATH = '/api/acps/v1/auth_item/single/search';
}
