function trocar_v1(){
    document.getElementById("v1").style.display = 'block';
    document.getElementById("v2").style.display = 'none';



}
function trocar_v2(){
    document.getElementById("v2").style.display = 'block';
    document.getElementById("v1").style.display = 'none';

}
function aparecer(){
    document.getElementById("fundo").style.display = 'block';
    document.getElementById("html").style.overflowY = 'hidden';
    document.getElementById("html").style.marginRight = '12px';
    document.getElementById("cabeca").style.marginRight = '12px';
    document.getElementById("registro").style.marginRight = '27px';
}
function sair(){
    document.getElementById("fundo").style.display = 'none';
    document.getElementById("html").style.overflowY = 'visible';
    document.getElementById("html").style.marginRight = '0px';
    document.getElementById("cabeca").style.marginRight = '0px';
    document.getElementById("registro").style.marginRight = '15px';
}