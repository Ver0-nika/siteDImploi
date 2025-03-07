<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'JobSearch')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'JobSearch')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('employer.register')); ?>"><?php echo e(__('Employer Register')); ?></a>
                            </li>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Job Seeker Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                        <?php if(Auth::user()->user_type=='employer'): ?>
                        <li>
                            <a href="<?php echo e(route('job.create')); ?>">
                                <button class="btn btn-outline-secondary">Post a job</button>
                            </a>
                        </li>
                        <?php endif; ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php if(Auth::user()->user_type=='employer'): ?>
                                        <?php echo e(Auth::user()->company->cname); ?>

                                    <?php endif; ?>
                                    <?php if(Auth::user()->user_type=='seeker'): ?>
                                        <?php echo e(Auth::user()->name); ?>

                                    <?php endif; ?> 
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <?php if(Auth::user()->user_type=='employer'): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('company.view')); ?>">
                                        <?php echo e(__('Company profile')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('my.job')); ?>">
                                        My Jobs      
                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('applicant')); ?>">
                                        Applicants      
                                    </a>
                                    <?php else: ?>
                                    <a class="dropdown-item" href="user/profile">
                                        <?php echo e(__('Seeker profile')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('home')); ?>">
                                        <?php echo e(__('Saved jobs')); ?>

                                    </a>
                                    <?php endif; ?>

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/layouts/app.blade.php ENDPATH**/ ?>