<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

<a href="#" id="search-button"><span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span></a>
		<label>

			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit">
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>

</form>

<!-- <form role="search" method="get" class="search-form-nav" action="">
		<button class="search-submit search-submit-nav">
			<span class="search-icon" aria-hidden="true">
			<i class="fa fa-search nav-search-icon"></i>
			</span>
			<span class="screen-reader-text"</span>
		</button>

	<label>
	    <input type="search" class="search-field-nav" placeholder="Type and hit enter..." value="" name="s" title="Search for:" />
	</label>
</form> -->