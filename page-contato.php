<?php  
   /**
    * Template Name: Contato
    */
   get_header();
?>

<div class="container">
   <div class="page_contato">
      <?php while( have_posts() ): the_post() ?>

      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-6">
                  <header class="page_contato_header" >
                     <h1>Entre em contato com a gente!</h1>
                  </header>
                  <p>Dúvidas, críticas, sugestões ou apenas para tomar um cafezinho? É só entrar em contato!
                  </p>
               </div>
               <div class="col-md-6">
                  <?php the_content(); ?>
                  <!-- <form class="form_page_contato" action="" method="">
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
                  </form> -->
               </div>
            </div>
         </div>
      </div>
      <?php endwhile; ?>
   </div>
</div>


<?php  
   get_footer();
?>