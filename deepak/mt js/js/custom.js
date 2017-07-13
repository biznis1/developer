function chngtab(evt) {
    // Declare all variables
    var i,tablinks,tabcontent;

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    // Show the current tab, and add an "active" class to the link that opened the tab
    
    evt.currentTarget.className += " active";
}

function innertab(evt,hideid,showid) {
    // Declare all variables
    var i,tablinks,tabcontent;
	$('#'+hideid).css('display','none');
	$('#'+showid).css('display','block');
	// Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
	
    // Show the current tab, and add an "active" class to the link that opened the tab
    
    evt.currentTarget.className += " active";
}


function chngtab2(evt) {

    // alert(evt);

    // var aa = evt;

    // alert(JSON.stringify(aa));

    // Declare all variables
    var i,tablinks;

   

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active2", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    
    evt.currentTarget.className += " active2";
}

/* maximize card or minimize */
function maxmin(){
   
    if($("#maximize").text()=='add_circle_outline')
        {
             $("#maximize").html('remove_circle_outline');
            
        }
    else
        {
           $("#maximize").html('add_circle_outline'); 
        }
}

/* radio btn */

function radio_btn()
{
    document.getElementById('sinput').value="";
    if(document.getElementsByName('group1')[1].checked)
        {
            document.getElementById('sinput').setAttribute('type','tel');
            document.getElementById('sinput').setAttribute('maxlength','10');
        }
    else{
         document.getElementById('sinput').setAttribute('type','text');
    }
}

/* card display or hide */

function display_toggle(more_id)
{
  
    if($("#vcard_more"+more_id).css("display")=='none')
        {
            $('#vreport_pic').css('height','100% !important');
            $("#more_icon"+more_id).html('remove_circle_outline');
            $("#vcard_more"+more_id).css("display","block");
        }
     
    
    else
        {
         $('#vreport_pic').css('height','100px !important');
          $("#more_icon"+more_id).html('add_circle_outline');
          $("#vcard_more"+more_id).css("display","none");  
        }
        
}



 $(".dropdown-button").dropdown();


 $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });

 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
     

$(document).ready(function() {
    $('select').material_select();
  });

 $('.datepicker').pickadate({
    selectMonths: true, 
    today: 'Today',
    clear: 'Clear',
    close: 'Close',
    format: 'yyyy-mm-dd',// Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

$(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
});

$(document).ready(function() {
    Materialize.updateTextFields();
  });

$(document).ready(function(){
      $('.carousel').carousel();
    });


    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });

