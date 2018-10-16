var database = firebase.database();
var ref = firebase.database().ref('Category');
var ref1 = firebase.database().ref('Ingredients');
var items = firebase.database().ref('itemstest');


ref.orderByChild("order").on('value', function (snapshot) {
    $("#categoryList").empty();
    snapshot.forEach(function (childSnapshot) {
        $("#categoryList").append('<li data-value="' + childSnapshot.val().catId + '" data-id="' + childSnapshot.val().order + '" class="dd-item"><div class="dd-handle">' + childSnapshot.val().catName + '</div></li>');
    });
});
function selbox(id) {
    document.getElementById('drpdownIngredients').value = id;
}

function delExtra(key1, key2) {
    var ref2 = firebase.database().ref('Ingredients/' + key1 + '/extraItem/');
    ref2.child(key2).remove();
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
ref1.orderByChild("Ingredients").on('value', function (snapshot) {
    $("#IngredientsList").empty();
    $(".tab-content").empty();
    var catstr = "";
    var i = 1;
    snapshot.forEach(function (childSnapshot) {
        var drpdownIngredients = document.getElementById('drpdownIngredients').value;
        if (drpdownIngredients == '') {
            drpdownIngredients = '1';
        }
        if (i == drpdownIngredients) {
            var ac_class = 'class="active"';
            var cac_class = 'active';
        } else {
            var ac_class = '';
            var cac_class = '';
        }

        $("#IngredientsList").append('<li ' + ac_class + '>\n\
            <a name="tabs" onclick="return selbox(' + i + ')" href="#Ingredients' + childSnapshot.val().id + '" data-toggle="tab" class="cli"><span>' + childSnapshot.val().ingredientsName + '</span> </a>\n\
            </li>');
        var firebaseRef1 = firebase.database().ref('Ingredients/' + childSnapshot.key + '/extraItem');
        firebaseRef1.orderByChild('Ingredients/' + childSnapshot.key + '/extraItem').on('value', function (snapshot1) {
            catstr += '<div id="Ingredients' + childSnapshot.val().id + '" class="tab-pane ' + cac_class + ' cont">\n\
                <div class=" ">';
            snapshot1.forEach(function (childSnapshott) {
                catstr += '<div class="be-checkbox">\n\
                    <input id="check' + childSnapshott.val().name + childSnapshot.val().id + '" checked="" type="checkbox">\n\
                    <label for="check' + childSnapshott.val().name + childSnapshot.val().id + '"><span class="tebcheck">' + childSnapshott.val().name + '</span>\n\
                    <span class="tebdo"> $' + childSnapshott.val().price + '</span>\n\
                    <span><button type="button" class="btn teb-btn-space11 btn-default " onclick=\'return delExtra("' + childSnapshot.key + '","' + childSnapshott.key + '")\'>Delete</button></span>\n\
                    </label>\n\
                    </div>';
            });
            catstr += '</div></div>';
        });
        i++;
    });
    $(".tab-content").append(catstr);
    $("#IngredientsList").append('<a href="#" data-toggle="modal" data-target="#addIngredients"><p  class="tebaddcat"><span class="icon"><span class="mdi mdi-plus-circle-o f22 vsub mr5"></span></span>Add category</p></a>');
});
//$(document).ready(function ()
//{
//    $(".cli").on("click", function () {
//        alert("hi");
//        var a = $(this).att("data-index");
//        alert(a);
//    });
//});


ref1.orderByChild("Ingredients").on('value', function (snapshot) {
    $("#drpdownIngredients").empty();
    var i = 1;
    snapshot.forEach(function (childSnapshot) {

        var drpdownIngredients = document.getElementById('drpdownIngredients').value;
        if (i == drpdownIngredients) {
            var sel = "selected";
        } else if (i == '1') {
            var sel = "selected";
        } else {
            var sel = "";
        }
        $("#drpdownIngredients").append('<option ' + sel + ' value="' + childSnapshot.val().id + '">' + childSnapshot.val().ingredientsName + '</option>');
        i++;
    });
});
function setvaluegri(id) {
    document.getElementById('addIngredientsId').value = id;
}

ref.orderByChild("order").on('value', function (snapshot) {
    $("#menucategoryList").empty();
    snapshot.forEach(function (childSnapshot) {

        $("#menucategoryList").append('<div class="col-md-12 p0"> \n\
                    <div class="panel panel-default">\n\
                    <div class="panel-heading panel-heading-divider ptitle pb0">\n\
                    ' + childSnapshot.val().catName + '\n\
                     <button class="btn btn-space btn-default fright">Delete Category</button>   \n\
                    <button type="button"  class="btn btn-space btn-default fright" data-toggle="modal" data-target="#md-custom">Add Item</button> \n\
                    </div> \n\
                    <p class="divider1"></p>\n\
                    <div class="panel-body">\n\
                    <div class="thumbnail  col-md-4 col-sm-6 col-xs-12">\n\
                    <img src="assets/img/pizza.png" alt="titre">\n\
                    <div class="caption text-center titleicon">\n\
                    <h3 class="boxtitle11">Vegeterian  Pizza</h3>\n\
                    <p>\n\
                    <button type="button" class="btn btn-default viewbtnb" >\n\
                    <span>View</span>\n\
                    </button>\n\
                    <button type="button" class="btn btn-default trash"  >\n\
                    <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true"></span>\n\
                    </button> \n\
                    </p>\n\
                    </div>\n\
                    </div>\n\
                    </div>\n\
                    </div>\n\
                </div>');
    });
});
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

    $('.smallsize').click(function () {
        var counter = document.getElementById('file_hd').value;
        var counter1 = Number(counter) + 1;
        document.getElementById('file_hd').value = counter1;
        $('.addsizes').before('<div class="mt3 row">\n\
                        <div class="col-md-3">\n\
                        <div class="popsmallimg"> \n\
                          <img src="assets/img/smallimg.jpg" /> \n\
                          <button class="remove btn btn-space btn-primary hover">Remove</button> \n\
                          </div>\n\
                        </div>\n\
                        <div class="col-md-9 pp0">\n\
                        <div class="form-group"> \n\
                        <label class="col-sm-3 control-label pp0 poti">Price</label>\n\
                        <div class="col-sm-9 pp0">\n\
                        <div class="input-group">\n\
                        <span class="input-group-addon">$</span>\n\
                        <input type="hidden" id="size_' + counter1 + '" value="small">\n\
                         <input id="price_' + counter1 + '" placeholder="14.20" class="form-control" type="text" >\n\
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
                        <input class="form-control" id="gluten_price_' + counter1 + '"  type="text" placeholder="Additional ($)">\n\
                        </div>\n\
                        </div>\n\
                        </div>\n\
                        </div>\n\
                        </div>');
    });
    $('.mediumsize').click(function () {
        var counter = document.getElementById('file_hd').value;
        var counter1 = Number(counter) + 1;
        document.getElementById('file_hd').value = counter1;
        $('.addsizes').before('<div class="mt3 row">\n\
                        <div class="col-md-3">\n\
                        <div class="popsmallimg"> \n\
                          <img src="assets/img/medium.jpg" /> \n\
                          <button class="remove btn btn-space btn-primary hover">Remove</button> \n\
                          </div>\n\
                        </div>\n\
                        <div class="col-md-9 pp0">\n\
                        <div class="form-group"> \n\
                        <label class="col-sm-3 control-label pp0 poti">Price</label>\n\
                        <div class="col-sm-9 pp0">\n\
                        <div class="input-group">\n\
                        <span class="input-group-addon">$</span>\n\
                         <input id="price_' + counter1 + '" placeholder="14.20" class="form-control" type="text" >\n\
                        </div>\n\
                        </div>\n\
                        </div>\n\
                        <div class="form-group mt6 xs-mt-10">\n\
                        <label class="col-md-3 control-label pp0">Gluten Free</label>\n\
                        <div class="col-md-9 pp0">\n\
                        <div class="input-group">\n\
                        <div class="input-group-addon">\n\
                        <div class="be-checkbox">\n\
                        <input type="hidden" id="size_' + counter1 + '" value="medium">\n\
                        <input id="gluten_additional_' + counter1 + '" type="checkbox">\n\
                        <label for="gluten_additional_' + counter1 + '"></label>\n\
                        </div>\n\
                        </div>\n\
                        <input class="form-control" id="gluten_price_' + counter1 + '" type="text" placeholder="Additional ($)">\n\
                        </div>\n\
                        </div>\n\
                        </div>\n\
                        </div>\n\
                        </div>');
    });
    $('.largesize').click(function () {
        var counter = document.getElementById('file_hd').value;
        var counter1 = Number(counter) + 1;
        document.getElementById('file_hd').value = counter1;
        $('.addsizes').before('<div class="mt3 row">\n\
                        <div class="col-md-3">\n\
                        <div class="popsmallimg"> \n\
                          <img src="assets/img/large.jpg" /> \n\
                          <button class="remove btn btn-space btn-primary hover">Remove</button> \n\
                          </div>\n\
                        </div>\n\
                        <div class="col-md-9 pp0">\n\
                        <div class="form-group"> \n\
                        <label class="col-sm-3 control-label pp0 poti">Price</label>\n\
                        <div class="col-sm-9 pp0">\n\
                        <div class="input-group">\n\
                        <span class="input-group-addon">$</span>\n\
                        <input type="hidden" id="size_' + counter1 + '" value="large">\n\
                         <input id="price_' + counter1 + '" placeholder="14.20" class="form-control" type="text" >\n\
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
                        <input class="form-control" id="gluten_price_' + counter1 + '" type="text" placeholder="Additional ($)">\n\
                        </div>\n\
                        </div>\n\
                        </div>\n\
                        </div>\n\
                        </div>');
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
//    alert("lastId: " + lastId + ">orderId: " + orderId);
//    return false;
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
            catName: catName,
            order: order,
            date: date
        });
        $('#category').modal('hide');
        document.getElementById('catName').value = "";
    }
}
function addIngredients() {

    var addIngredientsId = document.getElementsByName("addIngredientsId");
    var addIngredientsName = document.getElementById('addIngredientsName').value;
    if (addIngredientsName != '') {
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
        var icounter = document.getElementById('ingredients_hd').value;
        var icounter1 = Number(icounter) + 1;
        document.getElementById('ingredients_hd').value = icounter1;
        firebaseRef.push().set({
            id: id,
            ingredientsName: addIngredientsName,
            order: order
        });
        $('#addIngredients').modal('hide');
        document.getElementById('addIngredientsName').value = "";
    } else {
        return false;
    }
}
function IngredientsAdd() {

//    alert(document.getElementById("isIngredients").checked);
//    alert(document.getElementById("isExtra").checked);

    var addIngredientname = document.getElementById("AddIngredientName").value;
    var AddIngredientCatId = document.getElementById('drpdownIngredients').value;
    var AddIngredientPrice = document.getElementById('AddIngredientPrice').value;
    var isIngredients = document.getElementById("isIngredients").checked;
    var isExtra = document.getElementById("isExtra").checked;
    if (isIngredients == true) {
        isIngredients = 1;
    } else {
        isIngredients = 0;
    }
    if (isExtra == true) {
        isExtra = 1;
    } else {
        isExtra = 0;
    }
//    alert(addIngredientname + ":" + AddIngredientCatId + ":" + AddIngredientPrice);

//    return false;
    if (addIngredientname != '' && AddIngredientCatId != '' && AddIngredientPrice != '') {
        var firebaseRef = firebase.database().ref('Ingredients');
        var a = parseInt(AddIngredientCatId);
        IngredientArray = {
            id: AddIngredientCatId,
            name: addIngredientname,
            price: AddIngredientPrice,
            isIngredients: isIngredients,
            isExtra: isExtra
        }

        firebaseRef.orderByChild("id").equalTo(a).once('value', function (snapshot) {
            snapshot.forEach(function (userSnapshot) {

                var firebaseRef1 = firebase.database().ref('Ingredients/' + userSnapshot.key + '/extraItem/');
                firebaseRef1.push().set({
                    id: AddIngredientCatId,
                    name: addIngredientname,
                    price: AddIngredientPrice,
                    isIngredients: isIngredients,
                    isExtra: isExtra
                });
            });
        });
// return false;
        document.getElementById('AddIngredientName').value = "";
        document.getElementById('AddIngredientPrice').value = "";
//        $(".tab-content").load(location.href + ".tab-content");

    } else {
        return false;
    }
}


function addItem() {
    var catId = document.getElementById("addIngredientsId").value;
    var itemName = document.getElementById('itemName').value;
    var sizeCount = document.getElementById('file_hd').value;
    var isDiscountable = document.getElementById("isDiscountable").checked;
    if (isDiscountable == true) {
        isDiscountable = 1;
    } else {
        isDiscountable = 0;
    }
    var sizearray = {};
    if (catId != '' && itemName != '') {
        for (var i = 1; i <= sizeCount; i++) {
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
                sizearray[i - 1] = {
                    additionalPrice: price,
                    name: gluten_price,
                    isAdditional: gluten_additional,
                    size: size
                };
            }
        }

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
        firebase.database().ref('Ingredients').on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                var item = childSnapshot.val();
                ref12.push(item);
            });
        });


        var date = new Date().toLocaleString("en-US", {
            timeZone: "Australia/Melbourne"
        });
        items.push().set({
            Ingredients: ref12,
            catId: catId,
            itemId: itemId,
            size: sizearray,
            name: itemName,
            isDiscountable: isDiscountable,
            order: orderId,
            date: date
        });
        $('#category').modal('hide');
        document.getElementById('catName').value = "";

        firebase.database().ref('Ingredients').remove();
        location.reload();
    } else {
        return false;
    }

//    alert("array: " + sizearray + "\n Size Count: " + sizeCount + "\n CatName:" + catName + "\n ItemName: " + itemName + "\n Discount: " + isDiscountable);
//    return false;

}


