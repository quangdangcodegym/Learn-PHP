<?php

declare(strict_types=1);

require_once(__DIR__ . '/../model/DBConnection.php');
require_once(__DIR__ . '/../model/CustomerDB.php');

use Model\CustomerDB;
use Model\DBConnection;

// $connection = new DBConnection();

// // "mysql:host=localhost:4306;dbname=customers",
// // 'root',
// // ''

// $customerDB = new CustomerDB($connection->connect());

// $customers = $customerDB->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>

    <!-- <link rel="style/css" href="../assets/datatables/v1.13.4/css/jquery.dataTables.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" crossorigin />
</head>

<body>
    <div class="col-12 col-md-12 mt-2 container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>List of Customers</h5>
                <a class="btn btn-success btn-sm" href="./index.php?page=add">Create new customer</a>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <table class="table table-bordered" id="tbCustomers">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (empty($customers)) {
                            ?>

                            <?php
                            }
                            ?>
                            <?php foreach ($customers as $customer) : ?>
                                <tr>
                                    <td><?= $customer->getId() ?></td>
                                    <td><?= $customer->getName() ?></td>
                                    <td><?= $customer->getEmail() ?></td>
                                    <td><?= $customer->getAddress() ?></td>
                                    <td><?= $customer->getGender()->getGender() ?></td>
                                    <td class="d-flex justify-content-around">
                                        <button class="btn btn-danger btn-sm btnDeleteCustomer" type="button" value="<?= $customer->getId(); ?>">
                                            Delete
                                        </button>
                                        <a href="./index.php?page=edit&id=<?= $customer->getId(); ?>" class="btn btn-primary btn-sm">
                                            Update
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <script src="../assets/datatables/v1.13.4/js/jquery.dataTables.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            $('.btnDeleteCustomer').click(function() {
                let id = $(this).val();
                console.log(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log(id);
                        location.href = `./index.php?page=delete&id=${id}`;
                        Swal.fire(
                            'Deleted!',
                            'This customer has been deleted.',
                            'success'
                        )
                    }
                })
            })

            $('#tbCustomers').DataTable();
            /**
            $('#tbCustomers').DataTable({
                "fnCreatedRow": function(nRow, aData, iDataIndex) {
                    $(nRow).attr('id', aData[0]);
                },
                // 'serverSide': 'true',
                // 'processing': 'true',
                'paging': 'true',
                'ajax': {
                    'url': '../model/fetchDataTables.php',
                    'type': 'post',
                },
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [5]
                }, ]
            });
             */
            
        });
    </script>
</body>

</html>