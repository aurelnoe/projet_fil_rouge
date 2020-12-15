<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>FAQ</title>
</head>

<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="container faq-section">
        <!-- ***** FAQ Start ***** -->
        <div class="col-md-6 m-auto">
            <div class="faq-title text-center pb-3">
                <h2>FAQ</h2>
            </div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="faq accordion accordion-item" id="all-card">
                <div class="card card-faq accordion-item">
                    <div class="card-header accordeon-item" id="faqHeading-1">
                        <div class="faq-title mb-0">
                            <div class="row">
                                <div class="col-1">
                                    <span class="badge">1</span>
                                </div>
                                <div class="col accordion-header ">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: rgba(255,255,255,0); border:none;">
                                        <p>Comment s'inscrire à mission ?</p>
                                    </button>
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
                <div class="card card-faq">
                    <div class="card-header" id="faqHeading-2">
                        <div class="faq-title mb-0">
                            <div class="row">
                                <div class="col-1">
                                    <span class="badge">2</span>
                                </div>
                                <div class="col">
                                    <p>Comment s'inscrire à mission ?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-faq">
                    <div class="card-header" id="faqHeading-3">
                        <div class="faq-title mb-0">
                            <div class="row">
                                <div class="col-1">
                                    <span class="badge">3</span>
                                </div>
                                <div class="col">
                                    <p>Comment s'inscrire à mission ?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-faq">
                    <div class="card-header" id="faqHeading-4">
                        <div class="faq-title mb-0">
                            <div class="row">
                                <div class="col-1">
                                    <span class="badge">4</span>
                                </div>
                                <div class="col">
                                    <p>Comment s'inscrire à mission ?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-faq">
                    <div class="card-header" id="faqHeading-5">
                        <div class="faq-title mb-0">
                            <div class="row">
                                <div class="col-1">
                                    <span class="badge">5</span>
                                </div>
                                <div class="col">
                                    <p>Comment s'inscrire à mission ?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../Bases/footer.php")
    ?>
</body>

</html>