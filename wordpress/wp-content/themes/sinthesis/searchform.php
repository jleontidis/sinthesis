<form method="get" id="searchform" class="search-form" action="<?php echo home_url(); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" class="s" value="Αναζήτηση..." onblur="if (this.value == '') {this.value = 'Αναζήτηση...';}" onfocus="if (this.value == 'Αναζήτηση...') {this.value = '';}" >
		<button type="submit" class="btn btn-search" onclick="if(this.value=='Αναζήτηση...')this.value='No results were found';"><i class="fa fa-search"></i></button>
	</fieldset>
</form>
