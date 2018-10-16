
function SetBackground(){
    document.getElementById("dvprocessing").style.display=""
    $(".loader").fadeIn("slow");
}
function UnsetBackground(){
    document.getElementById("dimmer").style.width=110;
    document.getElementById("dimmer").style.height=0;
    document.getElementById("dimmer").style.visibility="";
    document.getElementById("dvprocessing").style.display="none"
    $(".loader").fadeOut("slow");
}
 
function KeycheckOnlyNumeric(c){
    var d=0;
    d=document.all?3:(document.getElementById?1:(document.layers?2:0));
    if(document.all){
        c=window.event
        }
        var b="";
    var a="";
    if(d==2){
        if(c.which>0){
            b="("+String.fromCharCode(c.which)+")"
            }
            a=c.which
        }else{
        if(d==3){
            a=(window.event)?event.keyCode:c.which
            }else{
            if(c.charCode>0){
                b="("+String.fromCharCode(c.charCode)+")"
                }
                a=c.charCode
            }
        }
    if((a>=65&&a<=90)||(a>=97&&a<=122)||(a>=33&&a<=45)||(a>=46&&a<=47)||(a>=58&&a<=64)||(a>=91&&a<=96)||(a>=123&&a<=126)||(a==32)){
    return false
    }
    return true
}

function KeycheckOnlyNumericValue(c){
    var d=0;
    d=document.all?3:(document.getElementById?1:(document.layers?2:0));
    if(document.all){
        c=window.event
        }
        var b="";
    var a="";
    if(d==2){
        if(c.which>0){
            b="("+String.fromCharCode(c.which)+")"
            }
            a=c.which
        }else{
        if(d==3){
            a=(window.event)?event.keyCode:c.which
            }else{
            if(c.charCode>0){
                b="("+String.fromCharCode(c.charCode)+")"
                }
                a=c.charCode
            }
        }
    if((a>=58&&a<=126)||(a>=32&&a<=47)){
    return false
    }
    return true
}

function KeycheckOnlyPhonenumber(c){
    var d=0;
    d=document.all?3:(document.getElementById?1:(document.layers?2:0));
    if(document.all){
        c=window.event
        }
        var b="";
    var a="";
    if(d==2){
        if(c.which>0){
            b="("+String.fromCharCode(c.which)+")"
            }
            a=c.which
        }else{
        if(d==3){
            a=(window.event)?event.keyCode:c.which
            }else{
            if(c.charCode>0){
                b="("+String.fromCharCode(c.charCode)+")"
                }
                a=c.charCode
            }
        }
    if((a>=65&&a<=90)||(a>=97&&a<=122)||(a>=33&&a<=39)||(a>=42&&a<=42)||(a>=44&&a<=44)||(a>=46&&a<=47)||(a>=58&&a<=64)||(a>=91&&a<=96)||(a>=123&&a<=126)){
    return false
    }
    return true
}

function KeycheckZipCode(c){
    var d=0;
    d=document.all?3:(document.getElementById?1:(document.layers?2:0));
    if(document.all){
        c=window.event
        }
        var b="";
    var a="";
    if(d==2){
        if(c.which>0){
            b="("+String.fromCharCode(c.which)+")"
            }
            a=c.which
        }else{
        if(d==3){
            a=(window.event)?event.keyCode:c.which
            }else{
            if(c.charCode>0){
                b="("+String.fromCharCode(c.charCode)+")"
                }
                a=c.charCode
            }
        }
    if((a>=33&&a<=39)||(a>=42&&a<=43)||(a>=44&&a<=44)||(a>=46&&a<=47)||(a>=58&&a<=64)||(a>=91&&a<=96)||(a>=123&&a<=126)){
    return false
    }
    return true
}

function ispercentage(d,i,l,h){
    var m;
    var j=false;
    var g;
    var b;
    if(window.event){
        m=i.keyCode;
        j=window.event.ctrlKey
        }else{
        if(i.which){
            m=i.which;
            j=i.ctrlKey
            }
        }
    if(isNaN(m)){
    return true
    }
    g=String.fromCharCode(m);
if(m==8||j){
    return true
    }
    ctemp=d.value;
var f=ctemp.indexOf(".");
var a=ctemp.length;
ctemp=ctemp.substring(f,a);
if(f<0&&a>1&&g!="."&&g!="0"){
    d.focus();
    return false
    }
    if(a>1&&ctemp>10&&g!="."){
    d.focus();
    return false
    }
    if(ctemp.length>2){
    d.focus();
    return false
    }
    if(g=="0"&&a>=2&&g!="."&&ctemp!="10"){
    d.focus();
    return true
    }
    b=/\d/;
var c=h?g=="-"&&d.value.indexOf("-")==-1:false;
var k=l?g=="."&&d.value.indexOf(".")==-1:false;
return c||k||b.test(g)
}

function KeycheckWithDecimal(c){
    var d=0;
    d=document.all?3:(document.getElementById?1:(document.layers?2:0));
    if(document.all){
        c=window.event
        }
        var b="";
    var a="";
    if(d==2){
        if(c.which>0){
            b="("+String.fromCharCode(c.which)+")"
            }
            a=c.which
        }else{
        if(d==3){
            a=(window.event)?event.keyCode:c.which
            }else{
            if(c.charCode>0){
                b="("+String.fromCharCode(c.charCode)+")"
                }
                a=c.charCode
            }
        }
    if(a==46){
    return true
    }
    if((a>=65&&a<=90)||(a>=97&&a<=122)||(a>=32&&a<=47)||(a>=58&&a<=64)||(a>=91&&a<=96)||(a>=123&&a<=126)){
    return false
    }
    return true
}

function checkemail(b){
    var a=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return a.test(b)
}
    
function trim(b,a){
    return ltrim(rtrim(b,a),a)
}
function ltrim(b,a){
    a=a||"\\s";
    return b.replace(new RegExp("^["+a+"]+","g"),"")
}
function rtrim(b,a){
    a=a||"\\s";
    return b.replace(new RegExp("["+a+"]+$","g"),"")
}

function removeHTMLTags(b){
    var a=b;
    var c="";
    c=a.replace(/&(lt|gt);/g,function(d,e){
        return(e=="lt")?"<":">"
        });
    c=c.replace(/<\/?[^>]+(>|$)/g,"");
    c=c.replace(/&quot;/g,"");
    c=c.replace(/&#39;/g,"");
    c=c.replace(/&nbsp;/g," ");
    c=c.replace(/\n/g," ");
    return c
}

function checkPasswod(c){
    var d=document.getElementById(c).value;
    var b=d.replace(/[^0-9]/g,"");
    var a=d.replace(/[^a-zA-Z]/g,"");
    if(trim(document.getElementById(c).value)!=""){
        if(trim(document.getElementById(c).value).length<6){
            alert("Please enter more than 6 characters password.");
            document.getElementById(c).focus();
            return false
            }
            if(b<1){
            alert("Password must include at least one numeric character.");
            document.getElementById(c).focus();
            return false
            }
            if(a<1){
            alert("Password must include at least one alphabate.");
            document.getElementById(c).focus();
            return false
            }
        }
    return true
}

function KeycheckAlphaNumeric(c){
    var d=0;
    d=document.all?3:(document.getElementById?1:(document.layers?2:0));
    if(document.all){
        c=window.event
        }
        var b="";
    var a="";
    if(d==2){
        if(c.which>0){
            b="("+String.fromCharCode(c.which)+")"
            }
            a=c.which
        }else{
        if(d==3){
            a=(window.event)?event.keyCode:c.which
            }else{
            if(c.charCode>0){
                b="("+String.fromCharCode(c.charCode)+")"
                }
                a=c.charCode
            }
        }
    if((a>=31&&a<=44)||(a>=46&&a<=47)||(a>=58&&a<=64)||(a>=65&&a<=96)||(a>=123&&a<=126)){
    return false
    }
    return true
}

function Check_mobile_number(b){
    b=(b)?b:window.event;
    var a=(b.which)?b.which:b.keyCode;
    if(a>31&&(a<48||a>57)&&(a<40||a>41)&&(a<43||a>43)&&(a<45||a>45)){
        return false
    }
    return true
}

function refreshcaptcha(a){
    var b;
    $.ajax({
        type:"GET",
        url:a+"refershcaptcha",
        async:false,
        success:function(c){
            b=c.split("#");
            var d=b[0];
            $("#captchaImage").attr("src",b[0]);
            $("#h_code").val(b[1])
            }
        })
};

function scrollToElement(selector, time, verticalOffset) {
    time = typeof(time) != 'undefined' ? time : 1000;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    $('html, body').animate({
        scrollTop: offsetTop
    }, time);
}

function occurrences(string, substring){
    var n=0;
    var pos=0;
 
    while(true){
        pos=string.indexOf(substring,pos);
        if(pos!=-1){ n++; pos+=substring.length;}
        else{break;}
    }
    return(n);
}

function validateXSSInput(value) {
    
    var count= occurrences(value,'#');    
    var value1 = $("<textarea/>").html(value).val();
    for(var i=1;i<=count;i++) {
        value1 = $("<textarea/>").html(value1).val();
    }
    
    if (value.match(/((\%3C)|<)((\%2F)|\/)*[a-z0-9\%]+((\%3E)|>)/i)) {
        return false;
    } else if (value.match(/<img|script[^>]+src/i)) {
        return false;
    } else if (value1.match(/((\%3C)|<)((\%2F)|\/)*[a-z0-9\%]+((\%3E)|>)/i)) {
        return false;
    } else if (value1.match(/<img|script[^>]+src/i)) {
        return false;
    } else if (value1.match(/((\%3C)|<)(|\s|\S)+((\%3E)|>)/i)) {
        return false;
    } else {
        return true;
    }
}

//
//function validateXSSInputold(value) {
//    
//    var count= occurrences(value,'#');    
//    var value1 = $("<textarea/>").html(value).val();
//    for(var i=1;i<=count;i++) {
//        value1 = $("<textarea/>").html(value1).val();
//    }
//    
//    
////    if(trim(value)!='') {
////        alert(value);
////        alert(value1);
////        alert(value2);
////    }
//    
//    if (value.match(/((\%3C)|<)((\%2F)|\/)*[a-z0-9\%]+((\%3E)|>)/i)) {
//        return false;
//    } else if (value.match(/<img|script[^>]+src/i)) {
//        return false;
//    } else if (value1.match(/((\%3C)|<)((\%2F)|\/)*[a-z0-9\%]+((\%3E)|>)/i)) {
//        return false;
//    } else if (value1.match(/<img|script[^>]+src/i)) {
//        return false;
//    } else {
////        if(value1.contains("&#60") || value1.contains("&#62") || value1.contains("&#x3C") || value1.contains("&#x3E") || value1.contains("<") || value1.contains(">")) {
////            return false;
////        } else {
////            return true;
////        }
//        return true;
//    }
//}