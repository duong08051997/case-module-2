<a href="index.php?page=add-student&id=<?php echo $class['id'] ?>" class="btn btn-success">ADD STUDENT</a>
<div class="pt-3">

</div>

<div class="pt-3">
    <h1><?php echo $class['name'] ?></h1>
    <table class="table table-hover">
        <thead class="table table-dark">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Email</th>
            <th style="text-align: center">Action</th>
        </tr>
        </thead>
        <?php if (empty($students)) : ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else: ?>
            <?php foreach ($students as $key => $student): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td>
                        <a href="index.php?page=list-score&student_id=<?php echo $student->getId() ?>"><?php echo $student->getName() ?></a>
                    </td>
                    <td><?php echo $student->getAge() ?></td>
                    <td><?php echo $student->getGender() ?></td>
                    <td><?php echo $student->getAddress() ?></td>
                    <td><?php echo $student->getEmail() ?></td>
                    <td style="text-align: center">
                        <a href="index.php?page=delete-student&id=<?php echo $student->getId() ?>" class="btn btn-danger">DELETE</a>
                        <a href="index.php?page=update-student&id=<?php echo $student->getId() ?>" class="btn btn-primary">UPDATE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>
