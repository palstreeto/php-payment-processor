<html>
  <head>
  <title>Payment processor HTML form to the Payments API</title>
  <!--An HTML form illustrating the basics for integrating your website with www.paymentprocessor-script.com PayMents gateway--->
  </head>
  
  <h2>Sample form to test PayMents Integration</h2>
<form action="https://www.paymentprocessor-script.com/demos/downloads/Payments-New/api/webscr" method="POST">
<input name="itemName" required="" type="text" placeholder="Enter the Item to buy" /><br /> 
<input name="amt" readonly="readonly" type="text" value="40" /> <br />
<input name="businessEmail" type="hidden" value="support@paymentprocessor-script.com" /> 
<input name="currency" type="hidden" value="USD" /> 
<input name="cancel_url" type="hidden" value="https://www.paymentprocessor-script.com/demos/downloads/Payments-New/cancel_url.php" /> 
<input name="success_url" type="hidden" value="https://paymentprocessor-script.com/success" /> 
<input name="notify_url" type="hidden" value="https://paymentprocessor-script.com/notify" /> 
<input name="_xclick" type="submit" value="Buy now" /></form>

</html>
