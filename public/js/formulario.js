(function(){
    var form = document.formulario_registro,
        element = form.elements

    var enviar = function(){

        if(!validarInputs()){
            console.log("Falta validar")
            e.preventDefault()
        }     
        console.log("Datos enviados")
        e.preventDefault()
    }

    var focusInput = function(){
        this.parentElement.children[1].className = "label active"
        this.parentElement.children[0].className = this.parentElement.children[0].className.replace(" error", "")
    }

    var blurInput = function(){
        if(this.value <= 0){
            this.parentElement.children[1].className =  "label"
            this.parentElement.children[0].className = this.parentElement.children[0].className + " error"
        }
    }
    form.addEventListener("submit", enviar)

    for( var i = 0; i < element.length; i++){
        if(element[i].type == "text" || element[i].type == "email" || element[i].localName == "textarea"){
            element[i].addEventListener("focus", focusInput)
            element[i].addEventListener("blur",blurInput)
        }
    }
}())