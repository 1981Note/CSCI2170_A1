<?php
	require "includes/header.php";
?>

<main id="pg-main" class="container">
	<!--
		This section contain two articles about featured news with title date and paragraph
	-->
	<section id="featured-news" class="border-bottom">
		<h2>Featured News</h2>
		<article id="f-news1">
			<h3 class="article-title">2021: Seemed more like 2020, but getting better</h3>
			<h4 class="article-date">01 September 2021, Luke Skywalker</h4>
			<img src="img/2021.png" class="img-fluid" alt="Image showing 2020 with the 0 crossed out to show 2021">
			<p class="article-paragraph">Oh gosh, what a year 2020 turned out to be. As we began the new year with excitement and enthusiasm last year, we did not expect how it would eventually turn out to be. The beginning of 2021 seemed to be more of the same, but at the moment, I think we've turned a corner. In this article, Luke Skywalker takes us through some of the 
				<a href="#">key highlights of 2021, compares them with 2020, and talks about bold aspirations for the rest of 2021</a>.</p>
		</article>
		<article id="f-news2">
			<h3 class="article-title">COVID-19: Immunization continues</h3>
			<h4 class="article-date">07 September 2021, Ben Solo</h4>
			<p class="article-paragraph">This is a daily report and updates on the COVID-19 vaccine and immunization here in Nova Scotia.</p>
			<p class="article-paragraph">New confirmed cases: 29</p>
			<p class="article-paragraph">Active cases: 58</p>
			<p class="article-paragraph">Patients in hospital: 2</p>
			<p class="article-paragraph">"We're close to our 75% goal to move to phase 5 in this province. Let's continue to get vaccinated and protect each other."</p>
			<p class="article-paragraph">For more information, visit the Nova Scotia Coronavirus Website and Nova Scotia COVID-19 News Releases Website.</p>
		</article>
	</section>

	<!--
		This section contain one article about education
	-->
	<section id="edu" class="border-bottom">
		<h2>Education</h2>
		<article id="edu1">
			<h3 class="article-title">Opinion: Online teaching vs. emergency remote teaching</h3>
			<h4 class="article-date">12 August 2021, Grogu</h4>
			<p class="article-paragraph">While we may all be operating under the assumption that teaching has quickly transformed into online teaching during this pandemic and that this mode of teaching has not always been the most effective, it may be because of a few different reasons: (a) we are still in the middle of a pandemic and our daily stresses from this experience impact how we experience various things, including classes; (b) this mode of teaching requires additional training, infrastructure and support, and (c) this is still remote teaching in the middle of a pandemic and changes to courses are possible in small increments.</p>
			<p class="article-paragraph">This can lead to frustration among students and helplessness among teachers. In this opinion piece, Grogu writes about the <a href="#">differences between online teaching and emergency remote teaching during a pandemic</a>, and discusses lessons we can take away from our collective experience.</p>
		</article>
	</section>

	<!--
		This section contain one article about Health & Wellness
	-->
	<section id="health" class="border-bottom">
		<h2>Health & Wellness</h2>
		<article id="hw-news1">
			<h3 class="article-title">Opinion: #WearAMask – it is for the others in the community</h3>
			<h4 class="article-date">01 September 2021, Leia Organa</h4>
			<p class="article-paragraph">Masks are useful, mainly because while we may not be symptomatic ourselves, we may still be carrying the coronavirus and unknowingly give it to others. This is an important aspect to remember now that vaccinations are underway, because even after you are vaccinated, and although we have reached around 72% of our population fully vaccinated, you should continue to wear a mask until a large majority of the population has been vaccinated. Follow public health guidelines, physical distance and wear a mask when you’re outside. Remember, we’re all in the same storm but not on the same boat: how this pandemic impacts each of us is very different depending on our individual differences. Let’s honour and respect these differences and support each other. Wear a mask.</p>
		</article>
	</section>
</main>

<?php
	require "includes/footer.php";
?>

<!--
	This website used to divide each section with border-bottom
	URL: https://getbootstrap.com/docs/5.1/utilities/borders/
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021

	This website used to make main responsive
	https://getbootstrap.com/docs/5.1/layout/containers/
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021

	This website used to make image responsive
	https://getbootstrap.com/docs/5.1/content/images/#responsive-images
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021

-->
