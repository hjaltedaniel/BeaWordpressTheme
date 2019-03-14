</div>
<?php 
wp_enqueue_script( 'smoothproducts', get_template_directory_uri() . '/assets/js/smoothproducts.min.js', array ( 'jquery' ), 1.0, true);
wp_enqueue_script( 'loadWindow', get_template_directory_uri() . '/assets/js/loadWindow.js', array ( 'jquery' ), 1.0, true);
?>
    <footer class="py-5 bg-light">
        <div class="container">
            <p class="m-0 text-center text-black">Copyright &copy; BEA - Erhvervsøkonomisk Forening 2017</p>
        </div>
        <!-- /.container -->
    </footer>
    <?php wp_footer(); ?>
        </body>

        </html>
