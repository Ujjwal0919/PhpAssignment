function validate()
{

    var a = document.forms["register"]["name"].value;
    var b = document.forms["register"]["usernname"].value;
    var c = document.forms["register"]["address"].value;
    var d = document.forms["register"]["mobile"].value;
    var e = document.forms["register"]["email"].value;
    var f = document.forms["register"]["password"].value;
    var g = document.forms["register"]["re_pass"].value;
    if((a=="")||(b=="")||(c=="")||(d=="")||(e=="")||(f=="")||(g==""))
    {
        alert("All fields must be filed");
        return false;
    }
}