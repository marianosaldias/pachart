	<!--
	{blog_entries}
	    <h3>{title}</h3>
	    <p>{text}</p>
	    <a href="http://localhost/pachart/index.php/blog/view/{slug}"  class="btn linktonote m-b-1">View article<i class="fa fa-angle-right" aria-hidden="true"></i></a>
	    <hr>
	{/blog_entries}
-->

	{blog_entries}
    	<tr>
    		<td class="col-md-12">
    			<h3>{title}</h3>
    			<h5 class="m-b-2">{fecha} | <b>{nombre} {apellido}</b></h5>
        		{intro}
        		<br />
        		<a href="http://localhost/pachart/index.php/blog/view/{slug}" class="btn linktonote m-b-1">Leer artículo <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    		</td>
    	</tr>
	{/blog_entries}
		                	
