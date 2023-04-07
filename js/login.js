let ws = null;
let user = '';
let fileId = ''
const baseUrl = $('#base_url').attr('data');
const saveId = localStorage.getItem('id')

$(document).ready(function () {
    // remove disable button
    
     if(saveId){
        connect(saveId)
        $('#btn-id').attr('disabled', 'true');
        $('#btn-logout').removeAttr('disabled');
     }else{
        $('#btn-id').removeAttr('disabled');
        $('#btn-logout').attr('disabled', 'true');
     }

     // button login
     $('#btn-id').click(function (e) { 
        e.preventDefault();
        const id = $('#input-id').val()
        $('#btn-id').attr('disabled', 'true');
        // save
        localStorage.setItem('id', id)
        connect(id)
    });

    // button logout
    $('#btn-logout').click(() => {
        localStorage.removeItem('id')
        $('#btn-id').removeAttr('disabled');
        $('#btn-logout').attr('disabled', 'true');
    })
});
