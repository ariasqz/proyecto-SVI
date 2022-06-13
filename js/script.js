const $openClose = document.getElementById("open-close"),
      $aside = document.getElementById("aside");

$openClose.addEventListener("click",()=>{
    $aside.classList.toggle("desplegar")
})


let listElements = document.querySelectorAll('.list__button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{
        
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});