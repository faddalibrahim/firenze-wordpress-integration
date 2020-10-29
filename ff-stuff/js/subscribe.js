$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate subscribeForm form
    $(function() {
        $('#subscribeForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Kindly fill in your email"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"subscribe.php",
                    success: function() {
                        $('#subscribeForm :input').attr('disabled', 'disabled');
                        $('#subscribeForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#successs').fadeIn()
                            $('.modal').modal('hide');
		                	$('#successs').modal('show');
                        })
                    },
                    error: function() {
                        $('#subscribeForm').fadeTo( "slow", 1, function() {
                            $('#errorr').fadeIn()
                            $('.modal').modal('hide');
		                	$('#errorr').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})

$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate subscribeForm form
    $(function() {
        $('#subscribeForm1').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Kindly fill in your email"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"subscribe.php",
                    success: function() {
                        $('#subscribeForm1 :input').attr('disabled', 'disabled');
                        $('#subscribeForm1').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#successs').fadeIn()
                            $('.modal').modal('hide');
		                	$('#successs').modal('show');
                        })
                    },
                    error: function() {
                        $('#subscribeForm1').fadeTo( "slow", 1, function() {
                            $('#errorr').fadeIn()
                            $('.modal').modal('hide');
		                	$('#errorr').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})


$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate subscribeForm form
    $(function() {
        $('#subscribeForm2').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Kindly fill in your email"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"subscribe.php",
                    success: function() {
                        $('#subscribeForm2 :input').attr('disabled', 'disabled');
                        $('#subscribeForm2').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#successs').fadeIn()
                            $('.modal').modal('hide');
		                	$('#successs').modal('show');
                        })
                    },
                    error: function() {
                        $('#subscribeForm1').fadeTo( "slow", 1, function() {
                            $('#errorr').fadeIn()
                            $('.modal').modal('hide');
		                	$('#errorr').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})