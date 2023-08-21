//registered

document.onreadystatechange = function (){
    if (document.readyState !== 'complete'){
        document.querySelector('body').style.visibility = 'hidden';
        document.querySelector('#preloader').style.visibility = 'visible'

    }else {
        document.querySelector('body').style.visibility = 'visible';
        document.querySelector('#preloader').style.display = 'none'
    }
}



/*$(document).ready(function (){
    console.log(document.readyState)
    console.log(
        'sdlfs'
    )
})*/


var form = $('#regform')
form.submit((e)=>{
    e.preventDefault()
    document.querySelector('#regbtn').style.backgroundColor = '#FFffff'
    document.querySelector('#regbtn').style.color = '#000000'
    $.ajax({
        type: "POST",
        data: form.serialize(),
        url: 'http://127.0.0.1:8000/authenticate',
        success: function (data){

            if (data == 'ok') {
                console.log('registered')
               document.querySelector('#regbtn').style.color = '#3B7DDD'
                alert('you have successfully logged in');
                return window.location.replace('http://127.0.0.1:8000')
            }
            else {
                alert('incorrect user and password')
                document.querySelector('#regbtn').style.backgroundColor = '#3B7DDD'

            }
        }
    })
})
/*
NB: this is not how to write ajax function
form.ajaxSubmit({
    type: "POST",
    data: form.serialize(),
    url: 'http://127.0.0.1:8000/authenticate',
    success: function (data){
        if (data == 'ok'){
            console.log('registered')
            alert('you have successfully logged in');}
        else{
            alert('incorrect user and password')
    }
    }


})
*/

