    <?php if(!isset($_SESSION['email'])): ?>
    <footer class="footer">    
        <h5 class="text-center text-light">&copy Copyright 2023</h5>   
    </footer>
    <?php endif; ?>

    <script src="<?php echo APP_URL?>/loader.js"></script>
    <script src="<?php echo APP_URL?>/script.js?>"></script>
    <script src="<?php echo APP_URL?>/auth/register.js"></script>
    <!-- Particles.js scripts -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js','particles.json', function(){
            console.log('Particles.json loaded');
        });
    </script>
    <!-- Font awesome script -->
    <script src="https://kit.fontawesome.com/ce9709e331.js" crossorigin="anonymous"></script>
    <!-- Bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="<?php echo APP_URL?>/Assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- AOS script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: -500,
            duration: 700
        });
    </script>
</body>
</html>