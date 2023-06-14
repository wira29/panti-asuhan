

<?php $__env->startSection('content'); ?>
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Form Tambah Gallery</h5>
                            <h6 class="card-subtitle text-muted">Anda dapat menambah gallery di form ini </h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('dashboard.galeries.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <input type="hidden" name="id" value="<?php echo e(intval(DB::table('galleries')->max('id')) + 1); ?>">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nama">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label w-100">Upload Photo</label>
                                    <input type="file" name="photo">
                                    <small class="form-text text-muted">Example block-level help text here.</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" placeholder="Textarea" name="description" rows="3"></textarea>
                                </div>

                                <div class="col-12 col-xl-4">
                                    <div class="mb-3 mb-xl-0">
                                        <label class="form-label">Date</label>
                                        <input class="form-control" type="date" name="date" />
                                    </div>
                                </div>
                                <div class="mt-3"></div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Web Lanjut\uts\Proyek\v8\panti-asuhan\resources\views/dashboard/pages/gallery/form-gallery.blade.php ENDPATH**/ ?>