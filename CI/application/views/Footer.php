

		<!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
		$(document).ready(function(){
		    $('select').formSelect();
		});
    	$(document).ready(function() {
			$('.tabs').tabs();
		});
		$(document).ready(function() {
            $('.dropdown-trigger').dropdown();
        });
    </script>
    <script type="text/javascript">
        const copyToClipboard = str => {
            const el = document.createElement('textarea');
            el.value = "https://dwarves.iut-fbleau.fr/~eugene/Projet_Wims21_2019/CI/Reponse/formulaire/"+str;
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
        };
    </script>

    	<footer class="page-footer blue darken-3">
		        <div class="container">
		            © Juin 2019 Aurélien Peden - Maxime Eugene
		            <img class="right" style="width:100px;height:60px;" src="<?php echo base_url()?>assets/img/logo_upec.png" alt="">
		        </div>
		</footer>
	</body>
</html>