

<script type="text/javascript">
  function loadlink(){
    $('#links').load('load.php',function () {
         $(this).unwrap();
    });
}
loadlink();

setInterval(function(){
    loadlink() 
}, 5000);
</script>



<script>

function callback(response) {
	 $('#add-button').click( function() {
	   $.get( this.href, data, callback);
	 }
 }


</script>


<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>