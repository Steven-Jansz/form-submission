/*!
 * FUNCTIONS
 */
var progressBarSuccess = "<div class=\"loading-form\" ></div>"; 

function progressBar(FormResultId,progressBarType) {var bar = $(FormResultId).html(progressBarType).hide().fadeIn(1);return bar;}

var inputBorderError = '3px #af4442 solid';
var inputBorderNormal = '1px #ccc solid'; 

function formValidate() {var counter = 0;var fields = $(".item-required").find("select, textarea, input").serializeArray();$.each(fields, function(i, field) {if (!field.value){counter += 1;$('#'+ field.name).css('border', inputBorderError); $('#'+ field.name + 'Label').addClass('field-requiredVisible');}else{$('#'+ field.name).css('border', inputBorderNormal);$('#'+ field.name + 'Label').addClass('field-requiredInVisible');}});if(counter != 0){return false;}	}

function SubmitContact(){
	
	var FormResultId = '#ContactForm-form-result';
	var FormRespondId = '#ContactForm-form-result';
	var PostUrl = 'contact-submit.php'; 
	var FormId = '#ContactForm';
	var Form = $(FormId).serialize()
	
	var validate = formValidate();if(validate == false){return false;}

	$.ajax({	
	type: "POST",
	url: PostUrl,
	data: Form,
	cache: false,
	processData:false,
	beforeSend: function() {progressBar(FormResultId,progressBarSuccess);},
	success: function(data){$(FormResultId).html(progressBarSuccess).fadeOut(2000, function() {$(FormResultId).html();$(FormResultId).html(data).fadeIn(1000,function() {$('html, body').animate({scrollTop: $(FormRespondId).offset().top},500, function() {$(FormResultId).html(data);$(FormId)[0].reset();})});
	});}    
   });
			   
}
