  var a = Math.ceil(Math.random() * 10);
  var b = Math.ceil(Math.random() * 10);       
  var c = a + b;
  
  function validate()
{
  if(document.form1.name.value == "")
  {
   alert("Please Enter Your Full Name");
   return false;
  }
  
  if(document.form1.rollno.value == "")
  {
   alert("Please Enter Roll Number");
   return false;
  }
  
  if(document.form1.email.value == "")
  {
   alert("Please Enter Email ID");
   return false;
  }
  if(document.form1.phoneno.value == "")
  {
   alert("Please Enter Phone Number");
   return false;
  }
  
  if(document.form1.expereince.value == "")
  {
   alert("Please Fill In \"Experience\"");
   return false;
  }
  
  if(document.form1.present_location.value == "")
  {
   alert("Please Enter Present Location");
   return false;
  }
  
  if(document.form1.captcha.value != c)
  {
	alert("Error in Captcha!");
   return false;
  }
}