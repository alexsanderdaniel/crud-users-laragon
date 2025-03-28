<div class="d-flex justify-content-between align-items-center p-3">
    <h2 class="">Produtos</h2>
    <a class="text-decoration-none btn btn-outline-primary fw-semibold d-flex align-items-center gap-2" href="<?php echo e(route('produtos.create')); ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
    Adicionar Produto</a>
</div>
    <div class="d-flex gap-4 flex-wrap mb-3">
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo e($produto->url_imagem); ?>" alt="<?php echo e($produto->descricao); ?>" width="100">
            <div class="card-body">
            <p class="fw-normal fs-5"><?php echo e($produto->descricao); ?></p>
            <p class="fw-semibold">R$ <?php echo e(number_format($produto->valor, 2, ',', '.')); ?></p>
            </div>
            <div class="p-2 d-flex justify-content-between">
                <a class="btn btn-primary" href="<?php echo e(route('produtos.edit', ['produto' => $produto->id])); ?>">Editar</a>
                <form action="<?php echo e(route('produtos.destroy', $produto)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger" type="submit">Deletar</button>
                </form>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Daniel\Programação\Profissional\Freelancer\Clientes\Alexsander\Laravel\crud-produto\resources\views/produtos_lista.blade.php ENDPATH**/ ?>