<?php
/************************************************************
 * InfiniteWP Admin panel									*
 * Copyright (c) 2012 Revmakx								*
 * www.revmakx.com											*
 *															*
 ************************************************************/

class manageClientsAdditionalDataFetch {

	public static function getAdditionalStatsProcessor($siteIDs, $params, $extras){
		$type = 'addtionalStats';
		$action = 'getAdditionalStats';
		$requestAction = 'get_additional_stats';
		$requestParams = array(
						   'requiredActions' => array(),
						   'siteIDs' => $siteIDs
					   	);
		setHook('getAdditionalStatsRequestParams', $requestParams);

		if(!empty($siteIDs)){
			$sites = getSitesData($siteIDs, '1', $byPassAccess);
		}
		else{
			$sites = getSitesData();
		}

		$historyAdditionalData[] = array('uniqueName' => 'addtionalGetStats', 'detailedAction' => 'get');

		$sendAfterAllLoad = isset($extras['sendAfterAllLoad']) ? $extras['sendAfterAllLoad'] : true;
		$exitOnComplete = isset($extras['exitOnComplete']) ? $extras['exitOnComplete'] : false;
		$doNotShowUser = isset($extras['doNotShowUser']) ? $extras['doNotShowUser'] : false;
		$directExecute = isset($extras['directExecute']) ? $extras['directExecute'] : false;

		$events = 1;
		if(empty($sites)) return;

		foreach($sites as $siteID => $siteData){
			
			$PRP = array();
			$PRP['requestAction'] 	= $requestAction;
			$PRP['requestParams'] 	= $requestParams;
			$PRP['siteData'] 		= $siteData;
			$PRP['type'] 			= $type;
			$PRP['action'] 			= $action;
			$PRP['events'] 			= $events;
			$PRP['historyAdditionalData'] 	= $historyAdditionalData;
			$PRP['doNotExecute'] 			= false;
			$PRP['directExecute'] 		= $directExecute;
			$PRP['sendAfterAllLoad'] 	= $sendAfterAllLoad;
			$PRP['exitOnComplete'] 		= $exitOnComplete;
			$PRP['doNotShowUser'] 		= $doNotShowUser;
			
			if(!empty($params['timeScheduled']))
			$PRP['timeScheduled'] = $params['timeScheduled']; //used for checkbackupask().
			
			if(!empty($params['status']))
			$PRP['status'] = $params['status']; //used for checkbackupask().
			
			prepareRequestAndAddHistory($PRP);
		}
	}

	public static function getAdditionalStatsResponseProcessor($historyID, $responseData){

		responseDirectErrorHandler($historyID, $responseData);
		$where = array(
			      		'query' =>  "historyID=':historyID'",
			      		'params' => array(
			               ':historyID'=>$historyID
           				)
        			);
		$siteID = DB::getField("?:history", "siteID", $where);
		$where = array(
			      		'query' =>  "siteID = ':siteID'",
			      		'params' => array(
			               ':siteID'=>$siteID
           				)
        			);		

		if(empty($siteID)){
					return false;	
		}

		if(empty($responseData['success'])){
			return false;
		}

		if(!empty($responseData['success']['error'])){
			$where = array(
			      		'query' =>  "historyID=':historyID'",
			      		'params' => array(
			               ':historyID'=>$historyID
           				)
        			);
			DB::update("?:history_additional_data", array('status' => 'error', 'errorMsg' => $responseData['success']['error'], 'error' => $responseData['success']['error_code']), $where);
			return false;
		}

		$where = array(
			      		'query' =>  "historyID=':historyID' AND uniqueName = ':uniqueName'",
			      		'params' => array(
			               ':historyID'=>$historyID,
			               ':uniqueName'=>'addtionalGetStats'
           				)
        			);
		DB::update("?:history_additional_data", array('status' => 'success'), $where);
		$hookData = array( "siteID" => $siteID , "response" => $responseData['success']);
		setHook('additionalStatsResponse', $hookData);

	}

	public static function checkAndRunAddtionalStats($siteID){
		$disabled = getOption('disableAddtionalStat');
		if (!empty($disabled)) {
			return false;
		}
		$isAlreadyScheduled = self::addtionalStatsCheck($siteID);
		if ($isAlreadyScheduled == false) {
			$allParams = array('action' => 'getAdditionalStats', 'args' => array('siteIDs' => array($siteID), 'extras' => array('directExecute' => true, 'doNotShowUser' => false,'sendAfterAllLoad'=>true)));
			
			panelRequestManager::handler($allParams);
		}
	}

	public static function addtionalStatsCheck($siteID){
		$where = array(
      		'query' =>  "siteID=':siteID' AND status IN('scheduled', 'running', 'initiated') AND action = 'getAdditionalStats'",
      		'params' => array(
               ':siteID'=>$siteID
				)
		);

		$return = DB::getField("?:history", "historyID", $where);
		if (empty($return)) {
			return false;
		}

		return true;

	}
}

manageClients::addClass('manageClientsAdditionalDataFetch');