firebase.auth().onAuthStateChanged(function (user) {
    $("#loginporgress").hide();
    if (user) {
// User is signed in.
        $(".login-cover").hide();

        var dialog = document.querySelector('#loginDialog');
        if (!dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        dialog.close();
    } else {
        window.location = 'login';
        return false;
// No user is signed in.
        $("#loginporgress").hide();
        $(".loginBtn").show();
        var dialog = document.querySelector('#loginDialog');
        if (!dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        dialog.showModal();
    }
});

$("#signOutBtn").click(
        function () {
//            alert("here");
            firebase.auth().signOut().then(function () {
                $("#loginEmail").val("");
                $("#loginPassword").val("");
                $("#loginBtn").show();
                window.location = 'login';
                return false;
            }, function (error) {
                alert(error.message);
                // An error happened.
            });
        });