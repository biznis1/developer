<?php 

/* $json=file_get_contents(__DIR__.'/message_overview.txt');
$jr=json_decode($json,1);
$ar=message_overviewDecode($jr);
print_r($ar); */

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

$json=file_get_contents(__DIR__.'/history.txt');
$jr=json_decode($json,1);
$inv=$jr['history'];
$ar=historyDecode($inv);
print_r($ar);

function message_overviewDecode($ir)
{
	$rar=array('id'=>$ir['id'], 'thread_id'=>$ir['threadId'], 'label_ids'=>$ir['labelIds'], 'snippet'=>$ir['snippet'], 'history_id'=>$ir['historyId'], 'internal_date'=>$ir['internalDate'], 'payload'=>$ir['payload'], 'size_estimate'=>$ir['sizeEstimate'], 'raw'=>$ir['raw']);
	$rar['payload']=array('part_id'=>$ir['payload']['partId'], 'mime_type'=>$ir['payload']['mimeType'], 'filename'=>$ir['payload']['filename'], 'headers'=>$ir['payload']['headers'], 'body'=>$ir['payload']['body'], 'parts'=>$ir['payload']['parts'],);
	$rar['payload']['headers']=array('name'=>$ir['payload']['headers'][0]['name'], 'value'=>$ir['payload']['headers'][0]['value']);
	$rar['payload']['parts']=$ir['payload']['parts'];
	return $rar;
}

function mess_modifyDecode($ir)
{
	$rar=array('add_label_ids'=>$ir['addLabelIds'],'remove_label)ids'=>$ir['removeLabelIds']);
	
	return $rar;
}

function draftsDecode($ir)
{
	
	$rar=array('id'=>$ir['id'],'message'=>$ir['message']);
	
	return $rar;
	
}

function drafts_listDecode($ir)
{
	$rar=array('drafts'=>$ir['drafts'], 'next_page_token'=>$ir['nextPageToken'], 'result_size_stimate'=>$ir['resultSizeEstimate']);
	return $rar;
	
}

function drafts_overviewDecode($ir)
{
	/* foreach($ir as $k=>$r)
	{
	$rar[$k]=$r;
	} */
	$rar=array('id'=>$ir['id'], 'message'=>$ir['message']);
	return $rar;
	
}

function drafts_sendDecode($ir)
{
	
	$rar=array('id'=>$ir['id'], 'thread_id'=>$ir['threadId'], 'label_ids'=>$ir['labelIds'], 'snippet'=>$ir['snippet'], 'history_id'=>$ir['historyId'], 'internal_date'=>$ir['internalDate'], 'payload'=>$ir['payload'], 'size_estimate'=>$ir['sizeEstimate'], 'raw'=>$ir['raw']);
	$rar['payload']=array('part_id'=>$ir['payload']['partId'], 'mime_type'=>$ir['payload']['mimeType'], 'filename'=>$ir['payload']['filename'], 'headers'=>$ir['payload']['headers'], 'body'=>$ir['payload']['body'], 'parts'=>$ir['payload']['parts'],);
	$rar['payload']['headers']=array('name'=>$ir['payload']['headers'][0]['name'], 'value'=>$ir['payload']['headers'][0]['value']);
	$rar['payload']['parts']=$ir['payload']['parts'];
	
	return $rar;
}

function getProfileDecode($ir)
{
	$rar=array('email_address'=>$ir['emailAddress'], 'messages_total'=>$ir['messagesTotal'], 'threads_total'=>$ir['threadsTotal'], 'history_id'=>$ir['historyId']);
	return $rar;
	
}

function historyDecode($ir)
{
	$rar['history']=array('id'=>$ir[0]['id'], 'messages'=>$ir[0]['messages'], 'messages_added'=>$ir[0]['messagesAdded'][0], 'messages_deleted'=>$ir[0]['messagesDeleted'][0], 'labels_added'=>$ir[0]['labelsAdded'], 'labels_removed'=>$ir[0]['labelsRemoved']);
	$rar['history']['labels_added'][0]=array('message'=>$ir[0]['labelsAdded'][0]['message'], 'label_ids'=>$ir[0]['labelsAdded'][0]['labelIds']);
	$rar['history']['labels_removed'][0]=array('message'=>$ir[0]['labelsRemoved'][0]['message'], 'label_ids'=>$ir[0]['labelsRemoved'][0]['labelIds']);
	return $rar;
	
	
}
