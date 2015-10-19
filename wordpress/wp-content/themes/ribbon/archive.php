<header class="page-header">
<h1><?php
if (is_day()) :
_e('Daily Archives: ', 'generaltheme');
the_time('l, F j, Y');
elseif (is_month()) :
_e('Monthly Archives: ', 'generaltheme');
the_time('F Y');
elseif (is_year()) :
_e('Yearly Archives: ', 'generaltheme');
the_time('Y');
else :
_e('Archives', 'generaltheme');
endif;
?></h1>
</header>