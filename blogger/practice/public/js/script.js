
// create a refrence of input box
// var inputBox = document.getElementById('search_box').value;

// bind a keyup function with inputbox means on pressing any key the fucntion is triggered.

 function abc(name){
    // alert(inputBox.value);              
    alert(name);
    // alert(inputBox);
    var http ;
    
    // check browser

    if(window.XMLHttpRequest){
        // true if i am using ie>8 or chrome or firefox , safari , opera.

        http = new XMLHttpRequest();
    }else{
        // if browser version is ie 5 ,6 
        http = new ActiveXObject('Microsoft.XMlHTTP');
    }

    http.onreadystatechange = function(){
        
        if(http.readyState == 4 && http.status == 200){
            document.getElementById('result').innerHTML = http.responseText;
        }
    }


    // make connection
    // http.open(HttpRequest , url , async)
    // HTTPRequest : GET/POST
    // path where you want to send data.
    // Asyn : true(Asynchronus) | false(synchronous) 
    http.open('GET','data.php?v='+name,true);

    // send request
    http.send();
};