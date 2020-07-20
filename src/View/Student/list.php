<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Email</th>
    </tr>
    <?php if(empty($students)) :?>
        <tr>
            <td>No data</td>
        </tr>
        <?php else: ?>
        <?php foreach ($students as $key => $student): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $student->getName() ?></td>
        <td><?php echo $student->getAge() ?></td>
        <td><?php echo $student->getGender() ?></td>
        <td><?php echo $student->getAddress() ?></td>
        <td><?php echo $student->getEmail() ?></td>
        <td>

        </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>