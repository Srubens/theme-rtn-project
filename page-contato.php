<?php  
   /**
    * Template Name: Contato
    */
   get_header();
?>

<div class="container">
   <div class="page_contato">
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-6">
                  <header class="page_contato_header" >
                     <h1>Entre em contato conosco tire suas duvidas!</h1>
                  </header>
                  <p>
                        Mussum Ipsum, cacilds vidis litro abertis. 
                        Aenean aliquam molestie leo, vitae iaculis nisl. 
                        Quem num gosta di mim que vai caçá sua turmis! 
                        Quem num gosta di mé, boa gentis num é.  
                        Per aumento de cachacis, eu reclamis.
                        </p>
               </div>
               <div class="col-md-6">
                  <form class="form_page_contato" action="" method="">
                     <div class="form-group">
                        <input class="form-control" type="nome" placeholder="Meu Nome" required />
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="email" placeholder="Meu Email" required />
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="titulo" placeholder="Titulo da Mensagem" required />
                     </div>
                     <textarea class="form-control" name="" id="" cols="30" rows="10" required>
                     </textarea>
                     
                     <button class="btn_contact btn btn-success">Enviar</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<?php  
   get_footer();
?>