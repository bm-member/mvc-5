<a href="<?php url('post/index') ?>">Back</a>
<h1><?php echo $post['title']; ?></h1>
<p><?php echo $post['content']; ?></p>
<a href="<?php url('post/edit/' . $post['id']) ?>">Edit</a>
<a href="<?php url('post/destroy/' . $post['id']) ?>">Delete</a>