var toggle_deg=0;
 function change_deg(str)
 {
  if(str.toLowerCase() == "other")
  {
	$('#change_deg').fadeIn('slow');
	toggle_deg=1;
    return;
  }
  else if(toggle_deg==1)
  {
   $('#change_deg').fadeOut('slow');
	toggle_deg=0;
  document.getElementById('change_deg_value').value="";  
    return;
  }
 }
 
 var toggle_inst=0;
 function change_inst(str)
 {
  if(str.toLowerCase() == "other")
  {
	$('#change_inst').fadeIn('slow');
	toggle_inst=1;
    return;
  }
  else if(toggle_inst==1)
  {
   $('#change_inst').fadeOut('slow');
	toggle_inst=0;
   document.getElementById('change_inst_value').value="";
    return;
  }
 }
 
 
 var toggle_food=0;
 function food_disp(str)
 {
	if(str == "2")
	{
	 $('#food_disp').fadeIn('slow');
	 toggle_food=1;
     return;
	}
	else if(toggle_food==1)
	{
	 $('#food_disp').fadeOut('slow');
	 toggle_food=0;
	 document.getElementById('food_disp_value').value="";
	 document.getElementById('food_disp_value1').value="";
     return;
	}
 }