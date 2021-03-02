<div class="container mt-5 mb-5">
        <div class="row mb-2">
        <div class="col">
            <h1>Comments</h1>
            <?php // echo flash('post_message'); ?>
        </div>
        <!-- <div class="col">
            <a href="/post/add" class="btn btn-primary float-right mt-2">
                <i class="fa fa-pencil"></i>
                Add post
            </a>
        </div> -->
    </div>


    <div class="row">
        <?php foreach ($posts as $post) :  ?>
            <div class="col-md-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <p class="bg-light  mb-0">
                             <b><?php echo $post->title ?></b>
                             written by <b><?php echo $post->name ?></b>
                             Created at: <?php echo $post->postCreated ?></p><br>
                        <p class="card-text"><?php echo $post->body ?></p>
                        <!-- <a href="<?php echo '/post/' . $post->postId; ?>" class="card-link">Read more</a> -->
                    </div>
                    <!-- <div class="card-footer">Created at: <?php echo $post->postCreated ?></div> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="row">
    <div class="col-lg-12">
        <div class="card card-body bg-light ">
          
            <h2 class="pb-2">Create comment</h2>
            <?php if(!\app\core\Session::isUserLoggedIn()){ echo '<p>In order to leave a comment please <a href="/register">register</a>!</p>';} ?>
            <form action="" method="post" >
                <div class="form-group">
                    <label class="label" for="title">Title:<sup>*</sup></label>
                    <input class="input" type="text" name="title" id="title" 
                    <?php if(\app\core\Session::isUserLoggedIn()){ echo 'enabled';} else { echo 'disabled';} ?>>
                </div>
                <div class="form-group">
                    <label class="label" for="body">Your text:<sup>*</sup></label>
                    <textarea name="body" id="body" maxlength="500"
                    <?php if(\app\core\Session::isUserLoggedIn()){ echo 'enabled';} else { echo 'disabled';} ?>></textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Create" class="btn btn-primary"
                        <?php if(\app\core\Session::isUserLoggedIn()){ echo 'enabled';} else { echo 'disabled';} ?>>
                    </div>
                    <div class="col">

                    </div>
                </div>

            </form>
        </div>
    </div>




    
</div>




