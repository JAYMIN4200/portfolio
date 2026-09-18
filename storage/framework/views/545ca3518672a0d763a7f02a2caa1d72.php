<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin Panel</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128272;</text></svg>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>
<body class="bg-slate-100 antialiased min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-2xl shadow-xl shadow-indigo-500/30 mx-auto mb-4">
                A
            </div>
            <h1 class="text-2xl font-bold text-slate-800">Admin Panel</h1>
            <p class="text-slate-500 mt-1 text-sm">Sign in to manage your portfolio</p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-8">
            <?php if($errors->any()): ?>
                <div class="mb-6 p-4 rounded-lg bg-red-50 border border-red-200 text-red-600 text-sm">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-5">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email Address</label>
                    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus
                           class="w-full px-4 py-3 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="admin@example.com">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-3 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="••••••••">
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span class="text-sm text-slate-600">Remember me</span>
                    </label>
                </div>
                <button type="submit" class="w-full py-3 px-6 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.01] transition-all">
                    Sign In
                </button>
            </form>
        </div>

        <p class="text-center mt-6 text-sm text-slate-500">
            <a href="<?php echo e(route('home')); ?>" class="text-indigo-600 hover:text-indigo-700 font-medium">&larr; Back to website</a>
        </p>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/auth/login.blade.php ENDPATH**/ ?>