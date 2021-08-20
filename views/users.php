<section>
    <form action="useradd" method="post">
        <label for="">Nombre</label>
        <input type="text" name="username" id="">
        <input type="submit" name="" id="" value="add">
    </form>
</section>
<br>




<section>
<p>nombres</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
            </tr>
        </thead>
        <tbody>

            <?php for ($i = 0; $i < count($data); $i++) { ?>
                <tr>
                    <td><?php echo $data[$i]['username']; ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</section>
