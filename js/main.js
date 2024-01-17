$(function() {
    $("#form-register").validate({
        rules: {
            password: {
                required: true,
            },
            confirm_password: {
                equalTo: "#password"
            }
        },
        messages: {
            username: {
                required: "Please provide an username"
            },
            email: {
                required: "Please provide an email"
            },
            contact_number: {
                required: "start by either looking for 6 or 7 or 8 or 9, and then followed by 9 digits"
            },
            people: {
                required: "Maximum 4 people only"
            },
            Packgage_type: {
                required: "Please provide a package"
            }
        }
    });
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        // enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate: '<div class="title">#title#</div>',
        labels: {
            previous: 'Back',
            next: '<i class="zmdi zmdi-arrow-right"></i>',
            finish: '<i class="zmdi zmdi-arrow-right"></i>',
            current: ''
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            var username = $('#username').val();
            var email = $('#email').val();
            var c_number = $('#contact_number').val();
            var people_val = $('#people').val();
            var package = $('#Packgage_type').val();

            var hotel = $('#hotel_type').val();
            var city = $('#city').val();
            var state = $('#state').val();
            var food = $('#food').val();
            var status = $('#status').val();
            var d_date = $('#d_date').val();
            var a_date = $('#a_date').val();

            $('#username-val').text(username);
            $('#email-val').text(email);
            $('#contact-val').text(c_number);
            $('#count-val').text(people_val);
            $('#package-val').text(package);

            $('#hotel-type-val').text(hotel);
            $('#city-val').text(city);
            $('#state-val').text(state);
            $('#food-val').text(food);
            $('#status-val').text(status);
            $('#d-date-val').text(d_date);
            $('#a-date-val').text(a_date);

            $("#form-register").validate().settings.ignore = ":disabled,:hidden";
            return $("#form-register").valid();
        }
    });
});