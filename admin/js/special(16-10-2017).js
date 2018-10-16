var database = firebase.database();
var Category = firebase.database().ref('Category');
var Items = firebase.database().ref('items');
var specialCategory = firebase.database().ref('specialCategory');
var Special = firebase.database().ref('Special');
var sizes = firebase.database().ref('Sizes');
var data = [];
//alert(data);

$(document).ready(function () {
    $('#special-form').validate({// initialize plugin

        ignore: [],
        rules: {
            specialName: {
                required: true
            },
            cost: {
                required: true
            },
            intQty: {
                required: true
            },
            specialfile: {
                required: true
            }
        },
        messages: {
            specialName: {
                required: "Please enter special name."
            },
            cost: {
                required: " "
            },
            intQty: {
                required: "Please select quantity."
            },
            specialfile: {
                required: "Please select image."
            }
        },
//        highlight: function (input) {
//            $(input).addClass('error');
//        },
        errorPlacement: function (error, element) {

            if ($(element).attr('id') == 'specialfile')
            {
                error.insertAfter($(".replacespecialfile"));
            } else {
                error.insertAfter(element);
            }

        },
        submitHandler: function (form) {
            var storageRef = firebase.storage().ref();
            var specialName = document.getElementById("specialName").value;
            var cost = document.getElementById("cost").value;
            var a = document.getElementById("pickup_delivery");
            var pickup_delivery = a.options[a.selectedIndex].value;
            if (specialName != '' && cost != '') {
                var lastId = "";
                Special.orderByChild("specialId").limitToLast(1).on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        lastId = childSnapshot.val().specialId;
                    });
                });
                if (lastId == '') {
                    lastId = 1;
                } else {
                    lastId = lastId + 1;
                }

                var id = lastId;
                var ref121 = [];
                firebase.database().ref('specialCategory').on('value', function (snapshot) {
                    snapshot.forEach(function (childSnapshot) {
                        var item = childSnapshot.val();
                        ref121.push(item);
                    });
                });
                var mountainImagesRef = storageRef.child('images/specials/special' + id + '.jpg');
                var file = document.getElementById('specialfile');
                var file1 = file.files[0];
                mountainImagesRef.put(file1).then(function (snapshot) {
//        alert('Uploaded a blob or file!');
                });
                Special.push().set({
                    specialId: id,
                    specialName: specialName,
                    cost: cost,
                    pickup_delivery: pickup_delivery,
                    specialCategory: ref121
                });
                document.getElementById("specialName").value = "";
                document.getElementById("cost").value = "";
                document.getElementById('specialfile').value = "";
                firebase.database().ref('specialCategory').remove();
            } else {
                return false;
            }

        }
    });
});
function getCatNameset(name) {
    document.getElementById('catName1').value = name;
}

Category.orderByChild("order").on('value', function (snapshot) {
    $("#categoryList").empty();
//    $("#categoryList").append('<option value="">Select Category</option>');
    snapshot.forEach(function (childSnapshot) {
        $("#categoryList").append('<option onClick=\'return getCatNameset("' + childSnapshot.val().catName + '")\' value="' + childSnapshot.val().catId + '">' + childSnapshot.val().catName + '</option>');
    });
});
function historyChanged2() {
    var getCatNameset = $('select#categoryList');
    var selectedValue = $('option:selected', getCatNameset).val();
    var catName = "";
    var aa = String(selectedValue);
    Category.orderByChild("catId").once('value', function (snapshot) {
        snapshot.forEach(function (childSnapshot1) {
            if (childSnapshot1.val().catId == aa) {
                document.getElementById('catName1').value = childSnapshot1.val().catName;
            }
        });
    });
}

$(function () {
    $('select#categoryList').change(historyChanged2);
//    $('select#varModel1').change(historyChanged12);
});
Special.orderByChild("order").on('value', function (snapshot) {
    $("#table1").empty();
    var specialList1 = "";
    specialList1 += '<thead><tr><th>Name</th><th>Price</th><th>Pickup / Delivery</th><th>Usage</th> <th class="nosort" style="width:200px;">&nbsp;  </th></tr></thead>';
    specialList1 += '<tbody>';
    snapshot.forEach(function (childSnapshot) {
        specialList1 += '<tr class="odd gradeX"><td>' + childSnapshot.val().specialName + '</td><td>$' + childSnapshot.val().cost + '</td><td>Pickup Only</td><td > 1636 ($38,405.20)</td><td class="text-right">    <button class="btn btn-space btn-default" onclick=\'return editSpecial("' + childSnapshot.key + '")\'>Edit</button> <button class="btn btn-space btn-primary hover" onclick=\'return delSpecial("' + childSnapshot.key + '")\'>Delete</button></td>  </tr>';
    });
    specialList1 += '</tbody>';
    specialList1 += '</thead>';
    $("#table1").append(specialList1);
});
function editSpecial(id) {
    document.getElementById("eid").value = id;
    $("#specialCategoryList").empty();
    var Specialdata = firebase.database().ref('Special/' + id + '/');
    Specialdata.on('value', function (snapshot1) {
        document.getElementById("specialName").value = snapshot1.val().specialName;
        document.getElementById("cost").value = snapshot1.val().cost;
        document.getElementById("pickup_delivery").value = snapshot1.val().pickup_delivery;
        document.getElementById('specialfile').value = snapshot1.val().specialfile;
    });
    var SpecialCatdata = firebase.database().ref('Special/' + id + '/specialCategory/');
    SpecialCatdata.on('value', function (snapshots) {
        snapshots.forEach(function (childSnapshot) {
            $("#specialCategoryList").append('<tr>\n\
<td>' + getcatName(childSnapshot.val().catId) + '</td>\n\
<td>' + childSnapshot.val().intQty + '</td>\n\
<td>' + childSnapshot.val().intSizes + '</td>\n\
<td><button class="btn btn-space btn-default hover" onclick=\'return delSpecialCategoryList("' + childSnapshot.key + '")\'>Delete</button></td>\n\
</tr>');
        });
    });
}

sizes.orderByChild("order").on('value', function (snapshot) {
//    $("#intSizes").append('<option value="">Select Size</option>');
    snapshot.forEach(function (childSnapshot) {
        $("#intSizes").append('<option value="' + childSnapshot.val().sizeName + '">' + childSnapshot.val().sizeName + '</option>');
    });
});

function delSpecial(key1) {
    Special.child(key1).remove();
}



specialCategory.orderByChild("order").on('value', function (snapshot) {
    $("#specialCategoryList").empty();
    snapshot.forEach(function (childSnapshot) {
        $("#specialCategoryList").append('<tr>\n\
<td>' + getcatName(childSnapshot.val().catId) + '</td>\n\
<td>' + childSnapshot.val().intQty + '</td>\n\
<td>' + childSnapshot.val().intSizes + '</td>\n\
<td><button class="btn btn-space btn-default hover" onclick=\'return delSpecialCategoryList(' + childSnapshot.key + ')\'>Delete</button></td>\n\
</tr>');
    });
});
function getcatName(id) {
    var catName = "";
    var aa = String(id);
    Category.orderByChild("catId").once('value', function (snapshot) {
        snapshot.forEach(function (childSnapshot1) {
            if (childSnapshot1.val().catId == aa) {
                catName += childSnapshot1.val().catName;
            }
        });
    });
    return catName;
}


function addSpeical() {
    var storageRef = firebase.storage().ref();
    var specialName = document.getElementById("specialName").value;
    var cost = document.getElementById("cost").value;
    var a = document.getElementById("pickup_delivery");
    var pickup_delivery = a.options[a.selectedIndex].value;
    if (specialName != '' && cost != '') {
        var lastId = "";
        Special.orderByChild("specialId").limitToLast(1).on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                lastId = childSnapshot.val().specialId;
            });
        });
        if (lastId == '') {
            lastId = 1;
        } else {
            lastId = lastId + 1;
        }

        var id = lastId;
        var ref121 = [];
        firebase.database().ref('specialCategory').on('value', function (snapshot) {
            snapshot.forEach(function (childSnapshot) {
                var item = childSnapshot.val();
                ref121.push(item);
            });
        });
        var mountainImagesRef = storageRef.child('images/specials/special' + id + '.jpg');
        var file = document.getElementById('specialfile');
        var file1 = file.files[0];
        mountainImagesRef.put(file1).then(function (snapshot) {
//        alert('Uploaded a blob or file!');
        });
        Special.push().set({
            specialId: id,
            specialName: specialName,
            cost: cost,
            pickup_delivery: pickup_delivery,
            specialCategory: ref121
        });
        document.getElementById("specialName").value = "";
        document.getElementById("cost").value = "";
        document.getElementById('specialfile').value = "";
        firebase.database().ref('specialCategory').remove();
    } else {
        return false;
    }
}

function delSpecialCategoryList(key1) {
    specialCategory.child(key1).remove();
}

//function delSpecialCategoryList(id) {
//
//
//    var forms = document.getElementById("ref").value;
//    var jsonData = JSON.parse(forms);
//    var data1 = [];
////alert(jsonData.length); return false;
//    for (var i = 0; i < jsonData.length; i++) {
//        if (i != id) {
//            var counter1 = forms[i];
////            var ref1 = data1;
//            if (counter1.catId != '') {
//                data1.push({
//                    catId: counter1.catId,
//                    intQty: counter1.intQty,
//                    catName: counter1.catName,
//                    intSizes: counter1.intSizes
//                });
//            }
//        }
//    }
////     var ref = data;
//    var formsss = JSON.stringify(data1);
//    document.getElementById("ref").value = "";
//    document.getElementById("ref").value = JSON.stringify(formsss);
//
//    var forms1 = document.getElementById("ref").value;
//    var jsonData = JSON.parse(forms1);
//    $("#specialCategoryList").empty();
//    for (var i = 0; i < jsonData.length; i++) {
//        var counter = jsonData[i];
//        $("#specialCategoryList").append('<tr>\n\
//<td>' + getcatName(counter.catId) + '</td>\n\
//<td>' + counter.intQty + '</td>\n\
//<td>' + counter.intSizes + '</td>\n\
//<td><button class="btn btn-space btn-default hover" onclick=\'return delSpecialCategoryList(' + i + ')\'>Delete</button></td>\n\
//</tr>');
//
//    }
//}

//function addSpecialCategory() {
//    var catName1 = document.getElementById("catName1").value;
//    var a = document.getElementById("categoryList");
//    var categoryList = a.options[a.selectedIndex].value;
//    var b = document.getElementById("intQty");
//    var intQty = b.options[b.selectedIndex].value;
//    var c = document.getElementById("intSizes");
//    var intSizes = c.options[c.selectedIndex].value;
//    if (categoryList != '' && intQty != '' && intSizes != '') {
//
//        var ref = data;
//
//        data.push({
//            catId: categoryList,
//            intQty: intQty,
//            catName: catName1,
//            intSizes: intSizes
//        });
//
//        document.getElementById("ref").value = JSON.stringify(ref);
//
//        $("#specialCategoryList").empty();
//        var forms = document.getElementById("ref").value;
//        var jsonData = JSON.parse(forms);
//        for (var i = 0; i < jsonData.length; i++) {
//            var counter = jsonData[i];
//            $("#specialCategoryList").append('<tr>\n\
//                        <td>' + getcatName(counter.catId) + '</td>\n\
//                        <td>' + counter.intQty + '</td>\n\
//                        <td>' + counter.intSizes + '</td>\n\
//                        <td><button class="btn btn-space btn-default hover" onclick=\'return delSpecialCategoryList(' + i + ')\'>Delete</button></td>\n\
//                        </tr>');
//        }
//    } else {
//        return false;
//    }
//
//
//
//}

function addSpecialCategory() {

    var catName1 = document.getElementById("catName1").value;
    var a = document.getElementById("categoryList");
    var categoryList = a.options[a.selectedIndex].value;
    var b = document.getElementById("intQty");
    var intQty = b.options[b.selectedIndex].value;
    var c = document.getElementById("intSizes");
    var intSizes = c.options[c.selectedIndex].value;
    if (categoryList != '' && intQty != '' && intSizes != '') {

//        Ingredients Add Start
        var firebaseRef = firebase.database().ref('specialCategory');
        var lastId = "";
        var orderId = "";
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
                catId: categoryList,
                intQty: intQty,
                catName: catName1,
                intSizes: intSizes,
                order: order
            });
        } else {
            var firebaseRef2 = firebase.database().ref('Special/' + eid + '/specialCategory');
            firebaseRef2.push().set({
                catId: categoryList,
                intQty: intQty,
                catName: catName1,
                intSizes: intSizes,
                order: order
            });

            specialCategory.orderByChild("order").on('value', function (snapshot) {
                $("#specialCategoryList").empty();
                snapshot.forEach(function (childSnapshot) {
                    $("#specialCategoryList").append('<tr>\n\
<td>' + getcatName(childSnapshot.val().catId) + '</td>\n\
<td>' + childSnapshot.val().intQty + '</td>\n\
<td>' + childSnapshot.val().intSizes + '</td>\n\
<td><button class="btn btn-space btn-default hover" onclick=\'return delSpecialCategoryList(' + childSnapshot.key + ')\'>Delete</button></td>\n\
</tr>');
                });
            });
        }

    } else {
        return false;
    }
}

