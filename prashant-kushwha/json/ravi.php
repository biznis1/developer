<?php
    
	/*$json=file_get_contents(__DIR__.'/b2b.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2b'][0]['inv'][0];
    $ar=b2bDecode($inv);
    print_r($ar);
	*/
	/* $json=file_get_contents(__DIR__.'/b2cl.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2cl'][0]['inv'][0];
    $ar=b2clDecode($inv);
    print_r($ar); */
	
   /*  $json=file_get_contents(__DIR__.'/b2cla.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2cla'][0]['inv'][0];
    $ar=b2claDecode($inv);
    print_r($ar);
 */
    /* $json=file_get_contents(__DIR__.'/b2cs.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2cs'];
    $ar=b2csDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/b2csa.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2csa'][0];
    $ar=b2csaDecode($inv);
    print_r($ar); */
    
	/* $json=file_get_contents(__DIR__.'/cdnr.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnr'][0]['nt'][0];
    $ar=cdnrDecode($inv);
    print_r($ar);
     */
	/* $json=file_get_contents(__DIR__.'/cdnra.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnra'][0]['nt'][0];
    $ar=cdnraDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/gstr1ab2b.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2b'][0]['inv'][0];
    $ar=gstr1ab2bDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/gstr1ab2ba.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2ba'][0]['inv'][0];
    $ar=gstr1ab2baDecode($inv);
    print_r($ar); */
	
	 /*$json=file_get_contents(__DIR__.'/gstr1acdn.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnr'][0]['nt'][0];
    $ar=gstr1acdnDecode($inv);
    print_r($ar);*/
		 
		
	$json=file_get_contents(__DIR__.'/gstr1acdna.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnra'][0]['nt'][0];
    $ar=gstr1acdnaDecode($inv);
    print_r($ar); 	
	
    function b2bDecode($ir)
    {
        $rar['invoice']=array('chksum'=>$ir['chksum'], 'updby'=>$ir['updby'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'rchrg'=>$ir['rchrg'], 'etin'=>$ir['etin'], 'inv_typ'=>$ir['inv_typ'], 'cflag'=>$ir['cflag']);
        foreach($ir['itms'] as $k=>$r){
            $rar['itms'][]=array('num'=>$r['num'], 'rt'=>$r['itm_det']['rt'], 'txval'=>$r['itm_det']['txval'], 'iamt'=>$r['itm_det']['iamt'], 'camt'=>$r['itm_det']['camt'], 'samt'=>$r['itm_det']['samt'], 'csamt'=>$r['itm_det']['csamt']);
        }
      
        return $rar;
    }
    
    function b2bEncode($ir)
    {
        
    }
    
 
	function b2clDecode($ir)
	{
		$rar['invoice']=array('chksum'=>$ir['chksum'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'],  'etin'=>$ir['etin'],);
        foreach($ir['itms'] as $k=>$r){
            $rar['itms'][]=array('num'=>$r['num'], 'rt'=>$r['itm_det']['rt'], 'txval'=>$r['itm_det']['txval'], 'iamt'=>$r['itm_det']['iamt']);
        }
      
        return $rar;
	}
    
    function b2claDecode($ir)
	{
		$rar['invoice']=array('chksum'=>$ir['chksum'], 'oinum'=>$ir['oinum'], 'oidt'=>$ir['oidt'], 'cname'=>$ir['cname'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'prs'=>$ir['prs'], 'od_num'=>$ir['od_num'], 'od_dt'=>$ir['od_dt'], 'etin'=>$ir['etin']);
        foreach($ir['itms'] as $k=>$r){
            $rar['itms'][]=array('num'=>$r['num'], 'ty'=>$r['itm_det']['ty'], 'hsn_sc'=>$r['itm_det']['hsn_sc'], 'txval'=>$r['itm_det']['txval'], 'irt'=>$r['itm_det']['irt'], 'iamt'=>$r['itm_det']['iamt']);
        }
      
        return $rar;
	}
	
	
    function b2csDecode($ir)
	{		
		foreach($ir as $k=> $v)
		{
		/* $rar['b2cs'][]=array('chksum'=>$ir['chksum'], 'sply_ty'=>$ir['sply_ty'], 'rt'=>$ir['rt'], 'typ'=>$ir['typ'], 'pos'=>$ir['pos'], 'txval'=>$ir['txval'], 'iamt'=>$ir['iamt'], 'csamt'=>$ir['csamt'], 'etin'=>$ir['etin']);*/
		$rar['b2cs'][]=$v;
		}       
        return $rar;
	}
	
	function b2csaDecode($ir)
	{
		$rar['b2csa'][]=array('chksum'=>$ir['chksum'], 'omon'=>$ir['omon'], 'oty'=>$ir['oty'], 'ohsn_sc'=>$ir['ohsn_sc'], 'osupst_cd'=>$ir['osupst_cd'], 'ty'=>$ir['ty'], 'hsn_sc'=>$ir['hsn_sc'], 'state_cd'=>$ir['state_cd'], 'txval'=>$ir['txval'], 'irt'=>$ir['irt'], 'iamt'=>$ir['iamt'], 'crt'=>$ir['crt'], 'camt'=>$ir['camt'], 'srt'=>$ir['srt'], 'samt'=>$ir['samt'], 'csrt'=>$ir['csrt'], 'csamt'=>$ir['csamt'], 'prs'=>$ir['prs'], 'od_num'=>$ir['od_num'], 'od_dt'=>$ir['od_dt'], 'etin'=>$ir['etin'], 'typ'=>$ir['typ']);
      
        return $rar;
	}
	
	function cdnrDecode($ir)
	{
		$rar['nt']=array('chksum'=>$ir['chksum'], 'cflag'=>$ir['cflag'], 'updby'=>$ir['updby'], 'ntty'=>$ir['ntty'], 'nt_num'=>$ir['nt_num'], 'nt_dt'=>$ir['nt_dt'], 'rsn'=>$ir['rsn'], 'p_gst'=>$ir['p_gst'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val']);
        foreach($ir['itms'] as $k=>$r){
            $rar['itms'][]=array('num'=>$r['num'], 'rt'=>$r['itm_det']['rt'], 'txval'=>$r['itm_det']['txval'], 'iamt'=>$r['itm_det']['iamt'], 'csamt'=>$r['itm_det']['csamt']);
        }
      
        return $rar;
	}
	
    function cdnraDecode($ir)
	{
	
		$rar['cdnra']['nt'][]=array('flag'=>$ir['flag'], 'updby'=>$ir['updby'],'chksum'=>$ir['chksum'], 'ntty'=>$ir['ntty'],  'rsn'=>$ir['rsn'], 'ont_num'=>$ir['ont_num'], 'ont_dt'=>$ir['ont_dt'], 'nt_num'=>$ir['nt_num'], 'nt_dt'=>$ir['nt_dt'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'rchrg'=>$ir['rchrg'], 'val'=>$ir['val'], 'irt'=>$ir['irt'], 'iamt'=>$ir['iamt'], 'crt'=>$ir['crt'], 'camt'=>$ir['camt'], 'srt'=>$ir['srt'], 'samt'=>$ir['samt'], 'csrt'=>$ir['csrt'], 'csamt'=>$ir['csamt'], 'etin'=>$ir['etin']);
        return $rar;
	
	}
	
	
	function gstr1ab2bDecode($ir)
    {
        $rar['invoice']=array('flag'=>$ir['flag'], 'updby'=>$ir['updby'], 'chksum'=>$ir['chksum'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'rchrg'=>$ir['rchrg'], 'prs'=>$ir['prs'], 'od_num'=>$ir['od_num'], 'od_dt'=>$ir['od_dt'], 'etin'=>$ir['etin']);
        foreach($ir['itms'] as $k=>$r){
            $rar['itms'][]=array('num'=>$r['num'], 'ty'=>$r['itm_det']['ty'], 'hsn_sc'=>$r['itm_det']['hsn_sc'], 'txval'=>$r['itm_det']['txval'], 'irt'=>$r['itm_det']['irt'], 'iamt'=>$r['itm_det']['iamt'], 'crt'=>$r['itm_det']['crt'], 'camt'=>$r['itm_det']['camt'], 'srt'=>$r['itm_det']['srt'], 'samt'=>$r['itm_det']['samt'], 'csrt'=>$r['itm_det']['csrt'], 'csamt'=>$r['itm_det']['csamt']);
        }
      
        return $rar;
    }
	
	function gstr1ab2baDecode($ir)
	{
		$rar['invoice']=array('flag'=>$ir['flag'], 'chksum'=>$ir['chksum'], 'updby'=>$ir['updby'], 'oinum'=>$ir['oinum'], 'oidt'=>$ir['oidt'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'rchrg'=>$ir['rchrg'], 'prs'=>$ir['prs'], 'od_num'=>$ir['od_num'], 'od_dt'=>$ir['od_dt'], 'etin'=>$ir['etin']);
        foreach($ir['itms'] as $k=>$r){
            $rar['itms'][]=array('num'=>$r['num'], 'ty'=>$r['itm_det']['ty'], 'hsn_sc'=>$r['itm_det']['hsn_sc'], 'txval'=>$r['itm_det']['txval'], 'irt'=>$r['itm_det']['irt'], 'iamt'=>$r['itm_det']['iamt'], 'crt'=>$r['itm_det']['crt'], 'camt'=>$r['itm_det']['camt'], 'srt'=>$r['itm_det']['srt'], 'samt'=>$r['itm_det']['samt'], 'csrt'=>$r['itm_det']['csrt'], 'csamt'=>$r['itm_det']['csamt']);
        }
      
        return $rar;
		
		
	}

	
	function gstr1acdnDecode($ir)
	{
	
		$rar['cdnr']['nt'][]=array('flag'=>$ir['flag'], 'updby'=>$ir['updby'],'chksum'=>$ir['chksum'], 'ntty'=>$ir['ntty'], 'nt_num'=>$ir['nt_num'], 'nt_dt'=>$ir['nt_dt'], 'rsn'=>$ir['rsn'],  'rchrg'=>$ir['rchrg'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'irt'=>$ir['irt'], 'iamt'=>$ir['iamt'], 'crt'=>$ir['crt'], 'camt'=>$ir['camt'], 'srt'=>$ir['srt'], 'samt'=>$ir['samt'], 'csrt'=>$ir['csrt'], 'csamt'=>$ir['csamt'], 'etin'=>$ir['etin']);
        return $rar;
	
	}
	
	function gstr1acdnaDecode($ir)
	{
	
		$rar['cdnr']['nt'][]=array('flag'=>$ir['flag'], 'updby'=>$ir['updby'],'chksum'=>$ir['chksum'], 'ntty'=>$ir['ntty'], 'rsn'=>$ir['rsn'],  'rchrg'=>$ir['rchrg'], 'ont_num'=>$ir['ont_num'], 'ont_dt'=>$ir['ont_dt'], 'nt_num'=>$ir['nt_num'], 'nt_dt'=>$ir['nt_dt'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'irt'=>$ir['irt'], 'iamt'=>$ir['iamt'], 'crt'=>$ir['crt'], 'camt'=>$ir['camt'], 'srt'=>$ir['srt'], 'samt'=>$ir['samt'], 'csrt'=>$ir['csrt'], 'csamt'=>$ir['csamt'], 'etin'=>$ir['etin']);
        return $rar;
	
	}