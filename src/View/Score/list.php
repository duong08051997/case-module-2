<a href="index.php?page=add-score&id=<?php echo $student['id']?>" class="btn btn-success">ADD SCORE</a>

<table class="table table-bordered">
    <h2 class="text-primary"><?php echo $student['name']?></h2>
    <thead class="table-dark">
    <tr>
        <th>STT</th>
        <th>Maths</th>
        <th>Physical</th>
        <th>Chemistry</th>
        <th>English</th>
        <th style="text-align: center"> Action</th>
    </tr>
    </thead>
    <?php if(empty($scores)) :?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($scores as $key => $score): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $score->getMaths() ?></a></td>
                <td><?php echo $score->getPhysical() ?></td>
                <td><?php echo $score->getChemistry() ?></td>
                <td><?php echo $score->getEnglish() ?></td>
                <td style="text-align: center">
                    <a href="index.php?page=delete-score&id=<?php echo $score->getId() ?>" onclick="return confirm('are you sure?')" class="btn btn-danger" >DELETE</a>
                    <a href="index.php?page=update-score&id=<?php echo $score->getId() ?>" class="btn btn-primary">UPDATE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>