      src = "https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD"
      data
      sdk
      integration
      source = "button-factory";

      function initPayPalButton() {
          paypal.Buttons({
              style: {
                  shape: 'pill',
                  color: 'gold',
                  layout: 'vertical',
                  label: 'buynow',

              },

              createOrder: function(data, actions) {
                  return actions.order.create({
                      purchase_units: [{
                          "description": "Detalle del producto",
                          "amount": {
                              "currency_code": "USD",
                              "value": 12
                          }
                      }]
                  });
              },

              onApprove: function(data, actions) {
                  return actions.order.capture().then(function(orderData) {

                      // Full available details
                      console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                      // Show a success message within this page, e.g.
                      const element = document.getElementById('paypal-button-container');
                      element.innerHTML = '';
                      element.innerHTML = '<h3>Quality-Store</h3>';

                      // Or go to another URL:  actions.redirect('thank_you.html');

                  });
              },

              onError: function(err) {
                  console.log(err);
              }
          }).render('#paypal-button-container');
      }
      initPayPalButton();