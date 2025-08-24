<?php
$current_page = $_SERVER['REQUEST_URI'];

function getClass($page, $current_page) {
    return ($current_page == $page) ? 'style1' : 'style2';
}
?>

<div class="wrapper">
    <div class="inner">
        <div>
            <ul id="buttons12" class="<?php echo getClass('/', $current_page); ?> buttons">
                <li><a href="/" class="button n01">User Info</a></li>
            </ul>
        </div>
        <div>
<!-- Projects if disabled -->
            
           <!-- <ul id="buttons13" class="<?php echo getClass('/projects', $current_page); ?> buttons">
                <li><a href="/projects" class="button n01">Projects</a></li>
            </ul> -->
        </div>
        <div> 

            
            <ul id="buttons13" class="<?php echo getClass('/socials', $current_page); ?> buttons">
                <li><a href="/socials" class="button n01">Socials</a></li>
            </ul>
        </div>
        <div>
          <!--  <ul id="buttons11" class="<?php echo getClass('/discover', $current_page); ?> buttons">
                <li><a href="/discover" class="button n01">Discover</a></li>
            </ul> -->
        </div>
        <div>
            <ul id="buttons13" class="<?php echo getClass('/biography', $current_page); ?> buttons">
                <li><a href="/biography" class="button n01">Biography</a></li>
            </ul> 
        </div> 
        <span></span><span></span>
    </div>
</div>

</div>
