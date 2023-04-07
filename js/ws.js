
const connect = (id) => {
    // ambil data server yang open
    console.log(id)
        ws = new WebSocket(`ws://89.117.54.16:4400?token=${id}`);
        ws.onopen = () => {
            console.log('connect')
            handle(ws)
            ws.send('status')
            ws.send('info')
        }

        ws.onmessage=(ev)=>{
            try{
                const data=JSON.parse(ev.data)
                console.log(data)
                switch(data.type){
                    case 'qr':
                                $('#qrcode').html(
                                    `<img src="${data.data}"/>`
                                )
                                break;
                    case 'upload':
                    $('#progressBarImage').attr('value', "0");
                    const files = $(`#${fileId}`).prop('files')
                    if(files.length > 0){
                        const blob = files[0]
                        ws.send(JSON.stringify({
                            "cmd" : 1,
                            "data" : blob.name,
                            "size": blob.size,
                            "nohp": data.data.nohp,
                            "text": data.data.text,
                            "model": data.data.model,
                            "mimetype": data.data.mimetype
                        }));
                        const BYTES_PER_CHUNK = data.data.chunk;

                        const SIZE = blob.size;

                        var start = data.data.start;
                        var end = BYTES_PER_CHUNK;

                        while (start < SIZE) {

                            if ('mozSlice' in blob) {
                                var chunk = blob.mozSlice(start, end);
                            } else if ('slice' in blob) {
                                    var chunk = blob.slice(start, end);
                            } else {
                                var chunk = blob.webkitSlice(start, end);
                            }

                            ws.send(chunk);

                            start = end;
                            end = start + BYTES_PER_CHUNK;
                        }

                        ws.send(JSON.stringify({
                            "cmd" : 2,
                            "data" : blob.name,
                            "nohp": data.data.nohp,
                            "text": data.data.text,
                            "model": data.data.model
                        }));
                    }
                                break;
                    default:
                        break;
                }
            }
            catch(e){
                console.log(e)
            }
        }
        ws.onclose = () => {
            ws = null
        }

        // event websocket ketika socket error
        ws.onerror = () => {
            ws.close()
        }

}
connect(document.getElementById("idnomor").getAttribute("data"))
function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
   return result;
}
const handle = (ws) => {
    $("#buttonQr").click(function(e){
        e.preventDefault();
        ws.send("start")
        alert("SELAMAT ANDA BERHASIL LOGIN")
    })
    $("#kirim-pesan").click(function(e){
        e.preventDefault();
        nohp=$("#selectpickerBasic").val()
        text=$("#autosize-demo").val()
        ws.send(JSON.stringify(
            {
                "model": "text",
                "type": "send",
                "nohp": nohp,
                "text": text
            }, null, 2
        ))
    })
    $('#button-image').click(function (e) { 
        e.preventDefault();
        const files = $('#formFile').prop('files')
        fileId = 'formFile'
        
        const nohp = $('#selectpickerBasic').val();
        const text = $('#autosize-demo').val();
        if(files.length > 0){
            const blob = files[0]
            const fsize = blob.size;
            const file = Math.round((fsize / 1024));
            if(file > 8000){
                alert('size file terlalu besar, maksimal 8 MB')
                return
            }
            console.log('gas')
            ws.send(JSON.stringify(            {
                "type": "prepare-upload",
                "file": "${blob.name}",
                "size": blob.size,
                "nohp": nohp,
                "text": text,
                "model": "image"
            }, null, 2))
        }
    });

    $('#button-doc').click(function (e) { 
        e.preventDefault();
        const files = $('#formFile1').prop('files')
        fileId = 'formFile1'
        const nohp = $('#selectpickerBasic1').val();
        if(files.length > 0){
            const blob = files[0]
            const fsize = blob.size;
            const file = Math.round((fsize / 1024));
            if(file > 8000){
                alert('size file terlalu besar, maksimal 8 MB')
                return
            }
            console.log('gas')
            ws.send(JSON.stringify(
                {
                    "type": "prepare-upload",
                    "file": blob.name,
                    "size": blob.size,
                    "nohp": nohp,
                    "model": "document",
                    "mimetype": blob.type
                }, null, 2
            ))
        }
    });

    $('#button-list').click(function(e){
        e.preventDefault()
        const nohp = $('#selectpickerBasic1').val();
        const btext = $('#defaultFormControlInput1').val();
        const idlist=Math.floor(Math.random()*101)
        const text = $('#autosize-demo1').val();
        const titles = $("#creditCardMask1").val()
        const ress = $("#creditCardMask2").val()
        const id = makeid(10)
        const rows = []
        const auto = []
        rows.push({
            "title": titles,
            "rowId": `${idlist}]${id}`
        })
        auto.push({
            id: id,
            reply: {
                text: ress
            },
            file: null
        })
        console.log("GAS")
        ws.send(JSON.stringify(
            {
                "type": "send",
                "nohp": nohp,
                "id": idlist,
                "model": "list",
                "sections": [
                    {
                        "title": "",
                        "rows": rows
                    }
                ],
                "auto": auto,
                "btext": btext,
                "text": text
            }
        ), null, 2)
    })

    $('#button-respons').click(function (e) { 
        e.preventDefault();
        const nohp = $('#selectpickerBasic2').val();
        const text = $('#autosize-demo2').val();
        const bts = $('#creditCardMask3').val();
        const ress = $('#creditCardMask4').val();
        const id = Math.floor(Math.random()*101)
        const ids = makeid(10)
        const buttons = []
        const auto = []
        buttons.push({
            buttonId: `${id}]${ids}`,
            buttonText: {
                displayText: bts
            },
        })
        auto.push({
            id: ids,
            reply: {
                text: ress
            },
            file: null
        })

        if(buttons.length > 0){
            console.log(JSON.stringify(buttons, null, 2))
            console.log(JSON.stringify(auto, null, 2))
            ws.send(JSON.stringify(
                {
                    "type": "send",
                    "nohp": nohp,
                    "id": id,
                    "model": "button",
                    "buttons": buttons,
                    "auto": auto,
                    "text": text
                }
            ), null, 2)
        }
    });
    $('#button-copy').click(function (e) { 
        e.preventDefault();
        const nohp = $('#selectpickerBasic3').val();
        const text = $('#autosize-demo3').val();
        const btext = $('#creditCardMask5').val()
        const copy = $('#creditCardMask6').val();
        ws.send(JSON.stringify(
            {
                "type": "send",
                "nohp": nohp,
                "model": "button-copy",
                "textCopy": copy,
                "btext": btext,
                "text": text
            }
        ), null, 2)
    });

    $('#button-link').click(function (e) { 
        e.preventDefault();
        const nohp = $('#selectpickerBasic4').val();
        const text = $('#autosize-demo4').val();
        const btext = $('#creditCardMask7').val()
        const link = $('#creditCardMask8').val();
        ws.send(JSON.stringify(
            {
                "type": "send",
                "nohp": nohp,
                "model": "button-link",
                "url": link,
                "btext": btext,
                "text": text
            }
        ), null, 2)
    });

    $('#location').click(function (e) { 
        e.preventDefault();
        const nohp = $('#selectpickerBasic').val();
        const degreesLatitude = $('#lat').val();
        const degreesLongitude = $('#lon').val();
        ws.send(JSON.stringify(
            {
                "model": "location",
                "type": "send",
                "nohp": nohp,
                "degreesLatitude": degreesLatitude,
                "degreesLongitude": degreesLongitude
            }, null, 2
        ))
    });


}
