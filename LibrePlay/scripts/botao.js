 class MobileNavbar {
    constructor(mobileMenu, navList, navLinks){
      this.mobileMenu = document.querySelector(mobileMenu); //retorna o primeiro elemento do documento
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks); // retorna todos os elementos do documento
      this.activeClass = "active" // para poder referênciar depois o nav-list.active

      this.handleClick = this.handleClick.bind(this);// uma função que faz algo ser referenciado a própria classe, meio que forçadamente.( sem isso não funfa o código)
                                                    // estamos fazendo o this como parametro para se referir a classe em geral, que antes se referia ao botão, e não a classe.
    }

    animateLinks() {
      this.navLinks.forEach((link,index) => { // esse vai pegar cada link individualmen da lista e fazer o seguinte processo:
        link.style.animation            //   animação para o link
          ?(link.style.animation = "")  //    se tem animação, remova essa animação
          : (link.style.animation = `navLinkFade 0.6s ease forwards ${index / 7 + 0.3}s`);  // se não tem animação, adicione essa animação
      }); // ` você usar a acentuação permite botar contas ou variaveis com o ${}

    }

    handleClick(){
      this.navList.classList.toggle(this.activeClass)// Basicamente está chamando a navList, com o parametro classLst (permite usar o toggle), e o toggle faz com que, quando ativado, remove ou inicia novamente uma classe,
                                                    // algo muito usado em botões, no caso como a gente fez a classe do css nav-list.active, seria essa classe que estaria ativando ou desativando.
      this.mobileMenu.classList.toggle(this.activeClass)
      this.animateLinks();
    }

    addClickEvent(){ //add um metodo para a ação de clickar
      this.mobileMenu.addEventListener("click", this.handleClick); // Quando o usuario clickar. o método handleClick vai ser realizado
    }

    init(){ // método para iniciar o evento
      if(this.mobileMenu){ //se mobileMenu existe no documento, vai fazer isso;
        this.addClickEvent();
      }
      return this;
    }
}
  const mobilenavbar = new MobileNavbar(".mobile-menu",".nav-list",".nav-list li",); //Criando o objeto para usar a classe
  mobilenavbar.init(); // chama método
  console.log("yay"); //yay
