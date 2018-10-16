firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        window.location = 'index';
        return false;

        var dialog = document.querySelector('#loginDialog');
        if (!dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        dialog.close();
    } else {
// No user is signed in.
//        $(".login-cover").show();
        $("#loginporgress").hide();
        $(".loginBtn").show();
        var dialog = document.querySelector('#loginDialog');
        if (!dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        dialog.showModal();
    }
});


