window.addEventListener('load', function () {

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

    select.addEventListener('click', toggleUnroll);
    items.forEach(function (item) {
        item.addEventListener('click', makeSelected)
    })
});