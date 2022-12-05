function a(){
    var input1 = document.getElementById("usuario")
    input1.focus()
    input1.style.fontSize = "18px"
    var label = document.getElementById("label-usuario")
    label.style.fontSize = "13px"
    input1.style.height = "22px"
}

function b(){
    var input1 = document.getElementById("senha")
    input1.focus()
    input1.style.fontSize = "14px"
    var label = document.getElementById("label-senha")
    label.style.fontSize = "13px"
    input1.style.height = "16px"
}

function a2(){
    var label = document.getElementById("label-usuario")
    label.style.fontSize = "20px"
    document.getElementById("h1").focus(undefined)
}

function b2(){
    var label = document.getElementById("label-senha")
    label.style.fontSize = "20px"
    document.getElementById("h1").focus(undefined)
}