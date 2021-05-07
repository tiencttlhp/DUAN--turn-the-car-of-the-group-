/* ------------------------------------------------------------------------------
*
*  # Modal dialogs and extensions
*
*  Specific JS code additions for components_modals.html page
*
*  Version: 1.1
*  Latest update: Jul 5, 2016
*
* ---------------------------------------------------------------------------- */

$(function() {


    // Basic modals
    // ------------------------------

    // Load remote content
    $('#modal_remote').on('show.bs.modal', function() {
        $(this).find('.modal-body').load('assets/demo_data/wizard/education.html', function() {

            // Init Select2 when loaded
            $('.select').select2({
                minimumResultsForSearch: Infinity
            });
        });
    });


    // Bootbox extension
    // ------------------------------

    // Alert dialog
    $('#alert').on('click', function() {
        bootbox.alert("Native alert dialog has been replaced with Bootbox alert box.");
    });

    // Confirmation dialog
    $('#confirm').on('click', function() {
        bootbox.confirm("Native confirm dialog has been replaced with Bootbox confirm box.", function(result) {
            bootbox.alert("Confirm result: " + result)
        });
    });

    // Prompt dialog
    $('#prompt').on('click', function() {
        bootbox.prompt("Please enter your name", function(result) {
            if (result === null) {                                             
                bootbox.alert("Prompt dismissed");                              
            } else {
                bootbox.alert("Hi <b>"+result+"</b>");                          
            }
        });
    });

    // Prompt dialog with default value
    $('#prompt_value').on('click', function() {
        bootbox.prompt({
            title: "What is your real name?",
            value: "Eugene Kopyov",
            callback: function(result) {
                if (result === null) {
                    bootbox.alert("Prompt dismissed");
                }
                else {
                    bootbox.alert("Hi, <b>"+result+"</b>");
                }
            }
        });
    });

    // Custom bootbox dialog
    $('#bootbox_custom').on('click', function() {
        bootbox.dialog({
            message: "I am a custom dialog",
            title: "Custom title",
            buttons: {
                success: {
                    label: "Success!",
                    className: "btn-success",
                    callback: function() {
                        bootbox.alert("great success");
                    }
                },
                danger: {
                    label: "Danger!",
                    className: "btn-danger",
                    callback: function() {
                        bootbox.alert("uh oh, look out!");
                    }
                },
                main: {
                    label: "Click ME!",
                    className: "btn-primary",
                    callback: function() {
                        bootbox.alert("Primary button");
                    }
                }
            }
        });
    });

    // Custom bootbox dialog with form
    $('#bootbox_form').on('click', function() {
        bootbox.dialog({
                title: "This is a form in a modal.",
                message: '<div class="row">  ' +
                    '<div class="col-md-12">' +
                        '<form class="form-horizontal">' +
                            '<div class="form-group">' +
                                '<label class="col-md-4 control-label">Name</label>' +
                                '<div class="col-md-8">' +
                                    '<input id="name" name="name" type="text" placeholder="Your name" class="form-control">' +
                                    '<span class="help-block">Here goes your name</span>' +
                                '</div>' +
                            '</div>' +
                            '<div class="form-group">' +
                                '<label class="col-md-4 control-label">How awesome is this?</label>' +
                                '<div class="col-md-8">' +
                                    '<div class="radio">' +
                                        '<label>' +
                                            '<input type="radio" name="awesomeness" id="awesomeness-0" value="Really awesome" checked="checked">' +
                                            'Really awesomeness' +
                                        '</label>' +
                                    '</div>' +
                                    '<div class="radio">' +
                                        '<label>' +
                                            '<input type="radio" name="awesomeness" id="awesomeness-1" value="Super awesome">' +
                                            'Super awesome' +
                                        '</label>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</form>' +
                    '</div>' +
                    '</div>',
                buttons: {
                    success: {
                        label: "Save",
                        className: "btn-success",
                        callback: function () {
                            var name = $('#name').val();
                            var answer = $("input[name='awesomeness']:checked").val()
                            bootbox.alert("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                        }
                    }
                }
            }
        );
    });


    // Modal callbacks
    // ------------------------------

    // onShow callback
    $('#onshow_callback').on('click', function() {
        $('#modal_default').on('show.bs.modal', function() {
            alert('onShow callback fired.')
        });
    });

    // onShown callback
    $('#onshown_callback').on('click', function() {
        $('#modal_form_vertical').on('shown.bs.modal', function() {
            alert('onShown callback fired.')
        });
    });

    // onHide callback
    $('#onhide_callback').on('click', function() {
        $('#modal_subtitle').on('hide.bs.modal', function() {
            alert('onHide callback fired.')
        });
    });

    // onHidden callback
    $('#onhidden_callback').on('click', function() {
        $('#modal_theme_success').on('hidden.bs.modal', function() {
            alert('onHidden callback fired.')
        });
    });
    

    // Sweet Alert extension
    // ------------------------------

    // Basic
    $('#sweet_basic').on('click', function() {
        swal({
            title: "Here's a message!",
            confirmButtonColor: "#2196F3"
        });
    });

    // With title
    $('#sweet_title_text').on('click', function() {
        swal({
            title: "Here's a message!",
            text: "It's pretty, isn't it?",
            confirmButtonColor: "#2196F3"
        });
    });

    // Auto closing
    $('#sweet_auto_closer').on('click', function() {
        swal({
            title: "Auto close alert!",
            text: "I will close in 2 seconds.",
            confirmButtonColor: "#2196F3",
            timer: 2000
        });
    });

    // HTML message
    $('#sweet_html').on('click', function() {
        swal({
            title: "HTML <small>small subtitle</small>",
            text: "A custom <span style='color:#F8BB86'>html<span> message.",
            html: true,
            confirmButtonColor: "#2196F3"
        });
    });

    // Prompt
    $('#sweet_prompt').on('click', function() {
        swal({
            title: "An input!",
            text: "Write something interesting:",
            type: "input",
            showCancelButton: true,
            confirmButtonColor: "#2196F3",
            closeOnConfirm: false,
            animation: "slide-from-top",
            inputPlaceholder: "Write something"
        },
        function(inputValue){
            if (inputValue === false) return false;
            if (inputValue === "") {
                swal.showInputError("You need to write something!");
                return false
            }
            swal({
                title: "Nice!",
                text: "You wrote: " + inputValue,
                type: "success",
                confirmButtonColor: "#2196F3"
            });
        });
    });

    // AJAX loader
    $('#sweet_loader').on('click', function() {
        swal({
            title: "Ajax request example",
            text: "Submit to run ajax request",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonColor: "#2196F3",
            showLoaderOnConfirm: true
        },
        function() {
            setTimeout(function() {
                swal({
                    title: "Ajax request finished!",
                    confirmButtonColor: "#2196F3"
                });
            }, 2000);
        });
    });


    //
    // Contextual alerts
    //
    
    // Success alert
    $('#sweet_success').on('click', function() {
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            confirmButtonColor: "#66BB6A",
            type: "success"
        });
    });

    // Error alert
    $('#sweet_error').on('click', function() {
        swal({
            title: "Oops...",
            text: "Something went wrong!",
            confirmButtonColor: "#EF5350",
            type: "error"
        });
    });

    // Warning alert
    $('#sweet_warning').on('click', function() {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, delete it!"
        });
    });

    // Info alert
    $('#sweet_info').on('click', function() {
        swal({
            title: "For your information",
            text: "This is some sort of a custom alert",
            confirmButtonColor: "#2196F3",
            type: "info"
        });
    });

    // Alert combination
    $('#change_info_e').on('click', function( event ) {
        if (!$('#form1').valid()) {
            console.log($('#form1').valid());
        } 
        else {
            $('#form1').valid();
            my_swal($(this).attr('sw_title'),
            $(this).attr('sw_contnet'),
            $(this).attr('sw_notice'),
            event
            );
        }
    });

    $('#change_pass_e').on('click', function( event ) {
        if (!$('#form2').valid()) {
            console.log($('#form2').valid());
        } 
        else {
            $('#form2').valid();
            my_swal($(this).attr('sw_title'),
            $(this).attr('sw_contnet'),
            $(this).attr('sw_notice'),
            event
            );
        }
    });   

    $('#btnPostNew').on('click', function( event ) {
        myvaild(event.target.attributes['sw_form_id'].value);
        if (!$('#'+event.target.attributes['sw_form_id'].value).valid()) {
            swal({
                    title: "Ê",
                    text: "Chưa điền đủ!",
                    confirmButtonColor: "#EF5350",
                    type: "error"
                });
        } 
        else {
            if ($('#content').html().trim()!='') {
                $('#'+event.target.attributes['sw_form_id'].value).valid();
                my_swal($(this).attr('sw_title'),
                $(this).attr('sw_contnet'),
                $(this).attr('sw_notice'),
                event
            );
            } else {
                swal({
                    title: "Ê",
                    text: "Chưa có nội dung đăng làm gì!",
                    confirmButtonColor: "#EF5350",
                    type: "error"
                });
            } 
        }
    });

    delete_item('deleteAccessory');
    delete_item('deleteLaptop');
    delete_item('deleteTablet');
    delete_item('deleteSmartPhone');
    delete_item('deleteNew');
    delete_item('deleteEmployee');
    delete_item('deleteProductComment');
    delete_item('deleteNewComment');
    delete_item('deleteBill');

    $('#btnAddE').on('click', function( event ) {
        if (!$('#form-add-e').valid()) {
            console.log($('#form-add-e').valid());
        } 
        else {
            $('#form-add-e').valid();
            $.ajax({
                url: $('#btnAddE').attr('url_ajax'),
                method: 'post',
                data:{
                    _token:$('#_token').val(),
                    username: $('#username').val()
                },
                success: function(data){
                    console.log(data);
                    if(data == 1){
                        alert('Têm Tài Khoản Đã Tồn Tại')
                    }else{
                        // alert('Tài Khoản Chưa Tồn Tại');
                        my_swal($('#btnAddE').attr('sw_title'),
                            $('#btnAddE').attr('sw_contnet'),
                            $('#btnAddE').attr('sw_notice'),
                            event
                        );
                    }
                }
            });
        }
    });

    $('#btnEditE').on('click', function( event ) {
        if (!$('#form-edit-e').valid()) {
            console.log($('#form-edit-e').valid());
        } 
        else {
            $('#form-edit-e').valid();
            my_swal($(this).attr('sw_title'),
            $(this).attr('sw_contnet'),
            $(this).attr('sw_notice'),
            event
            );
        }
    }); 

    $('#btnEditPassA').on('click', function( event ) {
        if (!$('#edit_pass').valid()) {
            console.log($('#edit_pass').valid());
        } 
        else {
            $('#edit_pass').valid();
            my_swal($(this).attr('sw_title'),
            $(this).attr('sw_contnet'),
            $(this).attr('sw_notice'),
            event
            );
        }
    }); 

});



function my_swal(title,text,notice,event){
    swal({
            title: title,
            text: text,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "Đồng ý!",
            cancelButtonText: "Hủy bỏ",
            closeOnConfirm: false
            // ,closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal({
                    title: "Thông báo",
                    text: notice,
                    confirmButtonColor: "#66BB6A",
                    type: "success"
                }, function(){
                    $('#'+event.target.attributes['sw_form_id'].value).submit();
                }
                );
            }
            // else {
            //     swal({
            //         title: "Thông báo",
            //         text: "Cập nhật hủy bỏ",
            //         confirmButtonColor: "#2196F3",
            //         type: "error"
            //     });
            // }
        });
}

function my_swal_2(title,text,notice,form_id){
    swal({
            title: title,
            text: text,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "Đồng ý!",
            cancelButtonText: "Hủy bỏ",
            closeOnConfirm: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal({
                    title: "Thông báo",
                    text: notice,
                    confirmButtonColor: "#66BB6A",
                    type: "success"
                }, function(){
                    $('#'+form_id).submit();
                }
                );
            }
        });
}

function delete_item(name){
    $('.'+name).on('click', function( event ) {
            swal({
            title: $(this).attr('sw_title'),
            text:  $(this).attr('sw_contnet'),
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "Đồng ý!",
            cancelButtonText: "Hủy bỏ",
            closeOnConfirm: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal({
                    title: "Thông báo",
                    text: event.target.attributes['sw_notice'].value,
                    confirmButtonColor: "#66BB6A",
                    type: "success"
                }, function(){
                    window.location.href=event.target.attributes['sw_url'].value;
                }
                );
            }
        }); 
    });
}
