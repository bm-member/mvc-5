<form action="<?php url('post/update/' . $data['post']['id']); ?>" method="post">
    <label>Title</label>
    <input type="text" name="title" value="<?php echo $data['post']['title']; ?>">
    <br><br>
    <label>Content</label>
    <textarea name="content">
        <?php echo $data['post']['content']; ?>
    </textarea>
    <br><br>
    <button type="submit">Save</button>
</form>