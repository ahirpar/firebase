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

function deletes(id) {
    var deleteitem = "";
    deleteitem += '<div id="mod-warning1" role="dialog" class="modal fade">\n\
    <div class="modal-dialog modal-dialog2"  >\n\
        <div class="modal-content modal-content2 ">\n\
            <div class="modal-header">\n\
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>\n\
            </div>\n\
            <div class="modal-body">\n\
                <div class="text-center">\n\
                    <div class="text-warning"><span class="modal-main-icon mdi mdi-alert-triangle"></span></div>\n\
                    <h3>Warning!</h3>\n\
                    <p>This record will be deleted. <br>Press Proceed to confirm.</p>\n\
                    <div class="xs-mt-50">\n\
                        <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>\n\
                        <button type="button" data-dismiss="modal" onclick=\'return deleterecord("' + id + '")\' class="btn btn-space btn-warning">Proceed</button>\n\
                    </div>\n\
                </div>\n\
            </div>\n\
            <div class="modal-footer"></div>\n\
        </div>\n\
    </div>\n\
</div>';
    $("#deleteitems").append(deleteitem);
}
