<!DOCTYPE html>
<html lang="en">




    

    

    <?php $__env->startSection('content'); ?>
        <div class="container mt-4">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary">Create Employee</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Position</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($employee->firstname); ?></td>
                                <td><?php echo e($employee->lastname); ?></td>
                                <td><?php echo e($employee->email); ?></td>
                                <td><?php echo e($employee->age); ?></td>
                                <td><?php echo e($employee->position->name); ?></td>
                                <td><?php echo $__env->make('employee.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
        
            <!-- <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Purnama</td>
                        <td>Anaking</td>
                        <td>purnama.anaking@gmail.com</td>
                        <td>20</td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo e(route('employees.show', ['employee' => 1])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('employees.edit', ['employee' => 1])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="<?php echo e(route('employees.destroy', ['employee' => 1])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Adzanil</td>
                        <td>Rachmadhi</td>
                        <td>adzanil.rachmadhi@gmail.com</td>
                        <td>25</td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo e(route('employees.show', ['employee' => 2])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('employees.edit', ['employee' => 2])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="<?php echo e(route('employees.destroy', ['employee' => 2])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Berlian</td>
                        <td>Rahmy</td>
                        <td>berlian.rahmy@gmail.com</td>
                        <td>23</td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo e(route('employees.show', ['employee' => 3])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('employees.edit', ['employee' => 3])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="<?php echo e(route('employees.destroy', ['employee' => 3])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table> -->
            
                            
                        
                </tbody>
            </table>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zhahnur/Documents/Kelompok 2 Modul 6/resources/views/employee/index.blade.php ENDPATH**/ ?>