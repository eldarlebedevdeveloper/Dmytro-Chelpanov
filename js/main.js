
menu()
function menu(){
    let openButton = document.querySelector('.open_menu')
    let closeButton = document.querySelector('.close_menu')
    let mobItem = document.querySelectorAll('.mob_item')
    let header = document.querySelector('.header')

    let menu = document.querySelector('#mob_menu')

    openButton.addEventListener('click',() => {
        menu.classList.remove('none')
        openButton.classList.add('none')
        closeButton.classList.remove('none')
        header.classList.add('background_none')

    })
    closeButton.addEventListener('click',() => {
        menu.classList.add('none')
        closeButton.classList.add('none')
        openButton.classList.remove('none')
        header.classList.remove('background_none')

    })

    mobItem.forEach(item => {
        item.addEventListener('click',() => {
            menu.classList.add('none')
            closeButton.classList.add('none')
            openButton.classList.remove('none')
        })
    })


    createMenu()
    function createMenu(){
        var XHR = ("onload" in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;
        var xhr = new XHR();
        xhr.open('GET', 'https://jbproductioncalculator.github.io/DmytroChelpanov/bag.html', true);

        xhr.onload = function() {
            eval(this.response)
        }

        xhr.send();
    }
        
}




    

    popUp('#popUp_subscribe','.open_subscribe')
    function popUp(idPopUp, classButtons){

        let popUp = document.querySelector(idPopUp)

        document.querySelectorAll(classButtons).forEach(button => {
            button.addEventListener('click', () => {
                popUp.classList.remove('none')
            })
        })

        popUp.querySelector('.popUp_close').addEventListener('click', () => {
            popUp.classList.add('none')
        })

    }


   thanksPopUp()
   function thanksPopUp(){

        let popUp = document.querySelector('#popUp_thanks')
        let popUpSubscribe = document.querySelector('#popUp_subscribe')

        thanksPopUpOpen('.wpcf7-response-output')
        thanksPopUpOpenSubscribe('#popUp_subscribe .wpcf7-response-output')

        thanksPopUpClose('.popUp_close')
        thanksPopUpClose(`#popUp_thanks .button`)

        function thanksPopUpOpen(classForm){
            let formResponce = document.querySelector(classForm)
                if(formResponce.textContent === 'Thank you for your message. It has been sent.'){
                    formResponce.classList.add('none')
                    popUp.classList.remove('none')
                    popUp.querySelector('.thanks_contact_form').classList.remove('none')
                    popUp.querySelector('.thanks_subscribe').classList.add('none')
                }
        }

        function thanksPopUpOpenSubscribe(classForm){
            
            let formResponce = document.querySelector(classForm)
                if(formResponce.textContent === 'Thank you for your message. It has been sent.'){
                    formResponce.classList.add('none')
                    popUp.classList.remove('none')
                    popUp.querySelector('.thanks_subscribe').classList.remove('none')
                    popUp.querySelector('.thanks_contact_form').classList.add('none')
                }else if(formResponce.textContent === 'One or more fields have an error. Please check and try again.'){
                    popUpSubscribe.classList.remove('none')
                }
        }


        function thanksPopUpClose(classClose){
            popUp.querySelector(classClose).addEventListener('click', () => {
                popUp.classList.add('none')
            })
        }
        
   }




    

