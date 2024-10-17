    $(document).ready(function() {
        $('#sendPushNotification').on('click', function() {
            Push.create("Quality Store", {
                body: "“Las tendencias desaparecen, el estilo es eterno”",
                icon: 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Portada%2Flogo.jpg?alt=media&token=bb8ae98f-05bc-4a73-8a2b-a0d4bc63c226',
                timeout: 40000,
                onClick: function() {
                    window.focus();
                    this.close();
                }
            });
        });
    });