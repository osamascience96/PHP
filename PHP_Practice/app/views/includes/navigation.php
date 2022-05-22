<nav class="top-nav">
    <ul>
        <li>
            <a href="<?=URLROOT?>/pages/index">Home</a>
        </li>
        <li>
            <a href="<?=URLROOT?>/pages/about">About</a>
        </li>
        <li>
            <a href="<?=URLROOT?>/pages/projects">Projects</a>
        </li>
        <li>
            <a href="<?=URLROOT?>/pages/blog">Blog</a>
        </li>
        <li>
            <a href="<?=URLROOT?>/pages/contact">Contact</a>
        </li>
        <li class="btn-login">
            <?php 
            if(isset($_SESSION['user_id'])){?>
                <a href="<?=URLROOT?>/users/logout"><?=$_SESSION['username']?> Log out</a>
            <?php }else{?>
                <a href="<?=URLROOT?>/users/login">Login</a>
            <?php }?>
        </li>
    </ul>
</nav>