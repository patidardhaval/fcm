<script type="text/javascript">
var myHeaders = new Headers();
myHeaders.append("Authorization", "key=AAAAWkB247s:APA91bG08itiQiWCQtLNd-kaYCq87GsnFBR_9N-evE17vcILwRAVd3_8TB5X9EIAXT5X32ILPfKqRZBjprOSBLOAs4UFczFDOdOfBSsfyAGwqZEH2aU6FhJj6fiIWlbcaGV9zqlJ40LQ");
myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify({"notification":{"title":"Portugal vs. Denmark","body":"hellooo","icon":"firebase-logo.png","click_action":"https://twillio-630dd.firebaseapp.com/"},"to":"fBh7bxb_ikI4Xge-DlgbnT:APA91bEV40FhHbx_mZIVOrkMYD-Mrj9Lt32CPpSvmQob6sT5QndrBwQ2Q5m5iK8wP6R4w5u_1zq1u9DBaX9-Bfqf1xF0lRPjnivz4eT_JxvHSjhA-nlSv_RIdxQOXDTg--HjQsAXmKHj"});

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("https://fcm.googleapis.com/fcm/send", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
  </script>