function tableRow(){
   
    
    var ival = window.localStorage.getItem('ival');
    $('#rowAppend').prepend("<tr style='border-bottom:1px soloid #ccc;'><td style='border-bottom: 1px solid #ccc;'> <div class='input-field'><input name='itemdisc[]' type='text' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><select class='browser-default' style='width:110px;' name='itemtype[]'><option value='' disabled selected></option><option value='goods'>GOODS</option><option value='services'>SERVICES</option></select></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input name='hsnsac[]' type='text' class='validate'> </div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input name='qty[]' type='text' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input name='rateitem[]' type='text' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input  type='text' name='discount[]' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' name='taxval[]' class='validate'> </div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><select class='browser-default' style='width:100px;' name='cgstper[]'><option value='' disabled selected></option><option value='0'>0</option><option value='0.125'>0.125</option><option value='1.5'>1.5</option><option value='2.5'>2.5</option><option value='6'>6</option><option value='9'>9</option><option value='14'>14</option></select></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' name='cgstamt[]' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><select class='browser-default' style='width:110px;' name='sgstper[]'><option value='' disabled selected></option><option value='0'>0</option><option value='0.125'>0.125</option><option value='1.5'>1.5</option><option value='2.5'>2.5</option><option value='6'>6</option><option value='9'>9</option><option value='14'>14</option></select></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' name='sgstamt[]' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' disabled name='igstper[]' value='0' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'> <input type='text' name='igstamt[]' class='validate'> </div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'> <input  type='text' name='cessper[]' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' name='cessamt[]' class='validate'> </div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' disabled name='total[]' class='validate'></div></td></tr>");
    $('select').material_select();
    window.localStorage.setItem('ival',ival+1);
}

function getOutput(){
    
    if(window.localStorage.getItem('newArrayGstr') == null){
        alert('null hai');
    } else{
       var newArrayGstr = window.localStorage.getItem('newArrayGstr');
        var obj = JSON.parse(newArrayGstr);
//        alert('yesIS get');
        console.log(obj);
        $('#newRow').empty();
        for(var i=0; i<obj.length; i++){
            var a = parseInt(i);
            $('#newRow').append("<tr style='border-bottom:1px soloid #ccc;'><td style='border-bottom: 1px solid #ccc;'> <div class='input-field'><input name='itemdisc[]' type='text' class='validate' value='"+obj[i].itemdisc+"' ></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><select class='browser-default' style='width:110px;' name='itemtype[]'><option value='' disabled selected></option><option value='goods' selected>GOODS</option><option value='services'>SERVICES</option></select></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input name='hsnsac[]' value='"+obj[i].hsnsac+"' type='text' class='validate'> </div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input name='qty[]' type='text' class='validate' value='"+obj[i].qty+"'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input name='rateitem[]' type='text' value='"+obj[i].rateitem+"' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input  type='text' name='discount[]' class='validate' value='"+obj[i].discount+"' ></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' name='taxval[]' value='"+obj[i].taxval+"' class='validate'> </div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><select class='browser-default' style='width:100px;' name='cgstper[]'><option value='' disabled selected></option><option value='0'>0</option><option value='0.125'>0.125</option><option value='1.5'>1.5</option><option value='2.5'>2.5</option><option value='6'>6</option><option value='9'>9</option><option value='14'>14</option></select></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' name='cgstamt[]' class='validate' value='"+obj[i].cgstamt+"' ></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><select class='browser-default' style='width:110px;' name='sgstper[]'><option value='' disabled selected></option><option value='0'>0</option><option value='0.125'>0.125</option><option value='1.5'>1.5</option><option value='2.5'>2.5</option><option value='6'>6</option><option value='9'>9</option><option value='14'>14</option></select></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' name='sgstamt[]' class='validate' value='"+obj[i].sgstamt+"'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' disabled name='igstper[]' value='"+obj[i].igstper+"' value='0' class='validate'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'> <input type='text' name='igstamt[]' class='validate' value='"+obj[i].igstamt+"'> </div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'> <input  type='text' name='cessper[]' class='validate' value='"+obj[i].cessper+"'></div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' name='cessamt[]' class='validate' value='"+obj[i].cessamt+"'> </div></td><td style='border-bottom: 1px solid #ccc;'><div class='input-field'><input type='text' disabled name='total[]' class='validate'></div></td></tr>");
            $('select').material_select();
        }
    }
    
}