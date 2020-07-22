<a href="index.php?page=add-class" class="btn btn-success">ADD CLASS</a><br>

<table class="table table-hover">
    <h2 style="margin: auto">Class Room</h2>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Status</th>
        <th style="text-align: center">Action</th>
    </tr>
    <?php if(empty($classRooms)) :?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($classRooms as $key => $classRoom): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td> <a href="index.php?page=list-student&class_id=<?php echo $classRoom->getId()?>"><?php echo $classRoom->getName() ?></a></td>
                <td><?php echo $classRoom->getStatus() ?></td>
                <td style="text-align: center">
                    <a href="index.php?page=delete-class&id=<?php echo $classRoom->getId() ?>" onclick="return confirm("are you sure?") class="btn btn-danger">DELETE</a>
                    <a href="index.php?page=update-class&id=<?php echo $classRoom->getId() ?>" class="btn btn-warning">UPDATE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>