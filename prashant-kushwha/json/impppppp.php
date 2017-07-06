<?php
    
	$json=file_get_contents(__DIR__.'/b2b.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2b'];
    $ar=b2bDecode($inv);
    print_r($ar);
	
	/* $json=file_get_contents(__DIR__.'/b2ba.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2ba'][0]['inv'][0];
    $ar=b2baDecode($inv);
    print_r($ar); */
	
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
	
	/* $json=file_get_contents(__DIR__.'/gstr1acdn.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnr'][0]['nt'][0];
    $ar=gstr1acdnDecode($inv);
    print_r($ar);
		 */
		
	/* $json=file_get_contents(__DIR__.'/gstr1acdna.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnra'][0]['nt'][0];
    $ar=gstr1acdnaDecode($inv);
    print_r($ar); */	
	
	/* $json=file_get_contents(__DIR__.'/gstr2b2b.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2b'][0]['inv'][0];
    $ar=gstr2b2bDecode($inv);
    print_r($ar); 
	*/
	  /* $json=file_get_contents(__DIR__.'/gstr2b2ba.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2ba'][0]['inv'][0];
    $ar=gstr2b2baDecode($inv);
    print_r($ar); */ 
	
	/* $json=file_get_contents(__DIR__.'/gstr2cdn.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdn'][0]['nt'][0];
    $ar=gstr2cdnDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/gstr2cdna.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdna'][0]['nt'][0];
    $ar=gstr2cdnaDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/gstr2getnillrated.txt');
    $jr=json_decode($json,1);
    $inv=$jr['nil_supplies'];
    $ar=gstr2getnillratedDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/cdnur.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnur'][0];
    $ar=cdnurDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/cdnura.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnura'][0];
    $ar=cdnuraDecode($inv);
    print_r($ar); */
	
    function b2bDecode($ir)
    {
		
        $rar['b2b']['invoice']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'updby'=>$ir[0]['inv'][0]['updby'], 'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'val'=>$ir[0]['inv'][0]['val'], 'pos'=>$ir[0]['inv'][0]['pos'], 'rchrg'=>$ir[0]['inv'][0]['rchrg'], 'etin'=>$ir[0]['inv'][0]['etin'], 'inv_typ'=>$ir[0]['inv'][0]['inv_typ'], 'cflag'=>$ir[0]['inv'][0]['cflag']);
		
		foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['b2b']['invoice']['itms'][]=array_merge($a,$b);
			
		}
        /* foreach($ir[0]['inv'][0]['itms'][0] as $k=>$r){
            /* $rar['b2b']['itms']=array('num'=>$r[0]['inv'][0]['itms'][0]['num'], 'rt'=>$r['itm_det']['rt'], 'txval'=>$r['itm_det']['txval'], 'iamt'=>$r['itm_det']['iamt'], 'camt'=>$r['itm_det']['camt'], 'samt'=>$r['itm_det']['samt'], 'csamt'=>$r['itm_det']['csamt']); */
		   /* $rar['b2b']['invoice']['itms'][$k]=$r;
		  
        } */ 
      
        return $rar;
    }
    
    function b2bEncode($ir)
    {
        
    }
    
	function b2baDecode($ir)
    {
        $rar['b2ba']['inv']=array('flag'=>$ir['flag'], 'chksum'=>$ir['chksum'], 'updby'=>$ir['updby'], 'oinum'=>$ir['oinum'], 'oidt'=>$ir['oidt'],  'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'inum'=>$ir['inum'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'rchrg'=>$ir['rchrg'], 'prs'=>$ir['prs'], 'od_num'=>$ir['od_num'], 'od_dt'=>$ir['od_dt'], 'etin'=>$ir['etin']);
		foreach($ir['itms'] as $k=>$r)
		{
            $rar['b2ba']['itms'][]=array('num'=>$r['num'], 'ty'=>$r['itm_det']['ty'], 'hsn_sc'=>$r['itm_det']['hsn_sc'], 'txval'=>$r['itm_det']['txval'], 'irt'=>$r['itm_det']['irt'], 'iamt'=>$r['itm_det']['iamt'], 'crt'=>$r['itm_det']['crt'], 'camt'=>$r['itm_det']['camt'], 'srt'=>$r['itm_det']['srt'], 'samt'=>$r['itm_det']['samt'], 'csrt'=>$r['itm_det']['csrt'], 'csamt'=>$r['itm_det']['csamt']);
		}
        return $rar;
    }
 
	function b2clDecode($ir)
	{
		$rar['b2cl']['invoice']=array('chksum'=>$ir['chksum'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'],  'etin'=>$ir['etin'],);
        foreach($ir['itms'] as $k=>$r){
            $rar['b2cl']['itms']=array('num'=>$r['num'], 'rt'=>$r['itm_det']['rt'], 'txval'=>$r['itm_det']['txval'], 'iamt'=>$r['itm_det']['iamt']);
        }
      
        return $rar;
	}
    
    function b2claDecode($ir)
	{
		$rar['b2cla']['invoice']=array('chksum'=>$ir['chksum'], 'oinum'=>$ir['oinum'], 'oidt'=>$ir['oidt'], 'cname'=>$ir['cname'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'prs'=>$ir['prs'], 'od_num'=>$ir['od_num'], 'od_dt'=>$ir['od_dt'], 'etin'=>$ir['etin']);
        foreach($ir['itms'] as $k=>$r){
            $rar['b2cla']['itms'][]=array('num'=>$r['num'], 'ty'=>$r['itm_det']['ty'], 'hsn_sc'=>$r['itm_det']['hsn_sc'], 'txval'=>$r['itm_det']['txval'], 'irt'=>$r['itm_det']['irt'], 'iamt'=>$r['itm_det']['iamt']);
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
		$rar['b2csa']=array('chksum'=>$ir['chksum'], 'omon'=>$ir['omon'], 'oty'=>$ir['oty'], 'ohsn_sc'=>$ir['ohsn_sc'], 'osupst_cd'=>$ir['osupst_cd'], 'ty'=>$ir['ty'], 'hsn_sc'=>$ir['hsn_sc'], 'state_cd'=>$ir['state_cd'], 'txval'=>$ir['txval'], 'irt'=>$ir['irt'], 'iamt'=>$ir['iamt'], 'crt'=>$ir['crt'], 'camt'=>$ir['camt'], 'srt'=>$ir['srt'], 'samt'=>$ir['samt'], 'csrt'=>$ir['csrt'], 'csamt'=>$ir['csamt'], 'prs'=>$ir['prs'], 'od_num'=>$ir['od_num'], 'od_dt'=>$ir['od_dt'], 'etin'=>$ir['etin'], 'typ'=>$ir['typ']);
      
        return $rar;
	}
	
	function cdnrDecode($ir)
	{
		$rar['cdnr']['nt']=array('chksum'=>$ir['chksum'], 'cflag'=>$ir['cflag'], 'updby'=>$ir['updby'], 'ntty'=>$ir['ntty'], 'nt_num'=>$ir['nt_num'], 'nt_dt'=>$ir['nt_dt'], 'rsn'=>$ir['rsn'], 'p_gst'=>$ir['p_gst'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val']);
        foreach($ir['itms'] as $k=>$r){
            $rar['cdnr']['itms']=array('num'=>$r['num'], 'rt'=>$r['itm_det']['rt'], 'txval'=>$r['itm_det']['txval'], 'iamt'=>$r['itm_det']['iamt'], 'csamt'=>$r['itm_det']['csamt']);
        }
      
        return $rar;
	}
	
    function cdnraDecode($ir)
	{
	
		$rar['cdnra']['nt']=array('flag'=>$ir['flag'], 'updby'=>$ir['updby'],'chksum'=>$ir['chksum'], 'ntty'=>$ir['ntty'],  'rsn'=>$ir['rsn'], 'ont_num'=>$ir['ont_num'], 'ont_dt'=>$ir['ont_dt'], 'nt_num'=>$ir['nt_num'], 'nt_dt'=>$ir['nt_dt'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'rchrg'=>$ir['rchrg'], 'val'=>$ir['val'], 'irt'=>$ir['irt'], 'iamt'=>$ir['iamt'], 'crt'=>$ir['crt'], 'camt'=>$ir['camt'], 'srt'=>$ir['srt'], 'samt'=>$ir['samt'], 'csrt'=>$ir['csrt'], 'csamt'=>$ir['csamt'], 'etin'=>$ir['etin']);
        return $rar;
	
	}
	
	
	function gstr1ab2bDecode($ir)
    {
        $rar['b2b']['invoice']=array('flag'=>$ir['flag'], 'updby'=>$ir['updby'], 'chksum'=>$ir['chksum'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'rchrg'=>$ir['rchrg'], 'prs'=>$ir['prs'], 'od_num'=>$ir['od_num'], 'od_dt'=>$ir['od_dt'], 'etin'=>$ir['etin']);
        foreach($ir['itms'] as $k=>$r){
            $rar['b2b']['itms'][]=array('num'=>$r['num'], 'ty'=>$r['itm_det']['ty'], 'hsn_sc'=>$r['itm_det']['hsn_sc'], 'txval'=>$r['itm_det']['txval'], 'irt'=>$r['itm_det']['irt'], 'iamt'=>$r['itm_det']['iamt'], 'crt'=>$r['itm_det']['crt'], 'camt'=>$r['itm_det']['camt'], 'srt'=>$r['itm_det']['srt'], 'samt'=>$r['itm_det']['samt'], 'csrt'=>$r['itm_det']['csrt'], 'csamt'=>$r['itm_det']['csamt']);
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
	
	function gstr2b2bDecode($ir)
	{
		$rar['b2ba']['invoice']=array('flag'=>$ir['flag'], 'cflag'=>$ir['cflag'], 'opd'=>$ir['opd'], 'chksum'=>$ir['chksum'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'rchrg'=>$ir['rchrg'], 'updby'=>$ir['updby'], 'inv_typ'=>$ir['inv_typ']);
		foreach($ir['itms'] as $k=>$v)
		{
				$rar['b2ba']['itms'][$k]['itm_det']=$v['itm_det'];
				$rar['b2ba']['itms'][$k]['itc']=$v['itc'];
		}
        /* foreach($ir['itms']['itm_det'] as $k=>$r){
            $rar['itms'][]=array('num'=>$r['num'], 'rt'=>$r['itm_det']['rt'], 'txval'=>$r['itm_det']['txval'], 'iamt'=>$r['itm_det']['iamt'], 'camt'=>$r['itm_det']['camt'], 'samt'=>$r['itm_det']['samt'], 'csamt'=>$r['itm_det']['csamt']);
			
        } */
      
        return $rar;
		
	}
	
	function gstr2b2baDecode($ir)
	{
		$rar['b2ba']['invoice']=array('flag'=>$ir['flag'], 'chksum'=>$ir['chksum'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'oinum'=>$ir['oinum'], 'oidt'=>$ir['oidt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'rchrg'=>$ir['rchrg'], 'updby'=>$ir['updby']);
		foreach($ir['itms'] as $k=>$v)
		{
				$rar['b2ba']['itms'][$k][]=$v['itm_det'];
				$rar['b2ba']['itms'][$k][]=$v['itc'];
		}
       /*  foreach($ir['itms'] as $k=>$r){
            $rar['b2ba']['itms'][]=array('num'=>$r['num'], 'ty'=>$r['itm_det']['ty'], 'hsn_sc'=>$r['itm_det']['hsn_sc'], 'txval'=>$r['itm_det']['txval'], 'irt'=>$r['itm_det']['irt'], 'iamt'=>$r['itm_det']['iamt'], 'crt'=>$r['itm_det']['crt'], 'camt'=>$r['itm_det']['camt'], 'srt'=>$r['itm_det']['srt'], 'samt'=>$r['itm_det']['samt'], 'csrt'=>$r['itm_det']['csrt'], 'csamt'=>$r['itm_det']['csamt']);
			
        }
		
		foreach($ir['itms'] as $k=>$r){
            $rar['b2ba']['itms'][]=array('num'=>$r['num'], 'ty'=>$r['itm_det']['ty'], 'hsn_sc'=>$r['itm_det']['hsn_sc'], 'txval'=>$r['itm_det']['txval'], 'irt'=>$r['itm_det']['irt'], 'iamt'=>$r['itm_det']['iamt'], 'crt'=>$r['itm_det']['crt'], 'camt'=>$r['itm_det']['camt'], 'srt'=>$r['itm_det']['srt'], 'samt'=>$r['itm_det']['samt'], 'csrt'=>$r['itm_det']['csrt'], 'csamt'=>$r['itm_det']['csamt']);
			
        } */
      
        return $rar;
		
	}
	
	function gstr2cdnDecode($ir)
	{
		$rar['cdn']['nt']=array('flag'=>$ir['flag'], 'chksum'=>$ir['chksum'],'ntty'=>$ir['ntty'], 'nt_num'=>$ir['nt_num'], 'nt_dt'=>$ir['nt_dt'], 'inum'=>$ir['inum'], 'rsn'=>$ir['rsn'], 'p_gst'=>$ir['p_gst'], 'idt'=>$ir['idt'], 'updby'=>$ir['updby'], 'opd'=>$ir['opd'], 'cflag'=>$ir['cflag']);
		foreach($ir['itms'] as $k=>$v)
		{
				$rar['cdn']['itms'][]=$v['itm_det'];
				$rar['cdn']['itms'][]=$v['itc'];
		}
		
		return $rar;
	}
	
	function gstr2cdnaDecode($ir)
	{
		$rar['cdna']['nt']=array('flag'=>$ir['flag'], 'chksum'=>$ir['chksum'], 'ntty'=>$ir['ntty'], 'nt_num'=>$ir['nt_num'], 'nt_dt'=>$ir['nt_dt'],'ont_num'=>$ir['ont_num'], 'ont_dt'=>$ir['ont_dt'], 'rsn'=>$ir['rsn'],'inum'=>$ir['inum'],'idt'=>$ir['idt'],'val'=>$ir['val'], 'irt'=>$ir['irt'], 'iamt'=>$ir['iamt'], 'crt'=>$ir['crt'], 'camt'=>$ir['camt'], 'srt'=>$ir['srt'], 'samt'=>$ir['samt'], 'csrt'=>$ir['csrt'], 'csamt'=>$ir['csamt'], 'updby'=>$ir['updby'], 'rchrg'=>$ir['rchrg']);
		foreach($ir['itc'] as $k=>$r)
		{
			$rar['cdna']['itc'][$k]=$r;
		}
		return $rar;
	}
	
	function gstr2getnillratedDecode($ir)
	{
		$rar['nil_supplies']=array('chksum'=>$ir['chksum']);
		foreach($ir['inter'] as $k=>$r)
		{
			$rar['nil_supplies']['inter'][$k]=$r;
		}
		foreach($ir['intra'] as $k=>$r)
		{
			$rar['nil_supplies']['intra'][$k]=$r;
		}
		//$rar['nil_supplies']['inter']=
		return $rar;
	}
	
	function cdnuraDecode($ir)
	{
		$rar['cdnura']=array('chksum'=>$ir['chksum'], 'omon'=>$ir['omon'], 'ocname'=>$ir['ocname'], 'mon'=>$ir['mon'], 'cname'=>$ir['cname'], 'state_cd'=>$ir['state_cd'], 'ntty'=>$ir['ntty'], 'rsn'=>$ir['rsn'], 'val'=>$ir['val'], 'irt'=>$ir['irt'], 'iamt'=>$ir['iamt'], 'crt'=>$ir['crt'], 'camt'=>$ir['camt'], 'srt'=>$ir['srt'], 'samt'=>$ir['cname'], 'csrt'=>$ir['csrt'], 'csamt'=>$ir['ntty'], 'etin'=>$ir['etin']);
		 
		 return $rar;
	}
	