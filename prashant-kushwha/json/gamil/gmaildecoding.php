<?php 

$json=file_get_contents(__DIR__.'/message_overview.txt');
$jr=json_decode($json,1);
$ar=message_overviewDecode($jr);
print_r($ar);

/* $json=file_get_contents(__DIR__.'/mess_modify.txt');
$jr=json_decode($json,1);
$ar=mess_modifyDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/drafts.txt');
$jr=json_decode($json,1);
$ar=draftsDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/drafts_list.txt');
$jr=json_decode($json,1);
$ar=drafts_listDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/drafts_overview.txt');
$jr=json_decode($json,1);
$ar=drafts_overviewDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/drafts_send.txt');
$jr=json_decode($json,1);
$ar=drafts_sendDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/getProfile.txt');
$jr=json_decode($json,1);
$ar=getProfileDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/history.txt');
$jr=json_decode($json,1);
$inv=$jr['history'];
$ar=historyDecode($inv);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/labels.txt');
$jr=json_decode($json,1);
$ar=labelsDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/labels_list.txt');
$jr=json_decode($json,1);
$ar=labels_listDecode($jr);
print_r($ar); */


/* $json=file_get_contents(__DIR__.'/labels_overview.txt');
$jr=json_decode($json,1);
$ar=labels_overviewDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/watch.txt');
$jr=json_decode($json,1);
$ar=watchDecode($jr);
print_r($ar); */

/* $json=file_get_contents(__DIR__.'/mess_batchDelete.txt');
$jr=json_decode($json,1);
$ar=mess_batchDeleteDecode($jr);
print_r($ar); */ 

function message_overviewDecode($ir)
{
	$rar['message_overview']=array('id'=>$ir['id'], 'thread_id'=>$ir['threadId'], 'label_ids'=>$ir['labelIds'], 'snippet'=>$ir['snippet'], 'history_id'=>$ir['historyId'], 'internal_date'=>$ir['internalDate'], 'payload'=>$ir['payload'], 'size_estimate'=>$ir['sizeEstimate'], 'raw'=>$ir['raw']);
	$rar['message_overview']['payload']=array('part_id'=>$ir['payload']['partId'], 'mime_type'=>$ir['payload']['mimeType'], 'filename'=>$ir['payload']['filename'], 'headers'=>$ir['payload']['headers'], 'body'=>$ir['payload']['body'], 'parts'=>$ir['payload']['parts'],);
	$rar['message_overview']['payload']['headers']=array('name'=>$ir['payload']['headers'][0]['name'], 'value'=>$ir['payload']['headers'][0]['value']);
	$rar['message_overview']['payload']['parts']=$ir['payload']['parts'];
	
	return $rar;
}

function mess_modifyDecode($ir)
{
	$rar['mess_modify']=array('add_label_ids'=>$ir['addLabelIds'],'remove_label_ids'=>$ir['removeLabelIds']);
	
	return $rar;
}

function draftsDecode($ir)
{
	
	$rar['drafts_list']=array('id'=>$ir['id'],'message'=>$ir['message']);
	
	return $rar;
	
}

function drafts_listDecode($ir)
{
	$rar['drafts_list']=array('drafts'=>$ir['drafts'], 'next_page_token'=>$ir['nextPageToken'], 'result_size_stimate'=>$ir['resultSizeEstimate']);
	
	return $rar;
	
}

function drafts_overviewDecode($ir)
{
	
	$rar['drafts_overview']=array('id'=>$ir['id'], 'message'=>$ir['message']);
	
	return $rar;
	
}

function drafts_sendDecode($ir)
{
	
	$rar['drafts_send']=array('id'=>$ir['id'], 'thread_id'=>$ir['threadId'], 'label_ids'=>$ir['labelIds'], 'snippet'=>$ir['snippet'], 'history_id'=>$ir['historyId'], 'internal_date'=>$ir['internalDate'], 'payload'=>$ir['payload'], 'size_estimate'=>$ir['sizeEstimate'], 'raw'=>$ir['raw']);
	$rar['drafts_send']['payload']=array('part_id'=>$ir['payload']['partId'], 'mime_type'=>$ir['payload']['mimeType'], 'filename'=>$ir['payload']['filename'], 'headers'=>$ir['payload']['headers'], 'body'=>$ir['payload']['body'], 'parts'=>$ir['payload']['parts'],);
	$rar['drafts_send']['payload']['headers']=array('name'=>$ir['payload']['headers'][0]['name'], 'value'=>$ir['payload']['headers'][0]['value']);
	$rar['drafts_send']['payload']['parts']=$ir['payload']['parts'];
	
	return $rar;
}

function getProfileDecode($ir)
{
	$rar['getProfile']=array('email_address'=>$ir['emailAddress'], 'messages_total'=>$ir['messagesTotal'], 'threads_total'=>$ir['threadsTotal'], 'history_id'=>$ir['historyId']);
	
	return $rar;
	
}

function historyDecode($ir)
{
	$rar['history']=array('id'=>$ir[0]['id'], 'messages'=>$ir[0]['messages'], 'messages_added'=>$ir[0]['messagesAdded'][0], 'messages_deleted'=>$ir[0]['messagesDeleted'][0], 'labels_added'=>$ir[0]['labelsAdded'], 'labels_removed'=>$ir[0]['labelsRemoved']);
	$rar['history']['labels_added'][0]=array('message'=>$ir[0]['labelsAdded'][0]['message'], 'label_ids'=>$ir[0]['labelsAdded'][0]['labelIds']);
	$rar['history']['labels_removed'][0]=array('message'=>$ir[0]['labelsRemoved'][0]['message'], 'label_ids'=>$ir[0]['labelsRemoved'][0]['labelIds']);
	
	return $rar;
	
}

function labelsDecode($ir)
{
	$rar['labels']=array('id'=>$ir['id'], 'name'=>$ir['name'], 'message_list_visibility'=>$ir['messageListVisibility'], 'label_list_visibility'=>$ir['labelListVisibility'], 'type'=>$ir['type'], 'messages_total'=>$ir['messagesTotal'], 'messages_unread'=>$ir['messagesUnread'], 'threads_total'=>$ir['threadsTotal'], 'threads_unread'=>$ir['threadsUnread']);
	
	return $rar;
}


function labels_listDecode($ir)
{
	$rar['labels_list']=array('labels'=>$ir['labels']);
	
	return $rar;
}

function labels_overviewDecode($ir)
{
	$rar['labels_overview']=array('id'=>$ir['id'], 'name'=>$ir['name'], 'message_list_visibility'=>$ir['messageListVisibility'], 'label_list_visibility'=>$ir['labelListVisibility'], 'type'=>$ir['type'], 'messages_total'=>$ir['messagesTotal'], 'messages_unread'=>$ir['messagesUnread'], 'threads_total'=>$ir['threadsTotal'], 'threads_unread'=>$ir['threadsUnread']);
	
	return $rar;
	
	
}

function watchDecode($ir)
{
	$rar['watch']=array('label_ids'=>$ir['labelIds'][0], 'label_filter_action'=>$ir['labelFilterAction'], 'topic_name'=>$ir['topicName']);
	
	return $rar;
	
	
}

function mess_batchDeleteDecode($ir)
{
	
	$rar['mess_batchDelete']=array('ids'=>$ir['ids']);
	
	return $rar;
	
}

/* {
  "ids": [
    "string"
  ]
} */