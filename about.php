<?php
/* Copyright 2023 Neen S.p.A.*/

$isForm = FALSE;
$activePage = 'About';

require 'header.php';

function RenderTwitterLink($URL)
{
	?>
	<a style="color:#00A3F3" href="<?= $URL ?>" target="_blank">
		<span class="fa-stack fa-1x">
			<i class="fas fa-square fa-stack-2x"></i>
			<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
		</span>
	</a>
	<?php
}

function RenderLinkedInLink($URL)
{
	?>
	<a style="color:#0078B5" href="<?= $URL ?>" target="_blank">
		<span class="fa-stack fa-1x">
			<i class="fas fa-square fa-stack-2x"></i>
			<i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
		</span>
	</a>
	<?php
}

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xl-9 col-lg-11 m-2 pb-4 rounded text-center text-light mx-auto">


			<section class="jumbotron text-center bg-dark border-primary border">
				<div class="container">
					<h1 class="jumbotron-heading">Improve Your DevOps Capability</h1>
					<p class="lead">This online DevOps Maturity Assessment questionnaire will help you understand your
						current strengths and weaknesses and then recommend resources that can support you in taking the
						next steps on your DevOps journey.</p>
					<p>
						<a href="<?= 'section-' . SectionNameToURLName($survey->sections[0]['SectionName']) ?>"
							class="btn btn-primary">Start the Questionnaire</a>
					</p>
				</div>
			</section>

			<!-- Three columns of text below the jumbotron -->
			<div class="row">

				<div class="col-lg-6">
					<span class="fa-stack fa-5x mb-4">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="far fa-chart-bar fa-stack-1x"></i>
					</span>
					<h2>Understand Where You Are</h2>
					<p class="text-justify">Our set of carefully designed questions across 7 different areas will help
						you quickly establish your current level of DevOps maturity.</p>
					<p class="text-justify">You can view the results online as well as downloading them in CSV format
						for more detailed analysis.</p>
				</div><!-- /.col-lg-4 -->

				<div class="col-lg-6">
					<span class="fa-stack fa-5x mb-4">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-shoe-prints fa-stack-1x"></i>
					</span>
					<h2>Identify Your Next Steps</h2>
					<p class="text-justify">For each area we have identified a range of free or commercially available
						books, videos, blog posts, white papers and websites that will help you take the next steps on
						your DevOps journey.</p>
				</div><!-- /.col-lg-4 -->


			</div><!-- /.row -->
		</div><!-- /.col-lg-4 -->
		<div class="row"></div>
		<div class="row">
			<div class="col-lg-12">
				<p align="center"><em>We do not harvest your data and we will not share your results with anyone
						else.</em></p>
			</div>
		</div>

	</div><!-- /.col-lg-8 -->

</div><!-- /.row -->

</div><!-- /.container -->

<?php

require 'footer.php';

?>