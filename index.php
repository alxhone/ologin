<?php header( 'Location: /index.html' ) ;  ?>

<!DOCTYPE html>
<html>
<head>
<script src="https://global.oktacdn.com/okta-signin-widget/5.5.3/js/okta-sign-in.min.js" type="text/javascript"></script>
<link href="https://global.oktacdn.com/okta-signin-widget/5.5.3/css/okta-sign-in.min.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<div id="widget-container"></div>

<script>
  const signIn = new OktaSignIn({baseUrl: 'https://${yourOktaDomain}'});
  signIn.renderEl({
    el: '#widget-container'
  }, function success(res) {
    if (res.status === 'SUCCESS') {
      console.log('Do something with this sessionToken', res.session.token);
    } else {
    // The user can be in another authentication state that requires further action.
    // For more information about these states, see:
    //   https://github.com/okta/okta-signin-widget#rendereloptions-success-error
    }
  });
</script>

</body>

</html>
