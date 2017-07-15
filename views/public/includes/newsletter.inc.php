<section id="newsletter">
    <?php
    Lead::CadastraLead();
    ?>
    <div class="container">
        <h2 class="col-sm-12 text-center">CADASTRE-SE NO FORMULÁRIO<br/>
            ABAIXO E RECEBA NOSSAS NOVIDADES</h2>

        <form method="post" action="#newsletter">
            <div class="col-sm-5">
                <input type="text" name="nome" class="form-control form-bro" placeholder="Nome" required="required" />
            </div>
            <div class="col-sm-5">
                <input type="email" name="email" class="form-control form-bro" placeholder="E-mail" required="required" />
            </div>
            <div class="col-sm-2">
                <input type="submit" class="btn btn-bro" name="cadastraLead" value="Cadastrar" />
            </div>
        </form>
    </div>
</section>