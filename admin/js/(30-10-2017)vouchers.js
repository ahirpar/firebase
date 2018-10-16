var database = firebase.database();
var Vouchers = firebase.database().ref('Vouchers');
//alert(data);
$(document).ready(function () {

    if (document.getElementById('rad1').checked == true)
    {
        document.getElementById('DiscountAmount').style.display = 'none';
    }

    $('#vouchers-form').validate({// initialize plugin

        ignore: [],
        rules: {
            Code: {
                required: true
            },
            DiscountPercentage: {
                required: {
                    depends: function () {
                        if ($("#rad1").is(":checked")) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            DiscountAmount: {
                required: {
                    depends: function () {
                        if ($("#rad2").is(":checked")) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            MaxUses: {
                required: true
            },
            intQty: {
                required: true
            },
            ValidFrom: {
                required: true
            },
            ValidTo: {
                required: true
            }
        },
        messages: {
            Code: {
                required: "Please enter voucher code."
            },
            DiscountPercentage: {
                required: "Please enter discount in percentage."
            },
            DiscountAmount: {
                required: "Please enter discount in amount."
            },
            MaxUses: {
                required: "Please enter maximum order of uses."
            },
            intQty: {
                required: "Please enter quantity."
            },
            ValidFrom: {
                required: "Please select valid from-date."
            },
            ValidTo: {
                required: "Please select valid to-date."
            }
        },
        errorPlacement: function (error, element) {
            if ($(element).attr('id') == 'ValidFrom')
            {
                error.insertAfter($(".ValidFrom"));
            } else if ($(element).attr('id') == 'ValidTo')
            {
                error.insertAfter($(".ValidTo"));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {

            var Code = document.getElementById("Code").value;
            var Type = document.getElementById("Type").value;
            var DiscountPercentage = document.getElementById("DiscountPercentage").value;
            var DiscountAmount = document.getElementById("DiscountAmount").value;
            if (Type == 'DA') {
                var dis = DiscountAmount;
                var Type = 'DA';
            } else {
                var dis = DiscountPercentage;
                var Type = 'DP';
            }
            var MaxUses = document.getElementById("MaxUses").value;
            var ValidFrom = $("input[name=ValidFrom]").val();
            var ValidTo = $("input[name=ValidTo]").val();
            if (Code != '' && MaxUses != '' && ValidFrom != '' && ValidTo != '') {
                var lastId = "";
                Vouchers.orderByChild("voucherId").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        lastId = childSnapshot.val().voucherId;
                    });
                });

//                alert(ValidFrom);
                if (lastId == '') {
                    lastId = 1;
                } else {
                    lastId = lastId + 1;
                }

                var id = lastId;

                Vouchers.push().set({
                    voucherId: id,
                    code: Code,
                    type: Type,
                    discount: dis,
                    maxUses: MaxUses,
                    validFrom: ValidFrom,
                    validTo: ValidTo,
                    uses: 0
                });
                document.getElementById("Code").value = "";
                document.getElementById("Type").value = "";
                document.getElementById("DiscountPercentage").value = "";
                document.getElementById("DiscountAmount").value = "";
                document.getElementById("ValidFrom").value = "";
                document.getElementById("ValidTo").value = "";
                document.getElementById("MaxUses").value = "";
            }
        }
    });
});



function isFutureDate(idate) {
    var today = new Date().getTime(),
            idate = idate.split("/");

    idate = new Date(idate[2], idate[1] - 1, idate[0]).getTime();
    return (today - idate) < 0 ? 'Active' : 'Complete';
}

function formatDate(date) {
    var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [day, month, year].join('/');
}

Vouchers.orderByChild("voucherId").on('value', function (snapshot) {
    var vouchersdata = "";
    $("#getcount").empty();
    $("#voucher-table").empty();
    var i = 0;
    snapshot.forEach(function (childSnapshot) {
        if (childSnapshot.val().type == 'DP') {
            var dis = childSnapshot.val().discount + "% off total order";
        } else {
            var dis = "$" + childSnapshot.val().discount + " off in total order";
        }

        var enddate = formatDate(childSnapshot.val().validTo);
        if (enddate == formatDate(new Date())) {
            var mydate = "Active";
        } else {
            var mydate = isFutureDate(enddate);
        }
        vouchersdata += '<tr>\n\
                                    <td>' + childSnapshot.val().code + '</td>\n\
                                    <td>' + dis + '</td>\n\
                                    <td class="number">' + childSnapshot.val().maxUses + ' order</td>\n\
                                    <td class="number">' + childSnapshot.val().uses + ' order</td>\n\
                                    <td class="text-center"> May 6,2016<br><span class="grayc"> 8:30</span></td>\n\
                                    <td>' + mydate + '</td>\n\
                                    <td><button class="btn btn-space btn-default" data-toggle="modal" onclick=\'viewVoucher("' + childSnapshot.val().voucherId + '","' + childSnapshot.key + '");\' data-target="#vouch">View</button></td>\n\
                                </tr>';
        i++;
    });
    $("#voucher-table").append(vouchersdata);
    $("#getcount").append("Showing 1 to 10 of " + i + " entries");
});


function viewVoucher(voucherId, keys) {

    $("#checkactive").empty();
    var Voucherdata = firebase.database().ref('Vouchers/' + keys + '/');
    Voucherdata.on('value', function (snapshot) {
        if (snapshot.val().type == 'DP') {
            var dis = snapshot.val().discount + "% off total order";
        } else {
            var dis = "$" + snapshot.val().discount + " off in total order";
        }

        var enddate = formatDate(snapshot.val().validTo);
        if (enddate == formatDate(new Date())) {
            var mydate = "Active";

        } else {
            var mydate = isFutureDate(enddate);
        }


        document.getElementById("editcode").value = snapshot.val().code;
        document.getElementById("editdiscount").value = dis;
        document.getElementById("editmaxUses").value = snapshot.val().maxUses;
        document.getElementById("edituses").value = snapshot.val().uses;
        if (mydate == 'Active') {
            $("#checkactive").append('<div class="form-group has-success" id="checkactive"><label class="col-md-3 control-label">Success</label><div class="col-md-8"><input readonly="readonly" id="editStatus" value="Active" class="form-control" type="text"></div></div>');
        } else {
            $("#checkactive").append('<div class="form-group has-error" id="checkactive"><label class="col-md-3 control-label">Complete</label><div class="col-md-8"><input readonly="readonly" id="editStatus" value="Complete" class="form-control" type="text"></div></div>');
        }

//        document.getElementById("editLastUsed").value = snapshot.val().LastUsed;
//        document.getElementById("editStatus").value = snapshot.val().Status;
        document.getElementById("eid").value = keys;
    });
}

function KeycheckOnlyNumeric(e)
{
    var _dom = 0;
    _dom = document.all ? 3 : (document.getElementById ? 1 : (document.layers ? 2 : 0));
    if (document.all)
        e = window.event;
    var ch = '';
    var KeyID = '';
    if (_dom == 2) {
        if (e.which > 0)
            ch = '(' + String.fromCharCode(e.which) + ')';
        KeyID = e.which;
    } else
    {
        if (_dom == 3) {
            KeyID = (window.event) ? event.keyCode : e.which;
        } else {
            if (e.charCode > 0)
                ch = '(' + String.fromCharCode(e.charCode) + ')';
            KeyID = e.charCode;
        }
    }
    if ((KeyID >= 97 && KeyID <= 122) || (KeyID >= 65 && KeyID <= 90) || (KeyID >= 33 && KeyID <= 39) || (KeyID == 42) || (KeyID >= 58 && KeyID <= 64) || (KeyID >= 91 && KeyID <= 96) || (KeyID >= 123 && KeyID <= 126))
    {
        return false;
    }
    return true;
}

function Show_Discount(sel)
{
//    alert(sel); return false;
    $("#dDiscount").empty();
    if (sel == 'DP')
    {

        $("#DiscountPercentage").show();
        $("#DiscountAmount").hide();
        document.getElementById('Type').value = "DP";
        $("#dDiscount").append("Discount Percentage (%)");
//        document.getElementById('dDiscount').value = "Discount Percentage";
    } else {
        $("#DiscountAmount").show();
        $("#DiscountPercentage").hide();
        document.getElementById('Type').value = "DA";
        $("#dDiscount").append("Discount Amount ($)");
//        document.getElementById('dDiscount').value = "Discount Amount";
    }

}

function deleteVouchers(key1) {
    var ref3 = firebase.database().ref('Vouchers');
    ref3.child(key1).remove();
}

$("#ValidFrom").datetimepicker({
//    minDate: 0,
    autoclose: true,
    startDate: '-0d',
    pickerPosition: "bottom-left",
    dateFormat: "Y-m-d",
    componentIcon: '.mdi.mdi-calendar',
    navIcons: {
        rightIcon: 'mdi mdi-chevron-right',
        leftIcon: 'mdi mdi-chevron-left'
    }
});
$("#ValidTo").datetimepicker({
    autoclose: true,
    startDate: '-0d',
    dateFormat: "Y-m-d",
    pickerPosition: "bottom-left",
    componentIcon: '.mdi.mdi-calendar',
    navIcons: {
        rightIcon: 'mdi mdi-chevron-right',
        leftIcon: 'mdi mdi-chevron-left'
    }
});
//$(function () {
//$('#ValidFrom').datetimepicker().on('dp.change', function (e) {
//    var incrementDay = moment(new Date(e.date));
//    incrementDay.add(1, 'days');
//    $(this).data('DateTimePicker').minDate(incrementDay);
//});
//$('#ValidTo').datetimepicker().on('dp.change', function (e) {
//    var decrementDay = moment(new Date(e.date));
//    decrementDay.subtract(1, 'days');
//    $(this).data('DateTimePicker').maxDate(decrementDay);
//});

//});


