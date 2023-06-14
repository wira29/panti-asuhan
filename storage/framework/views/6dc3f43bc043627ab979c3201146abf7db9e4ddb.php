<?php $__env->startSection('content'); ?>
    <div class="hero-wrap" style="background-image: url(<?php echo e(asset('images/panti9.jpg')); ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <?php if(\Illuminate\Support\Facades\Session::has('success')): ?>
                    <div class="alert alert-success">
                        <ul>
                            <?php
                                $errors = \Illuminate\Support\Facades\Session::get('success');
                                if (!is_array($errors)) {
                                $errors = [$errors];
                                }
                            ?>
                            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="col-md-6 pr-md-5">
                    <h4 class="mb-4">Do you have any questions?</h4>
                    <form action="<?php echo e(route('dashboard.contact.index')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e(Str::random(10)); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>


                <div class="col-md-6">

                    <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2792511651355!2d112.6dw4903559999999!3d-7.970065399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62848a275c02b%3A0x568fe631a11cb170!2sPanti%20Asuhan%20Mawaddah%20Warohmah!5e0!3m2!1sid!2sid!4v1686542827963!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Web Lanjut\uts\Proyek\v8\panti-asuhan\resources\views/contact.blade.php ENDPATH**/ ?>