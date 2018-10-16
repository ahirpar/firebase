var database = firebase.database();
var ref = firebase.database().ref('Category');
var ref1 = firebase.database().ref('Extra');
var ref2 = firebase.database().ref('Ingredients');
var items = firebase.database().ref('items');
var itemsNew = firebase.database().ref('items');
var size = firebase.database().ref('Sizes');
var idata = [];
//..........Validations Start..........
$(document).ready(function () {
    $('#btn').on('click', function () {
        if ($("#add-item-form").valid()) {
            var catId = document.getElementById("addExtraId").value;
            var itemName = document.getElementById('itemName').value;
            var itemDesc = document.getElementById('itemDesc').value;
            var sizeCount = document.getElementById('file_hd').value;

            var defaultsizeList = document.getElementById('defaultsizeList').value;
            var isDiscountable = document.getElementById("isDiscountable").checked;
            if (isDiscountable == true) {
                isDiscountable = 1;
            } else {
                isDiscountable = 0;
            }
            var isAbbreviation = document.getElementById("isAbbreviation").checked;
            if (isAbbreviation == true) {
                isAbbreviation = 0;
            } else {
                isAbbreviation = 1;
            }
            var sizearray = {};
//            alert(catId+":"+itemName);
            var k = 0;
            if (catId != '' && itemName != '') {
                for (var i = 1; i <= sizeCount; i++) {
                    var ss = document.getElementById('size_' + i);
                    if (ss) {
                        var size = "";
                        var price = "";
                        var gluten_price = "";
                        var gluten_additional = "";
                        size = document.getElementById('size_' + i).value;
                        price = document.getElementById('price_' + i).value;
                        gluten_price = document.getElementById('gluten_price_' + i).value;
                        gluten_additional = document.getElementById("gluten_additional_" + i).checked;
                        if (gluten_additional == true) {
                            gluten_additional = 1;
                        } else {
                            gluten_additional = 0;
                        }
                        if (price != '') {
//                            alert(size);
                            sizearray[k] = {
                                additionalPrice: gluten_price,
                                name: size,
                                isAdditional: gluten_additional,
                                price: price
                            };
                        }
                        k++;
                    }
                }


//                return false;
                var eid = document.getElementById("eid").value;
                if (eid == '') {
                    var lastId = "";
                    var orderId = "";
                    items.orderByChild("itemId").limitToLast(1).on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            lastId = childSnapshot.val().itemId;
                        });
                    });
                    items.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            orderId = childSnapshot.val().order;
                        });
                    });
                    if (lastId == '') {
                        var lastId = 1;
                    } else {
                        var lastId = lastId + 1;
                    }

                    if (orderId == '') {
                        orderId = 1;
                    } else {
                        orderId = orderId + 1;
                    }

                    var itemId = lastId;
                    var order = orderId;
                    var ref12 = [];
                    firebase.database().ref('Extra').on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            var item = childSnapshot.val();
                            ref12.push(item);
                        });
                    });
                    var ref121 = [];
                    firebase.database().ref('Ingredients').on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            var item = childSnapshot.val();
                            ref121.push(item);
                        });
                    });
                    var date = new Date().toLocaleString("en-US", {
                        timeZone: "Australia/Melbourne"
                    });
                    items.push().set({
                        Extra: ref12,
                        Ingredients: ref121,
                        catId: catId,
                        itemId: itemId,
                        size: sizearray,
                        name: itemName,
                        description: itemDesc,
                        isDiscountable: isDiscountable,
                        isAbbreviation: isAbbreviation,
                        defaultSize: defaultsizeList,
                        order: orderId,
                        date: date
                    });
                    document.getElementById('fileupload').value = "";
                } else {
                    firebase.database().ref('items/' + eid + '/').update({
                        catId: catId,
                        size: sizearray,
                        name: itemName,
                        description: itemDesc,
                        isDiscountable: isDiscountable,
                        isAbbreviation: isAbbreviation,
                        defaultSize: defaultsizeList
                    });
                }




                $('#category').modal('hide');
                document.getElementById('catName').value = "";

                document.getElementById('itemName').value = "";
                document.getElementById('itemDesc').value = "";
                firebase.database().ref('Extra').remove();
                firebase.database().ref('Ingredients').remove();
                location.reload();
            } else {
                return false;
            }
        }
    });
    $('#add-item-form').validate({// initialize plugin

        ignore: [],
        rules: {
            itemName: {
                required: true
            },
            addExtraId: {
                required: true
            },
            itemDesc: {
                required: true
            }
        },
        messages: {
            itemName: {
                required: "Please enter item name."
            },
            addExtraId: {
                required: "<label style='color:red;margin-left:49%;'>Please select category.</label>"
            },
            itemDesc: {
                required: "Please enter item description."
            }
        },
//        highlight: function (input) {
//            $(input).addClass('error');
//        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        }
//        submitHandler: function (form) {
//            alert("hi"); return false;

//        }
    });
//        category-form Start.........
    $('#form-category').validate({// initialize plugin
// your rules & options,
        rules: {
            catName: {
                required: true
            }
        },
        messages: {
            catName: {
                required: "Please enter product category."
            }
        },
        errorPlacement: function (error, element)
        {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            var catName = document.getElementById('catName').value;
            if (catName != '') {
                var firebaseRef = firebase.database().ref('Category');
                var lastId = "";
                var orderId = "";
                firebaseRef.orderByChild("catId").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        lastId = childSnapshot.val().catId;
                    });
                });
                firebaseRef.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        orderId = childSnapshot.val().order;
                    });
                });
                if (lastId == '') {
                    var lastId = 1;
                } else {
                    var lastId = lastId + 1;
                }

                if (orderId == '') {
                    orderId = 1;
                } else {
                    orderId = orderId + 1;
                }



                var catId = lastId;
                var order = orderId;
                var date = new Date().toLocaleString("en-US", {timeZone: "Australia/Melbourne"});
                firebaseRef.push().set({
                    catId: catId,
                    catName: catName.trim(),
                    order: order,
                    date: date
                });
                $('#category').modal('hide');
                document.getElementById('catName').value = "";
            }
            return false; // blocks regular submit since you have ajax
        }
    });
//        Ingredients-form Start.........

    $('#ingredients-form').validate({// initialize plugin
// your rules & options,
        rules: {
            addIngredientsName: {
                required: true
            }
        },
        messages: {
            addIngredientsName: {
                required: "Please enter ingredient category name."
            }
        },
        errorPlacement: function (error, element)
        {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            var addIngredientsId = document.getElementsByName("addIngredientsId");
            var addIngredientsName = document.getElementById('addIngredientsName').value;
            if (addIngredientsName != '' && addIngredientsId != '') {

//        Ingredients Add Start
                var firebaseRef = firebase.database().ref('Ingredients');
                var lastId = "";
                var orderId = "";
                firebaseRef.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        lastId = childSnapshot.val().id;
                    });
                });
                firebaseRef.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        orderId = childSnapshot.val().order;
                    });
                });
                if (lastId == '') {
                    var lastId = 1;
                } else {
                    var lastId = lastId + 1;
                }

                if (orderId == '') {
                    orderId = 1;
                } else {
                    orderId = orderId + 1;
                }



                var id = lastId;
                var order = orderId;
                var eid = document.getElementById("eid").value;

                if (eid == '') {
                    firebaseRef.push().set({
                        id: id,
                        ingredientsName: addIngredientsName.trim(),
                        order: order,
                        isActive: 1
                    });
                } else {

                    var firebaseRefedit = firebase.database().ref('items/' + eid + '/Ingredients/');
                    var orderId = "";
                    var lastId = "";
                    var orderId1 = 0;
                    firebaseRefedit.orderByChild("id").on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            orderId1++;
                        });
                    });
                    firebaseRefedit.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            orderId = childSnapshot.val().order;
                        });
                    });

                    if (orderId == '') {
                        orderId = 1;
                    } else {
                        orderId = orderId + 1;
                    }
                    firebaseRefedit.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            lastId = childSnapshot.val().id;
                        });
                    });

                    if (lastId == '') {
                        lastId = 1;
                    } else {
                        lastId = lastId + 1;
                    }
                    var firebaseRefedit = firebase.database().ref('items/' + eid + '/Ingredients/' + orderId1 + '/');
                    firebaseRefedit.set({
                        id: lastId,
                        ingredientsName: addIngredientsName.trim(),
                        order: orderId,
                        isActive: 1
                    });
                }

                var firebaseRef1 = firebase.database().ref('Extra');
                var lastId = "";
                var orderId = "";
                firebaseRef1.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        lastId = childSnapshot.val().id;
                    });
                });
                firebaseRef1.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        orderId = childSnapshot.val().order;
                    });
                });
                if (lastId == '') {
                    var lastId = 1;
                } else {
                    var lastId = lastId + 1;
                }

                if (orderId == '') {
                    orderId = 1;
                } else {
                    orderId = orderId + 1;
                }



                var id = lastId;
                var order = orderId;
                var eid = document.getElementById("eid").value;

                if (eid == '') {
                    firebaseRef1.push().set({
                        id: id,
                        extraName: addIngredientsName,
                        order: order,
                        isActive: 1
                    });
                } else {

                    var firebaseRefedit = firebase.database().ref('items/' + eid + '/Extra/');
                    var orderId = "";
                    var lastId = "";
                    var orderId1 = 0;
                    firebaseRefedit.orderByChild("id").on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            orderId1++;
                        });
                    });

                    firebaseRefedit.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            orderId = childSnapshot.val().order;
                        });
                    });

                    if (orderId == '') {
                        orderId = 1;
                    } else {
                        orderId = orderId + 1;
                    }
                    firebaseRefedit.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
                        snapshot.forEach(function (childSnapshot) {
                            lastId = childSnapshot.val().id;
                        });
                    });

                    if (lastId == '') {
                        lastId = 1;
                    } else {
                        lastId = lastId + 1;
                    }
                    var firebaseRefedit = firebase.database().ref('items/' + eid + '/Extra/' + orderId1 + '/');
                    firebaseRefedit.set({
                        id: lastId,
                        extraName: addIngredientsName.trim(),
                        order: orderId,
                        isActive: 1
                    });
                }
                $('#addIngredients').modal('hide');
                document.getElementById('addIngredientsName').value = "";
                document.getElementById('AddIngredientsPrice').value = "";
                return false; // blocks regular submit since you have ajax
            }
        }
    });
//        Extra-form Start.........

    $('#extra-form').validate({// initialize plugin
// your rules & options,
        rules: {
            addExtraName: {
                required: true
            }
        },
        messages: {
            addExtraName: {
                required: "Please enter extra category name."
            }
        },
        errorPlacement: function (error, element)
        {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            var addExtraName = document.getElementById('addExtraName').value;
            if (addExtraName != '') {

                var firebaseRef = firebase.database().ref('Extra');
                var lastId = "";
                var orderId = "";
                firebaseRef.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        lastId = childSnapshot.val().id;
                    });
                });
                firebaseRef.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        orderId = childSnapshot.val().order;
                    });
                });
                if (lastId == '') {
                    var lastId = 1;
                } else {
                    var lastId = lastId + 1;
                }

                if (orderId == '') {
                    orderId = 1;
                } else {
                    orderId = orderId + 1;
                }



                var id = lastId;
                var order = orderId;
                var icounter = document.getElementById('extra_hd').value;
                var icounter1 = Number(icounter) + 1;
                document.getElementById('extra_hd').value = icounter1;
                firebaseRef.push().set({
                    id: id,
                    extraName: addExtraName,
                    order: order,
                    isActive: 1
                });
                var firebaseRef1 = firebase.database().ref('Ingredients');
                var lastId = "";
                var orderId = "";
                firebaseRef1.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        lastId = childSnapshot.val().id;
                    });
                });
                firebaseRef1.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        orderId = childSnapshot.val().order;
                    });
                });
                if (lastId == '') {
                    var lastId = 1;
                } else {
                    var lastId = lastId + 1;
                }

                if (orderId == '') {
                    orderId = 1;
                } else {
                    orderId = orderId + 1;
                }



                var id = lastId;
                var order = orderId;
                var icounter = document.getElementById('extra_hd').value;
                var icounter1 = Number(icounter) + 1;
                document.getElementById('extra_hd').value = icounter1;
                firebaseRef1.push().set({
                    id: id,
                    ingredientsName: addExtraName,
                    order: order,
                    isActive: 0
                });
                $('#addExtra').modal('hide');
                document.getElementById('addExtraName').value = "";
            } else {
                return false;
            }
        }
    });
//        Extra-form Start.........

    $('#size-form').validate({// initialize plugin
// your rules & options,
        rules: {
            addSizeName: {
                required: true
            }
        },
        messages: {
            addSizeName: {
                required: "Please enter size name."
            }
        },
        errorPlacement: function (error, element)
        {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            var sizeName = "";
            var size = "";
            sizeName = document.getElementById('addSizeName').value;
            if (sizeName != '') {
                size = firebase.database().ref('Sizes');
                var lastId = "";
                var orderId = "";
                size.orderByChild("sizeId").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        lastId = childSnapshot.val().sizeId;
                    });
                });
                size.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        orderId = childSnapshot.val().order;
                    });
                });
                if (lastId == '') {
                    var lastId = 1;
                } else {
                    var lastId = lastId + 1;
                }

                if (orderId == '') {
                    orderId = 1;
                } else {
                    orderId = orderId + 1;
                }



                var sizeId = lastId;
                var order = orderId;
                size.push().set({
                    sizeId: sizeId,
                    sizeName: sizeName.replace(" ", ""),
                    order: order
                });
                $('#addSizes').modal('hide');
                document.getElementById('addSizeName').value = "";
            } else {
                return false;
            }
        }
    });
//        Add Ingredients Form Start.........

    $('#addIngredients-form').validate({// initialize plugin
//         $('#myform').validate({
// your rules & options,
        rules: {
            AddIngredientsName: {
                required: true
            },
            drpdownIngredients: {
                required: true
            },
            AddIngredientsPrice: {
                required: true
            }
        },
        highlight: function (input) {
            $(input).addClass('error');
        },
        errorPlacement: function (error, element) {

        },
        submitHandler: function (form) {
            var IngredientArray = [];
            var AddIngredientsName = document.getElementById("AddIngredientsName").value;
            var AddIngredientsCatId = document.getElementById('drpdownIngredients').value;

            if (AddIngredientsCatId == '') {
                var AddIngredientsCatId = document.getElementById('editdrpdownIngredients').value;
            }
            var AddIngredientsPrice = document.getElementById('AddIngredientsPrice').value;
            if (AddIngredientsName != '' && AddIngredientsCatId != '' && AddIngredientsPrice != '') {


                var keys = document.getElementById("eid").value;
                if (keys == '') {
                    var firebaseRef = firebase.database().ref('Ingredients');
                    var a = parseInt(AddIngredientsCatId);
                    firebaseRef.orderByChild("id").equalTo(a).once('value', function (snapshot) {
                        snapshot.forEach(function (userSnapshot) {
                            var firebaseRef1 = firebase.database().ref('Ingredients/' + userSnapshot.key + '/ingredientsItem/');
                            firebaseRef1.push().set({
                                id: AddIngredientsCatId,
                                price: AddIngredientsPrice,
                                name: AddIngredientsName,
                                isActive: 1
                            });
                        });
                    });


                    //        Extra Code
                    var firebaseRefe = firebase.database().ref('Extra');
                    var aa = parseInt(AddIngredientsCatId);
                    firebaseRefe.orderByChild("id").equalTo(aa).once('value', function (snapshot) {
                        snapshot.forEach(function (userSnapshot) {

                            var firebaseRefe1 = firebase.database().ref('Extra/' + userSnapshot.key + '/extraItem/');
                            firebaseRefe1.push().set({
                                id: AddIngredientsCatId,
                                name: AddIngredientsName.trim(),
                                price: AddIngredientsPrice,
                                isActive: 1
                            });
                        });
                    });


                } else {

                    var a = parseInt(AddIngredientsCatId);
                    var firebaseRef = firebase.database().ref('items/' + keys + '/Ingredients/');
                    firebaseRef.orderByChild("id").equalTo(a).once('value', function (snapshot) {
                        snapshot.forEach(function (userSnapshot) {
                            var firebaseRef1 = firebase.database().ref('items/' + keys + '/Ingredients/' + userSnapshot.key + '/ingredientsItem/');
                            firebaseRef1.push().set({
                                id: AddIngredientsCatId,
                                price: AddIngredientsPrice,
                                name: AddIngredientsName,
                                isActive: 1
                            });
                        });
                    });


                    var b = parseInt(AddIngredientsCatId);
                    var firebaseRef = firebase.database().ref('items/' + keys + '/Extra/');
                    firebaseRef.orderByChild("id").equalTo(b).once('value', function (snapshot) {
                        snapshot.forEach(function (userSnapshot) {
                            var firebaseRef1 = firebase.database().ref('items/' + keys + '/Extra/' + userSnapshot.key + '/extraItem/');
                            firebaseRef1.push().set({
                                id: AddIngredientsCatId,
                                price: AddIngredientsPrice,
                                name: AddIngredientsName,
                                isActive: 1
                            });
                        });
                    });

                }

                document.getElementById('AddIngredientsName').value = "";
                document.getElementById('AddIngredientsPrice').value = "";
            } else {
                return false;
            }
        }
    });
//        Add Extra Form Start.........

    $('#addExtra-form').validate({// initialize plugin
// your rules & options,
        rules: {
            AddExtraName: {
                required: true
            },
            drpdownExtra: {
                required: true
            },
            AddExtraPrice: {
                required: true
            }
        },
        highlight: function (input) {
            $(input).addClass('error');
        },
        errorPlacement: function (error, element) {

        },
        submitHandler: function (form) {
            var AddExtraName = document.getElementById("AddExtraName").value;
            var AddExtraCatId = document.getElementById('drpdownExtra').value;

            if (AddExtraCatId == '') {
                var AddExtraCatId = document.getElementById('editdrpdownExtra').value;
            }

            var AddExtraPrice = document.getElementById('AddExtraPrice').value;
            if (AddExtraName != '' && AddExtraCatId != '' && AddExtraPrice != '') {


                var keys = document.getElementById("eid").value;
                if (keys == '') {
                    var firebaseRef = firebase.database().ref('Extra');
                    var a = parseInt(AddExtraCatId);
                    firebaseRef.orderByChild("id").equalTo(a).once('value', function (snapshot) {
                        snapshot.forEach(function (userSnapshot) {

                            var firebaseRef1 = firebase.database().ref('Extra/' + userSnapshot.key + '/extraItem/');
                            firebaseRef1.push().set({
                                id: AddExtraCatId,
                                name: AddExtraName,
                                price: AddExtraPrice,
                                isActive: 1
                            });
                        });
                    });


                    var firebaseRefe = firebase.database().ref('Ingredients');
                    var ae = parseInt(AddExtraCatId);
                    firebaseRefe.orderByChild("id").equalTo(ae).once('value', function (snapshot) {
                        snapshot.forEach(function (userSnapshot) {

                            var firebaseRefe1 = firebase.database().ref('Ingredients/' + userSnapshot.key + '/ingredientsItem/');
                            firebaseRefe1.push().set({
                                id: AddExtraCatId,
                                name: AddExtraName,
                                price: AddExtraPrice,
                                isActive: 0
                            });
                        });
                    });

                } else {
//ashish

                    var a = parseInt(AddExtraCatId);
                    var firebaseRef = firebase.database().ref('items/' + keys + '/Extra/');
                    firebaseRef.orderByChild("id").equalTo(a).once('value', function (snapshot) {
                        snapshot.forEach(function (userSnapshot) {
                            var firebaseRef1 = firebase.database().ref('items/' + keys + '/Extra/' + userSnapshot.key + '/extraItem/');
                            firebaseRef1.push().set({
                                id: AddExtraCatId,
                                price: AddExtraPrice,
                                name: AddExtraName,
                                isActive: 1
                            });
                        });
                    });

                    var b = parseInt(AddExtraCatId);
                    var firebaseRef = firebase.database().ref('items/' + keys + '/Ingredients/');
                    firebaseRef.orderByChild("id").equalTo(b).once('value', function (snapshot) {
                        snapshot.forEach(function (userSnapshot) {
                            var firebaseRef1 = firebase.database().ref('items/' + keys + '/Ingredients/' + userSnapshot.key + '/ingredientsItem/');
                            firebaseRef1.push().set({
                                id: AddExtraCatId,
                                price: AddExtraPrice,
                                name: AddExtraName,
                                isActive: 0
                            });
                        });
                    });

                }

//        Ingredents Code


// return false;
                document.getElementById('AddExtraName').value = "";
                document.getElementById('AddExtraPrice').value = "";
            } else {
                return false;
            }
        }
    });
    //        Add Item.........
//});

});
//..........Validations End.............
function deletecategory1(key1, id) {
    var aa = String(id);
    var itemsa = firebase.database().ref('items');
    itemsa.orderByChild("catId").equalTo(aa).on('value', function (data) {
        data.forEach(function (childSnapshot) {
            var keyy = childSnapshot.key;
//            alert(keyy);
            itemsa.child(keyy).remove();
        });
    });
    var ref3 = firebase.database().ref('Category');
    ref3.child(key1).remove();
//    $("#catee" + id).fadeOut("slow", function () {
//    });
}
function deletecategory(key1, id) {
//    alert(key1 + ":" + id);
//    return false;
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
                        <button type="button" data-dismiss="modal" onclick=\'return deletecategory1("' + key1 + '","' + id + '")\' class="btn btn-space btn-warning">Proceed</button>\n\
                    </div>\n\
                </div>\n\
            </div>\n\
            <div class="modal-footer"></div>\n\
        </div>\n\
    </div>\n\
</div>';
    $("#deleteitems").append(deleteitem);
}


//$("#categoryList li").each(function(i) {
//    $(this).delay(100 * i).fadeIn(500);
//});
ref.orderByChild("order").on('value', function (snapshot) {
    var categoryesitems = "";
    $("#menucategoryList").empty();
    snapshot.forEach(function (childSnapshot) {
        $(".subitemlist" + childSnapshot.val().catId).empty();
        categoryesitems += '<div class="col-md-12 p0" id="catee' + childSnapshot.val().catId + '"> \n\
                    <div class="panel panel-default">\n\
                    <div class="panel-heading panel-heading-divider ptitle pb0">\n\
                    ' + childSnapshot.val().catName + '\n\
                    <button class="btn btn-space btn-default fright" data-target="#mod-warning1" data-toggle="modal" onclick=\'return deletecategory("' + childSnapshot.key + '","' + childSnapshot.val().catId + '")\' >Delete Category</button>\n\
                    <button type="button" onclick="return getselectcate(' + childSnapshot.val().catId + ')"  class="btn btn-space btn-default fright" data-toggle="modal" data-target="#md-custom">Add Item</button> \n\
                    </div>\n\
                    <p class="divider1"></p>\n\
                    <div class="panel-body"><ul id="thumbails" class="list-unstyled subitemlist' + childSnapshot.val().catId + '">';
        categoryesitems += '</ul></div>\n\
                    </div>\n\
                </div>';
//        $(this).delay(500).fadeIn(500);
    });
    $("#menucategoryList").append(categoryesitems);
});
ref.orderByChild("order").on('value', function (snapshot) {
    var categoryesitems1 = "";
    var storage = firebase.storage();
    snapshot.forEach(function (childSnapshot) {
        if (childSnapshot.val().catId != '') {
            var aa = String(childSnapshot.val().catId);
            $(".subitemlist" + childSnapshot.val().catId).empty();
            items.orderByChild("catId").equalTo(aa).on('value', function (data) {
                if (data.numChildren() > 0) {
                    $(".subitemlist" + aa).empty();
                    data.forEach(function (childSnapshot) {
                        if (childSnapshot.val().name != '') {

                            var pathReference = storage.ref('images/items/item' + childSnapshot.val().itemId + '.jpg');
                            pathReference.getDownloadURL().then(function (url) {
                                var img = document.getElementById('myimg' + childSnapshot.val().itemId);
                                img.src = url;
                            }).catch(function (error) {
                                // Handle any errors
                            });
                            $(".subitemlist" + aa).append('<div class="thumbnail col-md-4 col-sm-6 col-xs-12">\n\
                                        <img style="width:202px;height:150px;" id="myimg' + childSnapshot.val().itemId + '" title="' + childSnapshot.val().name + '" alt="' + childSnapshot.val().name + '">\n\
                                        <div class="caption text-center titleicon">\n\
                                            <h3 class="boxtitle11">' + childSnapshot.val().name + '</h3>\n\
                                            <p>\n\
                                                <button type="button" class="btn btn-default viewbtnb" data-toggle="modal" data-target="#md-custom" onclick=\'return editItem("' + childSnapshot.val().itemId + '","' + childSnapshot.key + '")\' >\n\
                                                    <span>View</span>\n\
                                                </button>\n\
                                                <button type="button" class="btn btn-default trash"  data-target="#mod-warning1" data-toggle="modal" onclick=\'return deletes("' + childSnapshot.key + '")\'>\n\
                                                    <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true" ></span>\n\
                                                </button>\n\
                                            </p>\n\
                                        </div>\n\
                                    </div>');
                        }
                    });
                }
            });
        }
    });
});


function getImgSize(imgSrc)
{
    var newImg = new Image();
    newImg.src = imgSrc;
    var height = newImg.height;
    var width = newImg.width;
    return width * height;
}


function editItem(itemId, keys) {
    $(".editsizes").empty();
    document.getElementById("btn").value = "Edit Item";
    document.getElementById('IngredientsList').style.display = 'none';
    document.getElementById('ExtraList').style.display = 'none';
    document.getElementById('inttab').style.display = 'none';
    document.getElementById('extraTab').style.display = 'none';
    document.getElementById('IngredientsList1').style.display = '';
    document.getElementById('inttab1').style.display = '';
    document.getElementById('ExtraList1').style.display = '';
    document.getElementById('extraTab1').style.display = '';
    document.getElementById('editdrpdownIngredients').style.display = '';
    document.getElementById('drpdownIngredients').style.display = 'none';
    document.getElementById('editdrpdownExtra').style.display = '';
    document.getElementById('drpdownExtra').style.display = 'none';
    document.getElementById("eid").value = keys;
    document.getElementById("itemId").value = itemId;

    var storage = firebase.storage();
    var pathReference = storage.ref('images/items/item' + itemId + '.jpg');
    var url = "";
    pathReference.getDownloadURL().then(function (url) {
        var mockFile = "";
        mockFile = {name: "Filename", size: getImgSize(url)};
        var myDropzone = new Dropzone("#my-awesome-dropzone");
        myDropzone.emit("addedfile", mockFile);
        myDropzone.emit("thumbnail", mockFile, url);

    }).catch(function (error) {
        // Handle any errors
    });
    var Itemdata = firebase.database().ref('items/' + keys + '/');
    Itemdata.on('value', function (snapshot1) {
        var radiobtn = document.getElementById("rad" + snapshot1.val().catId);
        document.getElementById('addExtraId').value = snapshot1.val().catId;
        radiobtn.checked = true;
        document.getElementById("defaultsizeList").value = snapshot1.val().defaultSize;
        document.getElementById("itemDesc").value = snapshot1.val().description;
        document.getElementById("isAbbreviation").value = snapshot1.val().isAbbreviation;
        document.getElementById("isDiscountable").value = snapshot1.val().isDiscountable;
        document.getElementById("itemName").value = snapshot1.val().name;
    });
    var ItemSizedata = firebase.database().ref('items/' + keys + '/size/');
    var i = 0;
    ItemSizedata.on('value', function (snapshots) {
        snapshots.forEach(function (childSnapshot) {
            i++;
        });
    });
    document.getElementById("file_hd").value = i;
//    var counter1 = i;
    var counter1 = 1;
    var editsizes = "";
    ItemSizedata.on('value', function (snapshots) {
        snapshots.forEach(function (childSnapshot) {
            if (childSnapshot.val().isAdditional == 1) {
                var check = "checked";
            } else {
                var check = "";
            }
            editsizes += '<div class="mt3 row">\n\
                        <div class="col-md-3">\n\
                            <div class="circle-badge" style="background:#1ACAC0"><strong>' + childSnapshot.val().name + '</strong></div> \n\
                           <center> <button class="remove btn btn-space btn-primary hover">Remove</button> </center> \n\
                        </div>\n\
                                <div class="col-md-9 pp0">\n\
                                    <div class="form-group"> \n\
                                        <label class="col-sm-3 control-label pp0 poti">Price</label>\n\
                                        <div class="col-sm-9 pp0">\n\
                                            <div class="input-group">\n\
                                                <span class="input-group-addon">$</span>\n\
                                                    <input type="hidden" id="size_' + counter1 + '" value="' + childSnapshot.val().name + '">\n\
                                                    <input id="price_' + counter1 + '" placeholder="14.20"  value="' + childSnapshot.val().price + '" onkeypress="return KeycheckOnlyNumeric(event)" class="form-control" type="text" >\n\
                                            </div>\n\
                                        </div>\n\
                                    </div>\n\
                                    <div class="form-group mt6 xs-mt-10">\n\
                                        <label class="col-md-3 control-label pp0">Gluten Free</label>\n\
                                        <div class="col-md-9 pp0">\n\
                                            <div class="input-group">\n\
                                                <div class="input-group-addon">\n\
                                                    <div class="be-checkbox">\n\
                                                        <input id="gluten_additional_' + counter1 + '" type="checkbox" ' + check + '>\n\
                                                        <label for="gluten_additional_' + counter1 + '"></label>\n\
                                                    </div>\n\
                                                </div>\n\
                                                <input class="form-control" id="gluten_price_' + counter1 + '" value="' + childSnapshot.val().additionalPrice + '"  type="text" onkeypress="return KeycheckOnlyNumeric(event)" placeholder="Additional ($)">\n\
                                            </div>\n\
                                        </div>\n\
                                    </div>\n\
                                </div>\n\
                        </div>';
            counter1++;
        });
    });
    $(".editsizes").append(editsizes);


    //    Ingredients Edit data Start....

    var Ingredientsdata = firebase.database().ref('items/' + keys + '/Ingredients/');
    $("#editdrpdownIngredients").empty();
    Ingredientsdata.on('value', function (snapshot) {
        $("#editdrpdownIngredients").empty();
        var i = 1;
        snapshot.forEach(function (childSnapshot) {

            var drpdownIngredients = document.getElementById('editdrpdownIngredients').value;
            if (i == drpdownIngredients) {
                var sel = "selected";
            } else {
                var sel = "";
            }

            $("#editdrpdownIngredients").append('<option ' + sel + ' value="' + childSnapshot.val().id + '">' + childSnapshot.val().ingredientsName + '</option>');
            i++;
        });
    });
    $("#IngredientsList1").empty();
//    $("#inttab1").empty();
//    $("#IngredientsList1").empty()
    var catstr1 = "";
    var i = 1;
    Ingredientsdata.on('value', function (snapshots) {
        var catstr1 = "";
        $("#IngredientsList1").empty();
        $("#inttab1").empty();
        snapshots.forEach(function (childSnapshot) {
            var editdrpdownIngredients = document.getElementById('editdrpdownIngredients').value;
            if (editdrpdownIngredients == '') {
                editdrpdownIngredients = '1';
            }
            if (i == editdrpdownIngredients) {
                var ac_class = 'active';
                var cac_class = 'active';
            } else {
                var ac_class = '';
                var cac_class = '';
            }

            if (childSnapshot.val().isActive == '1') {
                var che = "checked";
            } else {
                var che = "";
            }
//Editt...
            $("#IngredientsList1").append('<li class="' + ac_class + ' alightop">\n\
<p class="fleft be-checkbox p0"><input id="checkk' + childSnapshot.val().id + '" type="checkbox" ' + che + ' onclick=\'return editupdateParentIngredients("' + keys + '","' + childSnapshot.val().isActive + '","' + childSnapshot.key + '")\'><label for="checkk' + childSnapshot.val().id + '"> </label></p>\n\
<p  class="fright"><a name="tabs" onclick="return editintselbox(' + i + ')" href="#editIngredients' + childSnapshot.val().id + '" data-toggle="tab" class="cli"><span>' + childSnapshot.val().ingredientsName + '</span> </a></p>\n\
            </li>');
            var firebaseRef21 = firebase.database().ref('items/' + keys + '/Ingredients/' + childSnapshot.key + '/ingredientsItem');
            firebaseRef21.orderByChild('Ingredients/' + childSnapshot.key + '/ingredientsItem').on('value', function (snapshot1) {
                //   alert("yes");
                catstr1 += '<div id="editIngredients' + childSnapshot.val().id + '" class="tab-pane ' + cac_class + ' cont">\n\
                <div class=" ">';
                snapshot1.forEach(function (childSnapshott) {
                    if (childSnapshott.val().isActive == '1') {
                        var che1 = "checked";
                    } else {
                        var che1 = "";
                    }

                    catstr1 += '<div class="be-checkbox">\n\
                    <input id="checkss' + childSnapshott.val().name + childSnapshot.val().id + '" ' + che1 + ' type="checkbox" onclick=\'return editupdateIngredients("' + keys + '","' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'>\n\
                    <label for="checkss' + childSnapshott.val().name + childSnapshot.val().id + '" onclick=\'return editupdateIngredients("' + keys + '","' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'><span class="tebcheck" >' + childSnapshott.val().name + '</span> </label>\n\
                    <span class="tebdo" > $' + childSnapshott.val().price + '</span>\n\
                    <span><button type="button" class="btn teb-btn-space11 btn-default " onclick=\'return editdelIngredients("' + keys + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'>Delete</button></span>\n\
                    </div>';
                });
                catstr1 += '</div></div>';
            });
            i++;
        });
        $("#inttab1").append(catstr1);
        $("#IngredientsList1").append('<a href="#" data-toggle="modal" data-target="#addIngredients"><p  class="tebaddcat"><span class="icon"><span class="mdi mdi-plus-circle-o f22 vsub mr5"></span></span>Add category</p></a>');
    });

    //    Ingredients Edit data End....

    //    Extra Edit data Start....

    var Extradata = firebase.database().ref('items/' + keys + '/Extra/');
    $("#editdrpdownExtra").empty();
    Extradata.on('value', function (snapshot) {
        $("#editdrpdownExtra").empty();
        var i = 1;
        snapshot.forEach(function (childSnapshot) {

            var drpdownExtra = document.getElementById('editdrpdownExtra').value;
            if (i == drpdownExtra) {
                var sel = "selected";
            } else {
                var sel = "";
            }

            $("#editdrpdownExtra").append('<option ' + sel + ' value="' + childSnapshot.val().id + '">' + childSnapshot.val().extraName + '</option>');
            i++;
        });
    });
    $("#ExtraList1").empty();
//    $("#inttab1").empty();
//    $("#ExtraList1").empty()
    var catstr1 = "";
    var i = 1;
    Extradata.on('value', function (snapshots) {
        var catstr1 = "";
        $("#ExtraList1").empty();
        $("#extraTab1").empty();
        snapshots.forEach(function (childSnapshot) {
            var editdrpdownExtra = document.getElementById('editdrpdownExtra').value;
            if (editdrpdownExtra == '') {
                editdrpdownExtra = '1';
            }
            if (i == editdrpdownExtra) {
                var ac_class = 'active';
                var cac_class = 'active';
            } else {
                var ac_class = '';
                var cac_class = '';
            }

            if (childSnapshot.val().isActive == '1') {
                var che = "checked";
            } else {
                var che = "";
            }
//Editt...
            $("#ExtraList1").append('<li class="' + ac_class + ' alightop">\n\
<p class="fleft be-checkbox p0"><input id="checkks' + childSnapshot.val().id + '" type="checkbox" ' + che + ' onclick=\'return editupdateParentExtra("' + keys + '","' + childSnapshot.val().isActive + '","' + childSnapshot.key + '")\'><label for="checkks' + childSnapshot.val().id + '"> </label></p>\n\
<p  class="fright"><a name="tabs" onclick="return editextraselbox(' + i + ')" href="#editExtra' + childSnapshot.val().id + '" data-toggle="tab" class="cli"><span>' + childSnapshot.val().extraName + '</span> </a></p>\n\
            </li>');
            var firebaseRef21 = firebase.database().ref('items/' + keys + '/Extra/' + childSnapshot.key + '/extraItem');
            firebaseRef21.orderByChild('Extra/' + childSnapshot.key + '/extraItem').on('value', function (snapshot1) {
                //   alert("yes");
                catstr1 += '<div id="editExtra' + childSnapshot.val().id + '" class="tab-pane ' + cac_class + ' cont">\n\
                <div class=" ">';
                snapshot1.forEach(function (childSnapshott) {
                    if (childSnapshott.val().isActive == '1') {
                        var che1 = "checked";
                    } else {
                        var che1 = "";
                    }

                    catstr1 += '<div class="be-checkbox">\n\
                    <input id="checkssa' + childSnapshott.val().name + childSnapshot.val().id + '" ' + che1 + ' type="checkbox" onclick=\'return editupdateExtra("' + keys + '","' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'>\n\
                    <label for="checkssa' + childSnapshott.val().name + childSnapshot.val().id + '" onclick=\'return editupdateExtra("' + keys + '","' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'><span class="tebcheck" >' + childSnapshott.val().name + '</span> </label>\n\
                    <span class="tebdo" > $' + childSnapshott.val().price + '</span>\n\
                    <span><button type="button" class="btn teb-btn-space11 btn-default " onclick=\'return editdelExtra("' + keys + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'>Delete</button></span>\n\
                    </div>';
                });
                catstr1 += '</div></div>';
            });
            i++;
        });
        $("#extraTab1").append(catstr1);
        $("#ExtraList1").append('<a href="#" data-toggle="modal" data-target="#addExtra"><p  class="tebaddcat"><span class="icon"><span class="mdi mdi-plus-circle-o f22 vsub mr5"></span></span>Add category</p></a>');
    });

    //    Extra Edit data End....


}

ref.orderByChild("order").on('value', function (snapshot) {
    $("#categoryList").empty();
    snapshot.forEach(function (childSnapshot) {
        $("#categoryList").append('<li data-value="' + childSnapshot.val().catId + '" data-id="' + childSnapshot.val().order + '" class="dd-item"><div class="dd-handle">' + childSnapshot.val().catName + '</div></li>');
    });
});

size.orderByChild("order").on('value', function (snapshot) {
    $("#sizeList").empty();
    snapshot.forEach(function (childSnapshot) {
        $("#sizeList").append('<li><a href="javascript:;" class="' + childSnapshot.val().sizeName + '" >' + childSnapshot.val().sizeName + '</a></li>');
    });
});

size.orderByChild("order").on('value', function (snapshot) {
    $("#defaultsizeList").empty();
    $("#defaultsizeList").append('<option selected="selected">Default Size</option>');
    snapshot.forEach(function (childSnapshot) {
        $("#defaultsizeList").append('<option value="' + childSnapshot.val().sizeName + '">' + childSnapshot.val().sizeName + '</option>');
    });
});
function selbox(id) {
    document.getElementById('drpdownExtra').value = id;
}

function getselectcate(id) {
    var radiobtn = document.getElementById("rad" + id);
    document.getElementById('addExtraId').value = id;
    radiobtn.checked = true;

    document.getElementById('file_hd').value = "0";
    document.getElementById('eid').value = "";
    document.getElementById("itemId").value = "";
    document.getElementById("btn").value = "Add Item";
    document.getElementById('itemName').value = "";
    document.getElementById('itemDesc').value = "";
    document.getElementById('IngredientsList').style.display = '';
    document.getElementById('inttab').style.display = '';
    document.getElementById('IngredientsList1').style.display = 'none';
    document.getElementById('inttab1').style.display = 'none';
    document.getElementById('drpdownIngredients').style.display = '';

    document.getElementById('editdrpdownIngredients').style.display = 'none';
    document.getElementById('ExtraList').style.display = '';
    document.getElementById('extraTab').style.display = '';
    document.getElementById('ExtraList1').style.display = 'none';
    document.getElementById('extraTab1').style.display = 'none';
    document.getElementById('drpdownExtra').style.display = '';
    document.getElementById('editdrpdownExtra').style.display = 'none';
    $(".editsizes").empty();
}


function intselbox(id) {
    document.getElementById('drpdownIngredients').value = id;
}
function editintselbox(id) {
    document.getElementById('editdrpdownIngredients').value = id;
}
function editextraselbox(id) {
    document.getElementById('editdrpdownExtra').value = id;
}

function delExtra(key1, key2) {
    var ref2 = firebase.database().ref('Extra/' + key1 + '/extraItem/');
    ref2.child(key2).remove();
}
function delIngredients(key1, key2) {
//    alert(key1 + ":" + key2);
    var ref3 = firebase.database().ref('Ingredients/' + key1 + '/ingredientsItem/');
    ref3.child(key2).remove();
}
function editdelIngredients(keys, key1, key2) {
    var ref3 = firebase.database().ref('items/' + keys + '/Ingredients/' + key1 + '/ingredientsItem/');
    ref3.child(key2).remove();
}
function editdelExtra(keys, key1, key2) {
    var ref3 = firebase.database().ref('items/' + keys + '/Extra/' + key1 + '/extraItem/');
    ref3.child(key2).remove();
}

function updateIngredients(active, key1, key2) {
    if (active == '1') {
        active = 0;
    } else {
        active = 1;
    }
    firebase.database().ref('Ingredients/' + key1 + '/ingredientsItem/' + key2 + '/').update({
        isActive: active
    });
}

function editupdateIngredients(keys, active, key1, key2) {
//    alert(keys + "::" + active + "::" + key1 + "::" + key2);
    if (active == '1') {
        active = 0;
    } else {
        active = 1;
    }
    firebase.database().ref('items/' + keys + '/Ingredients/' + key1 + '/ingredientsItem/' + key2 + '/').update({
        isActive: active
    });
}
function editupdateExtra(keys, active, key1, key2) {
//    alert(keys + "::" + active + "::" + key1 + "::" + key2);
    if (active == '1') {
        active = 0;
    } else {
        active = 1;
    }
    firebase.database().ref('items/' + keys + '/Extra/' + key1 + '/extraItem/' + key2 + '/').update({
        isActive: active
    });
}

function updateParentIngredients(active, key1) {
    if (active == '1') {
        active = 0;
    } else {
        active = 1;
    }
    firebase.database().ref('Ingredients/' + key1).update({
        isActive: active
    });
}
function editupdateParentIngredients(keys, active, key1) {
//    alert(keys + "::" + active + "::" + key1);
//    return false;
    if (active == '1') {
        active = 0;
    } else {
        active = 1;
    }
    firebase.database().ref('items/' + keys + '/Ingredients/' + key1).update({
        isActive: active
    });
}
function editupdateParentExtra(keys, active, key1) {
//    alert(keys + "::" + active + "::" + key1);
//    return false;
    if (active == '1') {
        active = 0;
    } else {
        active = 1;
    }
    firebase.database().ref('items/' + keys + '/Extra/' + key1).update({
        isActive: active
    });
}
function updateExtra(active, key1, key2) {
//    alert(active + ":" + key1 + ":" + key2);
    if (active == '1') {
        active = 0;
    } else {
        active = 1;
    }
    firebase.database().ref('Extra/' + key1 + '/extraItem/' + key2 + '/').update({
        isActive: active
    });
}
function updateParentExtra(active, key1) {
    if (active == '1') {
        active = 0;
    } else {
        active = 1;
    }
    firebase.database().ref('Extra/' + key1).update({
        isActive: active
    });
}

ref.orderByChild("order").on('value', function (snapshot) {
    $("#popupcategoryList").empty();
    snapshot.forEach(function (childSnapshot) {
        $("#popupcategoryList").append('<div class="be-radio inline ml0">\n\
        <input onclick="return setvaluegri(this.value)" type="radio" value="' + childSnapshot.val().catId + '" name="catsel" id="rad' + childSnapshot.val().catId + '">\n\
        <label for="rad' + childSnapshot.val().catId + '">' + childSnapshot.val().catName + '</label>\n\
        </div>');
    });
});
ref1.orderByChild("Extra").on('value', function (snapshot) {
    $("#ExtraList").empty();
    $("#extraTab").empty();
    var catstr = "";
    var i = 1;
    snapshot.forEach(function (childSnapshot) {
        var drpdownExtra = document.getElementById('drpdownExtra').value;
        if (drpdownExtra == '') {
            drpdownExtra = '1';
        }
        if (i == drpdownExtra) {
            var ac_class = 'active';
            var cac_class = 'active';
        } else {
            var ac_class = '';
            var cac_class = '';
        }

        if (childSnapshot.val().isActive == '1') {
            var che = "checked";
        } else {
            var che = "";
        }


        $("#ExtraList").append('<li class="' + ac_class + ' alightop">\n\
<p class="fleft be-checkbox p0"><input onclick=\'return updateParentExtra("' + childSnapshot.val().isActive + '","' + childSnapshot.key + '")\' id="checkk' + childSnapshot.val().id + '" type="checkbox" ' + che + ' ><label for="checkk' + childSnapshot.val().id + '"> </label></p>\n\
<p  class="fright"><a name="tabs" onclick="return selbox(' + i + ')" href="#Extra' + childSnapshot.val().id + '" data-toggle="tab" class="cli"><span>' + childSnapshot.val().extraName + '</span> </a></p>\n\
            </li>');
        var firebaseRef1 = firebase.database().ref('Extra/' + childSnapshot.key + '/extraItem');
        firebaseRef1.orderByChild('Extra/' + childSnapshot.key + '/extraItem').on('value', function (snapshot1) {
            catstr += '<div id="Extra' + childSnapshot.val().id + '" class="tab-pane ' + cac_class + ' cont">\n\
                <div class=" ">';
            snapshot1.forEach(function (childSnapshott) {
                if (childSnapshott.val().isActive == '1') {
                    var che1 = "checked";
                } else {
                    var che1 = "";
                }

                catstr += '<div class="be-checkbox">\n\
                    <input id="checka' + childSnapshott.val().name + childSnapshot.val().id + '" ' + che1 + ' type="checkbox" onclick=\'return updateExtra("' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'>\n\
                    <label for="checka' + childSnapshott.val().name + childSnapshot.val().id + '"><span class="tebcheck" onclick=\'return updateExtra("' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'>' + childSnapshott.val().name + '</span>\n\
                    <label><span class="tebdo"  onclick=\'return updateExtra("' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'> $' + childSnapshott.val().price + '</span></label>\n\
                    <span><button type="button" class="btn teb-btn-space11 btn-default " onclick=\'return delExtra("' + childSnapshot.key + '","' + childSnapshott.key + '")\'>Delete</button></span>\n\
                    </label>\n\
                    </div>';
            });
            catstr += '</div></div>';
        });
        i++;
    });
    $("#extraTab").append(catstr);
    $("#ExtraList").append('<a href="#" data-toggle="modal" data-target="#addExtra"><p  class="tebaddcat"><span class="icon"><span class="mdi mdi-plus-circle-o f22 vsub mr5"></span></span>Add category</p></a>');
});
ref2.orderByChild("Ingredients").on('value', function (snapshot) {
//    $("#IngredientsList1").empty();
    $("#IngredientsList").empty();
    $("#inttab").empty();
//    $("#inttab1").empty();
    var catstr1 = "";
    var i = 1;
    snapshot.forEach(function (childSnapshot) {
        if (childSnapshot.key != 0) {
            var drpdownIngredients = document.getElementById('drpdownIngredients').value;
            if (drpdownIngredients == '') {
                drpdownIngredients = '1';
            }
            if (i == drpdownIngredients) {
                var ac_class = 'active';
                var cac_class = 'active';
            } else {
                var ac_class = '';
                var cac_class = '';
            }

            if (childSnapshot.val().isActive == '1') {
                var che = "checked";
            } else {
                var che = "";
            }

            $("#IngredientsList").append('<li class="' + ac_class + ' alightop">\n\
<p class="fleft be-checkbox p0"><input id="check' + childSnapshot.val().id + '" type="checkbox" ' + che + ' onclick=\'return updateParentIngredients("' + childSnapshot.val().isActive + '","' + childSnapshot.key + '")\'><label for="check' + childSnapshot.val().id + '"> </label></p>\n\
<p  class="fright"><a name="tabs" onclick="return intselbox(' + i + ')" href="#Ingredients' + childSnapshot.val().id + '" data-toggle="tab" class="cli"><span>' + childSnapshot.val().ingredientsName + '</span> </a></p>\n\
            </li>');
            var firebaseRef2 = firebase.database().ref('Ingredients/' + childSnapshot.key + '/ingredientsItem');
            firebaseRef2.orderByChild('Ingredients/' + childSnapshot.key + '/ingredientsItem').on('value', function (snapshot1) {
                catstr1 += '<div id="Ingredients' + childSnapshot.val().id + '" class="tab-pane ' + cac_class + ' cont">\n\
                <div class=" ">';
                snapshot1.forEach(function (childSnapshott) {
                    if (childSnapshott.val().isActive == '1') {
                        var che1 = "checked";
                    } else {
                        var che1 = "";
                    }

                    catstr1 += '<div class="be-checkbox">\n\
                    <input id="checks' + childSnapshott.val().name + childSnapshot.val().id + '" ' + che1 + ' type="checkbox" onclick=\'return updateIngredients("' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'>\n\
                    <label for="checks' + childSnapshott.val().name + childSnapshot.val().id + '" onclick=\'return updateIngredients("' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'><span class="tebcheck"  onclick=\'return updateIngredients("' + childSnapshott.val().isActive + '","' + childSnapshot.key + '","' + childSnapshott.key + '")\'>' + childSnapshott.val().name + '</span> </label>\n\
                    <span class="tebdo"> $' + childSnapshott.val().price + '</span>\n\
                    <span><button type="button" class="btn teb-btn-space11 btn-default " onclick=\'return delIngredients("' + childSnapshot.key + '","' + childSnapshott.key + '")\'>Delete</button></span>\n\
                    </div>';
                });
                catstr1 += '</div></div>';
            });
            i++;
        }
    });
    $("#inttab").append(catstr1);
    $("#inttab1").append(catstr1);
    $("#IngredientsList").append('<a href="#" data-toggle="modal" data-target="#addIngredients"><p  class="tebaddcat"><span class="icon"><span class="mdi mdi-plus-circle-o f22 vsub mr5"></span></span>Add category</p></a>');
});
ref1.orderByChild("Extra").on('value', function (snapshot) {
    $("#drpdownExtra").empty();
    var i = 1;
    snapshot.forEach(function (childSnapshot) {

        var drpdownExtra = document.getElementById('drpdownExtra').value;
        if (i == drpdownExtra) {
            var sel = "selected";
        } else if (i == '1') {
            var sel = "selected";
        } else {
            var sel = "";
        }
        $("#drpdownExtra").append('<option ' + sel + ' value="' + childSnapshot.val().id + '">' + childSnapshot.val().extraName + '</option>');
        i++;
    });
});
ref2.orderByChild("Ingredients").on('value', function (snapshot) {
    $("#drpdownIngredients").empty();
    var i = 1;
    snapshot.forEach(function (childSnapshot) {

        var drpdownIngredients = document.getElementById('drpdownIngredients').value;
        if (i == drpdownIngredients) {
            var sel = "selected";
        } else {
            var sel = "";
        }

        $("#drpdownIngredients").append('<option ' + sel + ' value="' + childSnapshot.val().id + '">' + childSnapshot.val().ingredientsName + '</option>');
        i++;
    });
});
function setvaluegri(id) {
    document.getElementById('addExtraId').value = id;
}


$('#nestable').on('change', function () {
    var catName = document.getElementById('nestable-output').value;
    var updateOutput = function (e)
    {
        var list = e.length ? e : $(e.target),
                output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };
    $('#nestable').nestable({
        group: 1
    }).on('change', updateOutput);
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    updateOrder();
});
$(document).ready(function ()
{


    size.orderByChild("order").on('value', function (snapshot) {
        snapshot.forEach(function (childSnapshot) {

            $('.' + childSnapshot.val().sizeName).click(function () {
                var counter = document.getElementById('file_hd').value;
                var counter1 = parseInt(counter) + 1;
                document.getElementById('file_hd').value = counter1;
                $('.addsizes').before('<div class="mt3 row">\n\
                        <div class="col-md-3">\n\
                            <div class="circle-badge" style="background:#1ACAC0"><strong>' + childSnapshot.val().sizeName + '</strong></div> \n\
                             <center><button class="remove btn btn-space btn-primary hover">Remove</button> </center> \n\
                        </div>\n\
                                <div class="col-md-9 pp0">\n\
                                    <div class="form-group"> \n\
                                        <label class="col-sm-3 control-label pp0 poti">Price</label>\n\
                                        <div class="col-sm-9 pp0">\n\
                                            <div class="input-group">\n\
                                                <span class="input-group-addon">$</span>\n\
                                                    <input type="hidden" id="size_' + counter1 + '" value="' + childSnapshot.val().sizeName + '">\n\
                                                    <input id="price_' + counter1 + '" placeholder="14.20" onkeypress="return KeycheckOnlyNumeric(event)" class="form-control" type="text" >\n\
                                            </div>\n\
                                        </div>\n\
                                    </div>\n\
                                    <div class="form-group mt6 xs-mt-10">\n\
                                        <label class="col-md-3 control-label pp0">Gluten Free</label>\n\
                                        <div class="col-md-9 pp0">\n\
                                            <div class="input-group">\n\
                                                <div class="input-group-addon">\n\
                                                    <div class="be-checkbox">\n\
                                                        <input id="gluten_additional_' + counter1 + '" type="checkbox">\n\
                                                        <label for="gluten_additional_' + counter1 + '"></label>\n\
                                                    </div>\n\
                                                </div>\n\
                                                <input class="form-control" id="gluten_price_' + counter1 + '"  type="text" onkeypress="return KeycheckOnlyNumeric(event)" placeholder="Additional ($)">\n\
                                            </div>\n\
                                        </div>\n\
                                    </div>\n\
                                </div>\n\
                        </div>');
            });
        });
    });
    $(document).on('click', '.remove', function () {
        $(this).closest('.mt3').fadeOut(300, function () {
            $(this).remove();
        });
    });
});
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


function updateOrder() {

    var nestable = document.getElementById('nestable-output').value;
    var firebaseRef = firebase.database().ref('Category');
    var st = "";
    var jsonData = JSON.parse(nestable);
    for (var i = 0; i < jsonData.length; i++) {

        var counter = jsonData[i];
        if (counter.id != 'undefined' && counter.id != 'NaN') {
            var a = parseInt(counter.id);
            var b = parseInt(counter.value);
            firebaseRef.orderByChild("catId").equalTo(b).limitToLast(1).once('value', function (snapshot) {
                snapshot.forEach(function (userSnapshot) {
                    firebase.database().ref('Category/' + userSnapshot.key + '/').update({
                        order: i + 1
                    });
                });
            });
        }

    }
}


function addCateory() {

    var catName = document.getElementById('catName').value;
    if (catName != '') {
        var firebaseRef = firebase.database().ref('Category');
        var lastId = "";
        var orderId = "";
        firebaseRef.orderByChild("catId").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                lastId = childSnapshot.val().catId;
            });
        });
        firebaseRef.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                orderId = childSnapshot.val().order;
            });
        });
        if (lastId == '') {
            var lastId = 1;
        } else {
            var lastId = lastId + 1;
        }

        if (orderId == '') {
            orderId = 1;
        } else {
            orderId = orderId + 1;
        }



        var catId = lastId;
        var order = orderId;
        var date = new Date().toLocaleString("en-US", {timeZone: "Australia/Melbourne"});
        firebaseRef.push().set({
            catId: catId,
            catName: catName.trim(),
            order: order,
            date: date
        });
        $('#category').modal('hide');
        document.getElementById('catName').value = "";
    }
}
function addSizes() {
    var sizeName = "";
    var size = "";
    sizeName = document.getElementById('addSizeName').value;
    if (sizeName != '') {
        size = firebase.database().ref('Sizes');
        var lastId = "";
        var orderId = "";
        size.orderByChild("sizeId").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                lastId = childSnapshot.val().sizeId;
            });
        });
        size.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                orderId = childSnapshot.val().order;
            });
        });
        if (lastId == '') {
            var lastId = 1;
        } else {
            var lastId = lastId + 1;
        }

        if (orderId == '') {
            orderId = 1;
        } else {
            orderId = orderId + 1;
        }



        var sizeId = lastId;
        var order = orderId;
        size.push().set({
            sizeId: sizeId,
            sizeName: sizeName.replace(" ", ""),
            order: order
        });
        $('#addSizes').modal('hide');
        document.getElementById('addSizeName').value = "";
    }
}



function addIngredients() {

    var addIngredientsId = document.getElementsByName("addIngredientsId");
    var addIngredientsName = document.getElementById('addIngredientsName').value;
//    var AddIngredientsPrice = document.getElementById('AddIngredientsPrice').value;
    if (addIngredientsName != '' && AddIngredientsPrice != '') {


//        Ingredients Add Start
        var firebaseRef = firebase.database().ref('Ingredients');
        var lastId = "";
        var orderId = "";
        firebaseRef.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                lastId = childSnapshot.val().id;
            });
        });
        firebaseRef.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                orderId = childSnapshot.val().order;
            });
        });
        if (lastId == '') {
            var lastId = 1;
        } else {
            var lastId = lastId + 1;
        }

        if (orderId == '') {
            orderId = 1;
        } else {
            orderId = orderId + 1;
        }



        var id = lastId;
        var order = orderId;
        firebaseRef.push().set({
            id: id,
            ingredientsName: addIngredientsName.trim(),
            order: order,
            isActive: 1
        });
        var firebaseRef1 = firebase.database().ref('Extra');
        var lastId = "";
        var orderId = "";
        firebaseRef1.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                lastId = childSnapshot.val().id;
            });
        });
        firebaseRef1.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                orderId = childSnapshot.val().order;
            });
        });
        if (lastId == '') {
            var lastId = 1;
        } else {
            var lastId = lastId + 1;
        }

        if (orderId == '') {
            orderId = 1;
        } else {
            orderId = orderId + 1;
        }



        var id = lastId;
        var order = orderId;
        firebaseRef1.push().set({
            id: id,
            extraName: addIngredientsName,
            order: order,
            isActive: 1
        });
        $('#addIngredients').modal('hide');
        document.getElementById('addIngredientsName').value = "";
        document.getElementById('AddIngredientsPrice').value = "";
    } else {
        return false;
    }
}

function addExtra() {

//    var addExtraId = document.getElementsByName("addExtraId");
    var addExtraName = document.getElementById('addExtraName').value;
    if (addExtraName != '') {

        var firebaseRef = firebase.database().ref('Extra');
        var lastId = "";
        var orderId = "";
        firebaseRef.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                lastId = childSnapshot.val().id;
            });
        });
        firebaseRef.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                orderId = childSnapshot.val().order;
            });
        });
        if (lastId == '') {
            var lastId = 1;
        } else {
            var lastId = lastId + 1;
        }

        if (orderId == '') {
            orderId = 1;
        } else {
            orderId = orderId + 1;
        }



        var id = lastId;
        var order = orderId;
        var icounter = document.getElementById('extra_hd').value;
        var icounter1 = Number(icounter) + 1;
        document.getElementById('extra_hd').value = icounter1;
        firebaseRef.push().set({
            id: id,
            extraName: addExtraName,
            order: order,
            isActive: 1
        });
        var firebaseRef1 = firebase.database().ref('Ingredients');
        var lastId = "";
        var orderId = "";
        firebaseRef1.orderByChild("id").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                lastId = childSnapshot.val().id;
            });
        });
        firebaseRef1.orderByChild("order").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                orderId = childSnapshot.val().order;
            });
        });
        if (lastId == '') {
            var lastId = 1;
        } else {
            var lastId = lastId + 1;
        }

        if (orderId == '') {
            orderId = 1;
        } else {
            orderId = orderId + 1;
        }



        var id = lastId;
        var order = orderId;
        var icounter = document.getElementById('extra_hd').value;
        var icounter1 = Number(icounter) + 1;
        document.getElementById('extra_hd').value = icounter1;
        firebaseRef1.push().set({
            id: id,
            ingredientsName: addExtraName,
            order: order,
            isActive: 0
        });
        $('#addExtra').modal('hide');
        document.getElementById('addExtraName').value = "";
    } else {
        return false;
    }
}


function addItemImage(file) {
    var lastId = "";
    var database = firebase.database();
    var items = firebase.database().ref('items');
    items.orderByChild("itemId").limitToLast(1).on('value', function (snapshot) {
        snapshot.forEach(function (childSnapshot) {
            lastId = childSnapshot.val().itemId;
        });
    });
    var storageRef = firebase.storage().ref();
    var mountainImagesRef = storageRef.child('images/items/items.jpg')
    mountainImagesRef.put(file).then(function (snapshot) {
        addItemImage1(file);
//        alert('Uploaded a blob or file!');
    });
}
function addItemImage1(file) {
    var lastId = "";
    var database = firebase.database();
    var items = firebase.database().ref('items');
    items.orderByChild("itemId").limitToLast(1).on('value', function (snapshot) {
        snapshot.forEach(function (childSnapshot) {
            lastId = childSnapshot.val().itemId;
        });
    });
    if (lastId == '') {
        var lastId = 1;
    } else {
        var lastId = lastId + 1;
    }
    var itemId = lastId;
//    alert(itemId);
//    return false
    var storageRef = firebase.storage().ref();

    var eid = document.getElementById("eid").value;
    if (eid == '') {

        var mountainImagesRef = storageRef.child('images/items/item' + itemId + '.jpg');
    } else {
        itemId = document.getElementById("itemId").value;
        var mountainImagesRef = storageRef.child('images/items/item' + itemId + '.jpg');
    }
    mountainImagesRef.put(file).then(function (snapshot) {
//        alert('Uploaded a blob or file!');
    });
}

function deleterecord(key1) {
    items.child(key1).remove();
    ref.orderByChild("order").on('value', function (snapshot) {

        var categoryesitems = "";
        $("#menucategoryList").empty();
        snapshot.forEach(function (childSnapshot) {
            $(".subitemlist" + childSnapshot.val().catId).empty();
            categoryesitems += '<div class="col-md-12 p0"> \n\
                    <div class="panel panel-default">\n\
                    <div class="panel-heading panel-heading-divider ptitle pb0">\n\
                    ' + childSnapshot.val().catName + '\n\
                    <button class="btn btn-space btn-default fright" onclick=\'return deletecategory("' + childSnapshot.key + '")\' >Delete Category</button>\n\
                    <button type="button" onclick="return getselectcate(' + childSnapshot.val().catId + ')"  class="btn btn-space btn-default fright" data-toggle="modal" data-target="#md-custom">Add Item</button> \n\
                    </div>\n\
                    <p class="divider1"></p>\n\
                    <div class="panel-body"><ul id="thumbails" class="list-unstyled subitemlist' + childSnapshot.val().catId + '">';
            categoryesitems += '</ul></div>\n\
                    </div>\n\
                </div>';
        });
        $("#menucategoryList").append(categoryesitems);
    });
}

//function deletes(id) {
//    var deleteitem = "";
//    deleteitem += '<div id="mod-warning1" role="dialog" class="modal fade">\n\
//    <div class="modal-dialog modal-dialog2"  >\n\
//        <div class="modal-content modal-content2 ">\n\
//            <div class="modal-header">\n\
//                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>\n\
//            </div>\n\
//            <div class="modal-body">\n\
//                <div class="text-center">\n\
//                    <div class="text-warning"><span class="modal-main-icon mdi mdi-alert-triangle"></span></div>\n\
//                    <h3>Warning!</h3>\n\
//                    <p>This record will be deleted. <br>Press Proceed to confirm.</p>\n\
//                    <div class="xs-mt-50">\n\
//                        <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>\n\
//                        <button type="button" data-dismiss="modal" onclick=\'return delSpecial("' + id + '")\' class="btn btn-space btn-warning">Proceed</button>\n\
//                    </div>\n\
//                </div>\n\
//            </div>\n\
//            <div class="modal-footer"></div>\n\
//        </div>\n\
//    </div>\n\
//</div>';
//    $("#deleteitems").append(deleteitem);
//}
