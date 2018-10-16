var database = firebase.database();
var Category = firebase.database().ref('Category');
var Items = firebase.database().ref('items');
var specialCategory = firebase.database().ref('specialCategory');
var Special = firebase.database().ref('Special');
var sizes = firebase.database().ref('Sizes');
var storageRef = firebase.storage().ref();
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
                required: {
                    depends: function () {
                        if ($("#eid").val() == '')
                        {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
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
                required: "Please select image to upload."
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
//alert("hi");

            var specialName = document.getElementById("specialName").value;
            var specialId = document.getElementById("specialId").value;
            var cost = document.getElementById("cost").value;
            var a = document.getElementById("pickup_delivery");

            var pickup_delivery = a.options[a.selectedIndex].value;

            if (specialName != '' && cost != '') {

                if (specialId == '') {
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


                    var forms1 = document.getElementById("ref").value;
                    var specialCategory = JSON.parse(forms1);


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
                        specialCategory: specialCategory
                    });

//                    firebase.database().ref('specialCategory').remove();
                } else {


                    var forms1 = document.getElementById("ref").value;
                    var eid = document.getElementById("eid").value;
                    var specialCategory = JSON.parse(forms1);

                    var file = document.getElementById('specialfile');
                    var file2 = document.getElementById('specialfile').value;
                    if (file2 != '') {
                        var filea = file.files;
                        var file1 = file.files[0];

                        mountainImagesRef.put(file1).then(function (snapshot) {
                        });
                    }
                    firebase.database().ref('Special/' + eid + '/').update({
                        specialId: parseInt(specialId),
                        specialName: specialName,
                        cost: cost,
                        pickup_delivery: pickup_delivery,
                        specialCategory: specialCategory
                    });
                }
            } else {
                return false;
            }
            document.getElementById("specialName").value = "";
            document.getElementById("cost").value = "";
            document.getElementById('specialfile').value = "";
            document.getElementById('ref').value = "";
            $("#specialCategoryList").empty();
        }
    });
});
function getCatNameset(name) {
    document.getElementById('catName1').value = name;
}

Category.orderByChild("order").on('value', function (snapshot) {
    $("#categoryList").empty();
    $("#categoryList").append('<option value="">Select Category</option>');
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
        if (childSnapshot.val().pickup_delivery == '1') {
            var pickup = "Both";
        } else {
            var pickup = "Pick Up Only";
        }
        specialList1 += '<tr class="odd gradeX"><td>' + childSnapshot.val().specialName + '</td>\n\
<td>$' + childSnapshot.val().cost + '</td><td>' + pickup + '</td>\n\
<td > 1636 ($38,405.20)</td><td class="text-right">\n\
<button class="btn btn-space btn-default" onclick=\'return editSpecial("' + childSnapshot.key + '")\'>Edit</button> <button class="btn btn-space btn-primary hover" data-target="#mod-warning1" data-toggle="modal" onclick=\'return deletes("' + childSnapshot.key + '")\'>Delete</button></td>  </tr>';
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
        document.getElementById("specialId").value = snapshot1.val().specialId;
        document.getElementById("specialName").value = snapshot1.val().specialName;
        document.getElementById("cost").value = snapshot1.val().cost;
        document.getElementById("pickup_delivery").value = snapshot1.val().pickup_delivery;
//        document.getElementById('specialfile').value = snapshot1.val().specialfile;
    });
    var SpecialCatdata = firebase.database().ref('Special/' + id + '/specialCategory/');

    var i = 0;
    var data = [];
    SpecialCatdata.on('value', function (snapshots) {
//        data = snapshots;
        snapshots.forEach(function (childSnapshot) {

            data.push({
                catId: childSnapshot.val().catId,
                intQty: childSnapshot.val().intQty,
                catName: childSnapshot.val().catName,
                intSizes: childSnapshot.val().intSizes
            });

            $("#specialCategoryList").append('<tr>\n\
                    <td>' + getcatName(childSnapshot.val().catId) + '</td>\n\
                    <td>' + childSnapshot.val().intQty + '</td>\n\
                    <td>' + childSnapshot.val().intSizes + '</td>\n\
                    <td><button class="btn btn-space btn-default hover" onclick=\'return delSpecialCategoryList(' + i + ')\'>Delete</button></td>\n\
                    </tr>');
            i++;
        });
    });
    document.getElementById("ref").value = "";
    document.getElementById("ref").value = JSON.stringify(data);
//    document.getElementById("ref").value = JSON.parse(data);
//    document.getElementById("ref").value = JSON.stringify(data1);

}

sizes.orderByChild("order").on('value', function (snapshot) {
    $("#intSizes").append('<option value="">Select Size</option>');
    snapshot.forEach(function (childSnapshot) {
        $("#intSizes").append('<option value="' + childSnapshot.val().sizeName + '">' + childSnapshot.val().sizeName + '</option>');
    });
});
function deleterecord(key1) {
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
//        firebase.database().ref('specialCategory').on('value', function (snapshot) {
//            snapshot.forEach(function (childSnapshot) {
//                var item = childSnapshot.val();

        var forms1 = document.getElementById("ref").value;
        var jsonData = JSON.parse(forms1);
//        $("#specialCategoryList").empty();
        for (var i = 0; i < jsonData.length; i++) {
            var counter = jsonData[i];
            ref121.push().set({
                catId: counter.catId,
                intQty: counter.intQty,
                catName: counter.catName,
                intSizes: counter.intSizes
            });
        }

//            });
//        });
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
//        firebase.database().ref('specialCategory').remove();
    } else {
        return false;
    }
}

//function delSpecialCategoryList(key1) {
//    specialCategory.child(key1).remove();
//}

function delSpecialCategoryList(id) {
//alert(id); return false;

    var forms = document.getElementById("ref").value;
    var jsonData = JSON.parse(forms);
//    alert(jsonData); return false;
    data.splice(id, 1);
    var formsss = JSON.stringify(data);
    document.getElementById("ref").value = "";
    document.getElementById("ref").value = formsss;
    var forms1 = document.getElementById("ref").value;
    var jsonData = JSON.parse(formsss);
    $("#specialCategoryList").empty();
    for (var i = 0; i < jsonData.length; i++) {
        var counter = jsonData[i];
        $("#specialCategoryList").append('<tr>\n\
                <td>' + getcatName(counter.catId) + '</td>\n\
                <td>' + counter.intQty + '</td>\n\
                <td>' + counter.intSizes + '</td>\n\
                <td><button class="btn btn-space btn-default hover" onclick=\'return delSpecialCategoryList(' + i + ')\'>Delete</button></td>\n\
                </tr>');
    }
}

function addSpecialCategory() {
    var catName1 = document.getElementById("catName1").value;
    var a = document.getElementById("categoryList");
    var categoryList = a.options[a.selectedIndex].value;
    var b = document.getElementById("intQty");
    var intQty = b.options[b.selectedIndex].value;
    var c = document.getElementById("intSizes");
    var eid = document.getElementById("eid").value;
    var intSizes = c.options[c.selectedIndex].value;

    if (categoryList != '' && intQty != '' && intSizes != '') {
//        alert(document.getElementById("ref").value);
        if (document.getElementById("ref").value != '') {
            data = JSON.parse(document.getElementById("ref").value);
        }
        data.push({
            catId: categoryList,
            intQty: intQty,
            catName: catName1,
            intSizes: intSizes
        });
        document.getElementById("ref").value = JSON.stringify(data);

        $("#specialCategoryList").empty();
        var forms = document.getElementById("ref").value;
        var jsonData = JSON.parse(forms);

        for (var i = 0; i < jsonData.length; i++) {
            var counter = jsonData[i];
            $("#specialCategoryList").append('<tr>\n\
                        <td>' + getcatName(counter.catId) + '</td>\n\
                        <td>' + counter.intQty + '</td>\n\
                        <td>' + counter.intSizes + '</td>\n\
                        <td><button class="btn btn-space btn-default hover" onclick=\'return delSpecialCategoryList(' + i + ')\'>Delete</button></td>\n\
                        </tr>');
        }
    } else {
        return false;
    }

}


