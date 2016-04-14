<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->e($title) ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();><?= $this->e($title) ?></a>
        </li>
        <li>
            <a href="#top" onclick=$("#menu-close").click();>Home</a>
        </li>
	    <li>
		    <a href="#services" onclick=$("#menu-close").click();>Team</a>
	    </li>
        <li>
            <a href="#about" onclick=$("#menu-close").click();>About</a>
        </li>
        <li>
            <a href="#questions" onclick=$("#menu-close").click();>Questions</a>
        </li>
        <li>
            <a href="#sources" onclick=$("#menu-close").click();>Sources</a>
        </li>
	    <li>
		    <a href="#intGroups" onclick=$("#menu-close").click();>Target Market</a>
	    </li>
	    <li>
		    <a href="#simPro" onclick=$("#menu-close").click();>Competition</a>
	    </li>
	    <li>
		    <a href="#corpus" onclick=$("#menu-close").click();>Corpus</a>
	    </li>
	    <li>
		    <a href="#training" onclick=$("#menu-close").click();>Training</a>
	    </li>
	    <li>
		    <a href="#testing" onclick=$("#menu-close").click();>Testing</a>
	    </li>
        <li>
            <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
	    <div id="header2">
<!--			<div id="header3">-->
	            <h1><?= $this->e($title) ?></h1>
	            <h3><?= $this->e($randomQuote) ?></h3>
<!--			</div>-->
	    </div>
        <br>
        <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
    </div>
</header>


<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2> The Drug Addicts</h2><small> (Members of the team) </small>
                <hr>
                <div class="row">
                    <?php foreach ($users as $user): ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <img src="<?= $user->getAvatar() ?>" class="img-circle" style="width: 170px; height: 200px;"
                                     alt="Circular Image"/>
                                <h4>
                                    <strong><?= $this->e($user->getFName() . ' ' . $user->getLName()) ?></strong>
                                </h4>

                                <p><?= $this->e($user->getRole()) ?></p>
                                <a href="<?= $this->e($user->getWebsite()) ?>" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<!-- About -->
<section id="about" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 style="padding-bottom:5px; border-bottom: 1px solid lightgray;"> About The App </h2>

				<h3 style="background-color: lightsalmon; "> Food substances and their potentially harmful effects </h3>

				<ul style="text-align: left;" class="list-group">
					<li class="list-group-item">Substances that are linked with the development of different types of cancer (e.g.
						processed red meat has been liked with intestinal cancer etc.)</li>
					<li class="list-group-item">Substances that are considered cancerous and should be avoided (e.g. certain types of
						artificial colorings or food preservatives that could be found in processed food labels)</li>
					<li class="list-group-item">Substances that should be avoided by people with diabetes or high blood sugar levels</li>
					<li class="list-group-item">Substances that should not be consumed when pregnant - trying to have a baby
						breastfeeding</li>
					<li class="list-group-item">Substances that should be consumed only in moderate amounts</li>
				</ul>

			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>


<!-- Questions -->
<section id="questions" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h3 style="background-color: lightblue; "> Potential Questions To Be Answered </h3>

				<ul style="text-align: left;" class="list-group">
					<li class="list-group-item">1) Is ingredient X harmful for children? </li>
					<li class="list-group-item">2) In what quantity is ingredient X harmful?</li>
					<li class="list-group-item">3) Is ingredient X safe for people with diabetes?</li>
					<li class="list-group-item">4) Which ingredients are forbidden in EU but allowed in US?</li>
					<li class="list-group-item">4) Which ingredients are benefitial to disease X?</li>
					<li class="list-group-item">5) Which foods should I eat to increase my supply of ingredient X?</li>
					<li class="list-group-item">6) Is ingredient X associated with languor/insomnia/disease?</li>
				</ul>

			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>


<!-- Sources -->
<section id="sources" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h3 style="background-color: lightcoral; "> Where We Can Look For Content </h3>

				<ul style="text-align: left;" class="list-group">
					<a href="http://www.fda.gov/downloads/Food/FoodScienceResearch/ToolsMaterials/UCM430363.pdf"><li class="list-group-item">Definitions and concerns regarding bacteria and other stuff </li></a>
					<a href="http://www.fda.gov/Food/FoodborneIllnessContaminants/PeopleAtRisk/ucm089629.htm"><li class="list-group-item">Dos and dont's for feeding infants</li></a>
					<a href="http://www.fda.gov/Food/FoodborneIllnessContaminants/PeopleAtRisk/ucm312565.htm"><li class="list-group-item">Food safety for people with cancer</li></a>
					<a href="http://www.fda.gov/Cosmetics/ProductsIngredients/Products/ucm228898.htm"><li class="list-group-item">Ingredients to look for when choosing hair products</li></a>
					<a href="http://www.fda.gov/ForConsumers/ConsumerUpdates/ucm466588.htm"><li class="list-group-item">Harmful Dietary Supplements</li></a>
				</ul>

			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>


<!-- IntGroups -->
<section id="intGroups" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h3 style="background-color: yellowgreen; "> Target Market </h3>

				<ul style="text-align: left;" class="list-group">
					<li class="list-group-item">People with high risk for certain diseases (ex: diabetes, cholesterol, etc.)</li>
					<li class="list-group-item">Mothers, future mothers, parents, etc.</li>
					<li class="list-group-item">People who want to “avoid” cancer or other diseases.</li>
					<li class="list-group-item">People who consume large amounts of processed/ready-made foodd (maybe because they work long hours) but do not necessarily know all their ingredients</li>
					<li class="list-group-item">Athletes and people who need to follow diets and/or take food supplements.</li>
				</ul>

			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>


<!-- Similar Products -->
<section id="simPro" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h3 style="background-color: lightseagreen; "> Similar Products </h3>
				<h5> (Some of them can read bar codes and identify the product)</h5>

				<hr>

				<ul style="text-align: left;" class="list-group">
					<a href="http://ecosalon.com/5-mobile-apps-for-a-non-toxic-lifestyle/
"><li class="list-group-item">Dirty Dozen</li></a>
					<a href="http://www.prevention.com/beauty/natural-beauty/new-beauty-apps-make-identifying-toxic-ingredients-simple"> <li class="list-group-item"> Think dirty</li></a>
					<a href="http://www.minutewonder.com/decode-the-list-of-ingredients-top-5-apps/"><li class="list-group-item">Fooducate</li></a>
				</ul>

				<p style="text-align: left; font-size: 1em;" class="table table-bordered"> We need to work on how to differentiate our app from these products. An initial idea is that the user will be able to take a picture of the ingredients lists and our app will report the ones that are harmful to him based on his preferences (diet, health, etc.)</p>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>

<!-- Corpus -->
<section id="corpus" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h3 style="background-color: pink; "> Corpus </h3>
				<h5> Number of documents collected: 50 </h5>

				<hr>

				<h4 style="text-align: left;"><b>Due to time limitations, we focused on:</b></h4>
				<ul style="text-align: left;" class="list-group">
					<li class="list-group-item">Diabetes</li>
					<li class="list-group-item">Blood Pressure</li>
					<li class="list-group-item">Food Additives</li>
					<li class="list-group-item">Pregnancy - Breastfeeding</li>
					<li class="list-group-item">Infants & Young Children</li>
				</ul>

				<h4 style="text-align: left;"><b>Types of Documents Collected:</b></h4>
				<ul style="text-align: left;" class="list-group">
					<li class="list-group-item">HTML</li>
					<li class="list-group-item">PDF</li>
				</ul>

				<h4 style="text-align: left;"><b>Sources:</b></h4>
				<ul style="text-align: left;" class="list-group">
					<li class="list-group-item">World Health Organization Regional Office Europe</li>
					<li class="list-group-item">National Center for Chronic Disease Prevention</li>
					<li class="list-group-item">International Baby Food Action Network</li>
					<li class="list-group-item">World Health Organization Europe - UNICEF</li>
					<li class="list-group-item">US Department of Health and Human Services </li>
				</ul>

			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>

<!-- Training -->
<section id="training" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h3 style="background-color: royalblue; "> Training </h3>
				<h5> Number of Questions Used in 1st Training: 421 </h5>

				<hr>

				<h4 style="text-align: left;"><b>Process Followed, 1 Question + 3 Variations:</b></h4>
				<ul style="text-align: left;" class="list-group">
					<li class="list-group-item">Question 1: “What are the consequences of alcohol exposure during pregnancy?” <br/>
						Question 2: “What could happen to my baby if I drink when pregnant?”  <br/>
						<br/>
						<i>Note:</i>When trying to train Watson on question 2, Question 1 did not appear as similar question in list Watson gave. The solution we found was  to use transitional questions to get to question 2. <br/>
						Ex: “What are the consequences of drinking when pregnant?”
						<br/>(have some common words to both questions)
					</li>
					<li class="list-group-item">
						Types of Questions Used: <br/>
						“I smoke, should I stop breastfeeding?” <br/>
						“Can diabetic people have soft cheese?” <br/>
						“How can I reduce my risk of having high blood pressure?” <br/>
						“What foods contain trans fats?” <br/>
						“Where can vitamin A be found?” <br/>
						“Should I take vitamin D supplements?” <br/><br/>
						<i>Comments:</i> Easier to train if 1st question is close to phrasing of original text where answer is found.
					</li>
				</ul>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>

<!-- Testing -->
<section id="testing" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h3 style="background-color: forestgreen; "> Testing </h3>
				<h5> Total Number of New Questions Used: 80 </h5>
				<hr>
				<ul style="text-align: left;" class="list-group">
					<li class="list-group-item">@1 Success Rate: 0.505</li>
					<li class="list-group-item">@3 Success Rate: 0.543</li>
					<li class="list-group-item">Problem with Vitamins:<br/>
						Watson could not “tell” difference between Vitamin A, Vitamin D, Vitamin C etc. Matched word Vitamin in most cases and ignored the letters.
					</li>
					<li class="list-group-item">Problem with questions that contained word “drink” but did not refer to alcohol: they were all matched to alcohol.<br/>
						ex: “Can I drink coffee when pregnant?”

					</li>
					<li class="list-group-item">Problem with Index contained in some documents.
					</li>
					<li class="list-group-item">Problem with very large questions.
					</li>
				</ul>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>


<!-- Footer -->
<footer id="contact" style="background-color: rgba(100,100,100, 0.3);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h3><strong><?= $this->e($title) ?></strong>
                </h3>

                <p>6 Gravias Street<br>Athina 153-42</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> 210 - 600 9800 </li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">support@drugTeam.com</a>
                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                    </li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy; DrugTeam 2016</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</body>

</html>
