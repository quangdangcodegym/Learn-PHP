<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
</head>

<body>
    <div class="col-12 col-md-12 mt-2 container">
        <div class="card">
            <div class="card-header">
                <h5>Edit customer</h5>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <form method="post" action="./index.php?page=edit&id=<?= $customer->getId() ?>">
                        <input type="hidden" name="id" value="<?= $customer->getId(); ?>" />
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" value="<?= $customer->getName(); ?>" name="name" class="form-control">
                            <?php if (isset($errors['name'])) : ?>
                                <p class="text-danger"><?= $errors['name'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" value="<?= $customer->getEmail(); ?>" class="form-control" name="email">
                            <?php if (isset($errors['email'])) : ?>
                                <p class="text-danger"><?= $errors['email'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" value="<?= $customer->getAddress(); ?>" class="form-control" name="address">
                            <?php if (isset($errors['address'])) : ?>
                                <p class="text-danger"><?= $errors['address'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select class="form-control" name="gender">
                                <?php foreach ($genders as $gender) : ?>
                                    <option 
                                    <?php 
                                        if($gender->getId() == $customer->getGender()->getId()) 
                                        {
                                            echo "selected";
                                        } 
                                    ?>

                                    value="<?php echo $gender->getId();  ?>">
                                        <?php echo $gender->getGender() ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a type="button" href="index.php" class="btn btn-secondary ms-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>