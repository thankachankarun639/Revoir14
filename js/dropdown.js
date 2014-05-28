var toggle=0;

$('#dropdown_content').hide();

$('#dropdown').click(function () {
	if(toggle==0){
    $('#dropdown_content').slideDown('slow');
	toggle=1;
	}
	else if(toggle==1)
	{
	 $('#dropdown_content').slideUp('slow');
	 toggle=0;
	}
});

$('#dropdown').mouseleave(function() {
	if(toggle==1)
	{
	 $('#dropdown_content').slideUp('slow');
	 toggle=0;
	}
});