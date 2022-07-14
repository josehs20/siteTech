

function pegaArquivos() {
    var arquivos = $('#arquivos')[0].files
    $("#olArquivos").empty();
    for (var i = 0; i < arquivos.length; i++) {
        //  console.log(arquivos[i].name);

        $("#olArquivos").append('<li class="list-group-item">' + arquivos[i].name + '</li>');

    }

    return arquivos;
}

$(function () {
    $('form[id="uploadArquivos"]').submit(function (event) {
        event.preventDefault();

        var divProgress = document.getElementById('divProgress')
        var progress = document.getElementById('progress')
        var inputFile = document.getElementById('arquivos')
        var porcentoProgress = document.getElementById('porcentoProgress')
        var alert = document.getElementById('divAlert')

        let formData = new FormData();
        var files = $('#arquivos')[0].files
        var sumSize = 0;
        for (let i = 0; i < files.length; i++) {
            sumSize = sumSize + files[i].size

            console.log(files[i]);
            formData.append("files[]", files[i]);
        }
        if (sumSize > 249000000) {
            alert.classList.remove('d-none')
            alert.innerHTML =  'Tamanhamo máximo para upload <b>249 MB</b>'

            return
        }else{
            alert.classList.add('d-none')
        }
        let xhr = new XMLHttpRequest();

        xhr.upload.onloadstart = function (e) {
            divProgress.classList.remove("d-none")
            // progress.style.width = 0
            porcentoProgress.innerText = '0%'
            inputFile.disabled = true;
        };

        xhr.upload.onprogress = function (e) {
            var ptc = e.loaded / e.total * 100;
            ptc = ptc.toFixed(2)
          
            porcentoProgress.style.marginLeft = ptc - 7 + '%';
            porcentoProgress.innerText = ptc + '%';
            progress.style.width = ptc + '%';

        };

        xhr.upload.onloadend = function (e) {
            inputFile.disabled = false;
        };

        xhr.onload = function () {

            if (xhr.status === 200) {
                var response = xhr.response
                divProgress.classList.add("d-none")
                alert.classList.remove('d-none')
                alert.innerHTML =  'Upload concluido com sucesso'
                
            }else{
                alert.classList.remove('d-none')
                alert.innerHTML =  'Conexão com FTP Perdida verifique a conexão'
            }

        };

        xhr.open('POST', '/uploadUtils', true);
        xhr.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
        xhr.setRequestHeader("enctype", 'multipart/form-data'); // or application/json
        xhr.setRequestHeader("X-CSRF-Token", $('meta[name="csrf-token"]').attr('content'));

        xhr.send(formData);


    });
})
