<?php
function head()
{
?>
    <?php include("../../head.php"); ?>
    <script src="../Assets/jquery-3.5.1.min.js"></script>
    <script src="Assets/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
<?php
}

function afficher()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php echo head(); ?>
    </head>
<?php
}

function faq()
{

    echo afficher();

?>

    <body>
        <?php
         include("../../Templates/Bases/navbarDev.php");

         include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container faq-section">
            <!-- ***** FAQ Start ***** -->
            <div class="col-md-6 m-auto">
                <div class="faq-title text-center pb-3">
                    <h2>FAQ</h2>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <div class="faq accordion accordion-flush" id="all-card">
                    <div class="card card-faq accordion-item">
                        <div class="card-header accordeon-item" id="faqHeading-1">
                            <div class="faq-title mb-0">
                                <div class="row">
                                    <div class="col-1">
                                        <span class="badge">1</span>
                                    </div>
                                    <div class="col accordion-header ">
                                        <section class="accordion-button w-100 h-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: rgba(255,255,255,0); border:none;">
                                            <p>Comment s'inscrire à mission ?</p>
                                        </section>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Deuxième question -->
                    <div class="card card-faq accordion-item">
                        <div class="card-header accordeon-item" id="faqHeading-1">
                            <div class="faq-title mb-0">
                                <div class="row">
                                    <div class="col-1">
                                        <span class="badge">2</span>
                                    </div>
                                    <div class="col accordion-header ">
                                        <section class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="background-color: rgba(255,255,255,0); border:none;">
                                            <p>Comment fonctionne une mission à distance ?</p>
                                        </section>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Troisième question -->
                    <div class="card card-faq accordion-item">
                        <div class="card-header accordeon-item" id="faqHeading-1">
                            <div class="faq-title mb-0">
                                <div class="row">
                                    <div class="col-1">
                                        <span class="badge">3</span>
                                    </div>
                                    <div class="col accordion-header ">
                                        <section class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="background-color: rgba(255,255,255,0); border:none;">
                                            <p>Comment ça se passe avec la covid19 ?</p>
                                        </section>
                                    </div>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quatrième question -->
                    <div class="card card-faq accordion-item">
                        <div class="card-header accordeon-item" id="faqHeading-1">
                            <div class="faq-title mb-0">
                                <div class="row">
                                    <div class="col-1">
                                        <span class="badge">4</span>
                                    </div>
                                    <div class="col accordion-header ">
                                        <section class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="background-color: rgba(255,255,255,0); border:none;">
                                            <p>Comment financer mon voyage ?</p>
                                        </section>
                                    </div>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cinquième question -->
                    <div class="card card-faq accordion-item">
                        <div class="card-header accordeon-item" id="faqHeading-1">
                            <div class="faq-title mb-0">
                                <div class="row">
                                    <div class="col-1">
                                        <span class="badge">5</span>
                                    </div>
                                    <div class="col accordion-header ">
                                        <section class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="background-color: rgba(255,255,255,0); border:none;">
                                            <p>Combien de temps prévoir pour une mission ?</p>
                                        </section>
                                    </div>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("../../Templates/Bases/footer.php")
        ?>
    </body>

    </html>
<?php
}
?>