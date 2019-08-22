<div class="user_list">
    <?php foreach ($utilisateurs as $user) { ?>
    <div class="USER">
        <div class="header">
            <span class="id">
                <?php echo $user["id"]; ?>
            </span>
        </div>
        <div class="img">
            <img src="<?php echo $user["profile_image"]; ?>" />
        </div>
    
        <div class="infos">
            <div class="name">
                
                <?php echo $user['username']; ?>
            </div>
          
            <div class="email">
                <?php echo $user['email']; ?>
            </div>
        </div>
    </div>
    <?php } ?>
</div>