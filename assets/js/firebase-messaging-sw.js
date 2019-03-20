importScripts('https://www.gstatic.com/firebasejs/5.8.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/5.8.1/firebase-messaging.js');

   var config = {
    apiKey: "AIzaSyAo8f0RLuFQUsbp78rAPE6UZCTljZD4OuU",
    authDomain: "anjac-alumni.firebaseapp.com",
    databaseURL: "https://anjac-alumni.firebaseio.com",
    projectId: "anjac-alumni",
    storageBucket: "anjac-alumni.appspot.com",
    messagingSenderId: "196434057640"
  };
  
if (!firebase.apps.length) {
   firebase.initializeApp(config);
}

const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  var notificationTitle = 'Background Message Title';
  var notificationOptions = {
    body: 'Background Message body.',
   
  };

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});