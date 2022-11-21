//ajax

console.log(APRO_OPT_SET);

const settings = document.querySelectorAll('#active input[type="radio"]');

for (let i = 0; i < settings.length; i++) {
    const element = settings[i];

    element.addEventListener('change', function () {
        // console.log('name: ' + this.name + ' value: ' + this.value);
        jQuery.ajax({
            url: APRO_OPT_SET.secure_url,
            type:'post',
            data: {
                action: 'asadpro_settings_action',
                verify: APRO_OPT_SET.verification,
                fields: {option:this.name, value:this.value},
            },
            success: function (msg) {
                if(msg.trim() == 'success')
                    console.log(msg);
                    Toastify({
                        text: "Setting Updated Successfully!",
                        duration: 3500,
                        // destination: "https://github.com/apvarun/toastify-js",
                        newWindow: false,
                        className: "info",
                        close: true,
                        gravity: "bottom", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                          background: "linear-gradient(to right, #04a464, #96c93d)",
                        },
                        offset: {
                            x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                            y: 50 // vertical axis - can be a number or a string indicating unity. eg: '2em'
                          },
                        // onClick: function(){} // Callback after click
                      }).showToast();
            },
            /***
            beforeSend:function(){
              
            },

            error: function(){
                alert('error');
            }
            **/
        });

    });
    // console.log("Log --> element", element);

    // console.log("Log --> element", element);

}

// console.log(settings);