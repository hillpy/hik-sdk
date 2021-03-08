<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class OrgConstant extends BaseConstant
{
    const UPDATE_SINGLE_ORG_PATH = '/api/resource/v1/org/single/update';
    const DELETE_BATCH_ORG_PATH = '/api/resource/v1/org/batch/delete';
    const ADD_BATCH_ORG_PATH = '/api/resource/v1/org/batch/add';
    const GET_ROOT_ORG_PATH = '/api/resource/v1/org/rootOrg';
    const GET_ORG_LIST_PATH = '/api/resource/v1/org/orgList';
    const GET_ANVANCE_ORG_LIST_PATH = '/api/resource/v2/org/advance/orgList';
    const GET_SUB_ORG_LIST_BY_PARENT_ORG_INDEX_CODE_PATH = '/api/resource/v1/org/parentOrgIndexCode/subOrgList';
    const GET_ORG_BY_TIME_RANGE = '/api/resource/v1/org/timeRange';
    const GET_ORG_INFO_BY_ORG_INDEX_CODES = '/api/resource/v1/org/orgIndexCodes/orgInfo';
}
