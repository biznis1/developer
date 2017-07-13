<?php
    
    $json=file_get_contents(__DIR__.'/b2b.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2b'];
    $ar=b2bDecode($inv);
    print_r($ar);
	
	/* $json=file_get_contents(__DIR__.'/b2ba.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2ba'];
    $ar=b2baDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/b2cl.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2cl'];
    $ar=b2clDecode($inv);
    print_r($ar); */
	
    /* $json=file_get_contents(__DIR__.'/b2cla.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2cla'];
    $ar=b2claDecode($inv);
    print_r($ar); */

    /* $json=file_get_contents(__DIR__.'/b2cs.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2cs'];
    $ar=b2csDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/b2csa.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2csa'];
    $ar=b2csaDecode($inv);
    print_r($ar); */
    
	/* $json=file_get_contents(__DIR__.'/cdnr.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnr'];
    $ar=cdnrDecode($inv);
    print_r($ar); */
    
	/* $json=file_get_contents(__DIR__.'/cdnra.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnra'];
    $ar=cdnraDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/gstr1ab2b.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2b'];
    $ar=gstr1ab2bDecode($inv);
    print_r($ar);
	 */
	/* $json=file_get_contents(__DIR__.'/gstr1ab2ba.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2ba'];
    $ar=gstr1ab2baDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/gstr1acdn.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnr'];
    $ar=gstr1acdnDecode($inv);
    print_r($ar); */
		
		
	/* $json=file_get_contents(__DIR__.'/gstr1acdna.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnra'];
    $ar=gstr1acdnaDecode($inv);
    print_r($ar);	 */
	
	/* $json=file_get_contents(__DIR__.'/gstr2b2b.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2b'];
    $ar=gstr2b2bDecode($inv);
    print_r($ar); */ 
	
	  /* $json=file_get_contents(__DIR__.'/gstr2b2ba.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2ba'];
    $ar=gstr2b2baDecode($inv);
    print_r($ar);  */
	
	/* $json=file_get_contents(__DIR__.'/gstr2cdn.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdn'];
    $ar=gstr2cdnDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/gstr2cdna.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdna'];
    $ar=gstr2cdnaDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/gstr2getnillrated.txt');
    $jr=json_decode($json,1);
    $inv=$jr['nil_supplies'];
    $ar=gstr2getnillratedDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/cdnur.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnur'];
    $ar=cdnurDecode($inv);
    print_r($ar); */
	
	/* $json=file_get_contents(__DIR__.'/cdnura.txt');
    $jr=json_decode($json,1);
    $inv=$jr['cdnura'];
    $ar=cdnuraDecode($inv);
    print_r($ar); */
	
    function b2bDecode($ir)
    {
		
        $rar['b2b_invoice']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'updby'=>$ir[0]['inv'][0]['updby'], 'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'val'=>$ir[0]['inv'][0]['val'], 'pos'=>$ir[0]['inv'][0]['pos'], 'rchrg'=>$ir[0]['inv'][0]['rchrg'], 'etin'=>$ir[0]['inv'][0]['etin'], 'inv_typ'=>$ir[0]['inv'][0]['inv_typ'], 'cflag'=>$ir[0]['inv'][0]['cflag']);
		
		foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['b2b_itms'][]=array_merge($a,$b);
			
		}
      
        return $rar;
    }
  
    
	function b2baDecode($ir)
    {
        $rar['b2ba_invocie']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['inv'][0]['flag'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'updby'=>$ir[0]['inv'][0]['updby'], 'oinum'=>$ir[0]['inv'][0]['oinum'], 'oidt'=>$ir[0]['inv'][0]['oidt'],  'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'inum'=>$ir[0]['inv'][0]['inum'], 'val'=>$ir[0]['inv'][0]['val'], 'pos'=>$ir[0]['inv'][0]['pos'], 'rchrg'=>$ir[0]['inv'][0]['rchrg'], 'prs'=>$ir[0]['inv'][0]['prs'], 'od_num'=>$ir[0]['inv'][0]['od_num'], 'od_dt'=>$ir[0]['inv'][0]['od_dt'], 'etin'=>$ir[0]['inv'][0]['etin']);
		foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['b2ba_itms'][]=array_merge($a,$b);
			
		}
		
        return $rar;
    }
 
	function b2clDecode($ir)
	{
		$rar['b2cl_invoice']=array('pos'=>$ir[0]['pos'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'val'=>$ir[0]['inv'][0]['val'],  'etin'=>$ir[0]['inv'][0]['etin']);
        
		foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['b2cl_itms'][]=array_merge($a,$b);
			
		}
		
        return $rar;
	}
    
    function b2claDecode($ir)
	{
		$rar['b2cla_invoice']=array('state_cd'=>$ir[0]['state_cd'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'oinum'=>$ir[0]['inv'][0]['oinum'], 'oidt'=>$ir[0]['inv'][0]['oidt'], 'cname'=>$ir[0]['inv'][0]['cname'], 'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'val'=>$ir[0]['inv'][0]['val'], 'pos'=>$ir[0]['inv'][0]['pos'], 'prs'=>$ir[0]['inv'][0]['prs'], 'od_num'=>$ir[0]['inv'][0]['od_num'], 'od_dt'=>$ir[0]['inv'][0]['od_dt'], 'etin'=>$ir[0]['inv'][0]['etin']);
        foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['b2cla_itms'][]=array_merge($a,$b);
			
		}
      
        return $rar;
	}
	
	
    function b2csDecode($ir)
	{		
		foreach($ir as $k=> $v)
		{
		$rar['b2cs_invoice'][]=array('chksum'=>$v['chksum'], 'sply_ty'=>$v['sply_ty'], 'rt'=>$v['rt'], 'typ'=>$v['typ'], 'etin'=>$v['etin'], 'pos'=>$v['pos'], 'txval'=>$v['txval'], 'iamt'=>$v['iamt'], 'csamt'=>$v['csamt']) ;
		}    
        return $rar;
	}
	
	function b2csaDecode($ir)
	{
		foreach($ir as $k=> $v)
		{
		$rar['b2csa_invoice'][]=$v;
		}       
      
        return $rar;
	}
	
	function cdnrDecode($ir)
	{
		$rar['cdnr_nt']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'chksum'=>$ir[0]['nt'][0]['chksum'], 'cflag'=>$ir[0]['nt'][0]['cflag'], 'updby'=>$ir[0]['nt'][0]['updby'], 'ntty'=>$ir[0]['nt'][0]['ntty'], 'nt_num'=>$ir[0]['nt'][0]['nt_num'], 'nt_dt'=>$ir[0]['nt'][0]['nt_dt'], 'rsn'=>$ir[0]['nt'][0]['rsn'], 'p_gst'=>$ir[0]['nt'][0]['p_gst'], 'inum'=>$ir[0]['nt'][0]['inum'], 'idt'=>$ir[0]['nt'][0]['idt'], 'val'=>$ir[0]['nt'][0]['val']);
       foreach($ir[0]['nt'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['cdnr_itms'][]=array_merge($a,$b);
			
		}
      
        return $rar;
	}
	
    function cdnraDecode($ir)
	{
	
		$rar['cdnra_nt']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['nt'][0]['flag'], 'updby'=>$ir[0]['nt'][0]['updby'],'chksum'=>$ir[0]['nt'][0]['chksum'], 'ntty'=>$ir[0]['nt'][0]['ntty'],  'rsn'=>$ir[0]['nt'][0]['rsn'], 'ont_num'=>$ir[0]['nt'][0]['ont_num'], 'ont_dt'=>$ir[0]['nt'][0]['ont_dt'], 'nt_num'=>$ir[0]['nt'][0]['nt_num'], 'nt_dt'=>$ir[0]['nt'][0]['nt_dt'], 'inum'=>$ir[0]['nt'][0]['inum'], 'idt'=>$ir[0]['nt'][0]['idt'], 'rchrg'=>$ir[0]['nt'][0]['rchrg'], 'val'=>$ir[0]['nt'][0]['val'], 'irt'=>$ir[0]['nt'][0]['irt'], 'iamt'=>$ir[0]['nt'][0]['iamt'], 'crt'=>$ir[0]['nt'][0]['crt'], 'camt'=>$ir[0]['nt'][0]['camt'], 'srt'=>$ir[0]['nt'][0]['srt'], 'samt'=>$ir[0]['nt'][0]['samt'], 'csrt'=>$ir[0]['nt'][0]['csrt'], 'csamt'=>$ir[0]['nt'][0]['csamt'], 'etin'=>$ir[0]['nt'][0]['etin']);
        return $rar;
	
	}
	
	
	function gstr1ab2bDecode($ir)
    {
        $rar['b2b_invoice']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['inv'][0]['flag'], 'updby'=>$ir[0]['inv'][0]['updby'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'val'=>$ir[0]['inv'][0]['val'], 'pos'=>$ir[0]['inv'][0]['pos'], 'rchrg'=>$ir[0]['inv'][0]['rchrg'], 'prs'=>$ir[0]['inv'][0]['prs'], 'od_num'=>$ir[0]['inv'][0]['od_num'], 'od_dt'=>$ir[0]['inv'][0]['od_dt'], 'etin'=>$ir[0]['inv'][0]['etin']);
        foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['b2b_itms'][]=array_merge($a,$b);
			
		}
      
      
        return $rar;
    }
	
	function gstr1ab2baDecode($ir)
	{
		$rar['b2ba_invoice']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['inv'][0]['flag'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'updby'=>$ir[0]['inv'][0]['updby'], 'oinum'=>$ir[0]['inv'][0]['oinum'], 'oidt'=>$ir[0]['inv'][0]['oidt'], 'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'val'=>$ir[0]['inv'][0]['val'], 'pos'=>$ir[0]['inv'][0]['pos'], 'rchrg'=>$ir[0]['inv'][0]['rchrg'], 'prs'=>$ir[0]['inv'][0]['prs'], 'od_num'=>$ir[0]['inv'][0]['od_num'], 'od_dt'=>$ir[0]['inv'][0]['od_dt'], 'etin'=>$ir[0]['inv'][0]['etin']);
       foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['b2ba_itms'][]=array_merge($a,$b);
			
		}
        return $rar;
		
		
	}

	
	function gstr1acdnDecode($ir)
	{
	
		$rar['cdnr_nt']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['nt'][0]['flag'], 'updby'=>$ir[0]['nt'][0]['updby'],'chksum'=>$ir[0]['nt'][0]['chksum'], 'ntty'=>$ir[0]['nt'][0]['ntty'], 'nt_num'=>$ir[0]['nt'][0]['nt_num'], 'nt_dt'=>$ir[0]['nt'][0]['nt_dt'], 'rsn'=>$ir[0]['nt'][0]['rsn'],  'rchrg'=>$ir[0]['nt'][0]['rchrg'], 'inum'=>$ir[0]['nt'][0]['inum'], 'idt'=>$ir[0]['nt'][0]['idt'], 'val'=>$ir[0]['nt'][0]['val'], 'irt'=>$ir[0]['nt'][0]['irt'], 'iamt'=>$ir[0]['nt'][0]['iamt'], 'crt'=>$ir[0]['nt'][0]['crt'], 'camt'=>$ir[0]['nt'][0]['camt'], 'srt'=>$ir[0]['nt'][0]['srt'], 'samt'=>$ir[0]['nt'][0]['samt'], 'csrt'=>$ir[0]['nt'][0]['csrt'], 'csamt'=>$ir[0]['nt'][0]['csamt'], 'etin'=>$ir[0]['nt'][0]['etin']);
        return $rar;
	
	}
	
	function gstr1acdnaDecode($ir)
	{
	
		$rar['cdnr_nt']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['nt'][0]['flag'], 'updby'=>$ir[0]['nt'][0]['updby'],'chksum'=>$ir[0]['nt'][0]['chksum'], 'ntty'=>$ir[0]['nt'][0]['ntty'], 'rsn'=>$ir[0]['nt'][0]['rsn'],  'rchrg'=>$ir[0]['nt'][0]['rchrg'], 'ont_num'=>$ir[0]['nt'][0]['ont_num'], 'ont_dt'=>$ir[0]['nt'][0]['ont_dt'], 'nt_num'=>$ir[0]['nt'][0]['nt_num'], 'nt_dt'=>$ir[0]['nt'][0]['nt_dt'], 'inum'=>$ir[0]['nt'][0]['inum'], 'idt'=>$ir[0]['nt'][0]['idt'], 'val'=>$ir[0]['nt'][0]['val'], 'irt'=>$ir[0]['nt'][0]['irt'], 'iamt'=>$ir[0]['nt'][0]['iamt'], 'crt'=>$ir[0]['nt'][0]['crt'], 'camt'=>$ir[0]['nt'][0]['camt'], 'srt'=>$ir[0]['nt'][0]['srt'], 'samt'=>$ir[0]['nt'][0]['samt'], 'csrt'=>$ir[0]['nt'][0]['csrt'], 'csamt'=>$ir[0]['nt'][0]['csamt'], 'etin'=>$ir[0]['nt'][0]['etin']);
        return $rar;
	
	}
	
	function gstr2b2bDecode($ir)
	{
		$rar['b2b_invoice']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['inv'][0]['flag'], 'cflag'=>$ir[0]['inv'][0]['cflag'], 'opd'=>$ir[0]['inv'][0]['opd'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'val'=>$ir[0]['inv'][0]['val'], 'pos'=>$ir[0]['inv'][0]['pos'], 'rchrg'=>$ir[0]['inv'][0]['rchrg'], 'updby'=>$ir[0]['inv'][0]['updby'], 'inv_typ'=>$ir[0]['inv'][0]['inv_typ']);
		foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$c=$r['itc'];
			$rar['b2b_itms'][]=array_merge($a,$b,$c);
			
		}
        return $rar;		
	}
	
	function gstr2b2baDecode($ir)
	{
		$rar['b2ba_invoice']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['inv'][0]['flag'], 'chksum'=>$ir[0]['inv'][0]['chksum'], 'inum'=>$ir[0]['inv'][0]['inum'], 'idt'=>$ir[0]['inv'][0]['idt'], 'oinum'=>$ir[0]['inv'][0]['oinum'], 'oidt'=>$ir[0]['inv'][0]['oidt'], 'val'=>$ir[0]['inv'][0]['val'], 'pos'=>$ir[0]['inv'][0]['pos'], 'rchrg'=>$ir[0]['inv'][0]['rchrg'], 'updby'=>$ir[0]['inv'][0]['updby']);
		foreach($ir[0]['inv'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$c=$r['itc'];
			$rar['b2ba_itms'][]=array_merge($a,$b,$c);
			
		}   
        return $rar;
		
	}
	
	function gstr2cdnDecode($ir)
	{
		$rar['cdn_nt']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['nt'][0]['flag'], 'chksum'=>$ir[0]['nt'][0]['chksum'],'ntty'=>$ir[0]['nt'][0]['ntty'], 'nt_num'=>$ir[0]['nt'][0]['nt_num'], 'nt_dt'=>$ir[0]['nt'][0]['nt_dt'], 'inum'=>$ir[0]['nt'][0]['inum'], 'rsn'=>$ir[0]['nt'][0]['rsn'], 'p_gst'=>$ir[0]['nt'][0]['p_gst'], 'idt'=>$ir[0]['nt'][0]['idt'], 'updby'=>$ir[0]['nt'][0]['updby'], 'opd'=>$ir[0]['nt'][0]['opd'], 'cflag'=>$ir[0]['nt'][0]['cflag']);
		foreach($ir[0]['nt'][0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$c=$r['itc'];
			$rar['cdn_itms'][]=array_merge($a,$b,$c);
			
		}  
		
		return $rar;
	}
	
	function gstr2cdnaDecode($ir)
	{
		$rar['cdna_nt']=array('ctin'=>$ir[0]['ctin'], 'cfs'=>$ir[0]['cfs'], 'flag'=>$ir[0]['nt'][0]['flag'], 'chksum'=>$ir[0]['nt'][0]['chksum'], 'ntty'=>$ir[0]['nt'][0]['ntty'], 'nt_num'=>$ir[0]['nt'][0]['nt_num'], 'nt_dt'=>$ir[0]['nt'][0]['nt_dt'],'ont_num'=>$ir[0]['nt'][0]['ont_num'], 'ont_dt'=>$ir[0]['nt'][0]['ont_dt'], 'rsn'=>$ir[0]['nt'][0]['rsn'],'inum'=>$ir[0]['nt'][0]['inum'],'idt'=>$ir[0]['nt'][0]['idt'],'val'=>$ir[0]['nt'][0]['val'], 'irt'=>$ir[0]['nt'][0]['irt'], 'iamt'=>$ir[0]['nt'][0]['iamt'], 'crt'=>$ir[0]['nt'][0]['crt'], 'camt'=>$ir[0]['nt'][0]['camt'], 'srt'=>$ir[0]['nt'][0]['srt'], 'samt'=>$ir[0]['nt'][0]['samt'], 'csrt'=>$ir[0]['nt'][0]['csrt'], 'csamt'=>$ir[0]['nt'][0]['csamt'], 'updby'=>$ir[0]['nt'][0]['updby'], 'rchrg'=>$ir[0]['nt'][0]['rchrg']);
		foreach($ir[0]['nt'][0]['itc'] as $k=>$r)
		{
			$rar['cdna_itc'][$k]=$r;
			
		}  
		return $rar;
	}
	
	function gstr2getnillratedDecode($ir)
	{
		/* $rar=array('chksum'=>$ir['chksum']);
		foreach($ir['inter'] as $k=>$r)
		{
			$rar['nil_supplies_inter'][$k]=$r;
		}
		foreach($ir['intra'] as $k=>$r)
		{
			$rar['nil_supplies_intra'][$k]=$r;
		} */
		
		$rar['nil_supplies_inter']=array('chksum'=>$ir['chksum'], 'cpddr'=>$ir['inter']['cpddr'], 'exptdsply'=>$ir['inter']['exptdsply'], 'ngsply'=>$ir['inter']['ngsply'], 'nilsply'=>$ir['inter']['nilsply']);
		
		$rar['nil_supplies_intra']=array('chksum'=>$ir['chksum'], 'cpddr'=>$ir['intra']['cpddr'], 'exptdsply'=>$ir['intra']['exptdsply'], 'ngsply'=>$ir['intra']['ngsply'], 'nilsply'=>$ir['intra']['nilsply']);
		
		return $rar;
	}
	
	function cdnuraDecode($ir)
	{
		$rar['cdnura_invoice'][]=array('chksum'=>$ir[0]['chksum'], 'omon'=>$ir[0]['omon'], 'ocname'=>$ir[0]['ocname'], 'mon'=>$ir[0]['mon'], 'cname'=>$ir[0]['cname'], 'state_cd'=>$ir[0]['state_cd'], 'ntty'=>$ir[0]['ntty'], 'rsn'=>$ir[0]['rsn'], 'val'=>$ir[0]['val'], 'irt'=>$ir[0]['irt'], 'iamt'=>$ir[0]['iamt'], 'crt'=>$ir[0]['crt'], 'camt'=>$ir[0]['camt'], 'srt'=>$ir[0]['srt'], 'samt'=>$ir[0]['cname'], 'csrt'=>$ir[0]['csrt'], 'csamt'=>$ir[0]['ntty'], 'etin'=>$ir[0]['etin']);
		 
		 return $rar;
	}
	
	function cdnurDecode($ir)
	{
		$rar['cdnur_invoice']=array('chksum'=>$ir[0]['chksum'], 'typ'=>$ir[0]['typ'], 'ntty'=>$ir[0]['ntty'], 'nt_num'=>$ir[0]['nt_num'], 'nt_dt'=>$ir[0]['nt_dt'], 'rsn'=>$ir[0]['rsn'], 'p_gst'=>$ir[0]['p_gst'], 'inum'=>$ir[0]['inum'], 'val'=>$ir[0]['val'], 'idt'=>$ir[0]['idt']);
		 
		foreach($ir[0]['itms'] as $k=>$r)
		{
			$a=array('num'=>$r['num']);
			$b=$r['itm_det'];
			$rar['cdnur_itms'][]=array_merge($a,$b);
			
		}  
		 return $rar;
	}
	