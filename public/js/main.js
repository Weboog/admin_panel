window.addEventListener('load', function () {

    //:::::::::::::::::::::::::::::::::::::::::::::::::://

    const AJAX = {
        get: function (url, callback) {
            let xhr = new XMLHttpRequest();
            xhr.addEventListener('readystatechange', function () {
                if (this.readyState === 4 && this.status === 200){
                    callback(this.responseText);
                }
            });
            xhr.open(
                'GET',
                url,
                true
            );
            xhr.send();
        },
        post: function (url, obj, callback) {
            let xhr = new XMLHttpRequest();
            xhr.addEventListener('readystatechange', function () {
                if (this.readyState === 4 && this.status === 200){
                    callback(this.responseText);
                }
            });
            xhr.open(
                'POST',
                url,
                true
            );
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            let data = '';
            Object.entries(obj).forEach(function (arr) {
                data += arr[0] + '=' + arr[1];
                data += '&';
            });
            xhr.send(data.replace(/&$/ , ''));
        }
    };

    function serialize(form){
        let fd = new FormData(form);
        let data = Object.create({});
        for (let input of fd){
            Object.defineProperty(data, input[0], {
                enumerable: true,
                value: input[1],
                writable: true
            })
        }
        return data;
    }

    //:::::::::::::::::::::::::::::::::::::::::::::::::://
    //LOGIC FOR SELECT OPTION
    let select = document.querySelector('.select');
    let arrow = document.querySelector('.arrow');
    let label = document.querySelector('.label_selected');
    let options = document.querySelector("#select");
    let items = document.querySelectorAll('.option_item');

    function toggleUnroll(e){
        options.classList.toggle('show_options');
        arrow.classList.toggle('rotate_arrow');
    }

    function makeSelected(e){
        label.innerText = this.innerText;
        label.dataset.value = this.dataset.id;
    }

    if (select !== null) {
        select.addEventListener('click', toggleUnroll);
    }
    items.forEach(function (item) {
        item.addEventListener('click', makeSelected)
    });

    //:::::::::::::::::::::::::::::::::::::::::::::::::://
    //LOGIC FOR ADD BUTTONS
    let content = document.querySelector('.content');
    function loadContent(){
        let links = this.href.split('#').pop().split('-');
        let c = links[0];
        let m= links[1];
        AJAX.get(
            c+'/'+m,
            function (data) {
                console.log(data)
            }
        )
    }
    let loaders = document.querySelectorAll('.load_content');
    loaders.forEach(function (loader) {
        loader.addEventListener('click', loadContent);
    })

    //:::::::::::::::::::::::::::::::::::::::::::::::::://
    //ADD APARTMENT
    let addImages = document.querySelector("#gallery");
    let imageContainer = document.querySelector('.sample_images');
    let added = [];
    addImages.addEventListener('change', function () {
        function readImage(file){
            let fr = new FileReader();
            if (/\.(jpe?g)$/i.test(file.name)) {
                if (!added.includes(file.name)) {
                    fr.addEventListener('load', function () {
                        let img = new Image();
                        img.alt = file.name;
                        img.title = file.name;
                        img.src = this.result;
                        imageContainer.appendChild(img);
                        added.push(file.name)
                    });
                    fr.readAsDataURL(file);
                } else {
                    let errorMessage = document.createTextNode('Cette image est déjà sélectionnée.');
                    //imageContainer.appendChild(errorMessage);
                }
            }else {
                let errorMessage = document.createTextNode('Seules les image au format JPG ou JPEG sont autorisées.');
                //imageContainer.appendChild(errorMessage);
            }
        }
        if (this.files){
            [].forEach.call(this.files, readImage);
        }
        console.log(added)
    });




});