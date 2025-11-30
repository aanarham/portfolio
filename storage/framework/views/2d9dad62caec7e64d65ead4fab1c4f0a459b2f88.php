

<?php $__env->startSection('title', 'Beranda - Arham Nugraha'); ?>

<?php $__env->startSection('content'); ?>
<div class="home-content">
    <div class="home-text">
        <h2 class="main-heading">Saya adalah Supervisor</h2>
        <p class="sub-text">100% Portfolio Website | Dibuat oleh Arham Nugraha</p>
        <a href="<?php echo e(route('work')); ?>" class="btn-portfolio">LIHAT PORTOFOLIO <span>→</span></a>
    </div>
    <div class="home-image">
        <img src="<?php echo e(asset('images/main-image.jpg')); ?>" alt="Arham Nugraha - Supervisor PT Valor Inspiration Pesona" onerror="this.src='https://via.placeholder.com/450x600?text=Arham+Nugraha'">
    </div>
    <div class="pagination-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\portfolioq\resources\views/pages/home.blade.php ENDPATH**/ ?>