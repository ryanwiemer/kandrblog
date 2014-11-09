<?php
/**
 * Search Form Template
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-form__close">X</div>
	<div class="search-form__inner">
			<div class="search-form__container">
				<input type="text" class="search-form__field" autocomplete="off" name="s" id="s" placeholder="Type search term..." />
				<input type="submit" class="search-from__submit" name="submit"value="search" />
				<p class="search-form__prompt">To search type above and press enter</p>
			</div>
	</div>
</form>
