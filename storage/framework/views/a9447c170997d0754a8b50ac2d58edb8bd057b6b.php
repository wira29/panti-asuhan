<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/home">Panti Mawaddah Warohmah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo e(request()->is('home') ? 'active' : ''); ?>"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item <?php echo e(request()->is('about') ? 'active' : ''); ?>"><a href="/about" class="nav-link">About</a></li>
                <?php if(auth()->check()): ?>
                <li class="nav-item <?php echo e(request()->is('donateform') ? 'active' : ''); ?>"><a  href="<?php echo e(route('donation')); ?>" class="nav-link">Donate</a></li>
                <?php else: ?>
                <li class="nav-item <?php echo e(request()->is('donate') ? 'active' : ''); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#" class="nav-link ">Donate</a></li>
                <?php endif; ?>
                <li class="nav-item <?php echo e(request()->is('gallery') ? 'active' : ''); ?>"><a href="/gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item <?php echo e(request()->is('event') ? 'active' : ''); ?>"><a href="/event" class="nav-link">Events</a></li>
                <li class="nav-item <?php echo e(request()->is('contact') ? 'active' : ''); ?>"><a href="/contact" class="nav-link">Contact</a></li>










                <?php if(auth()->check()): ?>
                    <div class="dropdown mt-2">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, <?php echo e(auth()->user()->name); ?>

                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Account</a></li>
                            <li><a class="dropdown-item" href="#">Your Donate</a></li>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><div style="color: red">Sign Out</div> </a>
                            </li>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="dropdown mt-2">
                        <a class="btn btn-secondary" href="<?php echo e(route('donation')); ?>" role="button" aria-expanded="false">
                            Login
                        </a>
                    </div>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            $('#alert-login').click(function() {
                
                    Swal.fire({
                        // berikan waktu muncul alert 3 detik
                        icon: 'error',
                        title: 'Oops...',
                        text: 'You must login first!',
                        footer: '<a href="/home">Login</a>',
                    timer: 5000, // 5000 milidetik atau 5 detik
                    timerProgressBar: true, // menampilkan progress bar
                    onClose: () => { // melakukan sesuatu setelah notifikasi ditutup
                        console.log('SweetAlert2 ditutup');
                    }
                    })
                // }
            });

            //buatkan javascript jika tombol donate di klik maka akan menampilkan alert
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
    })
    </script>
<?php $__env->stopSection(); ?>












<?php /**PATH C:\Users\Hewlett Packard\OneDrive\Documents\GitHub\panti-asuhan\panti-asuhan\resources\views/layouts/header.blade.php ENDPATH**/ ?>