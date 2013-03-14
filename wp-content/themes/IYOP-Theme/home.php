<?php get_header(); ?>

	
		<div id="left_column">
				<div id="left1" class="heading">
					
					<div class="events heading">
						<h1>UpComing Events</h1>
						<p> Nov. 15
							Discussion
							Media Regulation Policy in Uganda
							ROUNDTABLE DISCUSSION BY THE YOUNG LEADERS THINK TANK</p>

					</div>
					<div id="party_logos">
						
						<div id="Publications" class="heading">
							<h1>Publications </h1>
							<h4> The Guide - Trade and Economic Development in Uganda</h4>
					<p> SPECIAL EDITION ON SOCIAL MARKET ECONOMY AND SUSTAINABLE DEVELOPMENT
						With support from the Konrad-Adenauer-Stiftung the African Centre for Trade and Development (ACTADE) has published a special edition of the magazine "The Guide". The magazine provides a compilation of articles from a wide range</p>
					<a href="#"> Read More</a>

						</div>
					</div>
				</div>
				<div id="left2" class="heading">
					<h1>Latest News</h1>
					<?php query_posts("post_per_page=1"); the_post(); ?> 
					<p> <?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>"> Read More</a>
					<!-- end of latest news-->
					<?php wp_reset_query(); ?>
					<div id="forum"> 
						<h1>Forum</h1>
						<h3> Question of the Day</h3>
						<p> Prof. Tarsis Kabwejere a minister in NRM government says Corruption is really good. This man should resign his position, how in the world can he say that really? We should not tolerant that kind of speech any more. Corruption has destructed this country for sure the citizens have lost hope.</p>
						<div id="Comment_section"></div>
					</div>	<!-- end of forum-->			
				</div><!-- end of left2-->
			</div><!-- end of left column-->
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>