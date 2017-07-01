<?php
    
    $json=file_get_contents(__DIR__.'/test.txt');
    $jr=json_decode($json,1);
    $inv=$jr['b2b'][0]['inv'][0]['itms'][0];
    $ar=b2cDecode($inv);
    print_r($ar);

    
    
    
    function b2cDecode($ir)
    {
        $rar['invoice']=array('chksum'=>$ir['chksum'], 'updby'=>$ir['updby'], 'inum'=>$ir['inum'], 'idt'=>$ir['idt'], 'val'=>$ir['val'], 'pos'=>$ir['pos'], 'rchrg'=>$ir['rchrg'], 'etin'=>$ir['etin'], 'inv_typ'=>$ir['inv_typ'], 'cflag'=>$ir['cflag']);
        foreach($ir['itms'] as $k=>$r){
            $rar['itms'][]=array('num'=>$r['num'], 'rt'=>$r['itm_det']['rt'], 'txval'=>$r['itm_det']['txval'], 'iamt'=>$r['itm_det']['iamt'], 'camt'=>$r['itm_det']['camt'], 'samt'=>$r['itm_det']['samt'], 'csamt'=>$r['itm_det']['csamt']);
        }
      
        return $rar;
    }
    
    function b2cEncode($ir)
    {
        
    }
    
    
    

   
